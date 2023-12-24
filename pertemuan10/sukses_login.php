<?php
session_start();

if (!isset($_SESSION['username'])){
    header("location: index.php");
    exit();//Terminate script execution after the redirect
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Fixed typo in "device-width" -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil login</title>
</head>
<body>
    <div class="container-logout">
        <form action="logout.php" method="POST" class="login-email">
            <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
            <div class="input-group"> <!-- Fixed class name typo -->
                <button type="submit" class="btn">Logout</button>
            </div>
        </form>
    </div>
</body>
</html>