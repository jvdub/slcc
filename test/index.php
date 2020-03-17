<!DOCTYPE html>
<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        

        <div class="header">
            <h1>Jonathan Martin Bean</h1>
       
        </div>
    
        <div class="clearfix">

            <div class="column menu">

                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>Portfolio</li>
                    <li>Contact</li>
                    
                    
                    
                    
                </ul>
            </div><div class="parallax"></div>

            <div style="height:1000px;background-color:black;font-size:36px">
            <div class="column content">
                <h2>Introduction:</h2>
                <p>As a Graphic Artist, a Painter, a Chef, and Photographer, over 25 years, the experiences have served
                    as a template to apply to the field of Web Design & Development. I’ve developed skills, in
                    collaboration with Artists, Developers, Chefs & Lawyers. I recognize that there is a science, and an
                    art, to building a website.It is these experiences, and an acute standard of quality, that bring a
                    lively and unique perspective to a growing industry.</p>
                <h2>Education:</h2>
                <p>Web Design & Development Program. Salt Lake Community College. 2020.Certificate of Completion.</P>
                <h2>Professional Experience:</h2>

                <p>Express Employment Professionals</p>

                <p>8649 1300 East Set 101, Sandy , Utah 84094 (801)566-5026 Tori Lima-Owner expresspros.com</P>

                <p>03 /2013 - Currently</P>
                <p>Content Migration Specialist at Instructure:</P>

                <p>Responsible for content migration , using the Learning Management System, Canvas. Duties included :
                    Importing & exporting content from antiquated systems into Canvas. Using the Rich Content Editor to
                    address any HTML/CSS issues. Building modules, quiz settings, re-configuring rubrics, validating
                    broken links, in an Apple environment. Questioned and answered migrated content, assisted new employees.
                    The team communicated closely to keep a consistent standard of quality, in an efficient manner.</P>

                <p>Famous Dave’s Bar-B-Que</P>

                <p>1166 E Fort Union Blvd, Cottonwood Heights, UT 84047 (801)566-4442 Dave Richards-General Manager
                    www.famousdaves.com</p>

                <p>10/2017-11/2018</P>

                <p>Line Cook :</P>

                <p>Responsible for the preparation & presentation of Southern Style, casual dining. Duties included:
                    grill, expediting, coordination of a high volume output, training employees, equipment maintenance.
                </P>

                <p>The Jeremy Ranch Golf & Country Club</P>

                <p>8770 Jeremy Road, Park City , Utah 84098 (435) 649-2700 Chad Pettigrew -General Manager
                    www.thejeremy.com</P>

                <p>Sous Chef:</p>

                <p>As the Sous Chef, I was responsible for the design, ordering, preparation, and presentation of a fine
                    dining menu & weekly seafood specials. I assisted the Executive Chef with the banquets & special
                    events. Duties included : sauté, flat grill, broiler, steamer, digital oven, and smoker.</P>

                <p>Robert J. Debry & Associates</P>

                <p>4252 South 700 East, Millcreek , Utah (801) 699-9999 robertdebry.com</p>

                <p>Lead Runner & Photographer:</p>

                <p>As the Lead Runner & Photographer, I supervised the filing & hand delivery of time sensitive
                    documents for a personal injury law firm. I worked directly with Attorneys & Paralegals to manage
                    every issue regarding their clients cases. I would photograph clients injuries to assist their
                    Attorney in winning their case. I interviewed & trained the staff of Runners & was a Notary Public.
                </p></div>

            </div>
            <h1>My Skills</h1></div>


            <?php 
$skills = [
    'HTML',
    'CSS',
    'Javascript',
    'Microsoft Office',
    'Adobe Photoshop',
    'Adobe Illustrator',
    'Adobe Premiere Pro',
    'PHP/MySQL'
];
print('<ul id="skills-list">');
foreach($skills as $skill){
    print('<li>'.$skill.'</li>');
}
                print('<ul>');?>
<?php
$firstNameErr = $lastNameErr = $emailErr = ";
$firstName = $lastName = $email = $comments = $successmessage = ";

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
mail('autobeanomatic@yahoo.com', 'You Had a Visitor!', 'You had a visitor!'.$firstName.' '.$lastName.' visited your site!Their email is '.$email.'.', 'FROM: jvanwa43@slcc.edu');
mail($email, 'Thanks for signing up!', 'Hello, '.$firstName.' '.$lastName.'! Thanks for visiting my site.', 'FROM: autobeanomatic@yahoo.com');
$successmessage="Message sent sucessfully";
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
<p><?php print $successmessage;?></p>



            <div class="table-container">
                    <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    1 of 2
                                </div>
                                <div class="col">
                                    2 of 2
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    1 of 3
                                </div>
                                <div class="col-md-2-one">
                                    2 of 3
                                </div>
                                <div class="col">
                                    3 of 3
                                </div>
                            </div>
                        </div>
            </div>
            <h2>References</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Tori</td>
                        <td>Lima </td>
                        <td>www.expresspros.com</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Dave</td>
                        <td>Richards</td>
                        <td>www.famousdaves.com</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Chad</td>
                        <td>Pettigrew<td/>
                        <td>www.thejeremy.com</td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <button id = "button" type="button" onclick="myFunction();">Click Me</button>
<p id="List"></p>
<p id="text"></p>

        <div class="footer">
            <p>Jonathan Bean</p>
            <p>1802 East Ida Circle, Sandy, Utah 84093
            <p>(801) 518-7944</P>
            <p>autobeanomatic@yahoo.com</p>
        </div>

        <button id="hide">Hide</button>
        <button id="show">Show</button>    

<script>

   
    let languages, text, lLen, i;
    languages = ["HTML", "CSS", "Javascript", "PHP", "MySQL"];
    lLen = languages.length;

    text = "<ul>"
    for (i = 0; i < lLen; i++) {
        text += "<li>" + languages[i] + "</li>";
    }
    text += "</ul>";

    document.getElementById("List").innerHTML = text;

    function getMessage() {
        var date = new Date();
        var hour = date.getHours();
    if (hour >= 5 && hour <= 12) {
        return "Good Morning!";
    }
    else if (hour > 12 && hour < 18) {
        return "Good Afternoon!";
    }
        return "Good Evening";
}
   function myFunction() {
var welcomeMessage = getMessage();
 var welcome = prompt("Please enter your name:");
 var  txt;
 if (!welcome){
    txt = "maybe next time?";
} else {
    txt = welcomeMessage + "Thank you for signing up! Your email is" + welcome;
}
 document.getElementById("text").innerHTML = txt;
   }

</script>

<div class="parallax"></div>
</body>
</html>
