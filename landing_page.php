<?php
include "head.php";
$player = DB_getByName($_GET["player"],$conn);
?>
	<body>
<?php 
		<script>
			$(document).ready(()=>{
				console.log("ready");
				$("#Page_title").html("<?php echo $_GET["player"]?>'s player data");
				
				
			});
		</script>
	</body>
</html>