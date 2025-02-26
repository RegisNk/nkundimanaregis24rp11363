
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEALTH| RWANDA_LTD</title>
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

        /* Button styling */
        .button {
            display: inline-block;
            background-color: #007BFF;
            color: #fff;
            padding: 12px 20px;
            font-size: 18px;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px;
            transition: background-color 0.3s;
        }

        .button:hover {
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
        <h1>Welcome to Our HEALTH RWANDA Ltd </h1>
        <p>Please choose an option:</p>
        <div class="links">
            <a href="registration.php" class="button">Register</a>
            <a href="login.php" class="button">Login</a>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Our Website</p>
    </footer>
</body>
</html>
