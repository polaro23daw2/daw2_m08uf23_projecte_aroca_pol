<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Usuario</title>
</head>
<body>
    <h2>Eliminar un usuario existente</h2>
    <form action="../delete_user.php" method="post">
        uid: <input type="text" name="uid" required><br>
        unitat organitzativa:<select name="unitat_organitzativa" required>
        <option value="---">seleciona la unidad organitzativa que desea</option>
        <option value="administradors">administradors</option>
        <option value="desenvolupadors">desenvolupadors</option>
        <option value="usuaris">usuaris</option>
        </select><br>
        <input type="submit" value="Eliminar Usuario">
    </form>
</body>
</html>
