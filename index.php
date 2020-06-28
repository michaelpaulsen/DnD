
<html>
	<head>
		<title>index</title>
	</head>
	<body>
		<form action = "landing_page.php" method ="get" >
			<select id="player" name = "player">
<?php 
foreach( json_decode(file_get_contents('Players.Json')) as $name => $k){
			echo ("<option value = \"{$name}\"> {$name} </option>");
}
?>'
			</select>
			<button value="submit">submit</button>
		</form>
	</body>
</html>
