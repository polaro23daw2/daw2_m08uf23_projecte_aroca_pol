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
		unitat organitzativa:<select name="unitat_organitzativa" required>
        <option value="---">seleciona la unidad organitzativa que desea</option>
        <option value="administradors">administradors</option>
        <option value="desenvolupadors">desenvolupadors</option>
        <option value="usuaris">usuaris</option>
        </select><br>
        <input type="submit" value="Visualizar Datos">
    </form>
</body>
</html>
