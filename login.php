<?php
require_once("support.php");
include "connect.php";
$topPart = <<<EOBODY
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">rate my ta</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Find Or Rate</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">rate my ta</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Find and Rate</p>

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">


      <!-- Portfolio Grid Items -->
      <div class="row">
        <!-- Portfolio Item 1 -->
        <div class="col-md-6 col-lg-6">
          <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Log in</h2>
          <form method="POST" action="{$_SERVER['PHP_SELF']}"> <!super gobal variable>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Username: </label>
              <input class="form-control" id="username" name='username' type="text" placeholder="Username" required="" oninvalid="this.setCustomValidity('Please Enter a user name')">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Password: </label>
              <input class="form-control" id="Password" name='password' type="password" placeholder="Password" required="" oninvalid="this.setCustomValidity('Please Enter a password')">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-xl" name="signInButton" value="Sign In">
            <input type="reset" class="btn btn-primary btn-xl" name="resetButton1" value="Clear">
            </div>
          </form>
        </div>

        <div class="col-md-6 col-lg-6">
          <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Sign up</h2>
          <form method="POST" action="{$_SERVER['PHP_SELF']}"> <!super gobal variable>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Username: </label>
              <input class="form-control" id="username" name='newname' type="text" placeholder="Username" required="" oninvalid="this.setCustomValidity('Please Enter a user name')">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Password: </label>
              <input class="form-control" id="password" name='newpassword' type="password" placeholder="Password" required="" oninvalid="this.setCustomValidity('Please Enter password')">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Confirm Password: </label>
              <input class="form-control" id="confirmpassword" name='confirmpassword' type="password" placeholder="Cofirm Password" required="" oninvalid="this.setCustomValidity('Please Enter comfirm password')">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-xl" name="signUpButton" value="Sign Up">
            <input type="reset" class="btn btn-primary btn-xl" name="resetButton2" value="Clear">
            </div>
          </form>
        </div>

        <!-- Portfolio Item 3 -->
      </div>
      <!-- /.row -->

    </div>
  </section>

  <!-- About Section -->
  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">RATE MY TA is a free to use web-based application which can help us find the ratings and comments of the TAs we are looking for. </p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">We can aslo post TAs' ratings and comments if they are not in our system. It's the time now, feel free to find and rate!</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">4400 University Dr
            <br>Fairfax, VA 22030</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">About Rate MY TA</h4>
          <p class="lead mb-0">RATE MY TA is a free to use web-based application created by Guanhua and Na.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; RATE MY TA 2019</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

EOBODY;

$bottomPart = "";

if (isset($_POST["signInButton"])) {
      $sql= "SELECT * FROM student WHERE ";
      $username=trim($_POST['username']);
      $sql.= " username = '$username' AND";
      $password=trim($_POST['password']);
      $sql.= " pwd = '$password' ";
      $update = $conn->prepare($sql);
      $update->execute();
      $results = $update->fetchAll();

    if (count($results) > 0){
      header("Location: ./index.html");
      exit;
    }else{
        $bottomPart.= "";
        echo '<script language="javascript">';
        echo 'alert("Your username or password is invalid")';
        echo '</script>';
        header('Location: '.$_SERVER['PHP_SELF']);
    }
}

if (isset($_POST["signUpButton"])) {
      if($_POST['newname'] == '' || $_POST['newpassword'] == ''){
        echo '<script language="javascript">';
        echo 'alert("Your user name exists or your enter wrong format of password")';
        echo '</script>';
        header('Location: '.$_SERVER['PHP_SELF']);
      }else{
        $bottomPart.= "";
        $newname=trim($_POST['newname']);
        $newpassword=trim($_POST['newpassword']);
        $sql = "INSERT INTO student (username, pwd)
          VALUES ('$newname' , '$newpassword')";
          $update = $conn->prepare($sql);
          $update->execute();
          $conn = null;
          echo '<script language="javascript">';
          echo 'alert("Your registeration is successful, now you can sign in")';
          echo '</script>';
          header('Location: '.$_SERVER['PHP_SELF']);
    }
}

$body = $topPart.$bottomPart;
$page = generatePage($body);
echo $page;
?>
