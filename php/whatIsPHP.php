<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What is PHP?</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="containner">
                <h1>What is PHP?</h1>
                <p>PHP is a server-side scripting language.</p>
                <p>Imagine you're shopping for food. You have two options: purchase food at a restaurant or purchase food at a grocery store.</p>
                <p>One option serves you the food already prepared. The other requires you to serve and maybe prepare the food yourself.</p>
                <p>PHP is similar to the restaurant. The restaurant (web server) prepares the food (web page) before giving it to the client (browser) that requested it.</p>
                <p>JavaScript is similar to the grocery store model. The grocery store (web server) may or may not prepare the food (web page) before giving it to the client (browser)</p>
                <p>Both client-side scripting and server-side scripting have their place and both are used on most web sites.</p>
            </div>
        </div>
        <h1>PHP Files</h1>
        <p>In order to use PHP in your web pages, you'll need to save the files as PHP files.</p>
        <p>PHP files can have HTML in them, PHP in them, or a combination of the two in them.</p>
        <p>If you were to rename a valid HTML file to be a PHP file, it would be functionally the same (meaning the page would look the same to the user).</p>
        <p>Once you've saved a PHP file, you can start using PHP in that file.</p>
        <p>To start using PHP, simply use the PHP tags and put your PHP between those tags.</p>
        <p>These are the PHP tags: <code>&lt;?php</code> starts a section of PHP and <code>?&gt;</code> ends a section of PHP.</p>
        <pre><code>
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
        &lt;head&gt;
            &lt;title&gt;Document Title&lt;/title&gt;
        &lt;/head&gt;
        &lt;body&gt;
            &lt;p&gt;This is HTML saying Hello World!&lt;/p&gt;
            &lt;?php echo "This is PHP saying Hello World!"; ?&gt;
        &lt;/body&gt;
        &lt;/html&gt;
        </code></pre>
        <p>Let's <a href="workingWithPHPFiles.php">change your HTML files to PHP files!</a></p>
        <div class="jumbotron">
            <div class="containner">
                <h1>Basic Syntax</h1>
                <p>Some aspects of PHP should feel familiar as PHP and JavaScript share some of the same syntax.</p>
                <h2>Variables</h2>
                <pre><code>
                $variableName = Value;
                $variable2 = 123;
                $variable3 = "This is a string";
                $variable4 = 2;
                $variable5 = $variable2 + $variable4;
                </code></pre>
                <p>Note that the only thing that is case-sensitive in PHP is variables.</p>
                <p>Note that semi-colons are <strong>REQUIRED</strong> at the end of a statement.</p>
                <h2>Outputting</h2>
                <p>To output to the screen, use the <code>echo</code> function.</p>
                <pre><code>
                echo "Hello world!";
                $variable1 = 123;
                echo $variable1;
                </code></pre>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>