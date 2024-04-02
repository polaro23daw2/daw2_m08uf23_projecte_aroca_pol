<?php
if (!isset($_COOKIE['loggued']) || $_COOKIE['loggued'] !== 'true') {
    echo "No pots accedir aquí sense fer login. Ho pots fer aquí: ";
    echo "<a href='http://zend-poaris.fjeclot.net/projecte/'>login</a>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión LDAP</title>
</head>
<body>
    <h1>Gestión de Usuarios LDAP</h1>
    <ul>
        <li><a href="templates/add_user_form.php">Añadir Usuario</a></li>
        <li><a href="templates/delete_user_form.php">Eliminar Usuario</a></li>
        <li><a href="templates/modify_user_form.php">Modificar Usuario</a></li>
		<li><a href="templates/visualizar_Usuario.php">visualizar un Usuario</a></li>
    </ul>
</body>
</html>