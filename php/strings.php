<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working With Strings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1>Working With Strings</h1>
                <p>Just like in JavaScript, we can edit strings in PHP.</p>
                <p>Here are some functions that help us as we work with strings:
                    <ul>
                        <li><code>strlen()</code> returns the length of the given string</li>
                        <li><code>str_word_count()</code> returns the number of words in the string</li>
                        <li><code>strrev()</code> reverses the string</li>
                        <li><code>strpos()</code> returns the starting character of the provided substring</li>
                        <li><code>str_replace()</code> searches the string for a given substring and replaces it with the provided value</li>
                    </ul>
                </p>
                <h2>String Concatenation</h2>
                <p>Often times we need to combine two or more strings before we display the string to the user.</p>
                <p>This is called string concatenation.</p>
                <p>This is done in PHP with the <code>.</code> operator.</p>
                <pre><code>
                $a = "Hello ";
                $b = $a . "World!"; // now $b contains "Hello World!"

                $a = "Hello ";
                $a .= "World!";     // now $a contains "Hello World!"
                </code></pre>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>