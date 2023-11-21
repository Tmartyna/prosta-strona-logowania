<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
    <style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}



.login-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    
    $correctUsername = "admin";
    $correctPassword = "test";

  
    if ($enteredUsername == $correctUsername && $enteredPassword == $correctPassword) {
        echo "<p>Logowanie zostało przeprowadzone pomyślnie</p>";
    } else {
        echo "<p>Złe dane logowania. Sprawdź login lub hasło</p>";
    }
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="login-form">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>