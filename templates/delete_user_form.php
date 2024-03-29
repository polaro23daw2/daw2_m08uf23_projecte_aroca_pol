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
        unitat organitzativa: <input type="text" name="unitat_organitzativa" required><br>
        <input type="submit" value="Eliminar Usuario">
    </form>
</body>
</html>
