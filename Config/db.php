<?php
// Informations de connexion
if ($_SERVER["SERVER_ADDR"] !== "127.0.0.1") {
    // define('SGBDR', 'mysql');
    // define('DBHOST', 'mysql-bcr.alwaysdata.net');
    // define('DBUSER', 'bcr');
    // define('DBPASS', 'Bouba-Web2022');
    // define('DBNAME', 'bcr_offres_emploi');
    //     SGBDR = mysql
    // SGBDR = mysql
    // DBHOST = mysql-bcr.alwaysdata.net
    // DBUSER = bcr
    // DBPASS = Bouba-Web2022
    // DBNAME = bcr_offres_emploi
    define('SGBDR', $_ENV['SGBDR']);
    define('DBHOST', $_ENV['DBHOST']);
    define('DBUSER', $_ENV['DBUSER']);
    define('DBPASS', $_ENV['DBPASS']);
    define('DBNAME', $_ENV['DBNAME']);
} else {
    define('SGBDR', 'mysql');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'offres_emploi');
}

// Clé pour le token
define('SECRETE_KEY_C', 'stagefw16_candidats');
define('SECRETE_KEY_R', 'stagefw16_representants');
define('SECRETE_KEY_A', 'stagefw16_administrateurs');
