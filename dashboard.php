<?php
include 'includes/db.php';
include 'includes/auth.php';

$search = $_GET['search'] ?? '';

$query = "SELECT * FROM students WHERE student_name LIKE ?";
$stmt = $conn->prepare($query);

$like = "%{$search}%";
$stmt->bind_param("s", $like); // only ONE string parameter

$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard | Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 flex min-h-screen">

    <aside class="w-64 bg-indigo-900 text-white hidden md:flex flex-col">
        <div class="p-6 text-2xl font-bold tracking-tight">Student Portal</div>
        <nav class="flex-1 px-4 space-y-2">
            <a href="#" class="flex items-center space-x-3 bg-indigo-800 p-3 rounded-lg transition">
                <i class="fas fa-home"></i> <span>Dashboard</span>
            </a>
            <a href="add_student.php" class="flex items-center space-x-3 p-3 hover:bg-indigo-800 rounded-lg transition text-slate-300 hover:text-white">
                <i class="fas fa-user-plus"></i> <span>Add Student</span>
            </a>
        </nav>
        <div class="p-4 border-t border-indigo-800">
            <a href="logout.php" class="flex items-center space-x-3 p-3 text-red-400 hover:text-red-300 transition">
                <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
            </a>
        </div>
    </aside>

    <main class="flex-1 flex flex-col">
        
        <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8">
            <h2 class="text-xl font-semibold text-slate-800">Student Management</h2>
            
            <form method="get" class="relative w-1/3">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" name="search" placeholder="Search by name..." 
                    class="w-full pl-10 pr-4 py-2 bg-slate-100 border-none rounded-full text-sm focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
            </form>

            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold text-sm">
                    AD
                </div>
            </div>
        </header>

        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-2xl font-bold">Student Records</h1>
                    <p class="text-slate-500 text-sm">Manage and view all enrolled students</p>
                </div>
                <a href="add_student.php" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition flex items-center shadow-sm">
                    <i class="fas fa-plus mr-2"></i> Add New Student
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 border-b border-slate-200">
                        <tr>
                            <th class="px-6 py-4 text-xs font-semibold uppercase text-slate-500">Student Name</th>
                            <th class="px-6 py-4 text-xs font-semibold uppercase text-slate-500">Roll Number</th>
                            <th class="px-6 py-4 text-xs font-semibold uppercase text-slate-500">Department</th>
                            <th class="px-6 py-4 text-xs font-semibold uppercase text-slate-500">Semester</th>
                            <th class="px-6 py-4 text-xs font-semibold uppercase text-slate-500 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-6 py-4 font-medium text-slate-900"><?= htmlspecialchars($row['student_name']) ?></td>
                            <td class="px-6 py-4 text-slate-600"><?= $row['roll'] ?></td>
                            <td class="px-6 py-4 text-slate-600">
                                <span class="bg-blue-50 text-blue-700 px-2.5 py-1 rounded-md text-xs font-medium"><?= $row['department'] ?></span>
                            </td>
                            <td class="px-6 py-4 text-slate-600"><?= $row['semester'] ?></td>
                            <td class="px-6 py-4 text-right space-x-3">
                                <a href="edit_student.php?id=<?= $row['id'] ?>" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Edit</a>
                                <a href="delete_student.php?id=<?= $row['id'] ?>" class="text-red-500 hover:text-red-700 text-sm font-medium" onclick="return confirm('Delete this record?')">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>
</html>