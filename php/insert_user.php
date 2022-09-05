<?php    
 
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}
 
		
	if((!empty($_POST))){  


		$user = 'root'; //sxolia
		$pass = '';
		$db='ypakp_database';

		$db_conn=new mysqli('localhost',$user,$pass,$db);

		if ($db_conn->connect_error) {
			die("Connection failed: " . $db_conn->connect_error);
			echo "error";
		} 
		
		
	//	$id="$_POST['AFM']";
	
        // $sql = "INSERT INTO users (id) VALUES (?)";
        // if (!$stmt = $db_conn->prepare($sql))
            // die('Query failed: ');

        // if (!$stmt->bind_param('s',$_POST['AFM']))
            // die('Bind Param failed: ' );

        // if (!$stmt->execute())
                // die($stmt->error);

        // echo "Record added";
        // $stmt->close();
        // $db_conn->close();
		
/*		if(isset($_POST["employer_AFM"]))
		{
		
			$sql = "INSERT INTO users (id, name,surname,email,username,password,employer_AFM)
		VALUES ('".$_POST["AFM"]."', '".$_POST["name"]."' , '".$_POST["surname"]."', '".$_POST["email"]."', '".$_POST["username"]."', '".$_POST["password"]."','".$_POST["employer_AFM"]."')";
		}
		elseif (isset($_POST["company_AFM"]))
		{
			$sql = "INSERT INTO users (id, name,surname,email,username,password,company_AFM)
		VALUES ('".$_POST["AFM"]."', '".$_POST["name"]."' , '".$_POST["surname"]."', '".$_POST["email"]."', '".$_POST["username"]."', '".$_POST["password"]."','".$_POST["company_AFM"]."')";
		}
		else
		{*/
	
	
		if(!(isset($_POST['AFM'])&& '' !== $_POST['AFM']&&isset($_POST['name'])&& '' !== $_POST['name']&&isset($_POST['surname'])&& '' !== $_POST['surname']&&isset($_POST['email'])&& '' !== $_POST['email']&&isset($_POST['password'])&& '' !== $_POST['password']&&isset($_POST['password2'])&& '' !== $_POST['password2']))
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Μη Επιτυχής δημιουργία λογαριασμού!Ανεπαρκή στοιχεία.')
			window.location.href='./signup.php';
			</SCRIPT>");
		}
		if(strlen($_POST['AFM'])!=9)
		{
			
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Μη Επιτυχής δημιουργία λογαριασμού!Μη έγκυρο προσωπικο ΑΦΜ.')
			window.location.href='./signup.php';
			</SCRIPT>");
		}
		
	
	
		if($_POST['password']!=$_POST['password2'])
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Μη Επιτυχής δημιουργία λογαριασμού!Λανθασμένη επαλήθευση κωδικού.')
			window.location.href='./signup.php';
			</SCRIPT>");
		}
		
		
		if(strcmp($_POST["persona"],"employer")==0)
		{
			
			if(!(isset($_POST['company_AFM'])&& strlen($_POST['company_AFM'])==9))
			{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Μη Επιτυχής δημιουργία λογαριασμού!Μη έγκυρο ΑΦΜ εταιρείας.')
				window.location.href='./signup.php';
				</SCRIPT>");
			}
			
			$sql = "INSERT INTO users (id, name,surname,email,username,password,persona,company_AFM)
			VALUES ('".$_POST["AFM"]."', '".$_POST["name"]."' , '".$_POST["surname"]."', '".$_POST["email"]."', '".$_POST["username"]."', '".$_POST["password"]."','".$_POST["persona"]."','".$_POST["company_AFM"]."')";
		}
		elseif(strcmp($_POST["persona"],"employee")==0)
		{
			if(!(isset($_POST['employer_AFM'])&& strlen($_POST['employer_AFM'])==9))
			{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Μη Επιτυχής δημιουργία λογαριασμού!Μη έγκυρο ΑΦΜ εργοδότη.')
				window.location.href='./signup.php';
				</SCRIPT>");
			}
			
			$sql = "INSERT INTO users (id, name,surname,email,username,password,persona,employer_AFM)
			VALUES ('".$_POST["AFM"]."', '".$_POST["name"]."' , '".$_POST["surname"]."', '".$_POST["email"]."', '".$_POST["username"]."', '".$_POST["password"]."','".$_POST["persona"]."','".$_POST["employer_AFM"]."')";
		}
		else
		{
			$sql = "INSERT INTO users (id, name,surname,email,username,password,persona)
			VALUES ('".$_POST["AFM"]."', '".$_POST["name"]."' , '".$_POST["surname"]."', '".$_POST["email"]."', '".$_POST["username"]."', '".$_POST["password"]."','".$_POST["persona"]."')";
		}
		
		
		$stmt = $db_conn->prepare("SELECT * FROM `users` WHERE `id` = ?");
		$int_id = (int)$_POST['AFM'];
		$stmt->bind_param("i",$int_id);
		
			
		$stmt->execute();
		$result = $stmt->get_result();

		
		if ($result->num_rows > 0)
		{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Μη Επιτυχής δημιουργία λογαριασμού!Το προσωπικό ΑΦΜ έχει δηλωθεί σε άλλο λογαριασμό.')
				window.location.href='./signup.php';
				</SCRIPT>");
		}
		
		$stmt = $db_conn->prepare("SELECT * FROM `users` WHERE `email` = ?");
		$stmt->bind_param("s",$_POST['email']);
		$stmt->execute();
		$result = $stmt->get_result();

		
		if ($result->num_rows > 0)
		{
	
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Μη Επιτυχής δημιουργία λογαριασμού!Η ηλεκτρονική διεύθυνση έχει δηλωθεί σε άλλο λογαριασμό.')
			window.location.href='./signup.php';
			</SCRIPT>");
		
		}

		if ($db_conn->query($sql) === TRUE) {
			
		//	$_SESSION['id']=$_POST["AFM"];
		//	unset($_POST["company_AFM"]);
			$_POST = array();
				
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Επιτυχής δημιουργία λογαριασμού')
			window.location.href='./index.php';
			</SCRIPT>");
		} 
		else {
		 echo "Error: " . $sql . "<br>" . $db_conn->error;
		}


		// $stmt = mysqli_prepare($query);
		
		// $stmt->bind_param("sss", $_POST['username'], $_POST['password'], $_POST['email'],$_POST['persona'],$_POST['AFM'],$_POST['name'],$_POST['surname']);
		
		// $stmt->execute();
	}    
?>
