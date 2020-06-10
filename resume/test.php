<?php
function get_db_connection() {
    // mysql -u millersummer2020 -p -h mysql.slccwebdev.com millersummer2020
    $servername = 'mysql.slccwebdev.com';
    $database = 'millersummer20';
    $username = 'millersummer2020';
    $password = 'SLCCMillerSummer2020';
    $connection;

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print 'Connected Successfully<br>';
    } catch (PDOException $e) {
        print 'Connection failed';
        print $e->getMessage();
    }

    return $connection;
}

function recordContactInformation() {
    $connection = get_db_connection();
}

recordContactInformation();
?>