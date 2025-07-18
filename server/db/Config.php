<?php
define('HOST', '127.0.0.1:3306');
define('DB', 'todo');
define('USER', 'root');

define('CONFIG', [
    //PDO - PHP DATA OBJECTS
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
]);
