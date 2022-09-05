<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="../img/favicon.png"> 
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Covid Cases</title>
    <h1 style="display:none;">ypakp</h1>


    <link rel="stylesheet" href="../css/all.min.css" />

    <link rel="stylesheet" href="../css/templatemo-style.css" />
	

	<link rel="stylesheet" href="../css/tmodos.css">
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- CSS for font-awsome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <!-- Additional CSS Files -->

    <link rel="stylesheet" href="../css/lightbox.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/index.css">
	<link rel="stylesheet" href="../css/simptwmataa.css">
  <link rel="stylesheet" href="../css/modos_arxiki.css">
	<link rel="stylesheet" href="../css/mods.css">
	<link rel="stylesheet" href="../css/tmodos.css">
	

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
          <li class="breadcrumb-item"><a href="./covid.php">Covid-19</a></li>
          <li class="breadcrumb-item active" aria-current="page">Ύποπτα Συμπτώματα</li>
        </ol>
      </nav>
    </div>

  
  
    <div class="container-fluid">
      

      <div class="row tm-welcome-row">
        <div class="col-12 tm-page-cols-container">
          <div class="tm-page-col-left tm-welcome-box tm-bg-primary">
            <p class="tm-welcome-text">
              <em>"Πώς θα διαχειριστώ την περίπτωση που κάποιος εργαζόμενος/συνάδελφος 
                εμφανίσει συμπτώματα συμβατά με λοίμωξη COVID-19 στον εργασιακό χώρο;"</em>
            </p>
          </div>
          <div class="tm-page-col-right">
      
             <image src="../img/tilergasia.jpg" alt = "fr">
          
          
        </div>
      </div>

      <section class="row tm-pt-4 tm-pb-6">
        <div class="col-12 tm-page-cols-container">
          <div class="tm-page-col-right">
            <h2 class="tm-text-secondary tm-mb-5">
              Απαραίτητες ενέργειες σε περίπτωση εκδήλωσης των συμπτωμάτων σε εργαζόμενο
κατά τη διάρκεια εργασίας του
            </h2>
          
            <p class="mb-0" style= "text-align:none !important"> 
              Εργαζόμενος που εμφανίσει αιφνιδίως τα προαναφερόμενα συμπτώματα αναμένει σε χώρο όπου δε θα
              έρχεται σε επαφή με άλλα άτομα, ενημερώνονται ο ιατρός εργασίας (όπου υπάρχει) και ο προϊστάμενος
              όταν δεν υπάρχει ιατρός εργασίας και ειδοποιείται άμεσα ο ΕΟΔΥ ώστε να παράσχει τις απαραίτητες
              οδηγίες, οι οποίες πρέπει να ακολουθούνται πιστά. Ο χώρος όπου παρέμεινε ο εργαζόμενος πρέπει να
              καθαρίζεται και να απολυμαίνεται, μετά την αποχώρησή του, από το προσωπικό καθαριότητας, σύμφωνα
              με τις οδηγίες του ΕΟΔΥ όπως αναγράφονται στην ιστοσελίδα του (www.eody.gov.gr, ενότητα: «Οδηγίες
              για τον περιβαλλοντικό καθαρισμό μη υγειονομικών μονάδων που έχουν εκτεθεί στον ιό SARS-CoV-2»).
              Σε περιπτώσεις που είναι εφικτό, συνιστάται η εξ’ αποστάσεως εργασία
            </p>
          </div>
        </div>
      </section>

      <div class="tm-page-col-right">
        <div class="row tm-pt-7 tm-pb-6">
          <div class="col-md-6 tm-home-section-2-left">
            
          <image src="../img/antisiptiko.jpg" alt = "11" width="430" height = "375">
              
            <div>
              <h3 class="tm-text-secondary tm-mb-4">
                Γενικές οδηγίες ατομικής υγιεινής
              </h3>
              <p class="tm-mb-5">
                Το πλύσιμο και η απολύμανση των χεριών είναι ιδιαιτέρως απαραίτητα:
              </p>
              <ul class="tm-list-plus">
                <li>πριν από την επαφή με τα μάτια, τη μύτη,
                  το στόμα (φαγητό ή κάπνισμα, επίσκεψη
                  στην τουαλέτα κ.λπ.) </li>
                <li>σε κάθε περίπτωση που τα χέρια μπορεί
                  να ήλθαν σε επαφή με βιολογικά υγρά
                  (σάλιο κ.λπ.), ακόμη κι αν χρησιμοποιήθηκαν
                  γάντια.</li>
              
              </ul>
            </div>
          </div>
          <div class="col-md-6 tm-home-section-2-right">
            
          <image src="../img/vixas.jpg" alt = "12" width="460" height = "375">
            <div>
              <h3 class="tm-text-secondary tm-mb-4">
                Σε περίπτωση συμπτωμάτων...
              </h3>
              1. ενημερώνουμε τον εργοδότη ή την
              υπηρεσία μας<br>
              2. επικοινωνούμε με το θεράποντα ιατρό μας<br>
              3. επικοινωνούμε με τον ΕΟΔΥ (τηλέφωνα
              επικοινωνίας 210.52.12.054 ή 1135)<br>
              <p>
                
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- row -->

    

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

    <script src="../js/jquery.min.js"></script>
    <script src="../js/parallax.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>