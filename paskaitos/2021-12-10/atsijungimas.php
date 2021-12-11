<?php 

function is_param_equal($method, $key, $comparison) {
    
    if(isset($method[$key]) && $method[$key] ==  $comparison) {
        return true;
    } else {
        return false;
    }
}

session_start(); //Paleidzia php sesija
//Galim irasineti i $_SESSION masyva duomenis

$auth = [
    'login' => 'admin@php.lt',
    'password' => 'labas1234'
]; //Masyvas kuriame nurodyti teisingi prisijungimo duomenys

$logged_in = false; //Kintamasis kuriuo tikriname ar vartotojas yra prisijunges

if( is_param_equal($_POST, 'login', 1) ) { //Tikriname su funkcija aprasyta 12-oje eiluteje, ar gaunamas $_POST parametras
    
    //Tikriname ar gavome reiksme email ir tikriname ar tai el pasto adresas
    if( isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) { 

        //Tikriname ar el pasto adresas yra teisingas
        if( $_POST['email'] == $auth['login']) {

            //Tikriname ar ivestas slaptazodis ir ar slaptazodis yra tinkamas
            if( isset($_POST['password']) AND md5($_POST['password']) == md5($auth['password']) ) {

                $_SESSION['logged_in'] = true;
                $_SESSION['user'] = $auth['login'];

            }

        }

    }

}

//if(isset($_POST['logout']) && $_POST['logout'] == 1) { 

if( is_param_equal($_POST, 'logout', 1) ) { 

    session_destroy();
    header('Location: ./atsijungimas.php');

}

//Jeigu $_SESSION['logged_in'] silirtas ir turi reiksme true, tuomet prie kintamojo priskiriam reiksme true
if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in']) {

    $logged_in = true;

}


//Tikriname ar varotojas prisijunges, jeigu ne rodome login forma
if(!$logged_in) : ?>

    <main class="form-signin text-center">
        <form method="POST">
            <h1 class="h3 mb-3 fw-normal">Prašome prisijungti</h1>
            <input type="hidden" name="login" value="1"/>
            <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>

<?php else: ?>

    <h1>Sekmingai prisijungete</h1>

    Sveiki, <?php echo $_SESSION['user']; ?>

    <div>
        <form method="POST">
            <input type="hidden" name="logout" value="1" />
            <button type="submit">Atsijungti</button>
        </form> 
    </div>

                
<?php endif; ?>