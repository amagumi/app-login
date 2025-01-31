<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        /* Reutilizamos el estilo anterior */
    </style>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        font-weight: bold;
    }
    input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }
</style>
<body>

<div class="container">
    <h2>Iniciar Sesión</h2>
    <form action="indexlogged.php" method="GET"> 
        <!-- ../Front-end/index.php -->
        <input type="hidden" name="action" value="login">
        
        <div class="form-group">
            <label for="username">Nombre de usuario</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" value="login">Iniciar Sesión</button>
    </form>
</div>

</body>
</html>
