<?php
session_start();

$name = $_SESSION['username'];

?>



<!DOCTYPE html>
<body>
<h1 style = "text-align: right;">Welcome!,<?php echo $name ?></h1>
<h1>Profile Page</h1>

<a href="product.php">Product</a>
<a href="log.php">Log Out</a>
</html>
</body>