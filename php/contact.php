<!DOCTYPE html>
<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="../img/favicon.png">
	<h1 style="display:none;">ypakp</h1>
	<title>Επικοινωνία</title>
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

    <link rel="stylesheet" href="../css/owl.css">
    <link rel="stylesheet" href="../css/lightbox.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/index.css">
	
	<link rel="stylesheet" href="../css/modos_arxiki.css">
	<link rel="stylesheet" href="../css/tmodos.css">
    <link rel="stylesheet" href="../css/contact.css">

	
	
	<link rel="stylesheet" href="../css/main.css">


<link rel="stylesheet" href="../css/modos_arxiki.css">
	<link rel="stylesheet" href="../css/tmodos.css">
	<link rel="stylesheet" href="../css/index.css">
	

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
          <li class="breadcrumb-item active" aria-current="page">Επικοινωνία</li>
        </ol>
      </nav>
    </div>

<!--	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->




<div class="container_contact">
	<h2><span class="glyphicon glyphicon-earphone"></span> Επικοινωνία</h2></br></br>
    <div class="row">
		<div class="col-lg">
			<div class="form-group">
				<label for="name">
					Όνομα</label>
					<?php 
					if(!isset($_SESSION['id']))
						echo '<input type="name" class="form-control" id="name" placeholder="Όνομα" required="required" />';
					else
						echo '<input type="name" class="form-control" id="name" value='.$_SESSION['name'].' required="required" />';
					?>
			</div>
      		<div class="form-group">
				<label for="surname">
					Επώνυμο</label>
					<?php 
					if(!isset($_SESSION['id']))
						echo '<input type="surname" class="form-control" id="surname" placeholder="Επώνυμο" required="required" />';
					else
						echo '<input type="surname" class="form-control" id="surname" value='.$_SESSION['surname'].' required="required" />';
					?>
			</div>
			<div class="form-group">
				<label for="email">
					Email</label>
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
					</span>
					<?php 
					if(!isset($_SESSION['id']))
						echo '<input type="email" class="form-control" id="email" placeholder="email" required="required" />';
					else
						echo '<input type="email" class="form-control" id="email" value='.$_SESSION['email'].' required="required" />';
					?>
				</div>
			</div>
			<div class="form-group">
				<label for="subject">
					Θέμα</label>
				<select id="subject" name="subject" class="form-control" required="required">
					<option value="na" selected="">Θέμα</option>
					<option value="service">ο Λογαριασμός μου</option>
					<option value="suggestions">Γενικές ερωτήσεις</option>
					<option value="product">Άλλα</option>
        		</select>
      		</div>
			<div class="form-group">
			<label for="persona">
						Ιδιότητα</label>
					<select id="persona" name="persona" class="form-control" required="required">
						<option value="na" selected="">Ιδιότητα</option>
						<option value="service">Εργοδότης</option>
						<option value="suggestions">Εργαζόμενος</option>
						<option value="product">Άλλο</option>
					</select>
			</div>

			<div class="form-group">
				<label for="message">
					Το μήνυμα σας</label>
				<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
					placeholder="Μήνυμα"></textarea>
			</div>
    </div>
	</div>
	<div class="row-sm">
		<input type="submit" value="Αποστολή" style="float: right;">
	</div></br>
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

    <!-- Toggling modal in case wrong password is given -->
    <script type="text/javascript">
    $(document).ready(function () {
      $('#wrongPassModal').modal('show');
    });
    </script>

    <!-- Search -->
    <script type="text/javascript">
      $(document).on('click','#searchbutton',function(){
        var searchvalue = $('#searchinput').val();
        window.location = "./search.php?search=" + searchvalue;
      });
    </script>


  </body>
</html>