    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <!-- <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <div style="margin-right: 20px;"><img src="img/logo-munap.jpg" width="80" height="55" alt="Logo-DGB" />
            </div>
            <h5 class="m-0 text-primary slogan"> Mutuelle de la Performance</h5>
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
                <?php // if (isset($_SESSION['LOGGED_USER'])) : 
                ?>
                <a id="profile" href="profile.php" class="nav-item nav-link">Mon profil</a>
                <?php //endif; 
                ?>
            </div>
            <?php // if (isset($_SESSION['LOGGED_USER'])) : 
            ?>
            <a href="login.php" class="btn btn-primary py-4 px-lg-5 d-lg-block">Deconnexion<i
                    class="fa fa-arrow-right ms-3"></i></a>
            <?php // else : 
            ?>
            <a href="login.php" class="btn btn-primary py-4 px-lg-5  d-lg-block">Connexion<i
                    class="fa fa-arrow-right ms-3"></i></a>
            <?php // endif; 
            ?>
        </div>
    </nav> -->
    <!-- Navbar End -->

    <!-- Other Nav Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top p-0 ">

        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-3">
            <div style="margin-right: 18px;"><img src="img/logo-munap.jpg" width="80" height="55" alt="Logo-DGB" />
            </div>
            <h5 class="m-0 text-primary slogan"> Mutuelle de la Performance</h5>
        </a>
        <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 p-4 p-lg-0">
                <li class="nav-item">
                    <a id="home" href="index.php" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="process" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Prestations
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="process">
                        <li><a class="dropdown-item" href="prestation_allocations.php">Allocations et frais Médicaux</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="prestation_locations_bus.php">Location Bus</a></li>
                        <!-- <li><a class="dropdown-item" href="#">Naissances</a></li> -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a id="news" href="news.php" class="nav-link" href="#">Actualités</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="docu" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Documentation
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="docu">
                        <li><a class="dropdown-item" href="status.php">Statuts</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="rules.php">Règlement Intérieur</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a id="team" href="team.php" class="nav-link">Organes</a>
                </li>
                <!-- <li class="nav-item">
                    <a id="contact" href="contact.php" class="nav-link">Contacts</a>
                </li> -->
                <li class="nav-item">
                    <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
                    <a id="profile" href="profile.php" class="nav-item nav-link">Mon profil</a>
                    <?php endif; ?>
                </li>
            </ul>
            <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
            <a href="login.php" class="btn btn-primary py-4 px-lg-4 d-lg-block">Se Déconnecter<i
                    class="fa fa-arrow-right ms-3"></i></a>
            <?php else : ?>
            <a href="login.php" class="btn btn-primary py-4 px-lg-5  d-lg-block">Se Connecter<i
                    class="fa fa-arrow-right ms-3"></i></a>
            <?php endif; ?>
        </div>

    </nav>
    <!-- Other Nav End -->

    <div class="bg-dark style=" margin-bottom: -1px; ">
        <marquee behavior=" scroll" direction="left" width="100%" height="35px" class="bg-dark text-light"
        style="padding-top: 10px; padding-left: 20%; padding-right: 20%;">
        <b> Bienvenue sur le Site Officiel de la Mutuelle de la Direction Generale du Budget du MINFI</b>
        </marquee>
    </div>