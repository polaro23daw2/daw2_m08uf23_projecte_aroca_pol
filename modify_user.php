<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Attribute;
use Laminas\Ldap\Ldap;

include 'ldapConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ldap = ldapConnect();

    $datos = "uid=" . $_POST['uid'] . ",ou=" . $_POST['unitat_organitzativa'] . ",dc=fjeclot,dc=net";
    $arrayModificacion = [];
    $modificacionAtributo = $_POST['atributoAmodificar'];
    Attribute::setAttribute($arrayModificacion, $modificacionAtributo, $_POST[$modificacionAtributo]);

    try {
        $ldap->update($datos, $arrayModificacion);
        echo "Atributo modificado con éxito.";
    } catch (\Laminas\Ldap\Exception\LdapException $e) {
        echo "Error al modificar el atributo: " . $e->getMessage();
    }
}
?>
