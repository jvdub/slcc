<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions and Arrays</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1>Functions</h1>
                <p>The syntax for functions in PHP is nearly identical to the syntax is JavaScript.</p>
                <pre><code>
                    function greetUser($name) {
                        echo "Hello, " . $name . "&lt;br>";
                    }

                    greetUser("Bob");
                    greetUser("Jane");

                    function add($x, $y) {
                        $z = $x + $y;
                        return $z;
                    }

                    echo add(1, 2);
                    echo "&lt;br>";
                    echo add(114, 823);
                </code></pre>
                <?php
                    function greetUser($name) {
                        echo "Hello, " . $name . "<br>";
                    }

                    greetUser("Bob");
                    greetUser("Jane");

                    function add($x, $y) {
                        $z = $x + $y;
                        return $z;
                    }

                    echo add(1, 2);
                    echo "<br>";
                    echo add(114, 823);
                ?>
            </div>
        </div>
        <h1>Arrays</h1>
        <p>Arrays are list of values</p>
        <p>Arrays can indexed (accessed with an integer) or associated (accessed with a name or key)</p>
        <h6>Indexed Array</h6>
        <pre><code>
            $list = array(17, 19, 3, 7, 11);
            echo $list[0] . "&lt;br>";
            echo $list[2] . "&lt;br>";
            echo $list[4] . "&lt;br>";
        </code></pre>
        <?php
            $list = array(17, 19, 3, 7, 11);
            echo $list[0] . "<br>";
            echo $list[2] . "<br>";
            echo $list[4] . "<br>";
        ?>
        <h6>Associative Array</h6>
        <pre><code>
            $list2 = array("dog" => "Retriever", "cat" => "Tabby", "horse" => "pinto");
            echo $list2["dog"] . "&lt;br>";
            echo $list2["horse"] . "&lt;br>";
        </code></pre>
        <?php
            $list2 = array("dog" => "Retriever", "cat" => "Tabby", "horse" => "pinto");
            echo $list2["dog"] . "<br>";
            echo $list2["horse"] . "<br>";
        ?>
        <h2><code>count()</code></h2>
        <p>The <code>count()</code> function counts how many items are in an array.</p>
        <p>This function is useful when looping over arrays.</p>
        <h2>Sorting</h2>
        <p>
            PHP has a few sorting functions built-in which you can use:
            <ul>
                <li><code>sort()</code> sorts the array in ascending order (alphabetically, smallest to biggest)</li>
                <li><code>rsort()</code> sorts the array in descending order (reverse alphabet, largest to smallest)</li>
                <li><code>asort()</code> sorts <strong>associative arrays</strong> in ascending order according to the <strong>value</strong></li>
                <li><code>ksort()</code> sorts <strong>associative arrays</strong> in ascending order according to the <strong>key</strong></li>
                <li><code>arsort()</code> sorts <strong>associative arrays</strong> in descending order according to the <strong>value</strong></li>
                <li><code>krsort()</code> sorts <strong>associative arrays</strong> in descending order according to the <strong>key</strong></li>
            </ul>
        </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>