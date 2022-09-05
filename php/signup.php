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
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon.png">
    <h1 style="display:none;">ypakp</h1>
    <title>Εγγραφή</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/templatemo-grad-school.css">
    <link rel="stylesheet" href="../css/owl.css">
    <link rel="stylesheet" href="../css/lightbox.css">
	<link rel="stylesheet" href="../css/signup.css">
	
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/signup.css">
	<link rel="stylesheet" href="../css/index.css">
	
	
	<link rel="stylesheet" href="../css/modos_arxiki.css">
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
          <li class="breadcrumb-item active" aria-current="page">Εγγραφή</li>
        </ol>
      </nav>
    </div>

  

  

      <div class="tab-content" id="myTabContent">
     

  
        <div class="tab-pane fade show active" id="signup" role="tabpanel" aria-labelledby="student-tab">
        <form class="signupform" id="student-tab" action="insert_user.php" method="post" novalidate>
          <div class="container" id="cont">
          <h1 style="display:none;">ypakp</h1>
          <h2 style="display:none;">ypakp</h2>
            <h3 >Εγγραφή</h3>
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="hidden" id="signup" name="username" value="0">
                  <label for = "username">Όνομα Χρήστη</label>
                  <input type="text" id="username" name="username" class="form-control" name="username" maxlength="16" placeholder="Όνομα Χρήστη *" required>
                  <div class="invalid-feedback">Εισάγετε όνομα χρήστη</div>
                </div>
                <div class="form-group">
                  <label for="pass">Κωδικός</label>
                  <input type="password" id="pass"class="form-control required" name="password" maxlength="128" placeholder="Κωδικός *"  required>
                  <div class="invalid-feedback">Εισάγετε Κωδικό</div>
                </div>
				

                <div class="form-group">
                  <label for="persona">Είμαι...</label>
                  <select id="persona" name="persona" class="form-control">
                    <option value="employer">Εργοδότης</option>
                    <option value="employee">Εργαζόμενος</option>
                    <option value="None">Άλλο</option>
                  </select>
                </div>
				
			
             
                <div class="form-group">
                  <label for="name">Όνομα</label>
                  <input class="form-control" id= "name" name="name" maxlength="32" placeholder="Όνομα *"required>
                  <div class="invalid-feedback">Εισάγετε Όνομα</div>
                </div>
				
				 <div class="form-group" id ="company_AFM" name = "company_AFM">
                  <label for="company_AFM">ΑΦΜ Εταιρείας</label>
                  <input type="text" id="company_AFM" name = "company_AFM" class="form-control"   onkeydown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" maxlength="9" minlength="9" placeholder="ΑΦΜ Εταιρείας *" required>
           
                </div>
				
				<div class="form-group" id ="employer_AFM" name = "employer_AFM">
                  <label for="employer_AFM">ΑΦΜ Εργοδότη</label>
                  <input type="text" id="employer_AFM" name = "employer_AFM" class="form-control"  onkeydown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" maxlength="9" minlength="9" placeholder="ΑΦΜ Εργοδότη *" required>
           
                </div>
               
                <div class="custom-control custom-checkbox mb-3 form-group">
                  <input type="checkbox" class="custom-control-input"  id="customCheck1" required>
                  <label class="custom-control-label" for="customCheck1">Αποδέχομαι τους όρους χρήσης</label>
                </div>
              </div>
              <div class="col-md-6">
			   
  
                <div class="form-group">
                  <label for="exampleInputEmail1">Ηλεκτρονική Διεύθυνση <i class="fas fa-info-circle2" data-toggle="tooltip"title="Email Ιδρύματος"></i></label>
                  <input type="email" id="exampleInputEmail1" class="form-control required email" name="email" maxlength="256" placeholder="Ηλεκτρονική Διεύθυνση *" required>
                  <div class="invalid-feedback">Εισάγετε έγκυρη Ηλ.Διεύθυνση</div>
                </div>
                <div class="form-group">
                  <label for="verify_password">Επαλήθευση Κωδικού</label>
                  <input type="password" id="verify_password" name = "password2" class="form-control" maxlength="128" placeholder="Επαλήθευση Κωδικού *" required>
                  <div class="invalid-feedback">Απαιτείται Επαλήθευση</div>
                </div>
          
                <div class="form-group">
                  <label for="exampleInputEmail2">Προσωπικό ΑΦΜ</label>
                  <input type="text" id="exampleInputEmail2" class="form-control" name="AFM" onkeydown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" placeholder="Προσωπικό ΑΦΜ *" minlength="9" maxlength="9"   required>
                  <div class="invalid-feedback">Εισάγετε ΑΦΜ</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">Επώνυμο</label>
                  <input class="form-control" id="exampleInputEmail3" name="surname" maxlength="64" placeholder="Επώνυμο *" required>
                  <div class="invalid-feedback">Εισάγετε Επώνυμο</div>
                </div>
            </div>
            <div class="container col-md-3 signup-btn">
              <input class="btn btn-lg btn-primary btn-block" style="background-color:rgb(0, 100, 255)" type="submit" value="Εγγραφή">
              <div class="signup-help align-items-center text-center">
                <a href="./signin.php" style="color:rgb(110, 105, 110)">Έχετε ήδη λογαριασμό ;</a>
              </div>
              <div class="signup-help align-items-center text-center">
                <a href="#" style="color:rgb(110, 105, 110)">Όροι Χρήσης & Προυποθέσεις</a>
              </div>
            </div>
          </div>
        </div>
        </form>
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

    
    <!-- Modal [in case sign-up was not successful]-->
    <?php
//	include "database.php";
	$status = session_status();
	if($status == PHP_SESSION_NONE){
		//There is no active session
		session_start();
	}

    if ( isset($_GET['success'])){
        echo
        '    <div class="modal fade" id="unsuccessfulsignup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body text-center">'
                    . $_SESSION["msg"] .
                  '</div>
                  <div class="modal-footer">
                    <div class="col-md-12 text-center">
                      <button name="singlebutton" class="btn btn-sm btn-primary"data-dismiss="modal">Δοκιμάστε Ξανά</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
      }
    ?>

 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Putting the scripts at the end of the file makes our webpage load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- Search -->
    <script type="text/javascript">
      $(document).on('click','#searchbutton',function(){
        var searchvalue = $('#searchinput').val();
        window.location = "./search.php?search=" + searchvalue;
      });
    </script>


    <!-- Form validation -->
   <!--    <script type="text/javascript">

      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('signupform');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
    })();
    </script>

    <script type="text/javascript">
      $(document).ready(function () {
          $('#unsuccessfulsignup').modal('show');
      });
    </script>
	-->
	<script type="text/javascript">
$("#persona").change(function() {
  if ($(this).val() == "employer") {
	  $('#employer_AFM').hide();
    $('#company_AFM').show();
   
  } else if($(this).val() == "employee"){
   $('#company_AFM').hide();
	 $('#employer_AFM').show();
  }
  else{
	   $('#company_AFM').hide();
	   $('#employer_AFM').hide();

  }
});
$("#persona").trigger("change");

 </script>


  </body>
</html>