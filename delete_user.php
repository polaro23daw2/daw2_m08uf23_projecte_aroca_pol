<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

include 'ldapConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ldap = ldapConnect();
    
    $dn = "uid=" . $_POST['uid'] . ",ou=" . $_POST['unitat_organitzativa'] . ",dc=fjeclot,dc=net";
    
    try {
        $ldap->delete($dn);
        echo "Usuario eliminado con éxito.";
        echo "<a href='http://localhost/proyecto/'>ir al menu principal</a>";
    } catch (\Laminas\Ldap\Exception\LdapException $e) {
        echo "Error al eliminar el usuario: " . $e->getMessage();
    }
}
?>
