<?php
    require '../controllers/register-controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-register.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <title>Register - Pokemon</title>
</head>

<body>
    <form action="" method="post">
        <h3>Register</h3>

        <label for="username">Username :</label>
        <input type="text" placeholder="" name="username" id="username" autocomplete="off">

        <label for="password">Password :</label>
        <input type="password" placeholder="" name="password" id="password" autocomplete="off">

        <label for="password2">konfirmasi password :</label>
        <input type="password" name="password2" id="password2">

        <button type="submit" name="register">Register</button>
        <a href="login-page.php">Login</a>
    </form>

</body>

</html>