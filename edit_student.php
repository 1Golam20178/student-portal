<?php
include 'includes/db.php';
include 'includes/auth.php';


$id = $_GET['id'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$stmt = $conn->prepare("UPDATE students SET student_name=?, roll=?, department=?, semester=? WHERE id=?");
$stmt->bind_param("ssssi", $_POST['student_name'], $_POST['roll'], $_POST['department'], $_POST['semester'], $id);
$stmt->execute();
header("Location: dashboard.php");
}


$data = $conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student | EduPortal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 flex min-h-screen">

    <aside class="w-64 bg-indigo-900 text-white hidden md:flex flex-col">
        <div class="p-6 text-2xl font-bold tracking-tight text-center border-b border-indigo-800">Student Portal</div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="dashboard.php" class="flex items-center space-x-3 p-3 text-slate-300 hover:bg-indigo-800 rounded-lg transition">
                <i class="fas fa-home"></i> <span>Dashboard</span>
            </a>
            <a href="add_student.php" class="flex items-center space-x-3 p-3 text-slate-300 hover:bg-indigo-800 rounded-lg transition">
                <i class="fas fa-user-plus"></i> <span>Add Student</span>
            </a>
        </nav>
    </aside>

    <main class="flex-1 flex flex-col">
        <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-slate-500">
                    <li><a href="dashboard.php" class="hover:text-indigo-600">Dashboard</a></li>
                    <li><i class="fas fa-chevron-right text-[10px]"></i></li>
                    <li class="text-slate-900 font-medium">Edit Student</li>
                </ol>
            </nav>
        </header>

        <div class="p-8 max-w-2xl">
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-slate-900">Edit Student Profile</h1>
                <p class="text-slate-500">Update the information for <span class="font-semibold text-indigo-600"><?= htmlspecialchars($data['student_name']) ?></span></p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                <form method="post" class="p-8 space-y-6">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Full Name</label>
                            <input type="text" name="student_name" value="<?= htmlspecialchars($data['student_name']) ?>" 
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Roll Number</label>
                            <input type="text" name="roll" value="<?= htmlspecialchars($data['roll']) ?>" 
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Department</label>
                            <select name="department" required 
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all appearance-none">
                                <option value="" disabled selected>Select Department</option>
                                <option value="Computer Science" <?= ($data['department'] ?? '') == 'Computer Science' ? 'selected' : '' ?>>Computer Science</option>
                                <option value="Mathematics" <?= ($data['department'] ?? '') == 'Mathematics' ? 'selected' : '' ?>>Mathematics</option>
                                <option value="Physics" <?= ($data['department'] ?? '') == 'Physics' ? 'selected' : '' ?>>Physics</option>
                                <option value="Business" <?= ($data['department'] ?? '') == 'Business' ? 'selected' : '' ?>>Business</option>
                            </select>
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Semester</label>
                            <select name="semester" required
						        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all appearance-none">

						        <option value="" disabled>Select Semester</option>

						        <option value="Summer 2026" <?= ($data['semester'] ?? '') == 'Summer 2026' ? 'selected' : '' ?>>Summer 2026</option>
						        <option value="Spring 2026" <?= ($data['semester'] ?? '') == 'Spring 2026' ? 'selected' : '' ?>>Spring 2026</option>
						        <option value="Fall 2025" <?= ($data['semester'] ?? '') == 'Fall 2025' ? 'selected' : '' ?>>Fall 2025</option>
						        <option value="Summer 2025" <?= ($data['semester'] ?? '') == 'Summer 2025' ? 'selected' : '' ?>>Summer 2025</option>
						        <option value="Spring 2025" <?= ($data['semester'] ?? '') == 'Spring 2025' ? 'selected' : '' ?>>Spring 2025</option>
						        <option value="Fall 2024" <?= ($data['semester'] ?? '') == 'Fall 2024' ? 'selected' : '' ?>>Fall 2024</option>
						        <option value="Summer 2024" <?= ($data['semester'] ?? '') == 'Summer 2024' ? 'selected' : '' ?>>Summer 2024</option>
						        <option value="Spring 2024" <?= ($data['semester'] ?? '') == 'Spring 2024' ? 'selected' : '' ?>>Spring 2024</option>
						        <option value="Fall 2023" <?= ($data['semester'] ?? '') == 'Fall 2023' ? 'selected' : '' ?>>Fall 2023</option>
						        <option value="Summer 2023" <?= ($data['semester'] ?? '') == 'Summer 2023' ? 'selected' : '' ?>>Summer 2023</option>
						        <option value="Spring 2023" <?= ($data['semester'] ?? '') == 'Spring 2023' ? 'selected' : '' ?>>Spring 2023</option>
						        <option value="Fall 2022" <?= ($data['semester'] ?? '') == 'Fall 2022' ? 'selected' : '' ?>>Fall 2022</option>
						        <option value="Summer 2022" <?= ($data['semester'] ?? '') == 'Summer 2022' ? 'selected' : '' ?>>Summer 2022</option>
						        <option value="Spring 2022" <?= ($data['semester'] ?? '') == 'Spring 2022' ? 'selected' : '' ?>>Spring 2022</option>
						        <option value="Fall 2021" <?= ($data['semester'] ?? '') == 'Fall 2021' ? 'selected' : '' ?>>Fall 2021</option>
						        <option value="Summer 2021" <?= ($data['semester'] ?? '') == 'Summer 2021' ? 'selected' : '' ?>>Summer 2021</option>
						        <option value="Spring 2021" <?= ($data['semester'] ?? '') == 'Spring 2021' ? 'selected' : '' ?>>Spring 2021</option>
						        <option value="Fall 2020" <?= ($data['semester'] ?? '') == 'Fall 2020' ? 'selected' : '' ?>>Fall 2020</option>

						    </select>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-100 flex items-center justify-end space-x-4">
                        <a href="dashboard.php" class="px-6 py-2.5 text-sm font-medium text-slate-600 hover:bg-slate-100 rounded-xl transition">
                            Cancel
                        </a>
                        <button type="submit" class="px-8 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl shadow-lg shadow-indigo-200 transition-all transform active:scale-[0.98]">
                            Update Record
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>
</html>