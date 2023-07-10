<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
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
            text-align: center;
        }

        .form-group input[type="submit"] {
            background-color: #f44336;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        session_start();
        if (isset($_SESSION['hal'])) {
            echo '<h1>Welcome ' . $_SESSION['hal'] . '</h1>';
        } else {
            header('location: index.php');
        }
        ?>
        <div class="form-group">
            <form action="" method="POST">
                <input type="submit" name="logout" value="Logout">
            </form>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header('location: index.php');
}
?>