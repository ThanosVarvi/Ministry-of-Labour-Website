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
    <h1 style="display:none;">ypakp</h1>
    <link rel="icon" href="../img/favicon.png">    

    <title>Ραντεβού</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/templatemo-grad-school.css">
    <link rel="stylesheet" href="../css/owl.css">
    <link rel="stylesheet" href="../css/lightbox.css">
	
	
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<link rel="stylesheet" href="../css/index.css">
	
	
	<link rel="stylesheet" href="../css/modos_arxiki.css">
	<link rel="stylesheet" href="../css/tmodos.css">
	<link rel="stylesheet" href="../css/appointment.css">
	


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
          <li class="breadcrumb-item active" aria-current="page">Κλείσιμο Ραντεβού</li>
        </ol>
      </nav>
    </div>
 
  <?php 
  

     ?>
        <form class="signupform" action="insert_user.php" method="post" novalidate>
          <div class="container app" id="cont_app">
			  <h1>Κλείσιμο Ραντεβού</h1>
              <form class="appointment_form"  method="post" novalidate>
		
		<?php 
		
		if(isset($_SESSION['id']))
		{
			echo'<label for="fname">Όνομα</label> <input type="text" id="fname" name="firstname" placeholder="" value='.$_SESSION['name'].' readonly >';
			echo'<label for="lname">Επίθετο</label> <input type="text" id="lname" name="lastname" placeholder="" value='.$_SESSION['surname'].' readonly >';
			echo'<label for="id">ΑΦΜ</label> <input type="text" id="id" name="lastname" placeholder="" value='.$_SESSION['id'].' readonly>';
		}
		else
		{
			echo '<label for="fname">Όνομα</label> <input type="text" id="fname" name="firstname" placeholder="" >';
			echo '<label for="lname">Επίθετο</label> <input type="text" id="lname" name="lastname" placeholder="" >';
			echo'<label for="id">ΑΦΜ</label> <input type="text" id="id" name="lastname" placeholder="">';
		}
		
		
		?>
		<label for="email">e-mail</label>
		<input type="text" id="email" name="lastname" placeholder="">
		
<?php 

		if(isset($_SESSION['id']))
		{
		
			if($_SESSION['persona']=="employer")
			{
				echo'
				
				 <div class="form-group">
					<label for="persona">Είμαι...</label>
					<select class="form-control" id="persona" name="persona" >
					  <option value='.$_SESSION['persona'].'>Εργοδότης</option>
					  
					</select>
				</div>';
			}
			else if($_SESSION['persona']=="employee")
			{
				echo'
				
				 <div class="form-group">
					<label for="persona">Είμαι...</label>
					<select class="form-control" id="persona" name="persona" >
					  <option value='.$_SESSION['persona'].'>Εργαζόμενος</option>
					  
					</select>
				</div>';
			}
			else
			{
				echo'
				
				 <div class="form-group">
					<label for="persona">Είμαι...</label>
					<select class="form-control" id="persona" name="persona" >
					  <option value='.$_SESSION['persona'].'>Άλλο</option>
					  
					</select>
				</div>';
			}
			
			
		}
		else
		{
			echo'
		 <div class="form-group">
			<label for="persona">Είμαι...</label>
			<select class="form-control" id="persona" name="persona">
			  <option value="employer">Εργοδότης</option>
			  <option value="employee">Εργαζόμενος</option>
			  <option value="other">Άλλο</option>
			</select>
		</div>';
		}
		 
?>

		
	  <div class="form-group" id="employer_reasons">
		<label for="employer_reasons">Θέμα Ραντεβού</label>
		<select class="form-control" id="employer_reasons">
		  <option value="information">Ενημέρωση σχετικά με μέτρα πρόληψης στον εργασιακό χώρο</option>
		  <option value="application">Αίτηση-Δήλωση Απογραφής Εργοδότη</option>
		  <option value="ergosimo">Εργόσημο</option>
		  <option value="other">Άλλο</option>
		</select>
	  </div>
	  
	  
	  <div class="form-group" id="employee_reasons">
		<label for="employee_reasons">Θέμα Ραντεβού</label>
		<select class="form-control" id="employee_reasons">
		  <option>Ενημέρωση σχετικά με μέτρα πρόληψης στον εργασιακό χώρο</option>
		  <option>Υποβολή αιτήματος</option>
		  <option>Επίδομα</option>
		  <option>Άλλο</option>
		</select>
	  </div>
	
	
		<div class="input-group mb-3" id="text_reason">
		<label for="text_reason">Θέμα Επικοινωνίας</label>
		<input type="text" id="text_reason" name="text_reason" placeholder="">
		</div>

		<label for="subject">Προσθέστε ό,τι άλλο κρίνετε απαραίτητο</label>
		<textarea id="subject" name="subject" placeholder="" style="height:200px"></textarea>

		<input type="submit" value="Υποβολή" style="background-color:rgb(0, 100, 255)">
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
                      <button name="singlebutton" class="btn btn-sm btn-primary" data-dismiss="modal">Δοκιμάστε Ξανά</button>
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
    <script type="text/javascript">

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


<script type="text/javascript">

$("#persona").change(function() {
  if ($(this).val() == "employer") {
	$('#text_reason').hide();
    $('#employer_reasons').show();
	$('#employee_reasons').hide();
    $('#employer_reasons').attr('required', '');
    $('#employer_reasons').attr('data-error', 'This field is required.');
  } else if($(this).val() == "employee") {
    $('#text_reason').hide();
    $('#employer_reasons').hide();
	$('#employee_reasons').show();
    $('#employer_reasons').removeAttr('required');
    $('#employer_reasons').removeAttr('data-error');
  }
  else{
	   $('#text_reason').show();
	   $('#employer_reasons').hide();
	   $('#employee_reasons').hide();
  }
  
});
$("#persona").trigger("change");
</script>
<script type="text/javascript">
$("#employer_reasons").change(function() {
  if ($(this).val() != "other") {
    $('#text_reason').hide();
    $('#otherField1').attr('required', '');
    $('#otherField1').attr('data-error', 'This field is required.');
    $('#otherField2').attr('required', '');
    $('#otherField2').attr('data-error', 'This field is required.');
  } else {
    $('#text_reason').show();
    $('#employee_reasons').hide();
    $('#otherField1').removeAttr('required');
    $('#otherField1').removeAttr('data-error');
    $('#otherField2').removeAttr('required');
    $('#otherField2').removeAttr('data-error');
  }
});

$("#employer_reasons").trigger("change");
 </script>
  </body>
</html>