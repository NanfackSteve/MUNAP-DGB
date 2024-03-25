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
        <link href="/Bootstrap_5/lib/animate/animate.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="/Bootstrap_5/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/Bootstrap_5/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav bar Start -->
        <?php include_once("src/views/layouts/header.php") ?>
        <!-- Nav bar End -->

        <!-- Page Header Start -->
        <div class="container-fluid page-header-docu py-3 mb-5">
            <div class="container py-3">
                <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $head_title ?></h1>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Documents (PDF files) Start-->
        <div class="container mb-5">
            <div class="row g-3">
                <?php if (!empty($documents)) : ?>
                <?php foreach ($documents as $document) : ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="card ">
                        <div class="card-header d-flex justify-content-between ">
                            <h5 class="mb-0 pt-2"><i class="mx-2 fa fa-file-pdf"></i><?= $doc_type ?>
                            </h5>
                            <small style="padding-top: 10px;"><?= $document['date'] ?></small>
                            <a href="<?= $document['file'] ?>" class="btn btn-primary"><?= $btn_text ?></a>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title"><?= $document['title'] ?></h5>
                            <p class="card-text"><?= $document['text'] ?>
                            </p>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else : ?>
                <div class="row text-center justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h2 class="mb-4"><?= $no_document ?></h2>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Documents (PDF files) End -->

        <!-- Footer Start -->
        <?php include_once("src/views/layouts/footer.php") ?>
        <!-- Footer End -->

        <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('docu').setAttribute("class", "nav-link active");
        </script>
    </body>

</html>