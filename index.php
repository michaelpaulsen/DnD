<?php include "head.php"?>
		<title>index</title>
	</head>
	<body>
		<?php foreach( json_decode(file_get_contents('Players.Json')) as $name => $k){
			echo($name);
		}?>
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
<?php include "footer.php"?> 