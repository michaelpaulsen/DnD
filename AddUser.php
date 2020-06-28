<html>
	<head>
	</head>
	<body>
		<?php 
	include "SQLDB.php";
	if(!empty($_POST)):
		foreach($rows as $k){ 
		var_dump($_POST[$k]);
		}
	else:
?>
		<form method = "POST">
<?php
	foreach($rows as $r){ 
?>
	<p> <?php echo $r ?> 
	<input name ="<?php echo $r?>" type ="<?php 
if($r != "Name"){ 
	echo "number";
}else{ 
	echo "text";
}
?>" \>
	</p>
<?php
	}
?>
			<button type=submit> submit</button>
		</form>
<?php endif?>
	</body>
</html>