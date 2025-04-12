<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap 4 CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Style -->
    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-container h3 {
            margin-bottom: 25px;
            font-weight: bold;
            text-align: center;
            color: #2c5364;
        }

        .btn-login {
            background-color: #2c5364;
            color: white;
            font-weight: bold;
        }

        .btn-login:hover {
            background-color: #1e3d4c;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h3>Smart Database System</h3>
        <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
        <div class="alert alert-danger text-center" role="alert">
            Invalid email or password.
        </div>
       <?php endif; ?>
        <form action="login_action.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" required placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required placeholder="Enter your password">
            </div>

            <button type="submit" class="btn btn-login btn-block">Login</button>

            <div class="text-center mt-3">
                <a href="#">Forgot Password?</a>
            </div>
        </form>
    </div>

</body>
</html> 
