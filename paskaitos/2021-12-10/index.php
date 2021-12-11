<?php

$color = 'black';

if(isset($_GET['color']) AND $_GET['color'] == 1) {
    $color = 'red';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $color; ?>">
    <a href="index.php">Juoda</a>
    <a href="index.php?color=1">Raudona</a>
    <br /><br />
    <!-- Anchor Points -->
    <a href="#pirmas">Pirmas</a>
    <a href="#antras">Pirmas</a>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <div id="pirmas">
        <h1>Pirmas divas</h1>
    </div>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <div id="antras">
        <h1>Antras divas</h1>
    </div>
</body>
</html>