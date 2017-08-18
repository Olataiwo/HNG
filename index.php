<?php

include "connect.php";


$stmt = $conn->prepare("SELECT * FROM users");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_BOTH);


?>


<html>

	<header>
		<title></title>
	</header>

	<body>
		<?php echo "welcome"." ".$row[1] ?>
	</body>

</html>