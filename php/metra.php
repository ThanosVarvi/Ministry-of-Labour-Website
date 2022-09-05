<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}
?>
<html lang="en">
<head> 
	
    <link rel="icon" href="../img/favicon.png">  
    <meta charset="utf-8">
	<h1 style="display:none;">ypakp</h1>
	
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prevention of Coronavirus</title> 

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- CSS for font-awsome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/metra.css">

	
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/tmodos.css">
	<link rel="stylesheet" href="../css/index.css">
</head>
  

<body>

	
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
          <li class="breadcrumb-item"><a href="./Covid.php">Covid-19</a></li>
          <li class="breadcrumb-item active" aria-current="page">Μέτρα Πρόληψης</li>
        </ol>
      </nav>
    </div>

  
 <!-- <h1>Oδηγίες και μέτρα πρόληψης</h1>-->
 
  <!-- Corona animation container -->
  <div class="animatediv"> 
  <img src="https://atheistiran.com/wp-content/uploads/2020/03/corona-virus.png" alt="">
    </div>
  
  <!-- Image on top of the Main menu container -->
  <div class="masks">
  <img src="https://atheistiran.com/wp-content/uploads/2020/03/people-mask.png" class="TopImage" alt="">
  </div>
  <!-- Main Menu Start -->
  <ul class="menu shadow">
    <li>
        <a><strong>Οδηγίες και μέτρα πρόληψης σε εργασιακούς χώρους</strong></a>
      </li>

		<li>
      <a href="#CleanYourHand">Οργανωτικά μέτρα</a>
    </li>
    
		<li>
      <a href="#AvoidCloseContact">Μέτρα ατομικής υγιεινής και μέσα ατομικής προστασίας</a>
    </li>
        
		<li>
      <a href="#StayHome">Περιβαλλοντικά μέτρα</a>
    </li>
    
		<li>
      <a href="#CoverCoughs">Γενικές οδηγίες για τον καθαρισμό και την απολύμανση των εργασιακών χώρων</a>
   </li>

    </ul>
  <!-- Main Menu End -->
  
  <!-- Free Space container  -->  
  <div style="margin-top:29%"></div>
  
  <!-- Message Boxes  -->  
   <h2>Οργανωτικά μέτρα</h2>
  <div class="messagebox shadow" id="CleanYourHand">
    <ul>
    <i>Για τον περιορισμό του συνωστισμού και των συναθροίσεων μεταξύ των εργαζομένων, συστήνονται
μέτρα τα οποία ευνοούν την ελαχιστοποίηση των επαφών, όπως:</i>
    <br><br>
<li><strong>Να εξετάζεται η εισαγωγή, σύμφωνα με την
    υφιστάμενη νομοθεσία, τρόπων οργάνωσης
    του χρόνου εργασίας με σκοπό τη σταδιακή
    προσέλευση στους χώρους εργασίας, για
    την αποφυγή συνωστισμού στους χώρους
    εργασίας, αλλά και στα μέσα μαζικής
    μεταφοράς.</strong> </li>
      <br>
<li><strong>Να εξετάζεται η εισαγωγή, σύμφωνα με
    τη υφισταμένη νομοθεσία, σχημάτων εξ’
    αποστάσεως παροχής εργασίας, στο βαθμό
    βέβαια που αυτό είναι οργανωτικά και
    τεχνικά εφικτό (π.χ. με χρήση τεχνολογιών
    πληροφορικής και επικοινωνιών, κ.λπ.). </strong> </li>
      <br>
<li><strong>Να ακολουθούνται οι συστάσεις του ιατρού
    εργασίας και του τεχνικού ασφαλείας,
    σχετικά με ενδεχόμενες αλλαγές της
    χωροταξικής θέσης των εργαζομένων ή
    και του αντικειμένου εργασίας, όπου είναι
    εφικτό, ιδίως δε για άτομα που ανήκουν σε
    ευπαθείς ομάδες, σύμφωνα με τις οδηγίες
    του Ε.Ο.Δ.Υ.</strong> </li>
      <br>
<li><strong>Να αποφεύγονται οι κάθε μορφής
    εκδηλώσεις και συγκεντρώσεις με
    επισκέπτες από το εξωτερικό. </strong> </li>
      <br>
<li><strong>Να εξεταστεί η δυνατότητα χρονικής
    μετάθεσης των προγραμματισμένων
    ταξιδιών στο εξωτερικό.</strong> </li>
      <br>
<li><strong>Να μετατεθούν μελλοντικά όλες οι
    προγραμματισμένες δραστηριότητες
    που συνεπάγονται συναθροίσεις ατόμων
    (σεμινάρια, ημερίδες, συμπόσια κ.λπ.).</strong> </li>
      <br>
<li><strong>Να αποφεύγεται ο συνωστισμός και οι
    συνεργασίες να πραγματοποιούνται με άλλο
    τρόπο (τηλεφωνική επικοινωνία, e-mail,
    τηλεδιάσκεψη κ.λπ. εφόσον είναι εφικτό).</strong> </li>
      <br> 
<li><strong>Να ρυθμιστεί η πρόσβαση σε κοινόχρηστους
    χώρους όπως αποδυτήρια, λουτρά, χώροι
    εστίασης εντός της επιχείρησης, κ.λπ.,
    με στόχο τη μείωση της πυκνότητας
    συγκέντρωσης ατόμων στον ίδιο χώρο και
    την τήρηση του κριτηρίου της ασφαλούς
    απόστασης. </strong> </li>
      <br>             
</ul>
  </div>
  </div>
  
<h2>Μέτρα ατομικής υγιεινής και μέσα ατομικής προστασίας</h2>
  <div class="messagebox shadow" id="AvoidCloseContact">
    
    <ul>
        <i>Θεωρείται απαραίτητο ο εργοδότης να λάβει μέτρα για την εφαρμογή ορθών πρακτικών ατομικής
υγιεινής, τόσο των εργαζομένων όσο και των τρίτων στο χώρο εργασίας, όπως:</i>
        <br><br>
    <li><strong>Αποφυγή των επαφών με άτομα που
        παρουσιάζουν συμπτώματα λοίμωξης
        αναπνευστικού, χωρίς τη λήψη κατάλληλων
        μέτρων προφύλαξης. </strong> </li>
          <br>
    <li><strong>Προτροπή και επίβλεψη της συμμόρφωσης
        των εργαζομένων και των τρίτων για την
        εφαρμογή ορθών πρακτικών ατομικής
        υγιεινής (χέρια, αναπνευστικές εκκρίσεις,
        κ.λπ.) παρέχοντας επίσης τα κατάλληλα μέσα
        καθαρισμού και απολύμανσης, όπως επίσης
        και σακούλες απορριμμάτων.  </strong> </li>
          <br>
    <li><strong>Παροχή αντισηπτικών διαλυμάτων (σε
        μορφή υγρού, αφρού, γέλης, εμποτισμένα
        μαντηλάκια) στους εργαζομένους και
        τοποθέτηση κατάλληλων μηχανισμών
        για αντισηψία των χεριών στις εξόδους/
        εισόδους και στους κοινόχρηστους
        χώρους της επιχείρησης, με έμφαση στις
        περιπτώσεις που οι εργαζόμενοι έρχονται σε
        επαφή με το ευρύ κοινό.</strong> </li>
          <br>
    <li><strong>Αποφυγή κατανάλωσης κάθε είδους τροφής
        στους εργασιακούς χώρους, εκτός των
        χώρων εστίασης. </strong> </li>
          <br>
    <li><strong>Διάθεση και τοποθέτηση κάδων με
        ποδοκίνητο καπάκι και σακούλα
        απορριμμάτων, όπου απορρίπτονται τα
        ΜΑΠ μιας χρήσης, καθώς και τα μαντηλάκια,
        οι χειροπετσέτες ή άλλα μέσα που
        χρησιμοποιήθηκαν για την απολύμανση
        επιφανειών ή αντικειμένων στο χώρο
        εργασίας.</strong> </li>
          <br>
    <li><strong>Παροχή των κατάλληλων ατομικών
        μέσων προστασίας μιας χρήσης (ΜΑΠ).
        Επισημαίνεται η ευθύνη του εργοδότη για
        την εκπαίδευση των εργαζομένων για την
        ασφαλή χρήση και την επίβλεψη χρήσης των
        ΜΑΠ.</strong> </li>
          <br>
            
    </ul>
    
    </div>
      
 

<h2>Περιβαλλοντικά μέτρα </h2>
      <div class="messagebox shadow" id="StayHome">
        
        <ul>
            Οι κορωνοϊοί μεταδίδονται κυρίως μέσω μεγάλων αναπνευστικών σταγονιδίων και επαφής, αλλά
ενδεχομένως να υπάρχουν και άλλοι τρόποι μετάδοσης.
Ο χρόνος επιβίωσης και οι συνθήκες που επηρεάζουν την επιβίωση του SARS-CoV-2 στο περιβάλλον
παραμένουν αυτή τη στιγμή άγνωστες. Σύμφωνα όμως με μελέτες που εκτιμούν τη σταθερότητα άλλων
κορωνοϊών, εκτιμάται ότι ο SARS-CoV-2 μπορεί να επιβιώσει αρκετές ημέρες στο περιβάλλον πάνω σε
διαφορετικές επιφάνειες. Ενδεικτικά, η επιβίωση του ιού SARS-CoV στο περιβάλλον εκτιμάται ότι είναι
μερικές ημέρες, ενώ αυτή του ιού MERS-CoV είναι μεγαλύτερη από 48 ώρες, σε μέση θερμοκρασία
δωματίου (20oC), πάνω σε διαφορετικές επιφάνειες. Ο επαρκής καθαρισμός και η απολύμανση του
περιβάλλοντος θεωρούνται απαραίτητα για τον περιορισμό της διασποράς του ιού.
Τα περιβαλλοντικά μέτρα ελέγχου της διασποράς του ιού περιλαμβάνουν:
            <br><br>
        <li><strong>τον επαρκή αερισμό των εργασιακών χώρων
            και την τακτική συντήρηση των συστημάτων
            εξαερισμού - κλιματισμού </strong> </li>
              <br>
        <li><strong>τον συστηματικό καθαρισμό των χώρων
            και των επιφανειών εργασίας, του
            εξοπλισμού εργασίας καθώς και των
            εργαλείων, συσκευών και αντικειμένων που
            χρησιμοποιούνται (πόμολα, τηλεχειριστήρια,
            διακόπτες, τηλέφωνα, πληκτρολόγια κ.λπ. </strong> </li>
              <br>
        <li><strong>τον συστηματικό καθαρισμό των
            κοινόχρηστων χώρων όπως, αποδυτήρια,
            λουτρά, χώροι εστίασης κ.λπ.</strong> </li>
              <br>
        <li><strong>την απολύμανση μέσω ψεκασμού (με
            εγκεκριμένα παρασκευάσματα) των χώρων
            όπου έχει εντοπιστεί πιθανό ή επιβεβαιωμένο
            κρούσμα της λοίμωξης COVID-19. Οι εργασίες
            ψεκασμού πρέπει να εκτελούνται από
            προσωπικό εξοπλισμένο με τα κατάλληλα
            ΜΑΠ (μάσκα φίλτρου, γάντια μίας χρήσης,
            αδιάβροχη φόρμα με μακριά μανίκια κ.λπ.),
            επίσης πρέπει να τηρούνται τα μέτρα που
            υποδεικνύονται για την ασφαλή χρήση,
            αφαίρεση ή/και απόρριψη των ΜΑΠ, καθώς
            και οι χρόνοι απόδοσης των χώρων στο
            κοινό. </strong> </li>
              <br>
        <li><strong>τη διάθεση και την τοποθέτηση σκεπαστών
            κάδων απορριμμάτων, όπου απορρίπτονται
            τα ΜΑΠ μιας χρήσης, καθώς και τα
            μαντιλάκια, χειροπετσέτες ή άλλα μέσα που
            χρησιμοποιήθηκαν για την απολύμανση
            των επιφανειών εργασίας, καθώς και είδη
            προσωπικής υγιεινής </strong> </li>
              <br>
        <li><strong>το συχνό καθαρισμό των ενδυμάτων
            εργασίας (φόρμες, ποδιές κ.λπ.), καθώς και
            των ΜΑΠ που χορηγούνται (κράνη, γυαλιά,
            μέσα προστασίας της ακοής, άρβυλα κ.λπ.)</strong> </li>
              <br>
                
        </ul>
        
  </div>
   


<h2>Οδηγίες για τον καθαρισμό και την απολύμανση των εργασιακών χώρων </h2>
 <div class="messagebox shadow" id="CoverCoughs">
        
        <ul>
           <p>   Ο συστηματικός και σωστός καθαρισμός με τη συνήθη διαδικασία (χρήση απορρυπαντικού παράγοντα,
νερό και μηχανική τριβή) και η απολύμανση των επιφανειών και των αντικειμένων στους εργασιακούς
χώρους, είναι κρίσιμης σημασίας.
Καθώς δεν υπάρχουν δεδομένα για την αποτελεσματικότητα των συνήθως χρησιμοποιούμενων αντιμικροβιακών παραγόντων κατά του συγκεκριμένου ιού SARS-CoV-2, συστήνεται η χρήση προϊόντων με
ελεγμένη αποτελεσματικότητα κατά των κορωνοϊών.
Συγκεκριμένα προτείνεται η χρήση 0,5% υποχλωριώδους νατρίου (αραίωση 1:10 αν χρησιμοποιείται οικιακή χλωρίνη αρχικής συγκέντρωσης 5% ή ισοδύναμο 5.000 ppm, αν χρησιμοποιούνται ταμπλέτες) μετά
από τον καθαρισμό με ουδέτερο απορρυπαντικό. Για επιφάνειες που είναι πιθανόν να καταστραφούν
από τη χρήση υποχλωριώδους νατρίου, μπορεί να χρησιμοποιηθεί αιθανόλη συγκέντρωση 70% κατόπιν
καθαρισμού με ουδέτερο απορρυπαντικό, λαμβάνοντας όμως πάντα υπόψη τις οδηγίες του κατασκευαστή για τη συμβατότητα του υλικού με τον αντιμικροβιακό παράγοντα που θα χρησιμοποιηθεί.
Ο καθαρισμός πρέπει να γίνεται χρησιμοποιώντας τον κατάλληλο προστατευτικό ατομικό εξοπλισμό.
Πρέπει να ακολουθείται ο σωστός τρόπος εφαρμογής και απόρριψης του εξοπλισμού. Ο απορριπτόμενος εξοπλισμός πρέπει να αντιμετωπίζεται ως πιθανό μολυσματικό υλικό και να απορρίπτεται σύμφωνα 
με την εθνική νομοθεσία. Εφόσον χρησιμοποιηθεί προστατευτικός εξοπλισμός που δεν είναι μίας χρήσης,
επιβάλλεται η απολύμανσή του με τα κατάλληλα απολυμαντικά (π.χ. 0,1% υποχλωριώδες νάτριο ή 70%
αιθανόλη) μετά από κάθε χρήση. Στην περίπτωση που χρησιμοποιηθούν άλλα απολυμαντικά, πρέπει να
ακολουθούνται οι οδηγίες του κατασκευαστή. Κατά τη χρήση των απολυμαντικών πρέπει ο χώρος να
είναι καλά αεριζόμενος.Στην περίπτωση ύποπτων ή επιβεβαιωμένων κρουσμάτων COVID-19, πρέπει να ακολουθούνται οι συνήθεις διαδικασίες απολύμανσης ή/και απόρριψης του εξοπλισμού ατομικής προστασίας, των εργαλείων
κ.λπ.</p>
<i>Ο προστατευτικός ατομικός εξοπλισμός περιλαμβάνει:</i>
<br>
<b>1. Μάσκες υψηλής αναπνευστικής προστασίας FFP2 ή FFP3</b><br>
<b>2. Προστατευτικά γυαλιά</b><br>
<b>3. Προστατευτική φόρμα, αδιάβροχη, με μακριά μανίκια, μιας χρήσης.</b><br>
<b>4. Γάντια μιας χρήσης</b><br>
        </ul>
        
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




  
</body>
