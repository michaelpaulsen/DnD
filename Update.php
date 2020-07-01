<?php 
	include "SQLDB.php";
?>
<?php
	$data = [ ];
	foreach ($rows as $k){
		if(isset($_GET[$k])){
?>
<p class = updated >
<?php
			echo $k;
			$data[] = $_GET[$k]; 
		}
?>
</p>
<?php
	}
	//var_dump($data)
	DB_update($data,$conn)
?> 
