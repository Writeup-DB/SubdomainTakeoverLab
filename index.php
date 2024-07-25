<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description"
    content="Subdomain Takeover lab is FREE for everyone. This means here is a legal to takeover Subdomain of this website not my Personal Domain.">
  <meta name="author" content="">

  <title>Subdomain Takeover Lab by InitD Community</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

  <!-- GOOGLE Analytics -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131601403-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-131601403-1');
  </script>


</head>

<body id="page-top">

  <?php include("subdomain-data.php");?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <img src="/img/Subdomain.png" width="150" height="30" class="d-inline-block align-top"
        alt="Subdomain Takeover"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Lab">Lab Details</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">How To Play</a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <a class="dropdown-item js-scroll-trigger" href="#Rules-of-Playing">Rules & Steps of Playing</a>
              <a class="dropdown-item js-scroll-trigger" href="#calim-you-subdomain">Claim You Subdomain</a>
              <a class="dropdown-item js-scroll-trigger" href="#verification-you-subdomain">Verify Takeover</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item js-scroll-trigger" href="#donate">Donate</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Links</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item js-scroll-trigger" href="https://bugs.initd.sh/">Bug Report</a>
              <a class="dropdown-item js-scroll-trigger"
                href="https://github.com/Initd-sh/SubdomainTakeoverLab">Project</a>
              <a class="dropdown-item js-scroll-trigger"
                href="https://blog.initd.sh/others-attacks/mis-configuration/subdomain-takeover-explained/">Blog
                Post</a>
          </li>


          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Subdomain Takeover</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Practical Lab Proudly Present by <a
            href='http://www.initd.sh/#'>Initd Community</a></h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">Let's Get started</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Who we are ? (InitD Community)</h2>
          <p class="text-white-50">The name of our community would be <i> <a href="https://www.initd.sh"> initD
              </a></i>indicating a daemon process that continues running until the system is shut down. So our community
            will be the direct or indirect ancestor of all kinds of knowledge that will be shared among us. Our
            community will include sharing of knowledge through hands-on sessions, Capture the Flags(CTF) and lot more.
            The main aim of our community is to share an InfoSec Knowledge to all and motivate beginners to build
            something. It may include any open source project such as application, website etc.</p>
        </div>
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">What is Subdomain Takeover Lab?</h2>
          <p class="text-white-50">Subdomain takeover vulnerabilities occur when a subdomain (subdomain.example.com) is
            pointing to a service (e.g. Amazone S3, GitHub pages, Heroku, etc.) that has been removed or deleted. This
            allows an attacker to set up a page on the service that was being used and point their page to that
            subdomain. For example, if subdomain.example.com was pointing to a GitHub page and the user decided to
            delete their GitHub page, an attacker can now create a GitHub page, add a CNAME file containing
            subdomain.example.com, and claim subdomain.example.com.</p>
        </div>

      </div>
      <img src="img/car.png" class="img-fluid" alt="InitD Community">
    </div>
  </section>

  <!-- Projects Section -->
  <section id="Lab" class="projects-section bg-light">
    <div class="container">

      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/lab.png" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Lab Details</h4>
            <p class="text-black-90 mb-0"><b>Subdomain Takeover lab is FREE for everyone. This means here is a legal to
                takeover Subdomain of this website not my Personal Domain. hehe ;)<br>Here you'll find more than 70
                subdomain which is waiting for TAKEOVER ;)</b> </p>
            <ul>
              <li class="mb-0 text-black-60">AWS/S3.</li>
              <li class="mb-0 text-black-60">Github Page</li>
              <li class="mb-0 text-black-60">Heroku</li>
              <li class="mb-0 text-black-60">Tumblr</li>
              <li class="mb-0 text-black-60">Tilda and etc.</li>
            </ul>
          </div>
        </div>
      </div>


      <!-- Rules of Playing Section -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0" id="Rules-of-Playing">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/rules.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Rules of Playing</h4>
                <p class="mb-0 text-white-50"><b>Its Free, But you have to follow some rules for fair playing and
                    learning purpose.</b></p>
                <ul>
                  <li class="mb-0 text-white-50">Do Not use this as illegal purpose.</li>
                  <li class="mb-0 text-white-50">Once You Takeover Subdomain, You'll get a Confirmaiton E-mail. After
                    Confirmation mail Free that Subdomain for others.</li>
                  <li class="mb-0 text-white-50">Post your Screenshot on Twitter with #SDTakeoverLab #Initd and cc to
                    initd_sh</li>
                  <li class="mb-0 text-white-50">Do not Host any Advertisment,Pronography and Abusing Content on any of
                    subdomain.</li>
                </ul>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Steps Of Playing -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/tutorials.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Steps Of Playing ?</h4>
                <p class="mb-0 text-white-50">Please Follow Below Steps.
                <ul>
                  <li class="mb-0 text-white-50">Find Your Target Subdomain.</li>
                  <li class="mb-0 text-white-50"><a href="https://subdomain-takeover.tk/#calim-you-subdomain">Claim Your
                      Subdomain and Generate Unique Value. This will use as a filename in further step.</a></li>
                  <li class="mb-0 text-white-50">Once You Takeover the subdomain. Make a txt file with previous
                    generated value as a Filename and file content must be your E-Mail only.</li>
                  <li class="mb-0 text-white-50">Command Example:<br><b>echo "info@initd.sh" >
                      d1282ee66b41e66645be96937b3d6a03.txt</b> </li>
                  <li class="mb-0 text-white-50">Host this file d1282ee66b41e66645be96937b3d6a03.txt on root of
                    subdomain.</li>
                  <li class="mb-0 text-white-50"><a
                      href="https://subdomain-takeover.tk/#verification-you-subdomain">Let's Verify your Sudomain. All
                      Perfect or not.</a></li>
                  <li class="mb-0 text-white-50">Done.</li>
                </ul>
                <hr class="d-none d-lg-block mb-0 mr-0">
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>




  <!-- Claim Your Subdomain Section -->
  <section id="calim-you-subdomain" class="claim-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa fa-check fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5"><br>Claim and Get Unique Value for Your Sudomain.</h2>

          <form class="form-inline d-flex" method="POST" action="index.php#calim-you-subdomain">
            <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="subdomain-name" name="claim"
              placeholder="Enter Subdomain Name..">
            <button type="submit" class="btn btn-primary mx-auto">Claim</button>
          </form>


          <?php
              #Subdomain Unique Values array
              if(isset($_POST['claim'])){
                $subdomain = $_POST['claim'];

                $str = htmlentities($subdomain, ENT_QUOTES, "UTF-8"); //Prevent XXS 
                
                if(array_key_exists($str, $subdomain_array)){
                  echo "<br><h3 class=\"text-white mb-5\">Given Subdomain Exist in DNS record.</h3>";
                  echo "<br><h3 class=\"text-green mb-5\" style=\"color:green;font-weight: bold;\">value: ".$subdomain_array[$str]."</h3>";
                }
                else{
                  echo "<br><h3 class=\"text-white mb-5\"> Given Subdomain Not Present in DNS record<h3>";
                }
              }
              ?>
        </div>
      </div>
    </div>
  </section>





  <!-- Verification Section -->
  <section id="verification-you-subdomain" class="verify-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa fa-flag-checkered fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5"><br>Let's Verify your Sudomain have you hacked ?.</h2>


          <form class="form-inline d-flex" method="POST" action="index.php#verification-you-subdomain">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" name="email"
              placeholder="Enter your email address...">
            <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="subdomain" name="subdomain"
              placeholder="Subdomain Name...">
            <button type="submit" class="btn btn-primary mx-auto">Verify</button>
          </form>


          <?php

              function dosecure($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }

              //Get Email Address From the Response Body
              function getbody($subdomain, $PATH){
                
                $url = "http://".$subdomain.".subdomain-takeover.tk/".$PATH.".txt"; //Make Full Path of your query

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 Subdomain Takeover Lab By Agent22 (compatible; MSIE 5.01; Windows NT 5.0 )');
                curl_setopt($ch, CURLOPT_VERBOSE, 1);
                curl_setopt($ch, CURLOPT_HEADER, 1);
                $response = curl_exec($ch);

                $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
                $header = substr($response, 0, $header_size);
                $body = substr($response, $header_size);

                return $body;
              }


              //Sent Congratulation Mail
              function sentMail($email){

               	// Attacker Email Address
                $email_to = $email;
                                
                $email_subject = "Congratulation For Successfully Subdomain Takeover.";            
                               
                $email_from = "InitD Community<subdomain-lab@initd.sh>";
                  
                $email_message = "Hello Mate,\n\nWe are happy to inform that you have successfully Takeover.\nHope You Enjoyed Here.\n\nThank You\nInitD Community\n\n";
                
                // create email headers
                $headers = 'From: '.$email_from."\r\n".
                'Reply-To: '.$email_from."\r\n" .
                'X-Mailer: Subdomain Takeover Lab by InitD Community - PHP/' . phpversion();
          
                if (mail($email_to, $email_subject, $email_message, $headers)) {
                  echo "<script>alert('Email Notification Sent !!')</script>";
                }
                else {
                    echo "<script>alert('Failed to Send Email Notification.')</script>";
                }
                return true;
              }

              //Checking Subdomain Response Error Code
              function checksubdomai($subdomain, $PATH){
                
                $url = "http://".$subdomain.".subdomain-takeover.tk/".$PATH.".txt"; //Make Full Path of your query
          
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 Subdomain Takeover Lab By Agent22 (compatible; MSIE 5.01; Windows NT 5.0 )');
                curl_exec($ch);

                if (!curl_errno($ch)) {
                  
                  switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
                    case 200:  # OK
                      $success = "Congratulation For Successful TakeoVER";
                      return $http_code;
                      break;
                    default:
                      $error = 'Unexpected HTTP code: '. $http_code. "\n";
                      return $http_code;
                  }

                  return false;
                }
              }

              
                #Subdomain Unique Values array

                if(isset($_POST['email'])){

                  $subdomain = dosecure($_POST['subdomain']);
                  $email = dosecure($_POST['email']);
           
                  if(array_key_exists($subdomain, $subdomain_array)){
                   
                    $PATH = $subdomain_array[$subdomain];
                    
                    $status = checksubdomai($subdomain, $PATH);

                    if ($status == 200) {
                      $getEmail = getbody($subdomain, $PATH);
                      $secureEMail = dosecure($getEmail);

                      if (filter_var($secureEMail, FILTER_VALIDATE_EMAIL)) {

                        if ($secureEMail == $email){
                          //Do Mail to Attacker
                          sentMail($email);
                          echo "<br><h3 class=\"text-green mb-5\" style=\"color:green;font-weight: bold;\">Congratulation For Successful TakeoVER.</h3>";
                      
                        }
                        else {
                          echo "<br><h3 class=\"text-yellow mb-5\" style=\"color:yellow;font-weight: bold;\">Fetched Email and Entered Email must be same.</h3>";
                        }
                       
                      } 
                      else {
                        echo"<br><h3 class=\"text-red mb-5\" style=\"color:red;font-weight: bold;\">Fetched Response have not a valid Email address</h3>";
                      }
                    }
                    else {
                      echo "<br><h3 class=\"text-white mb-5\" style=\"color:red;font-weight: bold;\">Unexpected Things Happen !!!! Try Again Mate..</h3>";
                    }
                  }
                  else{
                    echo "<br><h3 class=\"text-white mb-5\"> Given Subdomain Not Present in DNS Record<h3>";
                  }
                }
              
              ?>
        </div>
      </div>
    </div>
  </section>



  <!-- Signup Section -->
  <section class="signup-section" id="donate">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa fa-gift fa-2x mb-2 text-white"></i>
          <h3 class="text-white mb-5">If you like our service.<br>You can Donate, In term of Sharing Knowledge,
            Contribute in our Ideas or FOSS Project and Donate for our hosting services</h3>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fab fa-twitter text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Twitter</h4>
              <hr class="my-4">
              <div class="small text-black-50"><a href="https://twitter.com/initd_sh">@initd_sh</a></div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Slack Help Channel</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="https://initd-community.slack.com/">#InitD Community</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="mailto:info@initd.sh">info@initd.sh</a>
              </div>
            </div>
          </div>
        </div>


        <div class="social d-flex justify-content-center">
          <a href="https://www.facebook.com/initd.sh" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://github.com/initd-sh" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>

      </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright 2019 &copy;<a href="https://subdomain-takeover.tk">Subdomain Takeover Lab</a> Proudly Present By <a
        href="https://initd.sh">InitD Community</a> and Design By <a href="https://touhidshaikh.com/">Touhid
        M.Shaikh</a>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
