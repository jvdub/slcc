<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body class="container">
    <?php
        // phpinfo();
        $servername = 'localhost';
        $username = 'example';
        $password = 'password';

        try {
            // $connection = new PDO("mysql:host=$servername", $username, $password);
            // db: miller19
            // user: miller19
            // pass: SLCCMiller19
            $connection = new PDO("mysql:host=$servername;dbname=wordpress", $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            print 'Connected Successfully<br>';

            // $sql = 'CREATE DATABASE wordpress';
            // $connection->exec($sql);
            // print 'DB Created Successfully';

            // $sql = "GRANT ALL PRIVILEGES ON wordpress  TO 'example'@'localhost';";
            // $connection->exec($sql);
            // print 'Granted permissions';

            // $sql = 'CREATE TABLE MyGuests (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50), reg_date TIMESTAMP)';
            // $connection->exec($sql);
            // print 'Table Created Successfully';

            // $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Van Wagenen', 'jtvanwage@gmail.com')";
            // $connection->exec($sql);
            // print 'User Inserted successfully';

            // $stmt = $connection->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
            // $stmt->bindParam(":firstname", $firstname);
            // $stmt->bindParam(":lastname", $lastname);
            // $stmt->bindParam(":email", $email);
            // $firstname = 'Jane';
            // $lastname = 'Doe';
            // $email = 'jdoe@email.com';
            // $stmt->execute();
            // print 'User Inserted successfully';
            ?>
            <table class="table table-responsive">
                <tr>
                    <th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th>
                </tr>
            <?php
            $stmt = $connection->prepare("SELECT * FROM MyGuests");
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php print $row['id']; ?></td>
                    <td><?php print $row['firstname']; ?></td>
                    <td><?php print $row['lastname']; ?></td>
                    <td><?php print $row['email']; ?></td>
                </tr>
            <?php } ?>
            </table>
            <?php
        } catch (PDOException $e) {
            print 'Connection failed';
            print $e->getMessage();
        }

        $obj = (object) [
            'foo' => 'test',
            'bar' => 123,
        ];
    ?>
</body>
</html>