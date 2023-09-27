    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <div style="margin-right: 20px;"><img src="img/logo-munap.jpg" width="80" height="55" alt="Logo-DGB" />
            </div>
            <h5 class="m-0 text-primary slogan"> Mutuelle de la Performance</h5>
            <!-- <h3 class="m-0 text-primary">MUNAP - DGB</h3> -->
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a id="home" href="index.php" class="nav-item nav-link ">Accueil</a>
                <a id="about" href="about.php" class="nav-item nav-link">A Propos</a>
                <a id="team" href="team.php" class="nav-item nav-link ">Membres</a>
                <a id="news" href="news.php" class="nav-item nav-link">Actualités</a>
                <a id="contact" href="contact.php" class="nav-item nav-link">Contacts</a>
                <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
                <a id="profile" href="profile.php" class="nav-item nav-link">Mon profil</a>
                <?php endif; ?>
            </div>
            <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
            <a href="login.php" class="btn btn-primary py-4 px-lg-5 d-lg-block">Deconnexion<i
                    class="fa fa-arrow-right ms-3"></i></a>
            <?php else : ?>
            <a href="login.php" class="btn btn-primary py-4 px-lg-5  d-lg-block">Connexion<i
                    class="fa fa-arrow-right ms-3"></i></a>
            <?php endif; ?>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="bg-dark style=" margin-bottom: -1px; ">
        <marquee behavior=" scroll" direction="left" width="100%" height="35px" class="bg-dark text-light"
        style="padding-top: 10px; padding-left: 20%; padding-right: 20%;">
        <b> Bienvenue sur le Site Officiel de la Mutuelle de la Direction Generale du Budget du MINFI</b>
        </marquee>
    </div>