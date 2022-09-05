<?php

$user = 'root'; //sxolia
$pass = '';
$db='ypakp_database';

$db_conn=new mysqli('localhost',$user,$pass,$db);

if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
    echo "error";
} 


// $sql = "INSERT INTO users (id, name, surname,username,password)
// VALUES ('12', 'kouradas', 'malakas','sdi14545','2348928f')";

// if ($db_conn->query($sql) === TRUE) {
 // echo "New record created successfully";
// } 
// else {
 // echo "Error: " . $sql . "<br>" . $db_conn->error;
// }


// $sql = "SELECT * from users";

// $result = $db_conn->query($sql);


// $row=array();
// while($row[] = $result->fetch_array(MYSQLI_ASSOC));

// print_r( $row);

// echo $row["id"] . '<br/>';

// $db_conn-> close();



?>


?>