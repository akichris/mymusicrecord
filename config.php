<?php

    // login database myMusicRecord data
    $serverName = 'localhost';
    $userName = 'musicstudent';
    $password = 'StudentPassword';
    $databaseName = 'myMusicRecord';

    // new connection to MySQL server
    $connection = new mysqli($serverName, $userName, $password, $databaseName);

    // check connection
    if ($connection -> connect_errno)
    {
        echo "Failed to connect to MySQL: " . $connection -> connect_error;
        exit();
    }


    

?>