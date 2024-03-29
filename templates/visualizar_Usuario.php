<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Usuario LDAP</title>
</head>
<body>
    <h2>Visualizar Datos de Usuario LDAP</h2>
    <form action="../visualizar_Usuario.php" method="post">
        UID del Usuario: <input type="text" name="uid" required><br>
        Unidad Organizativa (OU): <input type="text" name="ou" required><br>
        <input type="submit" value="Visualizar Datos">
    </form>
</body>
</html>
