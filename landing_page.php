<?php
$player =  json_decode(file_get_contents('Players.Json'),true)[$_GET["player"]];
?>
<html>
	<head>
		<title> <?php echo $_GET["player"]?>'s player data </title>
	</head>
	<body>
		<h1> <?php echo $_GET["player"]?></h1>
<?php 
	foreach($player as $k => $v){
?> 	
	<p> 
<?php echo($k) ?>
		<input value= "<?php echo($v);?>" \>
	</p>
<?php }?>
	</body>
</html>