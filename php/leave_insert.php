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

    
    if(!(isset($_POST['id'])&& '' !== $_POST['id']&&isset($_POST['name'])&& '' !== $_POST['name']&&isset($_POST['surname'])&& '' !== $_POST['surname'])){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Μη Επιτυχής Αίτηση Άδειας ειδικού σκοπού! Δε δηλώθηκαν επαρκή στοιχεία.')
					window.location.href='./leave.php';
					</SCRIPT>");
    }
    
    $stmt = $db_conn->prepare("SELECT * FROM `users` WHERE `id` = ? AND name=? AND surname=?");
    $int_id = (int)$_POST['id'];
    $stmt->bind_param("iss",$int_id,$_POST['name'],$_POST['surname']);
    
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0){
        $sql = "UPDATE users SET special_leave=1 WHERE id='".$_POST["id"]."'";
					if ($db_conn->query($sql) != TRUE) {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Μη Επιτυχής Aίτηση Άδειας Ειδικού Σκοπού!')
						window.location.href='./leave.php';
						</SCRIPT>");
						die('owow');
                    }
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Επιτυχής Aίτηση Άδειας Ειδικού Σκοπού!')
					window.location.href='./leave.php';
					</SCRIPT>");
				    die('owow');
    }
}

?>