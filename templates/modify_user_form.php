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
    <title>Modificar Usuario</title>
</head>
<body>
    <h2>Modificar un usuario existente</h2>
    <form action="../modify_user.php" method="post">
        uid: <input type="text" name="uid" required><br>
		unitat organitzativa:<select name="unitat_organitzativa" required>
        <option value="---">seleciona la unidad organitzativa que desea</option>
        <option value="administradors">administradors</option>
        <option value="desenvolupadors">desenvolupadors</option>
        <option value="usuaris">usuaris</option>
        </select><br>
        
        Atributo a modificar:<br>
        <input type="radio" id="uidNumber" name="atributoAmodificar" value="uidNumber" required>
        <label for="uidNumber">uidNumber</label><br>
        
        <input type="radio" id="gidNumber" name="atributoAmodificar" value="gidNumber">
        <label for="gidNumber">gidNumber</label><br>
        
        <input type="radio" id="Directori_personal" name="atributoAmodificar" value="homeDirectory">
        <label for="Directori_personal">Directori personal</label><br>
        
        <input type="radio" id="Shell" name="atributoAmodificar" value="loginShell">
        <label for="Shell">Shell</label><br>
        
        <input type="radio" id="cn" name="atributoAmodificar" value="cn">
        <label for="cn">cn</label><br>
        
        <input type="radio" id="sn" name="atributoAmodificar" value="sn">
        <label for="sn">sn</label><br>
        
        <input type="radio" id="givenName" name="atributoAmodificar" value="givenName">
        <label for="givenName">givenName</label><br>
        
        <input type="radio" id="PostalAdress" name="atributoAmodificar" value="postalAddress">
        <label for="PostalAdress">PostalAdress</label><br>
        
        <input type="radio" id="mobile" name="atributoAmodificar" value="mobile">
        <label for="mobile">mobile</label><br>
        
        <input type="radio" id="telephoneNumber" name="atributoAmodificar" value="telephoneNumber">
        <label for="telephoneNumber">telephoneNumber</label><br>
        
        <input type="radio" id="title" name="atributoAmodificar" value="title">
        <label for="title">title</label><br>
        
        <input type="radio" id="description" name="atributoAmodificar" value="description">
        <label for="description">description</label><br>
        
		Nuevo Valor: <input type="text" name="nuevoValor" required><br>
        <input type="submit" value="Modificar Usuario">
    </form>
</body>
</html>