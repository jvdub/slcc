<?php try { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Van Wagenen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/myStyles.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-warning">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active text-dark" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#competencies">Competencies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#certificates">Certificates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#references">References</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="home">
        <div class="container">
            <h1 class="display-1">John Van Wagenen</h1>
            <p class="lead">Software Engineer with a passion for helping things go right.</p>
        </div>
    </section>

    <div class="container">
        <div id="mug-shot">
            <img src="images/John2019.jpg" title="John Van Wagenen mugshut" height="200">
        </div>

        <section id="education">
            <h1>Education</h1>
            <div class="row">
                <div class="col">
                    <h4 class="school">The Georgia Institute of Technology</h4>
                    <p class="school-subtext">MS Computer Science - Interactive Intelligence</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="school">Utah State University</h4>
                    <p class="school-subtext">BS Computer Science - Minors in Business and Management</p>
                </div>
            </div>
        </section>

        <!-- Experience -->
        <section id="experience">
            <h1>Professional Experience</h1>
            <div class="accordion" id="accordionExample"></div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            MasterControl Inc.
                        </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <h4>Engineering Manager</h4>
                            <h5>February 2018 - Present</h5>
                            <p>
                                Managed multiple software teams and a team of tech writers in the effective delivery of their products. Coached engineers on
                                best practices in software engineering. Coached individuals in their careers. Resolved conflicts, managed projects, coordinated
                                with various other groups, and acted as a change agent in my peer group.
                            </p>
                            <ul>
                                <li>Led up to 14 individuals in effective software delivery</li>
                                <li>Coordinated the development and delivery of development work</li>
                            </ul>
                            <h4>Software Engineer</h4>
                            <h5>May 2014 - Feb 2018</h5>
                            <p>
                                Coded stuff.
                            </p>
                            <ul>
                                <li>Tech Lead</li>
                                <li>Scrum Master</li>
                                <li>Helped drive change</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Conservice, LLC
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <h4>Web Developer</h4>
                            <h5>January 2013 - March 2014</h5>
                            <p>
                                Coded stuff.
                            </p>
                            <ul>
                                <li>Trained employees in JavaScript and C#</li>
                                <li>Tech Lead</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="imageCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/DSCN0179 (2).JPG" class="d-block w-100" alt="Canyonlands">
                </div>
                <div class="carousel-item">
                    <img src="images/IMG_20200502_162937-EFFECTS.jpg" class="d-block w-100" alt="Wild Mustangs">
                </div>
                <div class="carousel-item">
                    <img src="images/MVIMG_20200502_160428.jpg" class="d-block w-100" alt="West Desert">
                </div>
            </div>
        </div>

        <!-- Here is just HTML -->
        <?php
        // Everything in here is PHP
        // $mySkillz = array("HTML", "CSS", "Bootstrap", "JavaScript", "PHP", "MySQL");
        $mySkillz = ["HTML", "CSS", "Bootstrap", "JavaScript", "PHP", "MySQL"];
        $languages = ["JavaScript", "Java", "SQL (T-SQL, Postgres, MySQL)", "HTML/CSS", "Python"];
        $frameworks = ["Angular", "Spring", "Vue.js"];
        $leadership = ["Technical Leadershsip", "Team Leadershsip", "Mentoring", "Career Guidance"];
        $skillz = [
            "Languages" => ["JavaScript", "Java", "SQL (T-SQL, Postgres, MySQL)", "HTML/CSS", "Python"],
            "Frameworks" => ["Angular", "Spring", "Vue.js"],
            "Leadership" => ["Technical Leadershsip", "Team Leadershsip", "Mentoring", "Career Guidance"]
        ];
        ?>
        <!-- Here is just HTML -->

        <!-- <div class="container">
            <section id="skills">
                <h1>Technical Skills in PHP</h1>
                <?php
                // echo '<ul class="row">';
                // foreach ($mySkillz as $skill) {
                //     echo "<li>" . $skill . "</li>";
                // }
                // echo "</ul>";
                ?>
                <ul>
                    <?php // foreach ($mySkillz as $skill) { ?>
                        <li><?php // echo $skill ?></li>
                    <?php // } ?>
                </ul>
            </section>
        </div> -->

        <div class="container">
            <!-- <section id="skills">
                <h1>Technical Skills</h1>
                <ul class="row">
                    <li class="col-md">Languages
                        <ul>
                        <?php //foreach ($languages as $lang) { ?>
                            <li><?php //echo $lang ?></li>
                        <?php //} ?>
                        </ul>
                    </li>
                    <li class="col-md">Frameworks
                        <ul>
                        <?php //foreach ($frameworks as $frmwk) { ?>
                            <li><?php //echo $frmwk ?></li>
                        <?php //} ?>
                        </ul>
                    </li>
                    <li class="col-md">Leadership
                        <ul>
                        <?php //foreach ($leadership as $lead) { ?>
                            <li><?php //echo $lead ?></li>
                        <?php //} ?>
                        </ul>
                    </li>
                </ul>
            </section> -->

            <section id="skills">
                <h1>Technical Skills</h1>
                <ul class="row">
                    <?php foreach ($skillz as $topic => $skills) { ?>
                    <li class="col-md"><?php echo $topic ?>
                        <ul>
                        <?php foreach ($skills as $skill) { ?>
                            <li><?php echo $skill ?></li>
                        <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </section>

            <section id="competencies">
                <h1>Core Competencies</h1>
                <ul>
                    <li>Leadership/Management</li>
                    <li>Agile Software Development</li>
                    <li>Clear Communication Skills (written and verbal)</li>
                </ul>
            </section>

            <section id="certificates">
                <h1>Certificates and Awards</h1>
                <ul>
                    <li>Developer of the Year (MasterControl) 2015</li>
                    <li>Employee of the Quarter (MasterControl) 2017</li>
                </ul>
            </section>

            <section id="portfolio">
                <h1>Portfolio of Projects</h1>
                <p><a href="https://github.com/jvdub/">GitHub</a></p>
            </section>

            <section id="references">
                <h1>References and Testimonials</h1>
                <table id="references-table" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>E-mail Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- References will be inserted using JS -->
                    </tbody>
                </table>
            </section>

            <section id="contact">
                <h1>Contact</h1>
                <?php
                try {
                    function get_db_connection() {
                        // mysql -u millersummer2020 -p -h mysql.slccwebdev.com millersummer20
                        $servername = 'mysql.slccwebdev.com';
                        $database = 'millersummer20';
                        $username = 'millersummer2020';
                        $password = 'SLCCMillerSummer2020';
                        $connection;

                        try {
                            $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            print 'Connected Successfully<br>';
                        } catch (PDOException $e) {
                            print 'Connection failed';
                            print $e->getMessage();
                        }

                        return $connection;
                    }

                    function recordContactInformation() {
                        $connection = get_db_connection();
                    }

                    function cleanData($data) {
                        $data = htmlspecialchars($data);
                        $data = trim($data);
                        $data = stripslashes($data);

                        return $data;
                    }

                    $name = "";
                    $nameErr = "";
                    $email = "";
                    $emailErr = "";
                    $phone = "";
                    $phoneErr = "";
                    $reasonForContacting = "";
                    $reasonForContactingErr = "";
                    $comment = "";
                    $successMessage = '';

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (empty($_POST["name"])) {
                            $nameErr = "The name field is required!";
                        } else {
                            $name = cleanData($_POST["name"]);

                            if (preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $name)) {
                                echo $name;
                            } else {
                                $nameErr = "Please enter a valid name!";
                            }
                        }

                        if (empty($_POST["email"])) {
                            $emailErr = "The email field is required!";
                        } else {
                            $email = cleanData($_POST["email"]);

                            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                echo $email;
                            } else {
                                $emailErr = "Please enter a valid email address!";
                            }
                        }

                        if (!empty($_POST["phoneNumber"])) {
                            $phone = cleanData($_POST["phoneNumber"]);

                            if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
                                echo $phone;
                            } else {
                                $phoneErr = "Please enter a valid phone number!";
                            }
                        }

                        if (empty($_POST["reasonForContacting"])) {
                            $reasonForContactingErr = "The reason for contacting field is required!";
                        } else {
                            $reasonForContacting = cleanData($_POST["reasonForContacting"]);
                            echo $reasonForContacting;
                        }

                        if (!empty($_POST["comment"])) {
                            $comment = cleanData($_POST["comment"]);
                        }

                        if (!empty($name) && !empty($email) && !empty($reasonForContacting)) {
                            recordContactInformation();

                            $to = 'jtvanwage@gmail.com,jvanwa43@slcc.edu';
                            $subject = 'You Have a New Contact!';

                            if ($reasonForContacting === 'reference') {
                                $subject = 'You Have Someone Willing to be Your Reference!';
                            } elseif ($reasonForContacting === 'testimonial') {
                                $subject = 'You Have a New Testimonial!';
                            } elseif ($reasonForContacting === 'workRequest') {
                                $subject = 'You Have a New Request for Work!';
                            }

                            $headers = "From: ".$email."\r\n";
                            $headers .= "Reply-To: ".$email."\r\n";

                            $emailBody = $name.' has contacted you via your resume site! Their contact information is as follows:\r\n'
                                .'Name: '.$name.'\r\n'
                                .'Email: '.$email.'\r\n'
                                .'Phone Number: '.$phone.'\r\n'
                                .'Reason For Contacting: '.$reasonForContacting.'\r\n'
                                .'Comment: '.$comment.'\r\n';

                            if (mail($to, $subject, $emailBody, $headers)) {
                                $headers = "From: ".$to."\r\n";
                                $headers .= "Reply-To: ".$to."\r\n";

                                if (mail($email, 'Thank You For Your Contact Information!', 'Thank you for sending your information! I will contact you soon.', $headers)) {
                                    $successMessage = 'Thank you for your contact information!';
                                } else {
                                    // Something broke
                                }
                            } else {
                                // Something broke
                            }
                        }
                    }

                    recordContactInformation();
                } catch (Exception $e) {
                    echo $e;
                }
                ?>
                <form method="POST" id="form" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div class="row">
                        <div class="col-md form-group">
                            <label for="name">
                                Name:
                            </label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                            <?php
                            echo '<p class="invalid">'.$nameErr.'</p>';
                            ?>
                            <div class="alert alert-danger fade" role="alert" id="name-alert">
                                Please enter your full name.
                            </div>
                        </div>
                        <div class="col-md form-group">
                            <label for="email">
                                Email:
                            </label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="email@email.com" required>
                            <?php
                            echo '<p class="invalid">'.$emailErr.'</p>';
                            ?>
                            <div class="alert alert-danger fade" role="alert" id="email-alert">
                                Please enter a valid email address.
                            </div>
                        </div>
                        <div class="col-md form-group">
                            <label for="phone-number">
                                Phone Number:
                            </label>
                            <input type="text" id="phone-number" name="phoneNumber" class="form-control" placeholder="800-555-1234">
                            <?php
                            echo '<p class="invalid">'.$phoneErr.'</p>';
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <p>Reason for contacting:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="reasonForContacting" id="reasonForContacting1" value="reference" required>
                                <label class="form-check-label" for="reasonForContacting1">
                                    Reference
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="reasonForContacting" id="reasonForContacting2" value="testimonial" required>
                                <label class="form-check-label" for="reasonForContacting2">
                                    Testimonial
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="reasonForContacting" id="reasonForContacting3" value="workRequest" required>
                                <label class="form-check-label" for="reasonForContacting3">
                                    Request Services
                                </label>
                            </div>
                            <?php
                            echo '<p class="invalid">'.$reasonForContactingErr.'</p>';
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <label>
                                Comments:
                                <textarea id="comment" name="comment" class="form-control" rows="5" cols="75" maxlength="280"></textarea>
                            </label>
                        </div>
                    </div>
                    <input id="submit" type="submit" name="submit" class="btn btn-primary">
                    <?php echo $successMessage; ?>
                </form>
            </section>
        </div>

        <footer>
            <div class="container">
                <a href="https://www.linkedin.com/in/john-van-wagenen/">LinkedIn</a>
                <a href="../De-Blame Collusion_1.1.pdf">Resume</a>
            </div>
        </footer>
    </div>

    <div class="modal fade" id="getUserName" tabindex="-1" role="dialog" aria-labelledby="getUserNameLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="getUserNameLabel">Hello World! (from 6ft away)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="greetingName">Please enter your name:</label>
                    <input type="text" id="greetingName">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="greetUser();">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="greetUser" tabindex="-1" role="dialog" aria-labelledby="greetUserLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="greetUserLabel">Hello World! (from 6ft away)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p><span id="message">Hi</span>, <span id="userName"></span>! Thank you for reviewing my resume site.</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/myJavaScript.js"></script>
</body>
</html>
<?php } catch (Exception $e) {
    echo $e;
} ?>

<!--  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" -->