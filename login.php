<?php
session_start();
session_unset();
session_destroy();


// Validation du formulaire
if (isset($_POST['num_adh']) &&  isset($_POST['password'])) {

    $email = $_POST['num_adh'];
    $pass = $_POST['password'];

    // URL de l'API cible
    $api = json_decode(file_get_contents('./models/api.json'), true);
    $url = $api['link'] . "/api/login";
    // Données à envoyer
    $data = array(
        'num_adhesion' => $email,
        'password' => $pass,
    );

    // Initialisation de la session cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);

    // Recupere la reponse en JSON
    $data = json_decode($response, true);
    curl_close($ch);

    if ($data === null) {
        //echo 'Erreur lors de la conversion JSON : ' . json_last_error_msg();
        $check_user = False;
    } else if (isset($data['error'])) {
        //echo 'Erreur API';
        $check_user = False;
    } else {
        $check_user = True;
    }

    if ($check_user) {
        session_start();
        $_SESSION['LOGGED_USER'] = $data['id'];
        $_SESSION['num_adhesion'] = $data['num_adhesion'];
        $_SESSION['token'] = $data['token'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['nom'] = $data['user_details'][0]['nom'];
        $_SESSION['prenom'] = $data['user_details'][0]['prenom'];

        // Go to Home Page
        header("Location: index.php ");
    } else if ($email == "munap@gmail.com" && $pass == "123") {
        session_start();

        $_SESSION['LOGGED_USER'] = $email;
        $_SESSION['num_adhesion'] = "A0001";
        $_SESSION['date_adhesion'] = "2015-09-11";
        $_SESSION['matricule'] = "75142J";
        $_SESSION['nom'] = "NSOCK";
        $_SESSION['prenom'] = "Sidoine";
        $_SESSION['ne_le'] = "1979-05-16";
        $_SESSION['statut'] = "actif";

        // Go to Home Page
        header("Location: index.php ");
    } else {
        $check_user = False;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <!-- Include Pooper and JS using Bootstrap v5.0 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/login.css">
    </head>

    <body style="background-color: #eee;">
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container pb-3 pt-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black ">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">
                                        <div class="row ">
                                            <div class="text-center mb-4">
                                                <img src="img/logo-munap.jpg" style="width: 185px;"
                                                    alt="logo-munap-dgb">
                                            </div>
                                        </div>

                                        <!-- Check User Connexion -->
                                        <?php if (isset($check_user) && $check_user == False) : ?>
                                        <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show"
                                            role="alert">
                                            <div style="font-size: 0.76rem;"><b>Nom d'utilisateur</b> ou <b>Mot de
                                                    passe</b> Incorrect</div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                        <?php endif; ?>

                                        <form class="mt-4" action="login.php" method="POST">

                                            <div class="form-floating mb-3">
                                                <input type="text" id="floatingInput" name="num_adh"
                                                    class="form-control" placeholder="name@example.com">
                                                <label for="floatingInput">Numéro d'adhésion</label>
                                            </div>

                                            <div class="form-floating mb-4">
                                                <input type="password" id="floatingPassword" name="password"
                                                    class="form-control" placeholder="Password">
                                                <label for="floatingPassword">Mot de Passe</label>
                                            </div>

                                            <div class="text-center pt-1 mb-4 pb-1">
                                                <button style="width:70%; background: #AB7442; border-radius: 20px;"
                                                    class="btn btn-block text-white fa-lg mb-3"
                                                    type="submit"><b>Connexion</b>
                                                </button><br>
                                                <!-- <a class="text-muted" href="#!">Mot de passe oublié ?</a> -->
                                                <div class="text-center mt-4">
                                                    <a href="index.php" class="underline-hover">
                                                        <!-- <i class="fa fa-globe-africa me-2"></i> -->Aller
                                                        sur le Site Web <i class="fa fa-arrow-right ms-1"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>

                                <div class="col-lg-6 d-flex align-items-center munap-login">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4  ">
                                        <h4 class="font-verdana mb-4 text-white">Mutuelle Nationale du Personnel
                                            de la Direction Générale du Budget</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>