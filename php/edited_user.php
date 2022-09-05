<?php    



$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}


	
if((!empty($_POST))){ 


	if($_POST['password']!=$_POST['password2'])
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Μη Επιτυχής επεξεργασία λογαριασμού.Λανθασμένη επιβεβαίωση κωδικου!')
			window.location.href='./user_profile.php';
			</SCRIPT>");
		die("password mismatch");
	}


	$user = 'root'; //sxolia
	$pass = '';
	$db='ypakp_database';

	$db_conn=new mysqli('localhost',$user,$pass,$db);

	if ($db_conn->connect_error) {
		die("Connection failed: " . $db_conn->connect_error);
		echo "error";
	} 
	if($_SESSION['persona']=="employer")
	{
		$sql = "UPDATE users 
		SET name='".$_POST['name']."', surname='".$_POST['surname']."', email='".$_POST['email']."', id='".$_POST['id']."', username='".$_POST['username']."', password='".$_POST['password']."', company_AFM='".$_POST['company_AFM']."'
		WHERE id='".$_SESSION['id']."'";
	}
	else if($_SESSION['persona']=="employee")
	{
		$sql = "UPDATE users 
		SET name='".$_POST['name']."', surname='".$_POST['surname']."', email='".$_POST['email']."', id='".$_POST['id']."', username='".$_POST['username']."', password='".$_POST['password']."', employer_AFM='".$_POST['employer_AFM']."'
		WHERE id='".$_SESSION['id']."'";
	}
	else
	{
		$sql = "UPDATE users 
		SET name='".$_POST['name']."', surname='".$_POST['surname']."', email='".$_POST['email']."', id='".$_POST['id']."', username='".$_POST['username']."', password='".$_POST['password']."'
		WHERE id='".$_SESSION['id']."'";
	}

	
	if ($db_conn->query($sql) === TRUE) {
			
			$_SESSION['id']=$_POST['id'];
			$_SESSION['email']=$_POST['email'];
			$_SESSION['username']=$_POST['username'];
			$_SESSION['name']=$_POST['name'];
			$_SESSION['surname']=$_POST['surname'];
		//	$_SESSION['password']=$_POST['password'];
			if($_SESSION['persona']=="employer")
			{
				$_SESSION['company_id']=$_POST['company_AFM'];
			}
			else if($_SESSION['persona']=="employee")
			{
				$_SESSION['employer_id']=$_POST['employer_AFM'];
				
			}

				
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Επιτυχής επεξεργασία λογαριασμού.')
			window.location.href='./user_profile.php';
			</SCRIPT>");
		} 
	else {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Μη Επιτυχής επεξεργασία λογαριασμού.Προσπαθήστε ξανα!')
			window.location.href='./user_profile.php';
			</SCRIPT>");
	}
}
else
		die("Woah\n");
?>
     