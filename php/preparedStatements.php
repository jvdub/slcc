<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepared Statements</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1>Prepared Statements</h1>
                <p>Like many things in web development, there are ways that work and ways that work but prevent hacking.</p>
                <p>Using Prepared Statements is the recommended way to create SQL statements to help prevent hacking.</p>
                <p>Prepared statements are easy to use and they provide some error-checking which prevents many basic attacks.</p>
                <p>You should never run a SQL string that has user input. If you're building a string with user input, you should always use a prepared statement (or another method that ensures security such as stored procedures).</p>
                <pre><code>
                $conn = get_db_connection(); // Get a database connection

                try {
                    $stmt = $conn->prepare("SELECT * FROM $tableName"); // Prepare the query
                    $stmt->execute(); // Run the query
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    foreach($stmt->fetchAll() as $row) { // loop over the results
                        foreach($row as $data){
                            print '<br>'.$data; // Print the results to the screen
                        }
                    }
                } catch (PDOException $e) {
                    print "Error: " . $e->getMessage();
                }
                </code></pre>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>