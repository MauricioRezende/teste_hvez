<?php
	include_once "header.php";
	include_once "conf/connection.php";

	$key = $_GET["key"];

	$sql = "INSERT INTO favorite_activity (key_activity, date) VALUES (" . $key . ",NOW())";

	if ($conn->query($sql) === TRUE) {
	    ?>
		<script type="text/javascript">
	    	swal("Successfully added!").then((value) => {
				  window.location = "my_favorites.php";
			});
	    </script>
	    <?php
	} else {
		?>
		<script type="text/javascript">
	    	swal("Error: <?php echo $sql . '<br />' . $conn->error; ?>").then((value) => {});
	    </script>
	    <?php
	}

	$conn->close();

	include_once "footer.php";
?>