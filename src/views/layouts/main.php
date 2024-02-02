<!DOCTYPE html>
<html lang="fr">

    <head>
        <title><?= $title_page ?></title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/logo-munap.jpg" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="Bootstrap_5/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="Bootstrap_5/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="Bootstrap_5/lib/animate/animate.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="Bootstrap_5/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="Bootstrap_5/css/style.css" rel="stylesheet">

        <?php if ($_GET['menu'] === 'services' && $_GET['sub'] === 'bus') : ?>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
        <!-- <link href="Bootstrap_5/css/calendar.css" rel="stylesheet"> -->

        <!-- JS for jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- JS for full calender -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

        <!-- bootstrap css and js -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

        <?php endif; ?>
    </head>

    <body>
        <!-- Nav bar Start -->
        <?php include_once("src/views/layouts/header.php") ?>
        <!-- Nav bar End -->

        <!-- MAIN Start -->
        <?= $content ?>
        <!-- MAIN End -->

        <!-- Footer Start -->
        <?php include_once("src/views/layouts/footer.php") ?>
        <!-- Footer End -->

    </body>

</html>