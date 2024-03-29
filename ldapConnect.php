<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;
ini_set('display_errors', 0);

function ldapConnect() {
    $domini = 'dc=fjeclot,dc=net';
    $opcions = [
        'host' => 'zend-poaris.fjeclot.net',
        'username' => "cn=admin,$domini",
        'password' => 'fjeclot',
        'bindRequiresDn' => true,
        'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];
    $ldap = new Ldap($opcions);
    try {
        $ldap->bind();
        return $ldap;
    } catch (\Laminas\Ldap\Exception\LdapException $e) {
        die("Error de conexión con LDAP: " . $e->getMessage());
    }
}
?>