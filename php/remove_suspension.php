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
			
			
		
			if(isset($_POST['AFM'])&& '' !== $_POST['AFM']&&isset($_POST['name'])&& '' !== $_POST['name']&&isset($_POST['surname'])&& '' !== $_POST['surname']&&isset($_POST['email'])&& '' !== $_POST['email'])
			{
				
				
				$stmt = $db_conn->prepare("SELECT * FROM `users` WHERE `id` = ? AND name=? AND surname=? AND email=?");
				$stmt->bind_param("isss",$_POST['AFM'],$_POST['name'],$_POST['surname'],$_POST['email']);
				
			}
			else if($_POST['dropdown']!="not_selected")
			{
				$stmt = $db_conn->prepare("SELECT * FROM `users` WHERE `id` = ?");
				$int_id = (int)$_POST['dropdown'];
				$stmt->bind_param("i",$int_id);
				
				
			}
			else
			{
	
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Μη Επιτυχής Άρση Αναστολής Εργασίας!Δε δηλώθηκαν στοιχεία.')
					window.location.href='./remove_contractsuspension.php';
					</SCRIPT>");
				
			
				die('owow');
				
			}
			
			
			$stmt->execute();
			$result = $stmt->get_result();
				
			if ($result->num_rows > 0)
			{

			
		
				
				if(isset($_POST['AFM'])&& '' !== $_POST['AFM']&&isset($_POST['name'])&& '' !== $_POST['name']&&isset($_POST['surname'])&& '' !== $_POST['surname']&&isset($_POST['email'])&& '' !== $_POST['email'])
				{
					$sql = "UPDATE users SET start_suspension=NULL WHERE id='".$_POST["AFM"]."'";
					if ($db_conn->query($sql) != TRUE) {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Μη Επιτυχής Άρση Αναστολής Εργασίας')
						window.location.href='./remove_contractsuspension.php';
						</SCRIPT>");
					}
					
					$sql = "UPDATE users SET end_suspension=NULL WHERE id='".$_POST["AFM"]."'";
					if ($db_conn->query($sql) != TRUE) {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Μη Επιτυχής Άρση Αναστολής Εργασίας')
						window.location.href='./remove_contractsuspension.php';
						</SCRIPT>");
					}
				}
				else
				{
					$sql = "UPDATE users SET start_suspension=NULL WHERE id='".$int_id."'";
					if ($db_conn->query($sql) != TRUE) {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Μη Επιτυχής Άρση Αναστολής Εργασίας')
						window.location.href='./remove_contractsuspension.php';
						</SCRIPT>");
					}
					
					$sql = "UPDATE users SET end_suspension=NULL WHERE id='".$int_id."'";
					if ($db_conn->query($sql) != TRUE) {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Μη Επιτυχής Άρση Αναστολής Εργασίας')
						window.location.href='./remove_contractsuspension.php';
						</SCRIPT>");
					}
				}
				
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Επιτυχής Άρση Αναστολής Εργασίας')
					window.location.href='./remove_contractsuspension.php';
					</SCRIPT>");
				
				die();
				
				
			}
			else
			{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Μη Επιτυχής Άρση Αναστολής Εργασίας!Δώθηκαν λανθασμένα στοιχεία')
						window.location.href='./remove_contractsuspension.php';
						</SCRIPT>");
				die('owow');
			}
			
			

			$db_conn-> close();

			
		}
		else
		{
			
			$_POST=array();
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Μη Επιτυχής Άρση Αναστολής Εργασίας!Δε δηλώθηκαν στοιχεία.')
					window.location.href='./remove_contractsuspension.php';
					</SCRIPT>");
				
				die('owow');
		}
	

	
?>