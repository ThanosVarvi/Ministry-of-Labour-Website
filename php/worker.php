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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <h1 style="display:none;">ypakp</h1>
    <title>Worker Info</title>

    <!-- Custom Fonts -->
   
    <link rel="icon" href="../img/favicon.png">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- CSS for font-awsome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/templatemo-grad-school.css">
  <link rel="stylesheet" href="../css/mods.css">
  
  	
	<link rel="stylesheet" href="../css/main.css">
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
          <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
          <li class="breadcrumb-item"><a href="./employee.php">Εργαζόμενοι</a></li>
          <li class="breadcrumb-item active" aria-current="page">Ενημέρωση Εργαζομένων</li>
        </ol>
      </nav>
    </div>


    

        <!-- Post Content -->
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    
                        <h2 class="section-heading">Τηλεργασία - συμβάσεις εργασίας και εργασιακά δικαιώματα</h2>
                        <i><b>*Η τροποποιήση της σύμβασης σε τηλεργασία, γίνεται αποκλειστικά, απο τον εργοδότη. Για οποιαδήποτε αλλαγή επικοινωνείστε με τον εργοδότη σας.</b></i>
                        </br></br>
                        <p>Όσον αφορά τις συνθήκες εργασίας, οι τηλεργαζόμενοι απολαμβάνουν τα ίδια δικαιώματα, 
                        που διασφαλίζονται από την ισχύουσα νομοθεσία και τις συλλογικές συμβάσεις για συγκρίσιμους 
                        εργαζόμενους μέσα στις εγκαταστάσεις της επιχείρησης. Ωστόσο, για να ληφθούν υπόψη οι 
                        ιδιαιτερότητες της τηλεργασίας μπορεί να χρειαστούν ειδικές συμπληρωματικές συλλογικές ή ατομικές 
                        συμβάσεις. Στη χώρα μας, νομοθετική μνεία στην τηλεργασία συναντάται στον ν. 2639/1998. 
                        Το άρθρο 1: «ειδικές μορφές απασχόλησης». προβλέπει ότι: «Η συμφωνία μεταξύ εργοδότη και 
                        απασχολούμενου για παροχή υπηρεσιών ή έργου, για ορισμένο ή αόριστο χρόνο, ιδίως στις περιπτώσεις 
                        αμοιβής κατά μονάδα εργασίας (φασόν), τηλεργασίας, κατ` οίκον απασχόλησης, τεκμαίρεται ότι υποκρύπτει
                        σύμβαση εξαρτημένης εργασίας, εφόσον η εργασία παρέχεται αυτοπροσώπως, αποκλειστικά ή κατά κύριο λόγο στον 
                        ίδιο εργοδότη για εννέα (9) συνεχείς μήνες». Αξίζει να σημειωθεί πως η τηλεργασία έχει οικειοθελή χαρακτήρα 
                        για τους ενδιαφερόμενους, εργαζόμενο και εργοδότη. Η τηλεργασία μπορεί να αποτελεί μέρος της 
                        αρχικής περιγραφής της θέσης εργασίας του εργαζόμενου ή μπορεί να υπάρξει συμφωνία εκ των υστέρων. 
                        Αν η τηλεργασία δεν είναι μέρος της αρχικής περιγραφής της θέσης και αν ο εργοδότης κοινοποιήσει 
                        προσφορά τηλεργασίας, ο εργαζόμενος μπορεί να δεχθεί ή να αρνηθεί αυτή την προσφορά. Ωστόσο, με 
                        την από 11.3.2020 Πράξη Νομοθετικού Περιεχομένου παρέχεται η δυνατότητα στους εργοδότες με δική 
                        τους (μονομερή) απόφαση να ορίσουν ότι θα εφαρμόζεται από κάποιους εργαζομένους τους το σύστημα 
                        της εξ αποστάσεως εργασίας. Όταν ένας εργαζόμενος εκφράζει την επιθυμία για μια θέση τηλεργασίας,
                        ο εργοδότης μπορεί να δεχθεί ή να αρνηθεί αυτό το αίτημα. Η μετάβαση στην τηλεργασία από μόνη της
                        δεν θίγει το καθεστώς απασχόλησης του τηλεργαζόμενου, μεταβάλλει μόνο τον τρόπο με τον οποίο
                        πραγματοποιείται η εργασία. Η άρνηση ενός εργαζόμενου να αποδεχθεί την τηλεργασία δεν αποτελεί από μόνη της αιτία διακοπής τηw
                        εργασιακής σχέσης ούτε τη μεταβολή των όρων και συνθηκών απασχόλησης αυτού του εργαζόμενου.</p>
                        </br></br>
                        </br></br></br>
                      
                        <h2 class="section-heading">Αναστολή σύμβασης εργασίας</h2>
                        <i><b>*Η αναστολή της σύμβασης εργασίας, γίνεται αποκλειστικά, απο τον εργοδότη. Για οποιαδήποτε αλλαγή επικοινωνείστε με τον εργοδότη σας.</b></i>
                        </br></br>
                        <div style="">Αναστολή σύμβασης εργασίας υπάρχει όταν ο εργαζόμενος δεν παρέχει για ορισμένο ή αό­ριστο χρονικό διάστημα την συμφωνημένη ερ­γασία του, με ή χωρίς υπαιτιό­τητά του, ενώ η σύμβαση εξακολουθεί να ισχύ­ει και να δεσμεύει τα μέρη. Με άλλα λόγια κατά το χρόνο αναστολής της σύμβασης εργασίας&nbsp;<b>αναστέλ­λεται η υποχρέωση του εργαζομένου να πα­ρέχει την εργασία του, ενώ η υποχρέωση του εργοδότη να καταβάλλει ή όχι τον μισθό εξαρτάται από το είδος της αναστολής.</b><b>&nbsp;</b>Κατά τα λοιπά όλοι οι όροι και δεσμεύσεις που έχουν αναλάβει τα μέρη κατά την κατάρτιση της σύμβασης εξακολουθούν να υπάρχουν και να δεσμεύουν τους συμβαλλόμε­νους.</div>
  
                        <br>
    
                            
                        <div style=""><b>Οι κυριότερες περιπτώσεις αναστολής της σύμβασης είναι οι ακόλουθες</b>:</div><br>
                        <div style=""><b>α)</b>&nbsp;Κάθε ανυπαίτια αποχή του εργαζομέ­νου από την εργασία του, όπως η ασθένεια, η κύηση, ο τοκετός και η λοχεία.</div>
                        <div style=""><b>β) </b>Η κανονική άδεια των εργα­ζομένων: ο χρόνος αποχής των εργαζομένων σε άδεια ανα­στέλλει την υποχρέωσή τους για παροχή εργασίας.</div>
                        <div style=""><b>δ) </b>Στράτευση των εργαζομένων</div>
                        <div style=""><b>ε) </b>Προβλέπεται&nbsp;το δικαίωμα των μερών να μην εκπληρώσουν τις εκ της σύμβασης υποχρεώσεις τους μέχρις ότου και το άλλο μέρος εκπληρώσει τις δικές του&nbsp;(Δικαίωμα επίσχεσης).</div>
                        <div style=""><b>στ)</b> Άδεια άνευ αποδοχών: πρόκειται για τη συνηθέστερη περίπτωση&nbsp;συμβατικής ανα­στολής.&nbsp;</div>
                        </br></br></br></br></br></br></br></br></br>


    
                        <h2 class="section-heading"><a class="linkheader" href="leave.php">Άδεια ειδικού σκοπού</a></h2>
    
                        <div class="main-news">
                                                
                        &nbsp;<span style="color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 20px; text-align: justify;">Θεσπίζεται</span><span style="color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 20px; text-align: justify;">&nbsp;</span><strong style="color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 20px; text-align: justify; box-sizing: border-box;">άδεια ειδικού σκοπού για εργαζόμενους γονείς</strong><span style="color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 20px; text-align: justify;">&nbsp;</span><span style="color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 20px; text-align: justify;">παιδιών που:</span>
<ul style="box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; margin-top: 0px; list-style: inside;line-height: 1.42857143; margin-bottom: 10px; color: rgb(51, 51, 51); font-size: 20px;">
<li style="box-sizing: border-box;">Είναι εγγεγραμμένα σε βρεφικούς, βρεφονηπιακούς και παιδικούς σταθμούς ή</li>
<li style="box-sizing: border-box;">Φοιτούν σε σχολικές μονάδες υποχρεωτικής εκπαίδευσης ή</li>
<li style="box-sizing: border-box;">Φοιτούν σε ειδικά σχολεία ή σχολικές μονάδες ειδικής αγωγής και εκπαίδευσης ανεξαρτήτως ορίου ηλικίας. Την άδεια ειδικού σκοπού δικαιούνται και οι&nbsp;<strong style="box-sizing: border-box;">εργαζόμενοι γονείς ατόμων με αναπηρία</strong>, τα οποία, ανεξαρτήτως της ηλικίας τους, είναι ωφελούμενοι σε δομές παροχής υπηρεσιών ανοικτής φροντίδας για άτομα με αναπηρία.</li>


<a href="#">
    <img class="img-responsive" src="../img/post-sample-image.jpg" alt="14">
</a>


</ul>
<p style="box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-size: 20px;">Συγκεκριμένα, θεσμοθετείται το δικαίωμα των εργαζόμενων γονέων προς διευκόλυνσή τους και λόγω της ήδη επιβληθείσας αναστολής λειτουργίας των ανωτέρω μονάδων εκπαίδευσης, και για όσο διάστημα παραμείνουν κλειστές οι μονάδες αυτές, να λαμβάνουν άδεια ειδικού σκοπού διάρκειας κατ’ ελάχιστον τριών (3) ημερών.</p>
<p style="box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-size: 20px;">Ως προϋπόθεση ορίζεται ότι ο εργαζόμενος θα κάνει χρήση μίας (1) ημέρας από την ετήσια κανονική του άδεια για κάθε τρεις (3) ημέρες άδειας ειδικού σκοπού.</p>
<p style="box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-size: 20px;">Προυποθέσεις:</p>
<li style="box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-size: 20px;">Την άδεια αυτή τη δικαιούται ο γονέας που απασχολείται στον ιδιωτικό τομέα,&nbsp;<strong style="box-sizing: border-box;">ακόμη και εάν ο άλλος γονέας είναι ελεύθερος επαγγελματίας,</strong>&nbsp;και μπορεί να χορηγηθεί και μέχρι τις 10/4/2020.</p>
<li style="box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-size: 20px;">Αν και οι δύο (2) γονείς είναι μισθωτοί (στον ίδιο ή σε διαφορετικούς εργοδότες), θα πρέπει να υποβάλουν&nbsp;<strong style="box-sizing: border-box;">κοινή υπεύθυνη δήλωση</strong>&nbsp;(προς τον εργοδότη ή τους εργοδότες τους) με την οποία θα γνωστοποιούν&nbsp;<strong style="box-sizing: border-box;">ποιος από τους δύο θα κάνει χρήση της άδειας ειδικού σκοπού</strong>&nbsp;ή θα ορίζουν τα αντίστοιχα χρονικά διαστήματα χρήσης της από καθέναν από αυτούς (αν αποφασίσουν να μοιραστούν τις ημέρες άδειας ειδικού σκοπού).</p>
<li style="box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-size: 20px;">Εάν ο ένας γονέας απασχολείται στον ιδιωτικό τομέα και ο άλλος στο Δημόσιο και προκειμένου&nbsp;<strong style="box-sizing: border-box;">ο μισθωτός του ιδιωτικού τομέα να μπορεί να κάνει χρήση της άδειας αυτής</strong>, θα πρέπει να υποβληθεί στον εργοδότη υπεύθυνη δήλωση του εργαζόμενου στο Δημόσιο γονέα ότι δεν έχει ασκήσει το δικαίωμα λήψης άδειας ειδικού σκοπού.</p>
<li style="box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-size: 20px;">Εάν εργάζεται μόνο ο ένας από τους δύο γονείς, τότε ο εργαζόμενος γονέας&nbsp;<strong style="box-sizing: border-box;">δεν έχει τη δυνατότητα να κάνει χρήση της άδειας ειδικού σκοπού</strong>.</p>
<li style="box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-size: 20px;">Στις περιπτώσεις&nbsp;<strong style="box-sizing: border-box;">που ο μη εργαζόμενος γονέας νοσηλεύεται ή νοσεί από τον κορωνοϊό ή είναι άτομο με αναπηρία (ΑμεΑ)</strong>&nbsp;και λαμβάνει επίδομα από τον Οργανισμό Προνοιακών Επιδομάτων και Κοινωνικής Αλληλεγγύης (ΟΠΕΚΑ),&nbsp;<strong style="box-sizing: border-box;">ο εργαζόμενος γονέας δικαιούται να κάνει χρήση της άδειας ειδικού σκοπού</strong>.</p>
<li style="box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-size: 20px;"><strong style="box-sizing: border-box;">Εάν πρόκειται για διαζευγμένους</strong>&nbsp;ή σε διάσταση γονείς, τότε η άδεια ειδικού σκοπού χορηγείται στον γονέα που&nbsp;<strong style="box-sizing: border-box;">έχει την επιμέλεια του παιδιού ή τη γονική μέριμνα</strong>,&nbsp;εκτός και αν τα ανωτέρω δικαιώματα ασκούνται και από τους δύο γονείς, οπότε μπορούν να κάνουν χρήση και οι δύο με κοινή τους υπεύθυνη δήλωση (είτε ο ένας αποκλειστικά είτε να μοιραστούν την ειδική άδεια σε διαστήματα τα οποία κοινοποιούν στον εργοδότη τους με υπεύθυνες δηλώσεις που του υποβάλλουν). Σε περίπτωση γέννησης παιδιού εκτός γάμου ή εκτός συμφώνου συμβίωσης (το οποίο εξομοιώνεται πλήρως με τον γάμο) ή σε περίπτωση θανάτου του άλλου γονέα, τότε η ειδική άδεια χορηγείται άνευ άλλης προϋπόθεσης στον&nbsp;<strong style="box-sizing: border-box;">μονογονέα</strong>.</p>
<li style="box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-size: 20px;">Εφόσον και οι δύο γονείς εργάζονται αλλά&nbsp;<strong style="box-sizing: border-box;">ο ένας εξ αυτών βρίσκεται σε άλλη νόμιμη άδεια</strong>, τότε ο πρώτος&nbsp;<strong style="box-sizing: border-box;">δεν δικαιούται να κάνει χρήση της άδειας ειδικού σκοπού για όσο διάστημα διαρκεί η άδεια του δεύτερου</strong>.</p>
<li style="box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-size: 20px;">Σε περίπτωση που&nbsp;<strong style="box-sizing: border-box;">ο εργοδότης αναστείλει τη λειτουργία της επιχείρησής του λόγω της λήψης των έκτακτων μέτρων&nbsp;</strong>για την αντιμετώπιση και την πρόληψη μετάδοσης του κορωνοϊού, ο εργαζόμενος γονέας&nbsp;<strong style="box-sizing: border-box;">δεν δικαιούται την άδεια ειδικού σκοπού</strong>.</p>                            
                            
                            </div>
    
                    </div>
                </div>
            </div>
        </article>
		
		
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


</body>

</html>
