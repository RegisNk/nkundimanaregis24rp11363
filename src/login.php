<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Reset some basic styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic page styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .menu {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .menu-item {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            padding: 10px;
            transition: background-color 0.3s;
        }

        .menu-item:hover {
            background-color: #555;
        }

        /* Styling for the main content */
        main {
            text-align: center;
            margin-top: 40px;
        }

        h1 {
            font-size: 36px;
            color: #333;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        /* Form styling */
        .login-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 18px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Footer styling */
        footer {
            text-align: center;
            margin-top: 50px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <div class="menu">
            <a href="index.php" class="menu-item">Home</a>
            <a href="registration.php" class="menu-item">Register</a>
            <a href="login.php" class="menu-item">Login</a>
        </div>
    </header>

    <main>
        <h1>Login</h1>
        <p>Please enter your email and password to login:</p>

        <form action="login_process.php" method="post" class="login-form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </main>

    <footer>
        <p>&copy; 2025 Our Website</p>
    </footer>
</body>
</html>
