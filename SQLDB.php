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
function DB_insert($arr,$conn){ 
	if(!isset($arr[7])){
		echo "<p class = \"error\">not enough prams passed expected 8</p> <br/>";
		return false;
	}
	$query = "INSERT into players (Name,Strength,Dexterity,Constitution,Intelligence,Wisdom,Charisma,HP,AP) VALUES(?,?,?,?,?,?,?,?,?)";
	$stmt  = $conn->prepare($query);
	$stmt->bind_param("siiiiiiii", $val0, $val1, $val2, $val3, $val4,$val5, $val6, $val7,$val7);
	foreach($arr as $k){ 
		var_dump($k);
	}
	$val0 = $arr[0];
	$val1 = $arr[1];
	$val2 = $arr[2];
	$val3 = $arr[3];
	$val4 = $arr[4];
	$val5 = $arr[5];
	$val6 = $arr[6];
	$val7 = $arr[7];
	/* Execute the statement */
	return $stmt->execute();
}
$rows = ["Name","Strength","Dexterity","Constitution","Intelligence","Wisdom","Charisma","HP","AP"];
?>