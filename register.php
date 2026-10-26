<?php
// register.php
require_once 'Database.php';

$message = '';
$status = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = trim($_POST['company_name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($company_name) || empty($email) || empty($password)) {
        $message = "All fields are required.";
        $status = "error";
    } else {
        try {
            $db = (new Database())->getConnection();
            
            // Check if email exists
            $stmt = $db->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->execute([$email]);
            if ($stmt->rowCount() > 0) {
                $message = "This email is already registered.";
                $status = "error";
            } else {
                // Securely hash the password and insert as 'pending'
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                
                $insert = $db->prepare("INSERT INTO users (company_name, email, password_hash, role, kyc_status) VALUES (?, ?, ?, 'merchant', 'pending')");
                $insert->execute([$company_name, $email, $hashed_password]);
                
                $message = "Registration successful. Your account is pending KYC verification by Paygem Admins.";
                $status = "success";
            }
        } catch (PDOException $e) {
            $message = "Database error: " . $e->getMessage();
            $status = "error";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Registration | Paygem</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'], heading: ['Montserrat', 'sans-serif'] },
                    colors: { brand: { 50: '#f0fdf4', 500: '#22c55e', 700: '#15803d', 900: '#14532d', 950: '#052e16' } }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 font-sans text-slate-800 min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">

    <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
        <div class="flex justify-center items-center gap-2 mb-4">
            <div class="w-10 h-10 bg-brand-700 rounded-lg flex items-center justify-center text-white font-bold text-2xl shadow-lg">P</div>
            <span class="font-heading font-bold text-3xl text-brand-950 tracking-tight">Paygem<span class="text-brand-500">.</span></span>
        </div>
        <h2 class="text-center text-3xl font-heading font-bold text-slate-900">Create your merchant account</h2>
        <p class="mt-2 text-center text-sm text-slate-600">
            Or <a href="/login.php" class="font-medium text-brand-700 hover:text-brand-500 transition-colors">sign in to an existing account</a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow-xl border border-slate-200 sm:rounded-xl sm:px-10">
            
            <?php if($message): ?>
                <div class="mb-6 p-4 rounded-md <?php echo $status === 'success' ? 'bg-green-50 text-green-800 border border-green-200' : 'bg-red-50 text-red-800 border border-red-200'; ?>">
                    <p class="text-sm font-medium"><?php echo $message; ?></p>
                </div>
            <?php endif; ?>

            <form class="space-y-6" action="register.php" method="POST">
                <div>
                    <label for="company_name" class="block text-sm font-medium text-slate-700">Registered Business Name</label>
                    <div class="mt-1">
                        <input id="company_name" name="company_name" type="text" required class="appearance-none block w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm placeholder-slate-400 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700">Business Email Address</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm placeholder-slate-400 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700">Secure Password</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm placeholder-slate-400 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm">
                    </div>
                </div>

                <div class="bg-slate-50 border border-slate-200 rounded-md p-4 text-sm text-slate-600 mt-4">
                    <span class="font-semibold text-slate-800">Compliance Notice:</span> Upon submission, your account will be placed in a pending state. A Paygem administrator must manually verify your KYC documents before API credentials can be generated.
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-brand-900 hover:bg-brand-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 transition-colors">
                        Submit Registration
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

