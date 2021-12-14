<?php 
define('BASE_DIR', __DIR__);

if( isset($_GET['prekes']) ) {

    $db = file_get_contents('./db.json');

    $db = json_decode($db); 

    $prekes = $_GET['prekes'];

    if($db) {
        $prekes = array_merge($db, $prekes);
    }

    $json = json_encode($prekes);

    file_put_contents('./db.json', $json);

    header('Location: index.php?status=1');

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prekiu issaugojimas</title>
    <!-- Bootstrap CDN nuoroda -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom stiliu failas -->
    <link href="assets/css/custom.css" rel="stylesheet">
  </head>
  <body class="bg-light">
        <div class="container container-small">
            <main>  
                <h1>Prekiu pridėjimas</h1>

                <div class="alert alert-success" role="alert">
                    <?php
                        if( isset($_GET['status']) AND $_GET['status'] == 1) {
                            echo 'Prekės sėkmingai pridėtos';
                        }
                    ?>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <form method="GET" action="">
                            <div class="row g-3">

                                <div class="col-sm-8">
                                    <label class="form-label">Prekės pavadinimas</label>
                                    <input type="text" class="form-control" 
                                    name="prekes[][prekes_pavadinimas]" value="" />
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Prekės kainą</label>
                                    <input type="text" class="form-control" 
                                    name="prekes[][kaina]" value="" />
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Prekių kiekis</label>
                                    <input type="number" name="prekes[][kiekis]" 
                                    class="form-control" value="" />
                                </div>
                            </div>
                            <div class="mt-5 mb-5">
                                <button class="w-100 btn btn-primary btn-lg" type="submit">Siųsti duomenis</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
