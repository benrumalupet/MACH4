<?php

include  "index.php";
$msg = "";
if (isset($_POST['submit'])) {
  // Get username and password from form
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Check if username and password match
  for ($i = 0; $i < $ctr; $i++) {
    if ($username == $ema[$i] && $password == $pas[$i]) {
      $found = true;
      break;
    }
  }

  if ($found) {
    $_SESSION["username"] = $name[$i];
    header("Location: profile.php");
  } else {
    echo "Invalid username or password";
    header("Location: register.html");
  }
}
?>
