<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1>PHP Form Handling</h1>
                <p>When forms are submitted to the server, PHP is what handles it.</p>
                <p>PHP processes the form data, performs any business logic, and saves the data or takes other actions (like sending an email).</p>
                <p>When processing the data from a form, you'll likely use one of two superglobal variables:
                    <ul>
                        <li><code>$_GET</code> has the form data for <code>GET</code> form requests</li>
                        <li><code>$_POST</code> has the form data for <code>POST</code> form requests</li>
                    </ul>
                </p>
                <p>There are two main methods for processing forms: <code>GET</code> and <code>POST</code>.</p>
                <p>The main difference is that the data in a <code>GET</code> request is easily visible while the data in a <code>POST</code> request is hidden from view.</p>
                <p>As a general rule, you'll want to use <code>POST</code> when handling sensitive data (account creation, editing, updating, deleting) and <code>GET</code> for non-sensitive data (some search terms or other public/bookmarkable items).</p>
                <p>In practice, you'll likely use <code>POST</code> more than <code>GET</code>.</p>
            </div>
        </div>
        <h1>Form Validation</h1>
        <p>We talked about form validation with HTML, CSS, and JavaScript, but that's only half of the picture.</p>
        <p>The other aspect of form validation happens with PHP on the server once the data has been sent.</p>
        <p>Form validation on the server is generally more concerned with security and preventing hacking than it is user experience.</p>
        <p>PHP offers a few built-in functions that can help prevent some basic hacking attempts. Here are a few of them:
            <ul>
                <li><code>htmlspecialchars()</code>
                    <ul>
                        <li>This is a function that transforms HTML to plain text (essentially) so that the browser doesn't treat it like HTML.</li>
                        <li>This is useful so that any HTML the user inputs isn't displayed on your page. This prevents hackers from taking over your site or injecting unwanted things into it.</li>
                    </ul>
                </li>
                <li><code>trim()</code>
                    <ul>
                        <li>Trims the whitespace before and after the given string.</li>
                        <li>Sometimes the data your users enter is messy. This function helps ensure some consistency in the data by removing extraneous whitespace.</li>
                    </ul>
                </li>
                <li><code>stripslashes()</code>
                    <ul>
                        <li>Remove any backslashes in a given string.</li>
                        <li>The backslash (<code>\</code>) is a common escape character. This means that whatever follows the backslash can have special meaning. Chances are if a user is using a backslash, they're not doing anything you want to be a part of.</li>
                    </ul>
                </li>
            </ul>
        </p>
        <h3>Required Fields</h3>
        <p>Required fields are usually handled on the front-end; however, those checks can be bypassed.</p>
        <p>If you've marked something as required in HTML, it's best practice to also check it on the server-side to ensure it is submitted with the form.</p>
        <p>Using an <code>if</code> statement along with the <code>empty()</code> function, we can easily check to see if certain fields were submitted.</p>
        <pre><code>
            if (empty($_POST["name"])) {
                $nameErr = "Name is required!";
            } else {
                $nameErr = "";
                $name = clean_input($_POST["name"]);
            }
        </code></pre>
        <h3>Validating Input</h3>
        <p>While we have done some validation of the input on the front-end, these checks can be easily bypassed.</p>
        <p>It's best practice to also validate the input on the back-end as well.</p>
        <p>In PHP, this is often done with the <code>preg_match()</code> function.</p>
        <p>This method compares the string to a regular expression to see if it matches or not.</p>
        <p>I'd recommend Googling the regular expression you want to use and adapting it to your needs.</p>
        <p>I like to use <a href="https://www.regexpal.com/">RegEx Pal</a> to test my regular expressions against sample inputs that I enter.</p>
        <pre><code>
        if (preg_match("/^[A-Za-z ]+$/", $_POST["name"])) {
            $nameErr = "Only letters and whitespace allowed";
        }
        </code></pre>
        <div class="jumbotron">
            <div class="container">
                <h1>Sending Email</h1>
                <p>PHP makes this very easy with the <code>mail()</code> function.</p>
                <p><code>mail(TO_ADDRESS, SUBJECT, BODY, HEADERS)</code></p>
                <pre><code>
                $to = "test@email.com, email@test.com";
                $headers = "From: $email\r\n";
                $headers .= "Reply-To: $email\r\n";
                $emailBody = "You have a message from $name.\nThey're contacting you for $reasonForContacting.\n"
                    ."This is their comment:\n$comment";
                mail($to, "A New Contact", $emailBody, $headers);
                </code></pre>
                <p>For whatever reason, the emails you'll be sending today are often sent to your spam or junk folders. Please check those as we do this exercise tonight.</p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>