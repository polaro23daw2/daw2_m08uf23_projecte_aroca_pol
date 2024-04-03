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
    $nuevoValor = $_POST['nuevoValor']; // Usa el nuevo nombre del campo aquí
    Attribute::setAttribute($arrayModificacion, $modificacionAtributo, $nuevoValor);    
    
    try {
        $ldap->update($datos, $arrayModificacion);
        echo "Atributo modificado con éxito.";
        echo "<a href='https://zends-poaris/proyectom08uf23/menu.php'>ir al menu principal</a>";
    } catch (\Laminas\Ldap\Exception\LdapException $e) {
        echo "Error al modificar el atributo: " . $e->getMessage();
    }
}
?>