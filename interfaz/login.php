<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Login</title>
    <style>
        /* Reutilizamos el estilo anterior */
    </style>
</head>

<body>



<div class="container">
    <h2>Login</h2>
    <form action="../Front-end/index.php" method="GET"> 
        <!-- ../Front-end/index.php -->
        <!-- indexlogged.php -->
        <input type="hidden" name="action" value="login">
        
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" value="login">Log In</button>
    </form>
</div>

</body>
</html>
