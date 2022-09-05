<!DOCTYPE html>
<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}
?>
<html lang="el">
 <head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/favicon.png"> 
    <h1 style="display:none;">ypakp</h1>
    <h2 style="display:none;">ypakp</h2>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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



    <!-- Βreadcrumb -->
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./index.php">Αρχική</a></li>
          <li class="breadcrumb-item active" aria-current="page">Εργοδότες</li>
        </ol>
      </nav>
    </div>


    <!-- Content -->
    <div class="container">
      <h3>Εργοδοτες</h3>
      <div class="card-deck">
        <div class="card bg-light text-left">
          <img class="card-img-top" src="../img/anas.jpg" alt="Card image cap1">
          <div class="card-body">
            <p class="card-text">Πραγματοποιήστε τη δήλωσή για Αναστολή Σύμβασης Εργασίας.</p><br>
            <a href="contractsuspension.php" class="btn btn-primary"style="background-color:rgb(0, 100, 255)">Δήλωση Αναστολής</a>
          </div>
        </div>
        <div class="card bg-light text-left">
          <img class="card-img-top" src="../img/arsi-anas.jpg" alt="Card image cap2">
          <div class="card-body">
            <p class="card-text">Πραγματοποιήστε τη δήλωσή για την Άρση της Αναστολής Σύμβασης Εργασίας.</p><br>
            <a href="remove_contractsuspension.php" class="btn btn-primary"style="background-color:rgb(0, 100, 255)">Άρσης Αναστολής</a>
          </div>
        </div>
      </div>


    </div>


        <!-- Content 2 -->
        <div class="container">
      <div class="card-deck">
        <div class="card bg-light text-left">
          <img class="card-img-top" src="../img/statement.jpg" alt="Card image cap3">
          <div class="card-body">
            <p class="card-text">Πραγματοποιήστε τη δήλωσή για εξ' αποστάσεως Εργασία.</p><br>
            <a href="remoteworking.php" class="btn btn-primary"style="background-color:rgb(0, 100, 255)">Δήλωση τηλε-Εργασίας</a>
          </div>
        </div>
        <div class="card bg-light text-left">
          <img class="card-img-top" src="../img/arsi.jpg" alt="Card image cap4"> 
          <div class="card-body">
            <p class="card-text">Πραγματοποιήστε την δήλωσή για την Άρση της εξ' αποστάσεως Εργασίας.</p> <br>
            <a href="remove_remoteworking.php" class="btn btn-primary"style="background-color:rgb(0, 100, 255)">Άρση τηλε-Εργασίας</a>
          </div>
        </div>
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


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Search -->
    <script type="text/javascript">
      $(document).on('click','#searchbutton',function(){
        var searchvalue = $('#searchinput').val();
        window.location = "./search.php?search=" + searchvalue;
      });
    </script>


  </body>


</html>
