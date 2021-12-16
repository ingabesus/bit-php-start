<?php

    if( isset($_GET['action']) AND $_GET['action'] == 'test') {
        print_r($_POST);
        exit();
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

                <div class="py-5 text-center">

                    <h2>Prekiu pridėjimas</h2>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <form method="POST" id="pridetiPreke" action="">
                            <div class="row g-3">

                                <div class="col-sm-8">
                                    <label class="form-label">Prekės pavadinimas</label>
                                    <input type="text" class="form-control" 
                                    name="prekes[prekes_pavadinimas]" value="" />
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Prekės kainą</label>
                                    <input type="text" class="form-control" 
                                    name="prekes[kaina]" value="" />
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Prekių kiekis</label>
                                    <input type="number" name="prekes[kiekis]" 
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
        <script src="assets/js/custom.js"></script>
    </body>
</html>
