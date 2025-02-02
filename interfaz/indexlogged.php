<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Options</title>
</head>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Options</title>
    
</head>
<body>

<div> <p style="text-align: center"> Welcome, <?php echo $_SESSION['username']; ?></p> 
<div class="container">
    <h2>User Options</h2>
    <div class="button-container-vertical">
        <button onclick="window.location.href='index.php?action=changepass'">Change Password</button>
        <button onclick="window.location.href='validateaccount.php'">Validate Account</button>
        <button onclick="window.location.href='../Front-end/index.php?action=listusers'">User List</button>
        <button onclick="window.location.href='logout.php'">Log Out</button>
                                             <!-- ../Front-end/index.php?action=logout -->
                                             <!-- logout.php -->
    </div>
</div>

</body>
</html>
