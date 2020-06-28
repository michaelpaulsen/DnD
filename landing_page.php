<?php
include "head.php";
$player = DB_getByName($_GET["player"],$conn);
?>
	<body>
		<h1><?php echo $_GET["player"]?>'s player data</h1>
<?php 
	foreach($player as $k => $v ){ 
		foreach($player[$k] as $kk => $vv){
			if($kk != "id"){ 
				$str = "<p class = \"".$kk."\">" . $kk .": <input  name = \"" .$kk."\" value =\"".$vv."\"";
				$str .= $kk == "Name" ? ("type=\"text\""):("type=\"Number\"");
				$str .= "/></p>";
				echo($str);
			}
		}	
	}
?>
		<script>
			$(document).ready(()=>{
				console.log("ready");
				$("#Page_title").html("<?php echo $_GET["player"]?>'s player data");
				
				
			});
		</script>
	</body>
</html>