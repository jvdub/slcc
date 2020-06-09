<?php try { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEmmerCV</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/mystyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-info">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynav">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link active" href="#home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#education">Education</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#professional experience">Professional Experience</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active"  href="#skills">Skills</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active"  href="#references">References</a>
          </li>
        <li class="nav-item">
            <a class="nav-link active"  href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" >
        <img src="Images/LondonFlowers-ming-jun-tan-o6ICDlt5_2k-unsplash.jpg" class="d-block w-100" alt="London">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <h3 class="lead">London</h3>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" >
        <img src="Images/paris-bridges-big.jpg" class="d-block w-100" alt="Paris">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <h3 class="lead">Paris</h3>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item">
        <img src="Images/SydneyNight-holger-link--alau3_kCrU-unsplash.jpg" class="d-block w-100" alt="Sydney">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <h3 class="lead">Sydney</h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<section id="home">
  <div class="container">
    <h2 class="display-1">Camille Emmer</h2>
    <h3 class="display-4">Web Designer</h3>
<!--  <p class="lead">Web Designer</p> -->
  </div>
</section>

<div class="container">
<div id="Camille's Pic">
    <img src="Images/C's nicepic.jpg"  height="250">
</div>
<br>

<section id="education">
    <h2>Education</h2>
    <div class="row">
        <div class="col">
          <h4 class="school">University of Utah</h4>
          <p class="school-subtext">BA in Music - Emphasis in Piano</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h4 class="school">Utah Valley University</h4>
            <p class="school-subtext">B.S. in Music Education</p>
        </div>
    </div>
</section>


<!-- Experience -->
<section id="professional experience">
    <h2>Professional Experience</h2>
    <div class="accordion" id="accordionExample"></div>
        <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h3>Cricut</h3>
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <h4>QA Product Analyst</h4>
                  <h5>Feb 2017- April 2020</h5>
                  <p>
                    Hardware testing of new tools to proactively identify issues and ensure new products are market-ready.
                    Collaborate with engineers on maintaining Material Table with new and current materials and settings.
                    Liasion with developers and software engineers to ensure they have a comprehensive understanding of product and user issues.
                  </p>
                  <ul>
                      <li><strong>New Tool Testing Skills:</strong> Included live testing, material setting, theta-bias testing to ensure
                          product managers and engineers have confidence in product readiness. Completed successful test and
                          launch of these new tools: Perforation Wheel Family Testing(Basic Wheel, Stitching Wheel, and Dot Wheel),
                          Wavy Wheel, and Debossing Tool.
                      </li>
                      <li><strong>New Product Testing, Validation, and Disovery Skills:</strong> Blade offset testing, force-curve testing,
                        backlash testing, ovality testing, theta-bias testing. Completed successful test and launch of these new products:
                        Cupid, Maker, Lock Hubs.
                      </li>
                      <li><strong>Material testing:</strong> Participated in identifying material settings appropriate for
                        new tools and products.
                      </li>
                      <li><strong>Mentorship and Training:</strong> Provided overview of responsibilities, systems,
                      answered questions to expedite training of temps and new hires in QA.
                      </li>
                      <li><strong>Cross-departmental Collaboration:</strong> Facilitate relationships across teams via active
                      participation in company activities and programs.
                      </li>
                      <li><strong>Mentorship and Training:</strong> Provided overview of responsibilities, systems,
                      answered questions to expedite training of temps and new hires in QA.
                      </li>
                      <li><strong>New Hire Onboarding:</strong> Successfully integrated five new members in the Cricut Family
                      via "wingman" responsibilities
                      </li>
                      <li><a href="https:www.cricut.com">Cricut</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <h3>Cementation</h3>
                    </button>
                  </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                        <h4>Purchasing Agent</h4>
                         <h5>Feb 2015- Feb 2017</h5>
                         <p>Primarily responsible for supporting  the Procurement deparmtent and secondarily supporting
                           office administration.</p>
                           <ul>
                             <li><strong>Procurement Support:</strong> Accounts receivable responsibilities including charge
                            reconciliation for fuel use and other sources, securing management approval for purchases,
                          and, and submitting payments for timely payments. </li>
                          <li><strong>Operations Support:</strong> Coordinated with national rental car companies to support
                          regional office staff in logistics of daily vehicle rentals. Supported lease agreement renewal, confirming continued
                        need of ongoing vehicle rentals, car functionality and status, and car rotation. </li>
                        <li><strong>Vendor Liasion:</strong> Vendor Liasion for bids and payments, creating purchase orders, receiving shipments,
                        creating receipts, reconciling shipping and freight charges across multiple company locations.</li>
                        <li> <a href="https:www.Cementation.com">Cementation</a></li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <h3>Teaching Experience</h3>
                    </button>
                </h2>
            </div>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <h4>Piano All Stars- Piano Studio</h4>
              <h5>Teacher and Studio Owner</h5>
              <h6>2003-2015</h6>
              <p>The focus of my studio of K-12 students is to develop well-rounded musicians with practical
                pianos skills and a strong foundation of music knowledge and appreciation.</p>
              <ul>
                <li><strong>Teaching Experience:</strong> I create lesson plans to develop my students' musical skills
                  with an emphasis on tactical abilities, music-reading, and theoretical drills. My methodology and teaching
                  techniques range from beginning to intermediate to accomodate the diverse musical experiences and abilities
                  of each student. </li>
                <li><strong>Studio Administration:</strong> Support teaching efforts of my studio by conducting supplementary
                  learning experiences and completing administrative tasks. These responsibilities include all business elements
                  such as setting tuition fees, organizing annual calendar, creating motivational programs to encourage consistent
                  practicing.</li>
                <li><strong>Collaborative Experience:</strong> Developed partnership with Jennifer Torres Piano Studio for mutual
                benefit of both of our studios. Our combined efforts enables us to develop effective and fun Music Master classes
                to supplement teaching efforts and motivate students through music games, perfromance, and peer interaction.
                Conducted both collabortive music recitals and master classes.</li>
              </ul>
              <h5>West Jordan Middle School</h5>
              <h6>Student Teacher 2015</h6>
              <p>As a student Teacher, I taught a variety of classes, including two choir classes, an eighth grade
                beginning level choir class; and a ninth grade Concert Choir class.
                I was also given exclusive responsibility of an Introduction to Music class, which Included
                developing lesson plans, grading, parent teacher interactions, and class conduct. Although my primary focus was music, I was able to include health teaching and observation. </p>
              <li><a href="http://westjordanmiddle.org/">West Jordan Middle School</a></li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </section>
<br>
<br>

<?php
// $mySkillz = array("HTML", "CSS","Bootstrap", "JavaScript","PHP","MySQL");
$mySkillz = ["HTML", "CSS", "Bootstrap", "JavaScript", "PHP", "MySQL"];
$languages = ["HTML", "CSS"];
$coolStuff = ["JavaScript", "PHP"];
$awesomeStuff = ["Wordpress", "Photoshop"];
?>

  <div class="container">
    <Section id="skills">
      <h2>Technical Skills in PHP</h2>
      <?php
     //echo "<ul>";
     //foreach ($mySkillz as $skill) {
     //echo "<li>" . $skill . "</li>";
     // }
     // echo "</ul>";
      ?>
     <ul>
      <?php  foreach ($mySkillz as $skill) { ?>
        <li><?php  echo $skill ?> </li>
     <?php  } ?>
      </ul>
    </section>
  </div>
    <div class="container">
          <section id="skills">
       <ul class="row">
          <li class="col-md">Languages (To be Certified)
        <ul>
      <?php  foreach ($languages as $languages) { ?>
        <li><?php  echo $languages ?></li>
     <?php  } ?>
      </ul>

        <li class="col-md">Cool Stuff (To be Certified)
        <ul>
      <?php  foreach ($coolStuff as $coolStuff) { ?>
        <li><?php  echo $coolStuff ?></li>
     <?php  } ?>
      </ul>
      </li>

        <li class="col-md">Awesome Stuff (To be Certified)
          <ul>
      <?php  foreach ($awesomeStuff as $awesomeStuff) { ?>
        <li><?php  echo $awesomeStuff ?></li>
     <?php  } ?>
      </ul>

          </ul>
     </section>

<br>

      <section id="references">
          <h2>References and Testimonials</h2>
          <table id="references-table" class="table table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Phone Number</th>
              <th>Email Address</th>
            </tr>
          </thead>
        <tbody>
    <!---References will be inserted-->
        </tbody>
      </table>
  </section>

  <Section id="contact">
      <h2>Contact</h2>
      <?php
          try {
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
      if(empty($_POST["name"])) {
        $nameErr = "The name field is required!";
      } else {
        $name = cleanData($_POST["name"]);

        if(preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $name)) {
          echo $name;
        } else {
          $nameErr = "Please enter a valid name!";
        }
      }

      if(empty($_POST["email"])) {
        $emailErr = "The email field is required!";
      } else {
        $email = cleanData($_POST["email"]);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo $email;
        } else {
          $emailErr = "Please enter a valid email address!";
          }
      }

      if(empty($_POST["phoneNumber"])) {
        $phoneErr = "The phone field is required!";
      } else {
          $phone = cleanData($_POST["phoneNumber"]);

        if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
          echo $phone;
        } else {
          $phoneErr = "Please enter a valid phone number!";
          }
      }

      if(empty($_POST["reasonForContacting"])) {
        $reasonForContactingErr = "The Reason for contacting field is required!";
      } else {
        $reasonForContacting = cleanData($_POST["reasonForContacting"]);
        echo ($_POST["reasonForContacting"]);
      }

        if (!empty($_POST["comment"])) {
          $comment = cleanData($_POST["comment"]);
        }


        if (!empty($name) && !empty($email) && !empty($reasonForContacting)) {
            $to = 'camilleemmer@gmail.com, janaemmer@gmail.com';
            $subject = 'You Have a New Contact!';

            if ($reasonForContacting ==='reference') {
              $subject = 'You have Someone Willing to be Your Reference!';
            } elseif ($reasonForContacting === 'testimonial') {
              $subject = 'You have a New Testimonial';
            } elseif ($reasonForContacting === 'workRequest') {
              $subject = 'You have a New Request for Work!';
            }

            $headers = "From: ".$email."\r\n";
            $headers .= "Reply-To: ".$email."\r\n";

            $emailBody = $name. 'Has contacted you via your resume site! Their contact information is as follows:\r\n'
              .'Name: '.$name. '\r\n'
              .'Email: '.$email. '\r\n'
              .'Phone Number: '.$phone.'\r\n'
              .'Reason for Contacting: '.$reasonForContacting.'\r\n'
              .'Comment: '.$comment.'\r\n';

            if (mail($to, $subject, $emailBody, $headers));
              $headers = "From: ".$to."\r\n";
              $headers .= "Reply-To:".$to."\r\n";

              if (mail($email, 'Thank You for Your Contact Information!', 'Thank You for sending your information! I will contact you soon.', $headers)) {
                $successMessage ='Thank you for your contact information!';
              } else {
                // Something broke
           }
         } else {
             // Something broke
         }
      }
      } catch (Exception $e) {
        echo $e;
      }
      ?>

      <form method="POST" id="form" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="row">
              <div class="col-md form-group">
                 <label for="name">
                    Name:
                  </label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
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
            <input type="text" id="email" name="email" class="form-control" placeholder="email@email.com" required>
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
        <input type="text" id="phone-number" name="phoneNumber" class="form-control" placeholder="XXX-XXX-XXXX" required>
        <?php
                echo '<p class="invalid">'.$phoneErr.'</p>';
            ?>
      </div>
    </div>
    <div class="row">
      <div class="col form-group">
          <h5><b>Reason for Contacting</b></h5>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="reasonforContacting" id="reasonforContacting1" value="reference" required>
            <label class="form-check-label" for="reasonforContacting1">
                Reference
              </label>
          </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="reasonforContacting" id="reasonforContacting2" value="testimonial" required>
            <label class="form-check-label" for="reasonforContacting2">
                Testimonal
             </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="reasonforContacting" id="reasonforContacting3" value="workrequest" required>
            <label class="form-check-label" for="reasonforContacting3">
                Request Service
            </label>
        </div>
        <?php
           echo '<p class="invalid">'.$reasonForContactingErr.'</p>';
            ?>
      </div>
  </div>
<br>
  <div class="row">
    <div class="col form-group">
        <label>
            Comments:
            <textarea  id="comments" name="comments" class="form-control" rows="3" cols="70" maxlength="280"></textarea>
        </label>
      </div>
  </div>
  <input id="submit" type="submit" name="submit"  class="btn btn-info">
  <?php echo $successMessage; ?>
    </form>
  </Section>
</div>

<br>
 <div class="container">
</div>

</div>


<div class="modal fade" id="getUserName"  tabindex="-1" role="dialog" aria-labelledby="getUserName" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="getUserNameLabel">Hello World! (from 6ft away)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="greetingName">Please Enter Your Name:</label>
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/myJavaScript.js"></script>
</body>
</html>
<?php } catch (Exception $e) {
    echo $e;
} ?>