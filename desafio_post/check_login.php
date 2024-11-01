<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
</head>

<body>
    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Login</button>
 
    }
    ?>
</body>

</html>