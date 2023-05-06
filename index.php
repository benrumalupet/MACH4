<?php
session_start();
$name = array("Sam Espino", "Shae Smith", "Third Lee");
$ema = array("sam@gmail.com", "shae@gmail.com", "third@gmail.com");
$pas = array("secret1", "secret2", "secret3");
$found = false;
$ctr = 3;
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>MyyyAppp</title>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #cfe8e7;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .wrapper {
            text-align: center;
            width: 80vh;
        }

        .imgcontainer {
            text-align: center;
            margin-bottom: 5vh;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        input[type=text],
        input[type=password] {
            border-radius: 20px;
            border-width: 2px;
            width: 95%;
            height: 50px;
            padding-left: 20px;
        
        }

        input[type=text]:focus,
        input[type=password]:focus {
            border-color: #296fc7;
            outline: none;
            border-width: 2px;
            box-shadow: 0 0 5px #104d9b;
            border-radius: 20px;
            width: 95%;
            height: 50px;
        }

        .form-input {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        label {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        button {
            background-color: #0b847b;
            color: white;
            padding: 1rem;
            font-size: 1rem;
            border: none;
            width: 200px;
            border-radius: 20px;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .form-footer a {
            font-size: 16px;
            text-decoration: none;
            color: #0077cc;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <form method="post" action="login.php">
            <div class="imgcontainer">
                <img src="robot.png" width="150" height="150">
            </div>
            <div class="form-input">
                <label for="email"></label>
                <input type="text" id="username" name="username" placeholder="Email Address" required>
            </div>
            <div class="form-input">
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="submit">Login</button>
            <button type="clear" name="clear" >Clear</button>
        </form>
        <script>
            function clearInputs() {
                document.getElementById("email").value = "";
                document.getElementById("password").value = "";
                document.getElementById("name").value = "";
            }
        </script>
</body>

</html>