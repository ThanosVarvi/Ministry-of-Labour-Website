<!DOCTYPE html>
<?php


$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}


if(!isset($_SESSION['id'])){
	echo "<script type='text/javascript'> document.location = './signin.php'; </script>";
}
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- CSS for font-awsome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Our custom CSS -->

    <link rel="icon" href="../img/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

  
    <link rel="stylesheet" href="../css/lightbox.css">

	<link rel="stylesheet" href="../css/user_profile.css">
	<link rel="stylesheet" href="../css/index.css">
	<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../css/main2.css">
	<link rel="stylesheet" href="../css/modos_arxiki.css">
	<link rel="stylesheet" href="../css/tmodos.css">
	
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->

  </head>

<body>

  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="./index.php"><em>ΥΠΟΥΡΓΕΙΟ ΕΡΓΑΣΙΑΣ ΚΑΙ ΚΟΙΝΩΝΙΚΩΝ ΥΠΟΘΕΣΕΩΝ</em></a>
    </div>
	
	<div class="search_bar">
	  <label for="search" style="display: none">woah</label>
	  <input type="text" id="search" placeholder="Αναζήτηση...">
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
                <a class="dropdown-item" href="https://www.moh.gov.gr/">Υπουργείο Υγείας</a></div>
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
          <li class="breadcrumb-item"><a href="./index.php" style="color: rgb(0,100,255)">Αρχική</a></li>
          <li class="breadcrumb-item active" aria-current="page">Προφίλ Χρήστη</li>
        </ol>
      </nav>
    </div>
  

  



    
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
	
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Προφίλ Χρήστη</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<hr>
<div class="container_profile" style="background-color: #e3f2fd">
    <h1>Προφίλ Χρήστη</h1>
    <div class="row">

  		<div class="col-sm-3"><!--left col-->
			<div class="text-center">
	  			<h2 style="display: none">
	  				h2
				</h2>
				<h3 style="display: none">
	  				h3
				</h3>
				<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
				<label for="img"><h4>Upload a photo...</h4></label>
				<input id="img" type="file" class="text-center center-block file-upload">
			</div></hr><br>
        </div><!--/col-3-->
		
    	<div class="col-sm-9">
			<div class="tab-content">
				<div class="tab-pane active" id="home">
                <hr>
					<form class="form" action="edited_user.php" method="post" id="registrationForm">
						
						<div class="form-group">
							<div class="col-xs-6">
								<label for="first_name"><h4>Όνομα</h4></label>
								<input type="text" class="form-control" name="name" id="first_name" value=<?php echo $_SESSION['name']?> title="enter your first name if any." readonly>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-xs-6">
								<label for="last_name"><h4>Επίθετο</h4></label>
								<input type="text" class="form-control" name="surname" id="last_name" value=<?php echo $_SESSION['surname']?> title="enter  last name if any." readonly>
							</div>
						</div>
          
						<div class="form-group">  
							<div class="col-xs-6">
								<label for="username"><h4>Όνομα χρήστη</h4></label>
								<input type="text" class="form-control" name="username" id="username" value=<?php echo $_SESSION['username']?> title="enter your phone number if any." readonly>
							</div>
						</div>
						
						
							
						<div class="form-group">
							<div class="col-xs-6">
								<label for="email"><h4>Email</h4></label>
								<input type="email" class="form-control" name="email" id="email" placeholder="" value=<?php echo $_SESSION['email']?>  readonly>
							</div>
						</div>
          
					
						
						
						<div class="form-group"> 
							<div class="col-xs-6">
								<label for="password"><h4>Κωδικός Πρόσβασης</h4></label>
								<input type="password" class="form-control" name="password" id="password" placeholder="Εδώ μπορείτε να αλλάξετε τον κωδικό σας" title="enter your password."readonly>
							</div>
						</div>
                      
						<div class="form-group">
							<div class="col-xs-6">
								<label for="password2"><h4>Επαλήθευση Κωδικού Πρόσβασης</h4></label>
								<input type="password" class="form-control" name="password2" id="password2" placeholder="Πληκτρολογήστε ξανα τον νέο κωδικό" title="enter your password2."readonly>
							</div>
						</div>
						
						
						<div class="form-group">
							<div class="col-xs-6">
								<label for="id"><h4>Προσωπικό ΑΦΜ</h4></label>
								<input type="id" name="id" class="form-control" id="id" value=<?php echo $_SESSION['id']?> title="enter a location"readonly>
							</div>
						</div>
						
						
						<?php 
						if($_SESSION['persona']=="employer")
						{
							echo '
						<div class="form-group">
							<div class="col-xs-6">
								<label for="company_AFM"><h4>ΑΦΜ Εταιρείας</h4></label>
								<input type="text" class="form-control" name="company_AFM" id="company_AFM" value="'.$_SESSION['company_id'].'" title="enter your mobile number if any." readonly>
							</
							div>
						</div>';
						}
						else if($_SESSION['persona']=="employee")
						{
							echo '
						<div class="form-group">
							<div class="col-xs-6">
								<label for="employer_AFM"><h4>ΑΦΜ Εργοδότη</h4></label>
								<input type="text" class="form-control" name="employer_AFM" id="employer_AFM" value="'.$_SESSION['employer_id'].'" title="enter your mobile number if any." readonly>
							</
							div>
						</div>';
						}
						?>
                      
						
						
						
						
						
                      
						<div class="form-group">
							<div class="col-xs-12"><br>
								<button id="edit_button" class="btn btn-lg btn-success" type="button" onclick="removeReadOnly()" style="float: right; background-color: rgb(0,100,255)"><i class="glyphicon glyphicon-edit" ></i>Επεξεργασία</button>
								<button id="cancel_button" class="btn btn-lg" type="button" onclick="addReadOnly()" style="float: right; display: none;"><i class="glyphicon glyphicon-cancel"></i>Ακύρωση</button>
								<button id="reset_button" class="btn btn-lg" type="reset" style="float: right; display: none;"><i class="glyphicon glyphicon-repeat"></i>Επαναφορά</button>
								<button id="save_button" class="btn btn-lg btn-success" type="submit" style="float: right; display: none; background-color: rgb(0,100,255)"><i class="glyphicon glyphicon-ok-sign"></i>Αποθήκευση</button>
								</div>
						</div>
					</form>
				</hr>
				</div><!--/tab-pane-->
			</div><!--/tab-content-->
        </div><!--/col-9-->
    </div><!--/row-->
	
	
	<?php
	if($_SESSION['persona']=="employee")
	{
		
		$user = 'root'; //sxolia
		$pass = '';
		$db='ypakp_database';

		$db_conn=new mysqli('localhost',$user,$pass,$db);

		if ($db_conn->connect_error) {
			die("Connection failed: " . $db_conn->connect_error);
			echo "error";
		} 
			
		$stmt = $db_conn->prepare("SELECT * FROM `users` WHERE `id` = ?");
		$stmt->bind_param("i",$_SESSION['employer_id']);
		$stmt->execute();
		$result = $stmt->get_result();
		
		
		if(is_null($_SESSION['start_suspension']))
		{
			$start_suspension="-";
			
		}
		else
		{
			$start_suspension=date("d-m-Y",strtotime($_SESSION['start_suspension']));
		}
		
		if(is_null($_SESSION['end_suspension']))
		{
			$end_suspension="-";
			
		}
		else
		{
			$end_suspension=date("d-m-Y",strtotime($_SESSION['end_suspension']));
		}
		
		if(is_null($_SESSION['start_remote']))
		{
			$start_remote="-";
			
		}
		else
		{
			$start_remote=date("d-m-Y",strtotime($_SESSION['start_remote']));
		}
		
		
		if (is_null($_SESSION['end_remote']))
		{
			$end_remote="-";
			
		}
		else
		{
			$end_remote=date("d-m-Y",strtotime($_SESSION['end_remote']));
		}
		
		

		
		
		if ($result->num_rows > 0)
		{
			
			
			$row = $result->fetch_assoc();
			$employer_name=$row["name"];
			$employer_surname=$row["surname"];
			
			$stmt = $db_conn->prepare("SELECT * FROM `users` WHERE `id` = ?");
			$stmt->bind_param("i", $_SESSION['id']);
			$stmt->execute();
			$result = $stmt->get_result();
			$row = $result->fetch_assoc();

			if($row["special_leave"] == 1){
				$leaveStr = 'Εκρεμμεί';
			}
			else{
				$leaveStr = 'Δεν έχει γίνει αίτηση';
			}
			
			echo'
					<div class="row align-items-start justify-content-center">
						<div class="table100 ver2 m-b-110">
							<div class="table100-head">
								<table role="presentation">
										<tr class="row100 head">
											<th class="cell100 column1" style="color: #222bbb">Εργοδότης</th>
											<th class="cell100 column2" style="color: #222bbb">ΑΦΜ Εργοδότη</th>
											<th class="cell100 column3" style="color: #222bbb">Εξ αποστάσεως Εργασία</th>
											<th class="cell100 column4" style="color: #222bbb">Αναστολη Σύμβασης</th>
											<th class="cell100 column5" style="color: #222bbb">Άδεια Ειδικού Σκοπού</th>
										</tr>
								</table>
							</div>

							<div class="table100-body js-pscroll">
								<table>
									<tbody>
										<tr class="row100 body">
											<th class="cell100 column1" style="color: #646464">'.$employer_name.' '.$employer_surname.'</th>
											<td class="cell100 column2" style="color: #646464">'.$_SESSION['employer_id'].'</td>
											<td class="cell100 column3" style="color: #646464">Από '.$start_remote.' εώς '.$end_remote.'</td>	
											<td class="cell100 column4" style="color: #646464; overflow: auto">Από '.$start_suspension.' εώς '.$end_suspension.'</th>
											<td class="cell100 column5" style="color: #646464">'.$leaveStr.'</th>
										</tr>
									</tbody>
								</table>
							</div>
				
						</div>
					</div>
				';
		}
		else
		{
		
			echo'
					<div class="row align-items-start justify-content-center">
						<div class="table100 ver2 m-b-110">
							<div class="table100-head">
								<table>
									<thead>
										<tr class="row100 head">
											<th class="cell100 column1">Εργοδότης</th>
											<th class="cell100 column2">ΑΦΜ Εργοδότη</th>
											<th class="cell100 column3">Εξ αποστάσεως Εργασία</th>
											<th class="cell100 column4">Αναστολη Σύμβασης</th>
										</tr>
									</thead>
								</table>
							</div>

							<div class="table100-body js-pscroll">
								<table>
									<tbody>
										<tr class="row100 body">
											<td class="cell100 column1">Δεν έχει δηλωθεί</td>
											
											<td class="cell100 column2">Δεν έχει δηλωθεί</td>
											<td class="cell100 column3">Δεν έχει δηλωθεί</td>	
											<td class="cell100 column3">Δεν έχει δηλωθεί</td>	
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				';
		}
		
	}
	?>
	
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
			<a href="index.php" style="color: rgb(0,100,255)">ypakp.gr</a>
		</div>
	</footer>
</div><!--container-->


<script type="text/javascript">
function removeReadOnly(){
	document.getElementById("id").readOnly = false;
   document.getElementById("first_name").readOnly = false;
   document.getElementById("last_name").readOnly = false;
   document.getElementById("email").readOnly = false;
   document.getElementById("username").readOnly = false;
   document.getElementById("password").readOnly = false;
   document.getElementById("password2").readOnly = false;
   if ($("#employer_AFM").length > 0){
	 document.getElementById("employer_AFM").readOnly = false;
}
if ($("#company_AFM").length > 0){
	 document.getElementById("company_AFM").readOnly = false;
}
   
   
}
</script>

<script type="text/javascript">
function addReadOnly(){
	document.getElementById("id").readOnly = true;
   document.getElementById("first_name").readOnly = true;
   document.getElementById("last_name").readOnly = true;
   document.getElementById("email").readOnly = true;
   document.getElementById("username").readOnly = true;
   document.getElementById("password").readOnly = true;
   document.getElementById("password2").readOnly = true;
  
  if ($("#employer_AFM").length > 0){
	 document.getElementById("employer_AFM").readOnly = true;
}
if ($("#company_AFM").length > 0){
	 document.getElementById("company_AFM").readOnly = true;
}
   
   
}
</script>

	
<script type="text/javascript">
	$(document).ready(function() {

    $("#edit_button").click(function(){
		$("#edit_button").hide();
		$("#reset_button").show();
		$("#save_button").show();
		$("#cancel_button").show();
		
		('input').prop('readonly', function(i, r){return !r;});
	});
	
	$("#save_button").click(function(){
		$("#save_button").hide();
		$("#reset_button").hide();
		$("#edit_button").show();
	});
	
	$("#cancel_button").click(function(){
		$("#save_button").hide();
		$("#cancel_button").hide();
		$("#reset_button").hide();
		$("#edit_button").show();
	});
	
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
</script>		
				
		

 
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
	
	<script>
    function edit_button() {
		if($('input').is('[readonly]')){
			$('input').prop('readonly',false);
		}
		else{
			$('input').prop('readonly', true);
		}
    </script>
	


  </body>
</html>