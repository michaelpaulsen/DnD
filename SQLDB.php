<?php
$servername = "localhost";
$username = "DnD_admin";
$password = "password";
$dbname = "dnd_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

 }
 function insert($val1, $val2, $val3, $val4, $val5, $val6, $val7){ 
	$query = "INSERT into players (Name,Strength,Dexterity,Constitution,Intelligence,Wisdom,Charisma,HP,AP) VALUES(?,?,?,?,?,?,?,?)";
	$stmt = $mysqli->prepare($query);
	$stmt->bind_param("siiiiiii", $val1, $val2, $val3, $val4, $val5, $val6, $val7);
	/* Execute the statement */
	$stmt->execute();
}
$rows = ["Name","Strength","Dexterity","Constitution","Intelligence","Wisdom","Charisma","HP","AP"];
?>