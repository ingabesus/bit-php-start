<?php
    $color = 'black';
    $textColor = 'white';
    $showForm = true;

    if( isset($_POST['checkbox']) ) {

        $color = 'white';
        $textColor = 'black';
        $showForm = false;

        echo 'Pažymėtų varnelių kiekis: ' . count($_POST['checkbox']) . '<br />';
        echo 'Sugeneruotų varnelių kiekis: ' . $_POST['skaicius'] . '<br />';

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>
<body style="background-color: <?php echo $color; ?>; color: <?php echo $textColor; ?>;">
    
    <?php if($showForm) : ?>

        <form method="POST">
            <ul>
                <?php
                    $skaicius = rand(3, 10);
                    $alfabetas = 'ABCDEFHIYJ';
                    for($i = 0; $i < $skaicius; $i++) :
                ?>
                <li>
                    <label>
                        <input type="checkbox" name="checkbox[]" value="1" />
                        <?php echo $alfabetas[$i]; ?>
                    </label>
                </li>
                <?php endfor; ?>
            </ul>
            <input type="hidden" name="skaicius" value="<?php echo $skaicius; ?>" />
            <button type="submit">Siųsti</button>
        </form>
    
    <?php endif; ?>

</body>
</html>