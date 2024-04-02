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
    <title>Añadir Usuario</title>
</head>
<body>
    <h2>Añadir un nuevo usuario</h2>
    <form action="../add_user.php" method="post">
        uid: <input type="text" name="uid" required><br>
                unitat organitzativa:<select name="unitat_organitzativa" required>
        <option value="---">seleciona la unidad organitzativa que desea</option>
        <option value="administradors">administradors</option>
        <option value="desenvolupadors">desenvolupadors</option>
        <option value="usuaris">usuaris</option>
        </select><br>
        uidNumber: <input type="text" name="uidNumber" required><br>
        gidNumber: <input type="text" name="gidNumber" required><br>
		Directori personal: <input type="text" name="Directori_personal" required><br>
        Shell: <input type="text" name="Shell" required><br>
        cn: <input type="text" name="cn" required><br>
        sn: <input type="text" name="sn" required><br>
        givenName: <input type="text" name="givenName" required><br>
        PostalAdress: <input type="text" name="PostalAdress"><br>
        mobile: <input type="text" name="mobile"><br>
        telephoneNumber: <input type="text" name="telephoneNumber"><br>
        title: <input type="text" name="title"><br>
        description: <textarea name="description"></textarea><br>
        <input type="submit" value="Añadir Usuario">
    </form>
</body>
</html>