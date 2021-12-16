<?php session_start();

    if(!isset($_SESSION['UserData']['Username']))
    {
        header("location:login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
</head>
<body>
    <h1>Welcome, You successfully loged in.</h1>
</body>
</html>



