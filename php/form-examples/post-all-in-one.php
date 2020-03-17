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
<body>
    <div class="container">
        <h1>PHP Form Validation Example</h1>
        <p><span class="text-danger">* required field</span></p>
        <?php
            $firstNameErr = $lastNameErr = $emailErr = '';
            $firstName = $lastName = $email = $comments = '';

            function cleanData($data) {
                $data = htmlspecialchars($data);
                $data = trim($data);
                $data = stripslashes($data);
    
                return $data;
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (empty($_POST['first_name']) and !preg_match('/^[a-zA-Z \-\.]*$/', $_POST['first_name'])) {
                    $firstNameErr = 'First name is required.';
                } else {
                    $firstName = cleanData($_POST['first_name']);
                }

                if (empty($_POST['last_name']) and !preg_match('/^[a-zA-Z \-\.]*$/', $_POST['last_name'])) {
                    $lastNameErr = 'Last name is required.';
                } else {
                    $lastName = cleanData($_POST['last_name']);
                }

                if (!empty($_POST['comments'])) {
                    $comments = cleanData($_POST['comments']);
                }

                if (empty($_POST['email'])) {
                    $emailErr = 'Email is required.';
                } else {
                    $email = cleanData($_POST['email']);
    
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = 'Invalid Email Format';
                    } else if (isset($_POST['submit'])) {
                        mail('jtvanwage@gmail.com', 'You Had a Visitor!', 'You had a visitor!'.$firstName.' '.$lastName.' visited your site!Their email is '.$email.'.', 'FROM: jvanwa43@slcc.edu');
                        mail($email, 'Thanks for signing up!', 'Hello, '.$firstName.' '.$lastName.'! Thanks for visiting my site.', 'FROM: jvanwa43@slcc.edu');
                    }
                }
            }
        ?>
        <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="first-name">First Name:</label> <span class="text-danger">* <?php print $firstNameErr ?></span>
                    <input type="text" name="first_name" id="first-name" class="form-control" placeholder="First Name">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="last-name">Last Name:</label> <span class="text-danger">* <?php print $lastNameErr ?></span>
                    <input type="text" name="last_name" id="last-name" class="form-control" placeholder="Last Name">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="email">Your Email:</label> <span class="text-danger">* <?php print $emailErr ?></span>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="comments">Comments:</label>
                    <textarea name="comments" id="comments" class="form-control" placeholder="Comments..."></textarea>
                </div>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
        <?php
            print '<h2>Your form data</h2>';
            print $name;
            print '<br>';
            print $email;
            print '<br>';
        ?>
    </div>
</body>
</html>