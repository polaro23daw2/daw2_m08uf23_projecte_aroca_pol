<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Els valors de login són fixos per a aquest exemple.
    $adminDn = 'cn=admin,dc=fjeclot,dc=net';
    $adminPassword = $_POST['adminPassword']; // La contrasenya s'obté del formulari.
    
    $opcions = [
        'host'                   => 'zend-poaris.fjeclot.net',
        'username'               => $adminDn,
        'password'               => $adminPassword,
        'bindRequiresDn'         => true,
        'accountDomainName'      => 'fjeclot.net',
        'baseDn'                 => 'dc=fjeclot,dc=net',
    ];
    
    $ldap = new Ldap($opcions);
    
    try {
        $ldap->bind();
        // Estableix una cookie que expira en 24 hores.
        setcookie('loggued', 'true', time() + 86400, '/'); // El camí '/' significa que la cookie és disponible en tot el domini.
        
        // Si l'autenticació és correcta, l'usuari és redirigit a la pàgina principal de l'aplicació.
        $_SESSION['usuari_autenticat'] = true;
        header("Location: menu.php");
        exit();
    } catch (\Laminas\Ldap\Exception\LdapException $e) {
        // Si l'autenticació falla, mostra un missatge d'error.
        echo "Error d'autenticació: " . $e->getMessage();
    }
    
}
?>
