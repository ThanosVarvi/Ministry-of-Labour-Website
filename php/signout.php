<?php    
session_start();
session_destroy();
session_unset();
$_SESSION = array();
echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Επιτυχής Αποσύνδεση λογαριασμού')
					window.location.href='./index.php';
					</SCRIPT>");
?>