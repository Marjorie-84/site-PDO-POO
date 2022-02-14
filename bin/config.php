<?php
//Connexion en développement

// Constantes contenant nos paramètres de connexion pour PDO
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'crud');
define('DB_PORT', 3306);
define('DB_CHARSET', 'UTF8');
define('DB_LOGIN', 'root');
define('DB_PWD', '');

//Connexion en production -> modifier les données des constantes en fonction du site hébergeur