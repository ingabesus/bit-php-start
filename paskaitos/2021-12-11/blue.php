<?php
    if(isset($_GET['redirect'])) {
        header('Location: ./red.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLUE</title>
</head>
<body>
    <a href="blue.php?redirect">BLUE REDIRECT</a>
</body>
</html>