<?php
// Informations de connexion
if ($_SERVER["SERVER_ADDR"] !== "127.0.0.1") {
    // define('SGBDR', 'mysql');
    // define('DBHOST', 'mysql-bcr.alwaysdata.net');
    // define('DBUSER', 'bcr');
    // define('DBPASS', 'Bouba-Web2022');
    // define('DBNAME', 'bcr_offres_emploi');
    define('SGBDR', $_ENV['SGBDR']);
    define('DBHOST', $_ENV['DBHOST']);
    define('DBUSER', $_ENV['DBUSER']);
    define('DBPASS', $_ENV['DBPASS']);
    define('DBNAME', $_ENV['DBNAME']);

    // Clé pour le token
    define('SECRETE_KEY_C',  $_ENV['SECRETE_KEY_C']);
    define('SECRETE_KEY_R',  $_ENV['SECRETE_KEY_R']);
    define('SECRETE_KEY_A',  $_ENV['SECRETE_KEY_A']);
} else {
    define('SGBDR', 'mysql');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'offres_emploi');

    // Clé pour le token
    define('SECRETE_KEY_C',  'ceci est une cle pour les candidats');
    define('SECRETE_KEY_R',  'celle ci est pour les recruteurs');
    define('SECRETE_KEY_A',  'la dernière c\'est pour les admin');
}
