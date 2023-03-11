<?php

    define('WWW_ROOT', 'http://localhost');
    define('PROJECT_ROOT', dirname(__DIR__, 1));

    //Functions
    require('functions.php');

    //Classes
    require('Classes/Mentor.php');
    require('Classes/Mentee.php');
    require('Classes/Project.php');
    
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'forward_db');

    //initialize db
    $db = db_connect();

    // Mentee::set_db($db);
    // Mentor::set_db($db);
    Project::set_db($db);

?>