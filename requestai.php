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

                    <div class="text-start">
                        <?php
                            ini_set('display_errors', true);
                            error_reporting(E_ALL);
                            //$_GET
                            //$_POST
                            //echo '<pre>';
                            //print_r($_GET);
                            //echo '</pre>';
                            //Sumuojame perduodamas reiksmes

                            if( isset($_GET['prekes']) AND is_array($_GET['prekes']) 
                                AND count($_GET['prekes']) > 0) :
                            ?>
                            
                            <table class="table">
                                <thead>
                                    <th>Prekės pavadinimas</th>
                                    <th>Kiekis</th>
                                </thead>
                                <tbody>

                                <?php
                                    $suma = 0;
                                    
                                    //echo '<pre>';

                                    foreach($_GET['prekes'] as $preke) {
                                        
                                        //print_r($preke);
                                        
                                        if( is_array($preke) ) {

                                            if($preke['prekes_pavadinimas'] != '' 
                                                AND $preke['skaicius'] != '') {
                                        
                                        
                                            echo '<tr>';
                                                echo '<td>' . $preke['prekes_pavadinimas'] . '</td>';
                                                echo '<td>' . $preke['skaicius'] . '</td>';
                                            echo '</tr>';

                                            }

                                            if( is_numeric($preke['skaicius']) ) {
                                                $suma += $preke['skaicius'];
                                            }
                                        
                                        }

                                    }

                                ?>

                                </tbody>
                            </table>

                            <?php echo '<p class="lead">Gautas rezultatas is visu laukeliu yra: ' . $suma . '</p>'; ?>
                           
                            <?php endif; ?>

                    </div>
                    
                </div>

                <div class="row">
                <div class="col-lg-12">
                    <form method="GET" action="">
                        <div class="row g-3">

                            <?php 
                                for($i = 0; $i < 10; $i++) : 
                                
                                $pavadinimas = "";
                                $skaicius    = ""; 

                                if(isset($_GET['prekes'][$i]['prekes_pavadinimas'])) {
                                    $pavadinimas = $_GET['prekes'][$i]['prekes_pavadinimas'];
                                }

                                if(isset($_GET['prekes'][$i]['skaicius'])) {
                                    $skaicius = $_GET['prekes'][$i]['skaicius'];
                                }
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
