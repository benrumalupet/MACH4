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

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #BFE3DA;
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
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 20px;
            border-color: black;
        }

        .form-input {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        label {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        input:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 25%;
            border-radius: 20px;
            border: solid;
        }

        button:hover {
            background-color: #3e8e41;
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
                <img src="robot.png" width="100" height="100">
            </div>
            <div class="form-input">
                <label for="email"></label>
                <input type="text" id="username" name="username" placeholder="Email">
            </div>
            <div class="form-input">
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" name="submit">Login</button>
            <button type="clear" name="clear">Clear</button>
        </form>
</body>

</html>