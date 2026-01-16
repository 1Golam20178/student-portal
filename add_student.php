<?php
include 'includes/db.php';
include 'includes/auth.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$stmt = $conn->prepare("INSERT INTO students (user_id,student_name,roll,department,semester) VALUES (?,?,?,?,?)");
$stmt->bind_param("issss", $_SESSION['user_id'], $_POST['student_name'], $_POST['roll'], $_POST['department'], $_POST['semester']);
$stmt->execute();
header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student | EduPortal</title>
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
            <a href="add_student.php" class="flex items-center space-x-3 bg-indigo-800 p-3 rounded-lg transition shadow-inner">
                <i class="fas fa-user-plus text-white"></i> <span class="text-white font-medium">Add Student</span>
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
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-slate-500">
                    <li><a href="dashboard.php" class="hover:text-indigo-600">Dashboard</a></li>
                    <li><i class="fas fa-chevron-right text-[10px]"></i></li>
                    <li class="text-slate-900 font-medium">Enroll New Student</li>
                </ol>
            </nav>
            <div class="text-xs text-slate-400 font-medium bg-slate-100 px-3 py-1 rounded-full">
                Session: 2025-26
            </div>
        </header>

        <div class="p-8 max-w-2xl">
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-slate-900">Add New Student</h1>
                <p class="text-slate-500">Enter the student's details to create a new record in the portal.</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                <form method="post" class="p-8 space-y-6">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Student Full Name</label>
                            <input type="text" name="student_name" required placeholder="e.g. Alex Johnson" 
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all placeholder:text-slate-400">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Roll Number</label>
                            <input type="text" name="roll" required placeholder="e.g. 102938" 
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all placeholder:text-slate-400">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Department</label>
                            <select name="department" required 
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all appearance-none">
                                <option value="" disabled selected>Select Department</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Physics">Physics</option>
                                <option value="Business">Business</option>
                            </select>
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Semester</label>
                            <select name="semester" required 
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all appearance-none">
                                <option value="" disabled selected>Select Semester</option>
								<option value="Spring 2026">Spring 2026</option>
								<option value="Fall 2025">Fall 2025</option>
								<option value="Summer 2025">Summer 2025</option>
								<option value="Spring 2025">Spring 2025</option>
								<option value="Fall 2024">Fall 2024</option>
								<option value="Summer 2024">Summer 2024</option>
								<option value="Spring 2024">Spring 2024</option>
								<option value="Fall 2023">Fall 2023</option>
								<option value="Summer 2023">Summer 2023</option>
								<option value="Spring 2023">Spring 2023</option>
								<option value="Fall 2022">Fall 2022</option>
								<option value="Summer 2022">Summer 2022</option>
								<option value="Spring 2022">Spring 2022</option>
								<option value="Fall 2021">Fall 2021</option>
								<option value="Summer 2021">Summer 2021</option>
								<option value="Spring 2021">Spring 2021</option>
								<option value="Fall 2020">Fall 2020</option>
                            </select>
                            <!-- <input type="text" name="semester" required placeholder="e.g. 4th Semester" 
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all placeholder:text-slate-400"> -->
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-100 flex items-center justify-end space-x-4">
                        <a href="dashboard.php" class="px-6 py-2.5 text-sm font-medium text-slate-600 hover:bg-slate-100 rounded-xl transition">
                            Back to List
                        </a>
                        <button type="submit" class="px-8 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl shadow-lg shadow-indigo-200 transition-all transform active:scale-[0.98] flex items-center">
                            <i class="fas fa-save mr-2"></i> Save Student
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="mt-6 flex items-center space-x-3 p-4 bg-indigo-50 rounded-xl border border-indigo-100">
                <i class="fas fa-info-circle text-indigo-500"></i>
                <p class="text-xs text-indigo-700 font-medium">Tip: Ensure the roll number is unique to avoid duplicate records.</p>
            </div>
        </div>
    </main>

</body>
</html>