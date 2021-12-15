<?php
    $db = file_get_contents('./db.json');
    $db = json_decode($db, true); 

    if( isset($_GET['id']) ) {
        $id = $_GET['id'];

        if(count($db[$id]) > 0) {
            $preke = $db[$id];   
        }
    } else {
        header('Location: ./index.php');
    }

    if( isset($_POST['preke']) ) {
        if(
            $_POST['preke']['prekes_pavadinimas'] != '' AND
            $_POST['preke']['kaina'] != '' AND
            $_POST['preke']['kiekis'] != ''
        ) {
            
            $db[$id]['prekes_pavadinimas'] = $_POST['preke']['prekes_pavadinimas'];
            $db[$id]['kaina'] = $_POST['preke']['kaina'];
            $db[$id]['kiekis'] = $_POST['preke']['kiekis'];
            
            if( file_put_contents( './db.json', json_encode($db) ) ) {
                header('Location: ./index.php?status=5');
            } else {
                header('Location: ./index.php?status=4');
            }
        }

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

                    <h2>Prekės redagavimas</h2>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <form method="POST" action="">
                            <div class="row g-3">

                                <div class="col-sm-8">
                                    <label class="form-label">Prekės pavadinimas</label>
                                    <input type="text" class="form-control" 
                                    name="preke[prekes_pavadinimas]" value="<?php echo $preke['prekes_pavadinimas']; ?>" />
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Prekės kainą</label>
                                    <input type="text" class="form-control" 
                                    name="preke[kaina]" value="<?php echo $preke['kaina']; ?>" />
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Prekių kiekis</label>
                                    <input type="number" name="preke[kiekis]" 
                                    class="form-control" value="<?php echo $preke['kiekis']; ?>" />
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
