<?php
    $color = '';

    if( isset($_GET['color']) ) {
        $color = 'yellow';
    }

    if( isset($_POST['color']) ) {
        $color = 'green';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mygtukai</title>
</head>
<body style="background-color: <?php echo $color; ?>">
    <!-- Siunciam zalia spalva -->
    <form method="POST">
        <input type="hidden" name="color" />
        <button type="submit">Žalia</button>
    </form>
    <!-- Siunciam geltona -->
    <form method="GET">
        <input type="hidden" name="color" />
        <button type="submit">Geltona</button>
    </form>
</body>
</html>