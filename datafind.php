<?php
    include "connect.php";
    $sql= "SELECT * FROM tatable WHERE ";
    if($_POST['name'] != ''){
        $name=$_POST['name'];
        $sql.= "name = '$name' AND";
    }
    if($_POST['course'] != ''){
        $course=(int)$_POST['course'];
        $sql.= " course = '$course' AND";
    }
    if($_POST['department'] != ''){
        $department=$_POST['department'];
        $sql.= " department = '$department' AND";
    }
    if($_POST['semester'] != ''){
        $department=$_POST['semester'];
        $sql.= " semester = '$semester' AND";
    }
    $sql=substr($sql, 0, strlen($sql)-4);
    $update = $conn->prepare($sql);
    $update->execute();
    $results = $update->fetchAll();
    $conn = null;
?>




<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rating Saved</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">rate my ta</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </nav>

 
  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">your TA list <h2/> 

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      
      <!-- Portfolio Grid Items -->
      <div>
        <!-- Portfolio Item 1 -->  
        <div>
          <div>
	     <table class="table table-striped"><br/>
	      <tr>
	        <th>Name</th>
	        <th>Course</th>
	        <th>Department</th>
	        <th>Semester</th>
	        <th>Rating</th>
	        <th>Comments</th>
	      </tr>
	   	  <?php
	      	foreach ($results as $temp){
         	 echo "<tr>";
          	 echo "<td>".$temp['name']."</td> ";
          	 echo "<td>".$temp['course']."</td> ";
         	 echo "<td>".$temp['department']."</td> ";
          	 echo "<td>".$temp['semester']."</td> ";
         	 echo "<td>".$temp['rating']."</td> ";
         	 echo "<td>".$temp['comments']."</td> ";
         	 echo "</tr>";
        	}
        ?>
    	</table>
         </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
 <!--  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      About Section Heading
      <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>

      Icon Divider
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      About Section Content
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">RATE MY TA is a free to use web-based application which can help us find the ratings and comments of the TAs we are looking for. </p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">We can aslo post TAs' ratings and comments if they are not in our system yet. It's the time now, feel free to find and rate!</p>
        </div>
      </div>

    </div>
  </section> -->

  <!-- Contact Section -->
 <!--  <section class="page-section" id="contact">
    <div class="container">

      Contact Section Heading
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>

      Icon Divider
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      Contact Section Form
      <div class="row">
        <div class="col-lg-8 mx-auto">
          To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.
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
  </section> -->

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

</body>

</html>
