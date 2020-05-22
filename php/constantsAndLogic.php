<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants and Logic</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1>Constants</h1>
                <p>Constants are similar to variables in that they can contain data.</p>
                <p>The key difference is that the value of a constant cannot change (its value is constant).</p>
                <pre><code>
                define("GREETINGS", "Welcome to SLCC!", true); // define(NAME, VALUE, CASE_INSENSITIVE?);
                </code></pre>
                <p>Constants are defined once and are available anywhere in the PHP program.</p>
                <p>This is useful for shared resources and values that never change.</p>
            </div>
        </div>
        <h1>Operators</h2>
        <p>These are all very similar to JavaScript and should be familiar.</p>
        <p>One that's different is the <code>**</code> operator. This is the exponentiation operator (JS uses <code>Math.pow()</code>)</p>
        <p>PHP has two options for not equal. Either <code>!=</code>, which is the most common, or <code>&lt;&gt;</code>.</p>
        <p><a href="https://www.php.net/manual/en/language.operators.php">All the other operators</a> should be fairly familiar from JavaScript.</p>
        <div class="jumbotron">
            <div class="container">
                <h1>Conditions and Loops</h1>
                <p>If statements are nearly identical to JavaScript.</p>
                <p>The else/if statement is the only thing that's different syntactically.</p>
                <pre><code>
                $t = date("H");
                echo "The hour (of the server) is " . $t . "and it will give the following message:</p>";

                if ($t < "10") {
                    echo "Have a good morning!";
                } elseif ($t < "20") {
                    echo "Have a good day!";
                } else {
                    echo "Have a good night!";
                }
                </code></pre>
                <?php
                $t = date("H");
                echo "The hour (of the server) is " . $t . "and it will give the following message:</p>";

                if ($t < "10") {
                    echo "Have a good morning!";
                } elseif ($t < "20") {
                    echo "Have a good day!";
                } else {
                    echo "Have a good night!";
                }
                ?>
                <p>Switch statements in PHP are identical to those in JavaScript.</p>
                <h2>Loops</h2>
                <p>
                    PHP doesn't have as many loops as JavaScript does, but the same basic ones are available:
                    <ul>
                        <li><code>while</code></li>
                        <li><code>do ... while</code></li>
                        <li><code>for</code></li>
                        <li><code>foreach</code></li>
                    </ul>
                </p>
                <p>Let's assume this:</p>
                <pre><code>
                $myList = [ "HTML", "CSS", "JavaScript", "PHP", "MySQL" ];
                </code></pre>
                <?php $myList = [ "HTML", "CSS", "JavaScript", "PHP", "MySQL" ]; ?>
                <hr>
                <h3><code>while</code></h3>
                <pre><code>
                $i = 0;
                while ($i < count($myList)) {
                    echo $myList[$i] . "&lt;br>";
                    ++$i;
                }
                </code></pre>
                <?php
                $i = 0;
                while ($i < count($myList)) {
                    echo $myList[$i] . "<br>";
                    ++$i;
                }
                ?>

                <hr>
                <h3><code>do ... while</code></h3>
                <pre><code>
                $i = 0;
                do {
                    echo $myList[$i] . "&lt;br>";
                    ++$i;
                } while ($i < count($myList));
                </code></pre>
                <?php
                $i = 0;
                do {
                    echo $myList[$i] . "<br>";
                    ++$i;
                } while ($i < count($myList));
                ?>

                <hr>
                <h3><code>for</code></h3>
                <pre><code>
                for ($i = 0; $i < count($myList); ++$i;) {
                    echo $myList[$i] . "&lt;br>";
                }
                </code></pre>
                <?php
                for ($i = 0; $i < count($myList); ++$i) {
                    echo $myList[$i] . "<br>";
                }
                ?>

                <hr>
                <h3><code>foreach</code></h3>
                <pre><code>
                foreach ($myList as $item) {
                    echo $item . "&lt;br>";
                }
                </code></pre>
                <?php
                foreach ($myList as $item) {
                    echo $item . "<br>";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>