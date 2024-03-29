<?php
	session_start();
	if (isset($_SESSION['name']))
	
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company-HTML Bootstrap theme</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand">
              <a href="index.html"><h1><span>Com</span>pany</h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation"><a href="welcome.html">Home</a></li>
                  <li role="presentation"><a href="contact.html" class="active">Contact</a></li>
				  <li role="presentation"><a href="log.php">Log out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="welcome.php">Home</a></li>
        <li>WELCOME</li>
      </div>
    </div>
  </div>

  <section id="blog" class="container">
    <div class="blog">
      <div class="row">
        
          <div class="blog-item">
            <div class="row">
              <div class="col-md-3">
                <div class="entry-meta">
                  <span id="publish_date"><?php echo $_SESSION['name'];?></span>
                  <span><i class="fa fa-user"></i> <a href="#">Net Balance</a></span>
                  <span><i class="fa fa-comment"></i> <a href="viewprofile.php">View Profile</a></span>
                  <span><i class="fa fa-user"></i> <a href="#">Update Profile</a></span>
				  <span><i class="fa fa-heart"></i><a href="#">Change Password</a></span>
                </div>
				<div class="entry-meta">
                  <span id="publish_date">Transaction</span>
                  <span><i class="fa fa-user"></i> <a href="#">Add Payee</a></span>
                  <span><i class="fa fa-comment"></i> <a href="">All Payee</a></span>
                  <span><i class="fa fa-user"></i> <a href="#">Fund Transfer</a></span>
				  <span><i class="fa fa-user"></i> <a href="#">Fund Deposit</a></span>
				  <span><i class="fa fa-heart"></i><a href="#">Statement</a></span>
                </div>
              </div>

              <div class="col-md-9 blog-content">
                <a href="#"><img class="img-responsive img-blog" src="images/blog/blog1.jpg" width="100%" alt="" /></a>
                <h4>Consequat bibendum quam liquam viverra</h4>
                <p>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula
                  porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</p>
                <a class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <!--/.blog-item-->


         
          <!--/.pagination-->
        
        <!--/.col-md-8-->

           
      </div>
      <!--/.row-->
    </div>
  </section>
  <!--/#blog-->

  <footer>
    <div class="footer">
      <div class="container">
        <div class="social-icon">
          <div class="col-md-4">
            <ul class="social-network">
              <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-4">
          <div class="copyright">
            &copy; Company Theme. All Rights Reserved.
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a></div>
          </div>
        </div>
      </div>
      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>

</body>

</html>
