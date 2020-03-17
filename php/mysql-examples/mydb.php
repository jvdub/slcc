<?php
    $tableName = 'jvanwagenen_my_db';
    create_table();
    insert_to_contact_table('1/22/2019', 'John', 'Van Wagenen', 'jtvanwage@gmail.com', '555-555-5555', 'hey!');
    get_content();

    function get_connection() {
        $servername = 'mysql.slccwebdev.com';
        $database = 'miller19';
        $username = 'miller19';
        $password = 'SLCCMiller19';

        try {
            $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            print 'Connected Successfully<br>';
        } catch (PDOException $e) {
            print "Couldn't connect.<br>";
            print $e->getMessage();
        }

        return $connection;
    }

    function create_table() {
        $conn = get_connection();

        try {
            $sql = "CREATE TABLE jvanwagenen_my_db (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    date TIMESTAMP,
                    first_name VARCHAR(255),
                    last_name VARCHAR(255),
                    email VARCHAR(255),
                    phone VARCHAR(255),
                    contact_message VARCHAR(5000)
                )";

            $conn->exec($sql);
            print "Table jvanwagenen_my_db created successfully";

        } catch(PDOException $e) {
            print "Could not create table: ".$e->getMessage();
        }

        $conn = null;
    }
    
    function insert_to_contact_table($date, $first_name, $last_name, $email, $phone, $contact_message) {
        $conn = get_connection();

        try {
            $sql = "INSERT INTO jvanwagenen_my_db 
                (date, first_name, last_name, email, phone, contact_message)
                VALUES
                ($date, '$first_name', '$last_name', '$email', '$phone', '$contact_message')";

            $conn->exec($sql);
            print "Inserted successfully!";
        } catch (PDOException $e) {
            print "Error inserting into database: ".$e->getMessage();
        }

        $conn = null;
    }

    function get_content() {
        $conn = get_db_connection();

        try {
            $stmt = $conn->prepare("SELECT * FROM jvanwagenen_my_db");
            $stmt->execute();
            // return $stmt->setFetchMode(PDO::FETCH_ASSOC);
            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            // print_r($stmt->fetchAll());

            foreach($stmt->fetchAll() as $row) { 
                foreach($row as $data){
                    print '<br>'.$data;
                }
            }
        } catch (PDOException $e) {
            print "Error: " . $e->getMessage();
        }
    }
?>