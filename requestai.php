<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout example · Bootstrap v5.1</title>
    <!-- Bootstrap CDN nuoroda -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom stiliu failas -->
    <link href="assets/css/custom.css" rel="stylesheet">
  </head>
  <body class="bg-light">
        <div class="container container-small">
            <main>
                <div class="py-5 text-center">
                <h2>Prekių administratorius</h2>
                    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
                </div>

                <?php
                    ini_set('display_errors', true);
                    error_reporting(E_ALL);
                    //$_GET
                    //$_POST
                    //echo '<pre>';
                    //print_r($_GET);
                    //Sumuojame perduodamas reiksmes

                    if( isset($_GET['skaicius']) AND is_array($_GET['skaicius']) ) {

                        $suma = 0;

                        foreach($_GET['skaicius'] as $skaicius) {
                            
                            if(is_numeric($skaicius)) {
                                $suma += $skaicius;
                            }

                        }

                        echo 'Gautas rezultatas is visu laukeliu yra: ' . $suma;

                    }

                ?>

                <div class="row">
                <div class="col-lg-12">
                    <form method="GET" action="">
                        <div class="row g-3">

                            <?php 
                                for($i = 0; $i < 10; $i++) : 
                                $pavadinimas = $_GET['prekes'][$i]['prekes_pavadinimas'];
                                $skaicius = $_GET['prekes'][$i]['skaicius'];
                            ?>

                            <div class="col-sm-9">
                                <label class="form-label">Prekės pavadinimas</label>
                                <input type="text" class="form-control" 
                                name="prekes[<?php echo $i; ?>][prekes_pavadinimas]" 
                                value="<?php echo $pavadinimas; ?>" />
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Prekių kiekis</label>
                                <input type="number" name="prekes[<?php echo $i; ?>][skaicius]" 
                                class="form-control" value="<?php echo $skaicius; ?>" />
                            </div>

                            <?php endfor; ?>
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
