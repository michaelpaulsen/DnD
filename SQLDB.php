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


function DB_getAll($conn){
	$ret = [ ];
	$query = 'select * from players'; 
	$result = $conn->query($query);
	$i = 0;
	while($row = $result->fetch_assoc()) {
		
		$ret[$i]['id'] = $row["Id"];
		$ret[$i]['Name'] = $row["Name"];
		$ret[$i]['Strength'] = $row["Strength"];
		$ret[$i]['Dexterity'] = $row["Dexterity"];
		$ret[$i]['Constitution'] = $row["Constitution"];
		$ret[$i]['Intelligence'] = $row["Intelligence"];
		$ret[$i]['Wisdom'] = $row["Wisdom"];
		$ret[$i]['Charisma'] = $row["Charisma"];
		$ret[$i]['HP'] = $row["HP"];
		$ret[$i]['AP'] = $row["AP"];
		$i++;
    }
	return $ret;
}
function DB_getByName($name, $conn){ 
	
	$ret = [ ];
	$query = "select * from players where Name = \"{$name}\""; 
	$result = $conn->query($query);
	$i = 0;
	while($row = $result->fetch_assoc()) {
		
		$ret[$i]['id'] = $row["Id"];
		$ret[$i]['Name'] = $row["Name"];
		$ret[$i]['Char_name'] = $row["Char_name"];
		$ret[$i]['Strength'] = $row["Strength"];
		$ret[$i]['Dexterity'] = $row["Dexterity"];
		$ret[$i]['Constitution'] = $row["Constitution"];
		$ret[$i]['Intelligence'] = $row["Intelligence"];
		$ret[$i]['Wisdom'] = $row["Wisdom"];
		$ret[$i]['Charisma'] = $row["Charisma"];
		$ret[$i]['HP'] = $row["HP"];
		$ret[$i]['AP'] = $row["AP"];
		$i++;
    }
	return $ret;
}
function DB_update($row, $newValue, $conditon){
	$query = 'UPDATE table_name SET ? = ? were ?'; 
	$stmt  = $conn->prepare($query);
	$stmt->bind_param('sss',$row,$newValue,$conditon);
	return mysqli_fetch_array($stmt->execute());
}
function DB_insert($arr,$conn){ 
	if(!isset($arr[7])){
		echo "<p class = \"error\">not enough prams passed expected 8</p> <br/>";
		return false;
	}
	$query = "INSERT into players (Name,Strength,Dexterity,Constitution,Intelligence,Wisdom,Charisma,HP,AP) VALUES(?,?,?,?,?,?,?,?,?)";
	$stmt  = $conn->prepare($query);
	$stmt->bind_param("siiiiiiii", $val0, $val1, $val2, $val3, $val4,$val5, $val6, $val7,$val7);
	
	$val0 = $arr[0];
	$val1 = $arr[1];
	$val2 = $arr[2];
	$val3 = $arr[3];
	$val4 = $arr[4];
	$val5 = $arr[5];
	$val6 = $arr[6];
	$val7 = $arr[7];
	/* Execute the statement */
	return ($stmt->execute());
}
$rows = ["Name","Char_name","Strength","Dexterity","Constitution","Intelligence","Wisdom","Charisma","HP","AP"];
?>