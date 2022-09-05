<?php    
 
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}


		if (!empty($_POST)) {
		    $user = 'root'; //sxolia
			$pass = '';
			$db='ypakp_database';

			$db_conn=new mysqli('localhost',$user,$pass,$db);

			if ($db_conn->connect_error) {
				die("Connection failed: " . $db_conn->connect_error);
				echo "error";
			} 
			
			
		
		//	$user = $result->fetch_object();
			
			$stmt = $db_conn->prepare("SELECT * FROM `users` WHERE `username` = ? and `password` = ?");
			$stmt->bind_param("ss",$_POST['username'],$_POST['password']);
			$stmt->execute();
			$result = $stmt->get_result();
			
			#$sql = "SELECT * FROM users where id = '".$_POST["id"]."' ";

		#	if (($result=$db_conn->query($sql)) === TRUE) {
				
//				$result = $db_conn->query($sql);

				
			if ($result->num_rows > 0)
			{
				
				$row = $result->fetch_assoc();
			
				$db_conn-> close();
				
				$_SESSION['id']=$row["id"];
				
				$_SESSION['name']=$row["name"];
				
				$_SESSION['surname']=$row["surname"];
				
				$_SESSION['username']=$row["username"];
				
				$_SESSION['password']=$row["password"];
				
				$_SESSION['email']=$row["email"];
				
				$_SESSION['persona']=$row["persona"];
				
				if($_SESSION['persona']=="employer")
				{
					$_SESSION['company_id']=$row["company_AFM"];
				}
				else if($_SESSION['persona']=="employee")
				{
					$_SESSION['employer_id']=$row["employer_AFM"];
					$_SESSION['start_suspension']=$row["start_suspension"];
					$_SESSION['end_suspension']=$row["start_suspension"];
					$_SESSION['start_remote']=$row["start_remote"];
					$_SESSION['end_remote']=$row["end_remote"];
				}

				echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Επιτυχής σύνδεση λογαριασμού')
				window.location.href='./index.php';
				</SCRIPT>");
			
				
			}
			else
			{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Μη επιτυχής σύνδεση λογαριασμού!Δώθηκαν λανθασμένα στοιχεία.')
					window.location.href='./signin.php';
					</SCRIPT>");
			}
			

			$db_conn-> close();

			
		}
	

	
?>

