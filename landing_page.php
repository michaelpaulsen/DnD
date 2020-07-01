<?php
include "head.php";
$player = DB_getByName($_GET["player"],$conn);
?>
	<body>
		<h1><?php echo $_GET["player"]?>'s player data</h1>
		<form id = "form_main">
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
			<button type = "submit" id = "submit_btn" >submit</button>
		</form>
		<script>
			$(document).ready(()=>{
				console.log("ready");
				let data = $("#form_main").serialize();
				$("#Page_title").html("<?php echo $_GET["player"]?>'s player data");
				$("#form_main").submit((e)=>{
					console.log("test");
					e.preventDefault();
					$.ajax({ url:"Update.php",method: "GET",data:data});
			});
			});
		</script>
	</body>
</html>