<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        .error-message {
            color: #f00;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="Login">
            </div>
            <?php
            session_start();
            if (isset($_POST['login'])) {
                $uName = $_POST['username'];
                $pWord = $_POST['password'];
                if ($uName == 'halil' && $pWord == '1234') {
                    $_SESSION['hal'] = $uName;
                    header('location: control.php');
                } else {
                    echo '<p class="error-message">Username or password is incorrect!</p>';
                }
            }
            ?>
        </form>
    </div>
</body>

</html>
