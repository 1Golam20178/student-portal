<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal | Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .gradient-bg {
            background: radial-gradient(circle at top right, #eef2ff, #ffffff);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex flex-col">

    <nav class="flex items-center justify-between px-8 py-6 bg-white/50 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100">
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center">
                <i class="fas fa-graduation-cap text-white text-sm"></i>
            </div>
            <span class="text-xl font-bold text-slate-900 tracking-tight">EduPortal</span>
        </div>
        <div class="space-x-4">
            <a href="login.php" class="text-slate-600 hover:text-indigo-600 font-medium transition">Login</a>
            <a href="register.php" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg font-medium transition shadow-md shadow-indigo-200">
                Get Started
            </a>
        </div>
    </nav>

    <main class="flex-1 flex items-center justify-center px-6">
        <div class="max-w-3xl text-center">
            <div class="inline-block px-4 py-1.5 mb-6 text-sm font-semibold tracking-wide text-indigo-600 uppercase bg-indigo-50 rounded-full">
                Unified Student Management
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 mb-6 tracking-tight">
                Manage student records <br>
                <span class="text-indigo-600">with ease and precision.</span>
            </h1>
            <p class="text-lg text-slate-600 mb-10 leading-relaxed max-w-xl mx-auto">
                A modern, centralized platform for administrators to track progress, 
                manage enrollments, and organize departments efficiently.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="register.php" class="w-full sm:w-auto px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold text-lg transition-all transform hover:-translate-y-1 shadow-xl shadow-indigo-200">
                    Create Admin Account
                </a>
                <a href="login.php" class="w-full sm:w-auto px-8 py-4 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 rounded-xl font-semibold text-lg transition-all">
                    Sign In
                </a>
            </div>

            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 text-left border-t border-slate-100 pt-12">
                <div class="flex items-start space-x-4">
                    <div class="text-indigo-600 mt-1"><i class="fas fa-bolt text-xl"></i></div>
                    <div>
                        <h4 class="font-bold text-slate-900">Fast Setup</h4>
                        <p class="text-sm text-slate-500">Deploy your portal in minutes with our intuitive UI.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-indigo-600 mt-1"><i class="fas fa-shield-alt text-xl"></i></div>
                    <div>
                        <h4 class="font-bold text-slate-900">Secure Data</h4>
                        <p class="text-sm text-slate-500">End-to-end encryption for all student records.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-indigo-600 mt-1"><i class="fas fa-chart-line text-xl"></i></div>
                    <div>
                        <h4 class="font-bold text-slate-900">Real-time Analytics</h4>
                        <p class="text-sm text-slate-500">Instant insights into department growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-8 text-center text-slate-400 text-sm border-t border-slate-100 bg-white">
        &copy; 2026 StudentPortal. All rights reserved.
    </footer>
</body>
</html>