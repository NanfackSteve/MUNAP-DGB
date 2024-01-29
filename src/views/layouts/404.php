<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Error - 404</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo-munap.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/Bootstrap_5/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/Bootstrap_5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/Bootstrap_5/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Page Header Start -->
    <!-- <div class="container-fluid page-header py-5 mb-5">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">404 Error</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">404 Error</li>
                    </ol>
                </nav>
            </div>
        </div> -->
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4"><?= $lang['error']['title'] ?></h1>
                    <p class="mb-4"><?= $lang['error']['text'] ?></p>
                    <p class="mb-4"><?php //= $errorMessage  
                                    ?></p>
                    <a class="btn btn-primary py-3 px-5" href="index.php"><?= $lang['error']['btn'] ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Bootstrap_5/lib/wow/wow.min.js"></script>
    <script src="/Bootstrap_5/js/main.js"></script>
</body>

</html>