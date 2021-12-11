<?php 
    $color = '';
    if(isset($_GET['spalva'])) {
        $color = $_GET['spalva'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spalva</title>
</head>
<body style="background-color: #<?php echo $color; ?>">
    <form method="GET">
        <input name="spalva" value="" />
        <button type="submit">Keisti spalvą</button>
    </form>
</body>
</html>