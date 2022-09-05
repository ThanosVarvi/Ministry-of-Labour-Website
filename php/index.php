<!DOCTYPE html>
<html lang="el">

<?php
      session_start();
      if ( isset($_GET['success'])){
        echo
        '    <div class="modal fade" id="signupsuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body text-center">'

                  .$_SESSION['msg'].

                  '</div>
                  <div class="modal-footer">
                    <div class="col-md-12 text-center">
                      <button name="singlebutton" class="btn btn-sm btn-success"data-dismiss="modal">Συνέχεια</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
      }
    ?>


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="../img/favicon.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- CSS for font-awsome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Our custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css2/main.css">
	<!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/templatemo-grad-school.css">
    <link rel="stylesheet" href="../css/owl.css">
    <link rel="stylesheet" href="../css/lightbox.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/index.css">
	
	<link rel="stylesheet" href="../css/modos_arxiki.css">
	<link rel="stylesheet" href="../css/tmodos.css">
	
	
	
    <title>Υπουργείο Εργασίας</title>

  </head>

  <body>
  

	 <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="./index.php"><em>ΥΠΟΥΡΓΕΙΟ ΕΡΓΑΣΙΑΣ ΚΑΙ ΚΟΙΝΩΝΙΚΩΝ ΥΠΟΘΕΣΕΩΝ</em></a>
    </div>
	
	<div class="search_bar">
	<label for="search_bar" style="display:none;">search_bar</label>
	  <input type="text" name="search_bar"  id ="search_bar" placeholder="Αναζήτηση...">
	</div>
	
    
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
		
		<?php
		if ( isset( $_SESSION['id'] ) ) {
			echo
			'
			<li class="has-submenu"><a href="./user_profile.php">Το προφίλ μου</a>
			  <ul class="sub-menu">
				<li><a href="./signout.php">Αποσύνδεση</a></li>
			  </ul>
			</li>
			 ';
		}
		else{
			echo'
				<li><a href="./signup.php">Εγγραφη</a></li>
				<li><a href="./signin.php">Συνδεση</a></li>
			';
		}
		?>
        <li><a href="./underconstruction.php"><u><small>English</small></u></a></li>
      </ul>
    </nav>
  </header>

    <!-- Second navbar -->
<div class="container justify-content-center">
      <nav class="navbar navbar-expand-lg justify-content-center" id="SecondNavbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav">
          <li class="nav-item">
            <a class="btn btn-outline-secondary" href="index.php" role="button">Αρχική</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-outline-secondary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Covid-19
              </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a class="dropdown-item" href="metra.php">Οδηγίες και Μέτρα Πρόληψης</a>
				<a class="dropdown-item" href="simptwmataa.php">Διαχείριση Ύποπτων Συμπτωμάτων</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Εργαζόμενοι
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a class="dropdown-item" href="./leave.php">Αίτηση Άδειας Ειδικού Σκοπού</a>
                <a class="dropdown-item" href="./worker.php">Πληροφορίες Εργαζομένων</a>
			  </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Εργοδότες
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a class="dropdown-item" href="contractsuspension.php">Δήλωση Αναστολής Εργασίας</a>
				        <a class="dropdown-item" href="remoteworking.php">Δήλωση Εργαζομένου Εξαποστάσεως Εργασίας</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-secondary" href="contact.php" role="button">Επικοινωνία</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Χρήσιμες Συνδέσεις
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                 <a class="dropdown-item" href="http://www.mindev.gov.gr/">Υπουργείο Ανάπτυξης</a>
                <a class="dropdown-item" href="https://www.moh.gov.gr/">Υπουργείο Υγείας</a>
			        </div>
            </div>
          </li>
                
            
        </ul>
      </nav>
      <hr>
</div>


  

<div class="container justify-content-center">
    <!-- Content -->
	 <div class="card-deck">
	  <div class="col-md-6">
		<a href="covid.php" class="card zoom">
		  <img class="card-img-top" src="../img/covid.jpg" alt="Image not found" height="365">
		  <div class="card-img-overlay">
			<h1 class="card-title text-left" id="student"><span class="span_header" style=" background-color:rgba(22,34,57,0.5);">Covid-19</span></h1>
		  </div>
		</a>
	  </div>
	  <div class="col-md-6">
		<div class="row">
		  <a href="employer.php" class="card zoom">
			<img class="card-img-top" src="../img/publisher.jpg" alt="Image1 not found" height="180">
			<div class="card-img-overlay">
			  <h2 style="display:none">ok</h2>
			  <h3 class="card-title text-center" id="publisher-photo"><span style=" background-color:rgba(22,34,57,0.5);">Εργοδότες</span></h3>
			</div>
		  </a>
		  <a href="info.php" class="card zoom">
			<img class="card-img-top" src="../img/time.jpg" alt="Image2 not found" height="180">
			<div class="card-img-overlay">
			  <h4 class="card-title text-center" id="secretary-photo"><span style=" background-color:rgba(22,34,57,0.5);">Υπηρεσίες & Ωράρια</span></h4>
			</div>
		  </a>
		</div>
		<div class="row">
		  <a href="employee.php" class="card zoom">
			<img class="card-img-top" src="../img/distribution_point.png" alt="Image3 not found" height="180">
			<div class="card-img-overlay">
			  <h3 class="card-title text-center" id="library-photo"><span style=" background-color:rgba(22,34,57,0.5);">Εργαζόμενοι</span></h3>
			</div>
		  </a>
		  <a href="contact.php" class="card zoom">
			<img class="card-img-top" src="../img/secretaries.jpg" alt="Image4 not found" height="180">
			<div class="card-img-overlay">
			  <h3 class="card-title text-center" id="point-photo"><span style=" background-color:rgba(22,34,57,0.5);">Επικοινωνία</span></h3>
			</div>
		  </a>
		</div>
	  </div>
	</div>
		
</div>

<div class="container justify-content-center">
	<div class="row lefter">
        <div class="col-md-4">
          <div class="card bg-light" style="width: 18rem;height: 23rem">
            <div class="card-header">Ανακοινώσεις</div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="../img/extra_time.jpg" alt="First slide" width="534" height="200">
                  <a href="#">
				    <h4 style="display:none">ok</h4>
                    <div style="background-color: black;opacity: 0.6;" class="carousel-caption d-none d-md-block">
                      <h5>Παράταση Δηλώσεων</h5>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../img/signup_error.png" alt="Second slide" width="534" height="200">
                  <a href="#">
                    <div style="background-color: black; opacity: 0.6;" class="carousel-caption d-none d-md-block">
                      <h5>Προβλήματα Εγγραφής Χρήστη</h5>
                    </div>
                  </a>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../img/androidapp.png" alt="Second slide" width="534" height="200">
                  <a href="#">
                    <div style="background-color: black;opacity: 0.6;" class="carousel-caption d-none d-md-block">
                      <h5>Εφαρμογή Android Ypakp</h5>
                    </div>
                  </a>
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
            </div>
            <div class="card-body">
              <p class="card-text">Κάντε κλικ για περισσότερα</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card bg-light text-center" style="width: 18rem;height: 23rem">
            <img class="card-img-top" src="../img/book.jpg" alt="Image5 not found">
            <div class="card-body">
              <h5 class="card-title">Ραντεβού</h5>
              <p class="card-text">Κλείστε Ραντεβού για να μας επισκεφτείτε.</p>
              <a href="appointment.php" class="btn btn-primary" style="background-color:rgb(0, 100, 255)">Κλείστε Ραντεβού</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card bg-light text-center" style="width: 18rem;height: 23rem">
            <img class="card-img-top" src="../img/as-foreis.jpg" alt="Image6 not found" width="210" height="195">
            <div class="card-body">
              <h5 class="card-title">Ασφαλιστικοί Φορείς</h5>
              <p class="card-text">Μπορείτε να αναζητήσετε Πληροφορίες για τους Ασφαλιστικούς φορείς</p>
              <a href="#" class="btn btn-primary" style="background-color:rgb(0, 100, 255)">Αναζήτηση</a>
            </div>
          </div>
        </div>


        <hr>
	</div>
</div>


<div class="container justify-content-center">
    <!-- Footer -->
	<h2 style="display:none;">ypakp</h2>
	<h3 style="display:none;">ypakp</h3>
	<h4 style="display:none;">ypakp</h4>
	<h5 style="display:none;">ypakp</h5>
	<footer class="page-footer font-small blue pt-4 bg-light">
		<div class="container-fluid text-center text-md-left">
			<div class="row justify-content-center align-items-top">
				<div class="col-md-3 mb-md-0 mb-3">
					<h6>Επικοινωνία</h6>
					<ul class="list-unstyled">
						<li>
							<br><i class="fas fa-phone-square"></i> Τηλέφωνo : 213-151649
						</li>
						<li>
							<i class="fas fa-envelope"></i> E-mail 1: prosopiko@ypakp.gr<br>    
							
						</li>
						<li>
							<i class="fas fa-envelope"></i> E-mail 2: organosi@ypakp.gr<br>    
							
						</li>
						
			
					</ul>
				</div>

				 <hr class="clearfix w-100 d-md-none pb-3">

					<div class="col-md-3 mb-md-0 mb-3">
						<h6>Χρήσιμα</h6>
						<ul class="list-unstyled">
							<li>
							<br><i class="fas fa-info-circle"></i> Εγχειρίδια Χρηστών
							</li>
							<li>
							<i class="fas fa-question-circle"></i> Συχνές Ερωτήσεις
							</li>
							<li>
							<i class="fab fa-youtube"></i> Βίντεο
							</li>
						</ul>
					</div>
					
					<div class="col-md-3 mb-md-0 mb-3">

						 <h6>Ακολουθήστε μας</h5>
						 <ul class="list-unstyled">
						   <li>
							 <br><i class="fab fa-facebook-square"></i> Facebook
						   </li>
						   <li>
							 <i class="fab fa-twitter-square"></i> Twitter
						   </li>
						   <li>
							 <i class="fab fa-linkedin"></i> LinkedIn
						   </li>
						 </ul>

					</div>
			</div>
		</div>
		<div class="footer-copyright text-center py-3">© 2021 Copyright:
			<a href="index.php">ypakp.gr</a>
		</div>
	</footer>
</div><!--container-->


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Putting the scripts at the end of the file makes our webpage load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function () {
          $('#signupsuccess').modal('show');
      });
    </script>

    <!-- Search -->
    <script type="text/javascript">
      $(document).on('click','#searchbutton',function(){
        var searchvalue = $('#searchinput').val();
        window.location = "website/php/search.php?search=" + searchvalue;
      });
    </script>

  </body>

</html>
