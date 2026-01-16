<?php include 'includes/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$email = $_POST['email'];
$password = $_POST['password'];


$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();


if ($user && password_verify($password, $user['password'])) {
$_SESSION['user_id'] = $user['id'];
header("Location: dashboard.php");
} else {
echo "Invalid email or password";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | EduPortal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen p-4">

    <div class="max-w-md w-full">
        <div class="text-center mb-8">
            <a href="index.php" class="inline-flex items-center space-x-2 text-indigo-600 hover:text-indigo-700 transition mb-4">
                <i class="fas fa-arrow-left text-sm"></i>
                <span class="font-medium text-sm">Back to Home</span>
            </a>
            <div class="flex justify-center mb-2">
                <div class="w-12 h-12 bg-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-200">
                    <i class="fas fa-graduation-cap text-white text-xl"></i>
                </div>
            </div>
            <h2 class="text-3xl font-bold text-slate-900">Welcome Back</h2>
            <p class="text-slate-500 mt-2">Please enter your details to sign in</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-100">
            <form method="post" class="space-y-5">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
                            <i class="far fa-envelope"></i>
                        </span>
                        <input type="email" name="email" required 
                            placeholder="name@university.com" 
                            class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:bg-white outline-none transition-all">
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-2">
                        <label class="text-sm font-semibold text-slate-700">Password</label>
                        <a href="#" class="text-xs font-medium text-indigo-600 hover:text-indigo-700">Forgot password?</a>
                    </div>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" name="password" required 
                            placeholder="••••••••" 
                            class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:bg-white outline-none transition-all">
                    </div>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="remember" class="w-4 h-4 text-indigo-600 border-slate-300 rounded focus:ring-indigo-500">
                    <label for="remember" class="ml-2 text-sm text-slate-600">Remember for 30 days</label>
                </div>

                <button type="submit" 
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-xl shadow-lg shadow-indigo-200 transition-all transform active:scale-[0.98]">
                    Sign In
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                <p class="text-sm text-slate-600">
                    Don't have an account? 
                    <a href="register.php" class="text-indigo-600 font-bold hover:underline">Create an account</a>
                </p>
            </div>
        </div>

        <p class="text-center text-slate-400 text-xs mt-8">
            &copy; 2026 EduPortal Student Management System.
        </p>
    </div>

</body>
</html>