<?php
session_start();
session_unset();
session_destroy();


// Validation du formulaire
if (isset($_POST['email']) &&  isset($_POST['password'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];

    if ($email == "munap@gmail.com" && $pass == "123") {
        session_start();
        $_SESSION['LOGGED_USER'] = $email;
        header("Location: index.php ");
    } else {
        $check_user = False;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


    <!-- Bootstrapv5.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Include Pooper and JS using Bootstrap v5.0 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="row ">
                                        <div class="text-center mb-4">
                                            <img src="img/logo-munap.jpg" style="width: 185px;" alt="logo">
                                            <!-- <h4 class="font-sans-serif mt-1 mb-5 pb-1">MUNAP - DGB</h4> -->
                                        </div>
                                    </div>

                                    <!-- Check User Connexion -->
                                    <?php if (isset($check_user) && $check_user == False) : ?>
                                        <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                                            <div style="font-size: 0.76rem;"><b>Nom d'utilisateur</b> ou <b>Mot de
                                                    passe</b> Incorrect</div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    <?php endif; ?>

                                    <form class="mt-4" action="login.php" method="POST">
                                        <p></p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label font-verdana" for="email">Nom
                                                d'utilisateur :</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Nom d'utilisateur ou adress email " />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label font-verdana" for="password">Mot de
                                                Passe : </label>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Entrez votre mot de Passe" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button style="width:100%; background: #AB7442; " class="btn btn-block text-white fa-lg mb-3" type="submit"><b>Connexion</b>
                                            </button><br>
                                            <a class="text-muted" href="#!">Mot de passe oublié ?</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center" style="background: #AB7442;">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="font-verdana mb-4">Mutuelle Nationale du Personel
                                        de la Direction Générale du Budget</h4>
                                    <!-- <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do
                                            eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis
                                            nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
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