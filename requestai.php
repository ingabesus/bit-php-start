<?php
//$_GET
//$_POST

if( isset($_GET['skaicius']) ) {
    print_r($_GET['skaicius']);
}

?>

<form method="GET" action="">
    <input type="number" name="skaicius[skaicius1]" value="" />
    <input type="number" name="skaicius[skaicius2]" value="" />
    <input type="number" name="skaicius[skaicius3]" value="" />
    <input type="number" name="skaicius[skaicius4]" value="" />
    <button type="submit">Siusti</button>
</form>