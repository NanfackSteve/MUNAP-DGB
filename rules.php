<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>MUNAP - Docu</title>
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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Nav bar Start -->
    <?php include_once("header.php") ?>
    <!-- Nav bar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header-docu py-3 mb-5">
        <div class="container py-3">
            <h1 class="display-3 text-white mb-3 animated slideInDown">REGLEMENT INTERIEUR DE LA<br>MUNAP - DGB
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#chap-1">Chap I</a></li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#chap-2">Chap II</a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#chap-3">Chap III</a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#chap-4">Chap IV</a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#chap-5">Chap V</a></li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#chap-6">Chap VI</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Sommaire Start -->

    <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-lg-1"></div>
            <div class="col-md-6 col-lg-10 align-self-center">
                <?php include_once("rules_summary.php"); ?>
            </div>
            <div class="col-lg-1"></div>
        </div>

    </div>
    <!-- Sommaire End -->

    <!-- About Start -->

    <div class="container my-3">

        <!-- CHAPITRE I Start -->

        <div id="chap-1" class="px-md-1 decalage-haut">
            <h3 class="bg-dark text-light rounded-3 display-5 text-center my-5 px-1">CHAPITRE I : <br>DES
                DISPOSITIONS
                GÉNÉRALES
            </h3>
        </div>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 1er : </a></h4>
            <p>Le présent règlement intérieur fixe les modalités d’application des Statuts de la Mutuelle Nationale
                des personnels de la Direction Générale du Budget, ci-après désignée la “Mutuelle”, et détermine les
                conditions de fonctionnement de celle-ci.
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 2 : </a></h4>
            <p>
                La mutuelle est régie par les principes énoncés dans ses Statuts et le présent Règlement Intérieur.
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 3 : </a></h4>
            <p>
                Tout membre de la Mutuelle s’engage à poursuivre activement les objectifs énoncés dans les Statuts
                et à respecter les décisions des organes dirigeants de la Mutuelle.
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 4 : </a></h4>
            <p>
            <ol>
                <li>L’adhésion à la Mutuelle s’effectue par le paiement auprès du Trésorier Général des droits
                    d’adhésion.</li>
                <li>Après adhésion, tout membre est astreint au paiement régulier d’une cotisation mensuelle dont le
                    montant est fixé par les Statuts.</li>
            </ol>
            </p>
        </div>

        <!-- CHAPITRE I End -->
    </div>



    <div class="container">

        <!-- CHAPITRE II Start -->

        <span id="chap-2" class="decalage-haut"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">CHAPITRE II : <br>DU
                FONCTIONNEMENT DES ORGANES D’ADMINISTRATION DE LA MUTUELLE</h3>
        </div>

        <!-- CHAP II - SECTION I -->

        <span id="chap2-sect1" class="decalage-haut"></span>
        <h2 class="title-article mt-5 mb-3">Section I : DE L'ASSEMBLÉE GÉNÉRALE </h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 5 : </a></h4>
            <p>
            <ol>
                <li>Les convocations aux sessions de l’Assemblée Générale ordinaire sont adressées aux membres au
                    moins un (1) mois avant ladite session.</li>
                <li>Les convocations aux sessions de l’Assemblée Générale extraordinaire sont adressées quinze (15)
                    jours au moins avant la date de la session, ce délai pouvant être réduit à cinq (5) jours en cas
                    d’urgence.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 6 : </a></h4>
            <p>L’ordre du jour ainsi que les documents de travail en vue d’une Assemblée Générale ordinaire ou
                extraordinaire sont remis aux membres en même temps que les convocations.
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 7 : </a></h4>
            <p>
            <ol>
                <li>Les travaux de l’Assemblée Générale sont présidés par le Directeur Général du Budget.</li>
                <li>Le Directeur Exécutif rapporte les affaires inscrites à l’ordre du jour.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 8 : </a></h4>
            <p>
            <ol>
                <li>Le Directeur Exécutif présente à l’Assemblée Générale le rapport d’activités du Bureau Exécutif
                    (Administratif et financier).</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 9 : </a></h4>
            <p>L’Assemblée Générale entend d’une manière générale, les comptes rendus inscrits à l’ordre du jour et
                en débat.
            </p>
            <p>Elle constitue des commissions chargées de la préparation de ses décisions sous forme de résolutions
                ou de recommandations.</p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 10 : </a></h4>
            <p>Les rapports des commissions et les projets de résolution ou de recommandations sont soumis aux
                débats et à l’adoption de l’Assemblée Générale en séance plénière.
            </p>
        </div>

        <!-- CHAPITRE II - SECTION II -->

        <span id="chap2-sect2" class="decalage-haut"></span>
        <h2 class="title-article mt-5 mb-3">Section II : DU CONSEIL D’ADMINISTRATION</h2>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 11 : </a></h4>
            <p>
                Les membres du Conseil d’Administration sont élus par bulletin secret, au scrutin uninominal à un
                tour. En cas d’égalité de vote, il est organisé un second tour.
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 12 : </a></h4>
            <p>
            <ol>
                <li>Nul ne peut être élu membre du Conseil d'Administration <b>s'il n'est à jour de ses cotisations
                        annuelles</b> auprès de la Mutuelle.</li>
                <li>Tout membre élu qui perd la qualité pour siéger au sein du Conseil d'Administration est remplacé
                    par l'Assemblée Générale. Dans ce cas, le nouveau membre est élu pour la durée du mandat restant
                    à courir.</li>
                <li>Nonobstant les dispositions qui précèdent, il n'est point procédé au remplacement d'un membre
                    élu lorsque la durée du mandat restant à courir de ce dernier est inférieure à un (1) an.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 13 : </a></h4>
            <p>
            <ol>
                <li>Les convocations aux sessions du Conseil d'Administration sont adressées aux membres au moins
                    quinze (15) jours avant ladite session. Toutefois ce délai peut être réduit à trois (3) jours au
                    moins en cas d'urgence.
                </li>
                <li>L'ordre du jour et les documents de travail sont remis aux membres en même temps que les
                    convocations.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 14 : </a></h4>
            <p>
            <ol>
                <li>Le Conseil d'Administration ne peut valablement siéger et délibérer que si les 2/3 au moins de
                    ses membres sont présents ou représentés.<br />
                    Chaque membre a droit à une voix en cas de vote.
                </li>
                <li>Les décisions sont prises à la majorité simple des membres présents ou représentés. En cas
                    d'égalité des voix, celle du Président est prépondérante.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 15 : </a></h4>
            <p>
            <ol>
                <li>Le Directeur Exécutif rapporte les affaires inscrites à l'ordre du jour des travaux du Conseil
                    d'Administration.
                </li>
                <li>Le Secrétaire Général en assure le secrétariat. </li>
            </ol>
            </p>
        </div>

        <!-- CHAPITRE II - SECTION III -->

        <span id="chap2-sect3" class="decalage-haut"></span>
        <h2 class="title-article mt-5 mb-3">Section III : DU BUREAU EXÉCUTIF</h2>

        <!-- CHAPITRE II - SECTION III - PARAGRAPHE I -->
        <span id="chap2-sect3-para1" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3">Paragraphe I : Du Directeur Exécutif</h2>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 16 : </a></h4>
            <p>
            <ol>
                <li>Le Directeur Exécutif représente la Mutuelle dans tous les actes de la vie civile et en justice.
                    A ce titre notamment, il :
                    <ul>
                        <li>convoque et préside les réunions du Bureau Exécutif; </li>
                        <li>est l'ordonnateur du budget de la Mutuelle; </li>
                        <li>propose au Conseil d'Administration toutes mesures nécessaires au bon fonctionnement de
                            la Mutuelle ;</li>
                        <li>rapporte les affaires inscrites à l'ordre du jour de l'Assemblée Générale et du Conseil
                            d'Administration. </li>
                    </ul>
                </li>
                <li>En cas d’absence ou d'empêchement du Directeur Exécutif, le Secrétaire Général assure l'intérim.
                </li>
            </ol>
            </p>
        </div>

        <!-- CHAPITRE II - SECTION III - PARAGRAPHE II -->
        <span id="chap2-sect3-para2" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3">Paragraphe II : Du Secrétaire Général et du Secrétaire Général Adjoint
        </h2>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 17 : </a></h4>
            <p>
            <ol>
                <li>Le Secrétaire Général, assisté du Secrétaire Général Adjoint, coordonne sous l'autorité du
                    Directeur Exécutif, les activités de la Mutuelle. A ce titre notamment, il :
                    <ul>
                        <li>tient les registres du courrier ; </li>
                        <li>tient le registre d'immatriculation des adhérents; </li>
                        <li>prépare avec le Directeur Exécutif la tenue des Assemblée Générales, du Conseil
                            d'Administration et du Bureau Exécutif dont il assure par ailleurs le secrétariat ;</li>
                        <li>assure la rédaction des procès-verbaux et des délibérations de l'Assemblée Générale, du
                            Conseil d'Administration et du Bureau Exécutif; </li>
                        <li>est le responsable de la communication de la Mutuelle ;</li>
                        <li>conserve les archives de la Mutuelle ; </li>
                        <li>élabore le compte de gestion de la Mutuelle.</li>
                    </ul>
                </li>
                <li>En cas d’absence ou d'empêchement du Secrétaire Général, le Secrétaire Général Adjoint assure
                    l'intérim.</li>
            </ol>
            </p>
        </div>

        <!-- CHAPITRE II - SECTION III - PARAGRAPHE III -->
        <span id="chap2-sect3-para3" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3">Paragraphe III : Du Trésorier Général et du Trésorier Général Adjoint
        </h2>


        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 18 : </a></h4>
            <p>
            <ol>
                <li>Le Trésorier Général, assisté du Trésorier Général Adjoint, assure sous l’autorité du Directeur
                    Exécutif, les encaissements et les décaissements des ressources de la Mutuelle. A ce titre
                    notamment, il :
                    <ul>
                        <li>détient les livres de caisse, de banques, des recettes et de dépenses; </li>
                        <li>adresse chaque mois un rapport financier au Directeur Exécutif récapitulant les
                            différentes opérations de recettes et de dépenses;</li>
                        <li>tient la comptabilité de la Mutuelle. </li>
                        <li>élabore le compte de gestion en fin d'exercice.</li>
                    </ul>
                </li>
                <li>En cas d'absence ou d'empêchement du Trésorier Général, le Trésorier Général Adjoint assure
                    l'intérim. </li>
                <li>
                    <p>Le Trésorier Général, le Trésorier Général Adjoint et les Trésoriers régionaux doivent
                        présenter un engagement matérialisé par un acte notarié autorisant la Mutuelle à opérer une
                        saisie sur leurs biens meubles ou immeubles.</p>
                    <p>Cette saisie est mise en œuvre en cas de déficit de caisse dûment établie par la Commission
                        Financière et approuvée par le Conseil d'Administration. </p>
                </li>
            </ol>
            </p>
        </div>

        <!-- CHAPITRE II - SECTION III - PARAGRAPHE IV -->
        <span id="chap2-sect3-para4" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3">Paragraphe IV : Des Délégations Régionales</h2>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 19 : </a></h4>
            <p>
            <ol>
                <li>Le Délégué régional représente le Bureau Exécutif dans sa circonscription. A ce titre,
                    notamment, il :
                    <ul>
                        <li>veille à la bonne marche et à l’expansion de la Mutuelle ;</li>
                        <li>adresse un rapport trimestriel d’activités au Directeur Exécutif.</li>
                    </ul>
                </li>
                <li>Le Secrétaire régional est chargé de la tenue du registre des membres de la Province, de la
                    rédaction des rapports et procès-verbaux ainsi que de la conservation des archives.</li>
                <li>Le Trésorier régional encaisse les adhésions et les cotisations des membres et les reverse dans
                    un compte ouvert dans une institution bancaire de la place au nom de la Mutuelle.</li>
                <li>Le Bureau Exécutif peut déléguer certaines de ses attributions à la Délégation Régionale. Le
                    Délégué régional rend compte, en tant que de besoin, de l'utilisation de cette délégation.</li>
            </ol>
            </p>
        </div>

        <!-- CHAPITRE II - SECTION IV -->

        <span id="chap2-sect4" class="decalage-haut"></span>
        <h2 class="title-article mt-5 mb-3">Section IV : DE LA COMMISSION FINANCIÈRE</h2>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 20 : </a></h4>
            <p>
            <ol>
                <li>Les membres de la Commission Financière sont élus en même temps que ceux du Conseil
                    d'Administration.</li>
                <li>Ils sont rééligibles et doivent remplir les mêmes conditions d'éligibilité que celles exigées
                    aux membres du Conseil d'Administration. </li>
                <li>L'Assemblée Générale est garante de leur indépendance.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 21 : </a></h4>
            <p>
            <ol>
                <li>
                    La Commission Financière assure la fonction de commissariat aux Comptes. A cet effet :
                    <ul>
                        <li>elle examine la conformité des dépenses effectuées et des recettes encaissées en rapport
                            avec les objectifs statutaires de la Mutuelle ; </li>
                        <li>elle effectue toute mission de contrôle à elle confiée par l'Assemblée Générale ou le
                            Conseil d'Administration </li>
                    </ul>
                </li>
                <li>Elle a le droit de contrôle sur place ou sur pièces.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 22 : </a></h4>
            <p>
                La Commission Financière donne son avis sur le compte de gestion de la Mutuelle avant adoption.
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 23 : </a></h4>
            <p>
                La Commission Financière peut être saisie directement par un membre qui estime qu'une disposition
                des textes de la Mutuelle a été perdue de vue ou bien lorsqu'il soupçonne le flou dans la gestion.
            </p>
        </div>

        <!-- CHAPITRE II End -->
    </div>



    <div class="container">

        <!-- CHAPITRE III Start -->

        <span id="chap-3" class="decalage-haut"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">CHAPITRE III :
                <br>DISPOSITIONS DISCIPLINAIRE
            </h3>
        </div>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 24 : </a></h4>
            <p>Les lettres de démission sont adressées au Président du Conseil d'Administration. La démission est
                entérinée par le Conseil d'Administration.
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 25 : </a></h4>
            <p>Les décisions de suspension sont prises par le Directeur Exécutif, après délibération du Bureau
                Exécutif. </p>
            <p>Toutefois, le membre mis en cause peut former un recours auprès du Conseil d'Administration qui
                tranche dans ce cas en dernier ressort.</p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 26 : </a></h4>
            <p>L'auto suspension est constatée par le Bureau Exécutif après le non paiement des cotisations
                annuelles pendant une période de trois (3) mois.<br />
                Une lettre constatant l'auto suspension est adressée à l'intéressé par le Directeur Exécutif.
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 27 : </a></h4>
            <p>Pendant la période de suspension, un membre mis en cause perd le droit aux avantages accordés par la
                Mutuelle. </p>
            <p>Un membre suspendu pour non paiement de ses cotisations ne peut être réadmis qu'après paiement de
                toutes ses cotisations dues, y compris celles échues pendant la période de suspension.</p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 28 : </a></h4>
            <p>La radiation intervient :
            <ul>
                <li>en cas de suspension d'une durée de deux (2) ans continu. </li>
                <li>A la suite d'une démission notifiée au Bureau Exécutif; </li>
                <li>En cas de démission, licenciement ou révocation de l'Administration;</li>
                <li>Pour tout membre convaincu de faux et usage de faux ou préjudice de la Mutuelle ou de
                    détournement des fonds de la Mutuelle, sans préjudice de remboursement des sommes indûment
                    perçues.</li>
            </ul><br />
            La radiation est prononcée par le Conseil d'Administration après avis de l'Assemblée Générale.<br />
            La radiation est précédée d'une lettre de mise en demeure.<br />
            La radiation est prononcée d'office si le mis en cause n'a pas donné satisfaction à la mise en demeure
            dans un délai de deux (2) mois.
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 29 : </a></h4>
            <p>La réintégration d'un membre démissionnaire, suspendu (pour autre motif que le non paiement des
                cotisations annuelles) ou radié ne peut être prononcée que par l'Assemblée Générale après avis du
                Conseil d'Administration et après qu'il ait réparé le préjudice qu'il aurait causé.</p>
            <p>Le membre réadmis est tenu de régulariser sa situation par versement de toutes ses cotisations
                annuelles échues. </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 30 : </a></h4>
            <p>La démission, la suspension ou la radiation ne donne droit à aucun remboursement des sommes versées
                au profit de la Mutuelle.</p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 31 : </a></h4>
            <p>Il peut être mis fin aux fonctions des membres du Bureau Exécutif, avant terme, par décision de
                l'Assemblée Générale. </p>
            <p>Toutefois, en cas de faute grave ou de manquements aux obligations de la charge, le Conseil
                d'Administration peut, à titre conservatoire, suspendre un membre du Bureau Exécutif. </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 32 : </a></h4>
            <p>
            <ol>
                <li>les membres du Bureau Exécutif sont solidaires dans la gestion de la Mutuelle.</li>
                <li>Ils se réunissent au moins une fois par mois et aussi souvent que l'exigent les circonstances
                    pour débattre des problèmes liés à la gestion de la Mutuelle et à l'accomplissement de leurs
                    fonctions. </li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 33 : </a></h4>
            <p>
            <ol>
                <li>Le Secrétaire Général rapporte les affaires inscrites à l'ordre du jour des réunions du Bureau
                    Exécutif que convoque et préside le Directeur Exécutif. </li>
                <li>II en assure le secrétariat. </li>
            </ol>
            </p>
        </div>


        <!-- CHAPITRE III End -->
    </div>

    <div class="container">

        <!-- CHAPITRE IV Start -->
        <span id="chap-4" class="decalage-haut"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">CHAPITRE IV : <br>DES
                ACTIVITÉS SOCIO-CULTURELLES</h3>
        </div>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 34 : </a></h4>
            <p>Outre les réunions prévues par les statuts, la Mutuelle organise des manifestations culturelles,
                sportives et des spectacles dans le cadre de l'animation socio-culturelle de la Direction Générale
                Budget, à l'occasion de la promotion des membres, des départs à la retraite et de la présentation
                des vœux. </p>
            <p>A cet effet, l'Assemblée Générale crée des commissions permanentes chargées d'animer les activités
                correspondantes.</p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 35 : </a></h4>
            <p>La fête du Budget est organisée une fois par an après le vote du budget par le parlement. Les
                préparatifs sont placés sous l'autorité du Directeur Exécutif.</p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 36 : </a></h4>
            <p>Il est créé au sein de la MUNAP-DGB une chorale. Celle-ci est chargée de l'animation des évènements
                heureux et malheureux qui peuvent survenir au sein de la Mutuelle.</p>
        </div>

        <!-- CHAPITRE IV End -->
    </div>

    <div class="container">
        <!-- CHAPITRE V Start -->

        <span id="chap-5" class="decalage-haut"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">CHAPITRE V : <br>DES
                ACTIVITÉS SOCIO-CULTURELLES</h3>
        </div>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 37 : </a></h4>
            <p>Les montants des droits d'adhésion et de cotisation prévus à l'article 25 des statuts peuvent être
                modifiés par l'Assemblée Générale. </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 38 : </a></h4>
            <p>Les taux d'acquisition de l'uniforme sont fixés par l'Assemblée Générale sur proposition du Conseil
                d'Administration. </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 39 : </a></h4>
            <p>Les cotisations dues au titre d'un exercice financier doivent être impérativement acquittées au plus
                tard le 30 juin de l'année en cours, sous peine de sanctions prévues par le présent règlement
                intérieur.</p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 40 : </a></h4>
            <p>Les recettes de la Mutuelle sont, selon leur nature, perçues de la manière suivante :
            <ol>
                <li>Les dons des membres bienfaiteurs ou honoraires, les subventions diverses ainsi que la
                    quote-part des produits des pénalités et autres contributions sont versés en espèces, par
                    chèques, par virements, par bons de caisse ou de trésor ou par d'autres moyens adéquats. </li>
                <li>Les droits d'adhésion et les cotisations des membres, le produit des manifestations organisées
                    par la Mutuelle ou pour son compte sont versés exclusivement en espèces et ou par prélèvement à
                    la source lors du paiement des primes, des indemnités pour travaux spéciaux et autres avantages
                    versés aux personnels. </li>
                <li>Les intérêts des fonds placés ou déposés sont comptabilisés par inscription au crédit des
                    comptes bancaires de la Mutuelle. </li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 41 : </a></h4>
            <p>Toute recette donne lieu à la délivrance d'une quittance tirée d'un carnet à souches.
                <br />Elle doit être inscrite dans le registre des recettes avec indication des références de
                versement dans un compte bancaire.
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 42 : </a></h4>
            <p>Les livres comptables suivants sont obligatoirement tenus :
            <ul>
                <li>le livre des adhésions et des cotisations ;</li>
                <li>le journal classique à partie double ;</li>
                <li>le compte individuel des membres ;</li>
                <li>le compte administratif ;</li>
                <li>le compte de gestion.</li>
            </ul>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 43 : </a></h4>
            <p>
            <ol>
                <li>Les dépenses de la Mutuelle sont payées par voie d'un bulletin libellé «Ordre de paiement»
                    établi au vu des pièces justificatives y annexées. Ce bulletin porte obligatoirement la double
                    signature du Directeur Exécutif et du Trésorier Général. </li>
                <li>Toutes les dépenses sont inscrites dans un registre avec indication des références du paiement
                    et comptabilisées immédiatement.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 44 : </a></h4>
            <p>Sont considérés comme ayant droit :
            <ul>
                <li>le conjoint, la ou les conjointes(s) survivant(e)s ;</li>
                <li>les enfants à charge du défunt tels qu’ils sont définis par la législation sur les prestations
                    familiales.</li>
            </ul>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 45 : </a></h4>
            <p>
            <ol>
                <li>L'allocation de décès au titre de la participation aux obsèques d'un membre décédé est versée au
                    conjoint(e).</li>
                <li>En cas de pluralité de conjointes, l'allocation de décès est versée en la présence de toutes les
                    veuves.</li>
            </ol>
            </p>
        </div>

        <!-- CHAPITRE V End -->
    </div>

    <div class="container">
        <!-- CHAPITRE VI Start -->

        <span id="chap-6" class="decalage-haut"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">CHAPITRE VI : <br>DES
                DISPOSITIONS DIVERSES ET FINALES</h3>
        </div>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 46 : </a></h4>
            <p>
            <ol>
                <li>Toute modification du Règlement Intérieur doit être approuvée par</li>
            </ol>
            </p>
        </div>

        <!-- CHAPITRE VI End -->
    </div>

    <!-- About End -->

    <!-- Footer Start -->
    <?php include_once("footer.php") ?>
    <!-- Footer End -->

    <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('docu').setAttribute("class", "nav-link active");
    </script>
</body>

</html>