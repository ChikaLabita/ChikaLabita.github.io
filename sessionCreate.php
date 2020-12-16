<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<body>
	<?php
		$_SESSION["favcolor"] = "green";
		$_SESSION["favanimal"] = "cat";
		echo "Session variabel are set.";
	?>
</body>
</html>