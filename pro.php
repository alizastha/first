
<html>
	<title>
	</title>
	<script type="text/javascript">
		function myfunction(){
			console.log("button working");
			//document.forms["myform"]["fname"].value = "SHrestha";
			document.getElementById("picture").src = "aliza.jpg";
		}

	</script>
	<body>
		
		<form name="myform" onsubmit="myfunction()">
		Name: <input type="text" value="Aliza" name="fname" />
		<?php echo '<input type="submit" value="submitt"/>'; ?>
		<?php
			echo '<img src="maxresdefault.png" id="picture" width="100" height="100">';
		?>
		</form>
		
	</body>
</html>


