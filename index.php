<?php
	include "head.php";
	$result = DB_getAll($conn);
	//var_dump($result);
	$names = [];
	foreach($result as $k => $v){
		$names[] =  $result[$k]["Name"];
	}
	//var_dump($names)
?>
		<title>index</title>
	</head>
	<body>
		<form action = "landing_page.php" method ="get" >
			<select id="player" name = "player">
<?php
	foreach($names as $k){
?>
				<option value = "<?php echo $k?>"><?php echo $k?></option>
<?php
	}
?>

			</select>
			<button value="submit">submit</button>
		</form>
		
<?php include "footer.php";?>