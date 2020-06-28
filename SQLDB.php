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
 + function insert($arr){ 
	if(!isset(arr[6])){
		echo "<p class = \"error\">not enough prams passed expected 7</p> <br/>";
		return false;
	}
	$query = "INSERT into players (Name,Strength,Dexterity,Constitution,Intelligence,Wisdom,Charisma,HP,AP) VALUES(?,?,?,?,?,?,?,?)";
	$stmt = $mysqli->prepare($query);
	$stmt->bind_param("siiiiiii", $val1, $val2, $val3, $val4, $val5, $val6, $val7);
	$val1 = $arr[0];
	$val2 = $arr[1];
	$val3 = $arr[2];
	$val4 = $arr[3];
	$val5 = $arr[4];
	$val6 = $arr[5];
	$val7 = $arr[6];
	/* Execute the statement */
	$stmt->execute();
}
$rows = ["Name","Strength","Dexterity","Constitution","Intelligence","Wisdom","Charisma","HP","AP"];
?>