<?php

// app/config/database.php

return [
    'host'     => 'localhost',
    'dbname'   => 'apiDatabase',
    'username' => 'phpuser',           // MySQL user
    'password' => 'phpuser',  // MySQL root password
    'options'  => [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]
];

?>