<?php
$userID = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot or change password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        form {
            margin: 50px auto;
            max-width: 400px;
            padding: 40px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        input[type=password] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }
        
        input[type=submit] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <!-- HTML form for the change password page -->
    <form method="POST" action="changePass.php?id=<?php echo $userID; ?>">
        <label for="cpass">Current Password:</label>
        <input type="password" name="cpass" required>

        <label for="newpass">New Password:</label>
        <input type="password" name="newpass" required>

        <input type="submit" name="submit" value="Reset Password">
    </form>
</body>
</html>
