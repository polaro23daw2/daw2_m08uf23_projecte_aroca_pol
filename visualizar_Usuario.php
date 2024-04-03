<?php

require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

require 'ldapConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ldap = ldapConnect();
    
    $uid = $_POST['uid'];
    $ou = $_POST['unitat_organitzativa'];
    $dn = "ou=$ou,dc=fjeclot,dc=net";

    $filtro = "(uid=$uid)";
    
    try {
        $resultado = $ldap->search($filtro, $dn, Ldap::SEARCH_SCOPE_SUB);
        
        if ($resultado->count() > 0) {
            $entrada = $resultado->current();
            if ($entrada) {
                $datos = $ldap->getEntry($entrada['dn']);
                
                echo "<h3>Datos del Usuario: $uid</h3>";
                if (!empty($datos)) {
                    echo "<table border='1'>";
                    echo "<tr><th>Atributo</th><th>Valor</th></tr>";
                    foreach ($datos as $atributo => $valores) {
                        if ($atributo !== 'dn' && is_array($valores)) {
                            foreach ($valores as $valor) {
                                echo "<tr><td>".htmlspecialchars($atributo)."</td><td>".htmlspecialchars($valor)."</td></tr>";
                            }
                        }
                    }
                    echo "</table>";
                    echo "<a https://zends-poaris/proyectom08uf23/menu.php'>ir al menu principal</a>";
                } else {
                    echo "<p>No se encontraron datos para el usuario.</p>";
                }
            }            
        } else {
            echo "No se encontró el usuario.";
        }
    } catch (\Laminas\Ldap\Exception\LdapException $e) {
        echo "Error al buscar el usuario: " . $e->getMessage();
    }
}
?>
