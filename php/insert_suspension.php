<?php    
 
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();

}




		


		
// Always start this first
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
					window.alert('Μη Επιτυχής Δήλωση Αναστολής Εργασίας!Δε δηλώθηκαν στοιχεία.')
					window.location.href='./contractsuspension.php';
					</SCRIPT>");
				
			
				die('owow');
				
			}
		
			$stmt->execute();
			$result = $stmt->get_result();

			if ($result->num_rows > 0)
			{
				
				
				$start_date = strtr($_POST['start_date'], '/', '-');
				$end_date = strtr($_POST['end_date'], '/', '-');
				
				
				$start_time = strtotime($start_date);
				$end_time = strtotime($end_date);

				$start_date = date('Y-m-d',$start_time);
				$end_date = date('Y-m-d',$end_time);
				
				
			
				if(isset($_POST['AFM'])&& '' !== $_POST['AFM']&&isset($_POST['name'])&& '' !== $_POST['name']&&isset($_POST['surname'])&& '' !== $_POST['surname']&&isset($_POST['email'])&& '' !== $_POST['email'])
				{
		
					$sql = "UPDATE users SET start_suspension='".$start_date."' WHERE id='".$_POST["AFM"]."'";
					if ($db_conn->query($sql) != TRUE) {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Μη Επιτυχής Δήλωση Αναστολής Εργασίας!')
						window.location.href='./contractsuspension.php';
						</SCRIPT>");
						die('owow');
					}
					
					$sql = "UPDATE users SET end_suspension='".$end_date."' WHERE id='".$_POST["AFM"]."'";
					if ($db_conn->query($sql) != TRUE) {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Μη Επιτυχής Δήλωση Αναστολής Εργασίας!')
						window.location.href='./contractsuspension.php';
						</SCRIPT>");
						die('owow');
					}
		
				}
				else
				{
					$sql = "UPDATE users SET start_suspension='".$start_date."' WHERE id='".$int_id."'";
					if ($db_conn->query($sql) != TRUE) {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Μη Επιτυχής Δήλωση Αναστολής Εργασίας!')
						window.location.href='./contractsuspension.php';
						</SCRIPT>");
						die('owow');
					}
					
					$sql = "UPDATE users SET end_suspension='".$end_date."' WHERE id='".$int_id."'";
					if ($db_conn->query($sql) != TRUE) {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Μη Επιτυχής Δήλωση Αναστολής Εργασίας!')
						window.location.href='./contractsuspension.php';
						</SCRIPT>");
						die('owow');
					}
				}
				
				
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Επιτυχής Δήλωση Αναστολής Εργασίας!')
					window.location.href='./contractsuspension.php';
					</SCRIPT>");
				die('owow');
				
				
			
			}
			else
			{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Μη Επιτυχής Δήλωση Αναστολής Εργασίας!Δώθηκαν λανθασμένα στοιχεία')
						window.location.href='./contractsuspension.php';
						</SCRIPT>");
				die('owow');
			}
			

			$db_conn-> close();

			
		}
		else
		{
			
			$_POST=array();
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Μη Επιτυχής Δήλωση Αναστολής Εργασίας!Δε δηλώθηκαν στοιχεία.')
					window.location.href='./contractsuspension.php';
					</SCRIPT>");
				
				die('owow');
		}
	

	
?>