<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating Tables With Different Fields</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1>Creating Tables With Different Fields</h1>
                <p>Now that your DB is created, you'll want to start creating tables.</p>
                <p>The subject of what tables to create and why and how they relate together is a deep one and one that people spend entire college degrees studying.</p>
                <p>To start out, think of your table representing one thing.</p>
                <p>One potential exercise is to think of how you'd represent a given thing if you only had basic Excel Spreadsheets. What would your attributes (columns) be? What woiuld the possible values be?</p>
                <p>Here's an example of creating table that might represent a new contact:</p>
                <pre><code>
                CREATE TABLE $tableName (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    date TIMESTAMP,
                    first_name VARCHAR(255),
                    last_name VARCHAR(255),
                    email VARCHAR(255),
                    phone VARCHAR(255),
                    company VARCHAR(255),
                    contact_reason VARCHAR(255),
                    contact_message VARCHAR(255)
                )
                </code></pre>
                <p>There are many <a href="https://dev.mysql.com/doc/refman/8.0/en/data-types.html">Data Types</a> in MySQL.</p>
                <p>The basics are INT (for integer) and VARCHAR(###) (for a string). Other common ones are BIT, TIMESTAMP, DATETIME, and BLOB.</p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>