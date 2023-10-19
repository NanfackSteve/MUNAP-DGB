<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

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
    <div class="container-fluid page-header-about py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">STATUTS DE LA MUNAP - DGB</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#title-1">Titre I</a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#title-2">Titre II</a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#title-3">Titre III</a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#title-4">Titre IV</a>
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
                <?php include_once("status_summary.php"); ?>
            </div>
            <div class="col-lg-1"></div>
        </div>

    </div>
    <!-- Sommaire End -->

    <!-- About Start -->

    <div class="container my-3">

        <!-- TITRE I Start -->

        <span id="title-1"></span>
        <div class="px-md-1">
            <h3 class="bg-dark text-light rounded-3 display-5 text-center my-5 px-1">TITRE I : <br>DES DISPOSITIONS
                GENERALES
            </h3>
        </div>

        <!-- TITRE I - CHAP I -->

        <span id="title1-chap1"></span>
        <h2 class="title-article my-4">Chapitre I : DE LA CREATION ET DU SIEGE</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 1er : </a></h4>
            <p>Il est créé pour une durée illimitée, entre les personnels en activité dans les services centraux et
                déconcentrés de la Direction Générale du Budget, sans distinction d'âge, de grade, de statut, de
                sexe ou de réligion, une association de secours mutuel, dénomée "Mutuelle Nationale des Personnels
                de la Direction Générale du Budget", en abrégé <b>"MUNAP-DGB"</b>, ci-après désignée la
                <b>"Mutuelle"</b>.
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 2 : </a></h4>
            <p>
            <ol>
                <li>La Mutuelle est apolitique.</li>
                <li>Son siège social est fixé à Yaoundé.</li>
            </ol>
            </p>
        </div>

        <!-- TITRE I - CHAP II -->

        <span id="title1-chap2"></span>
        <h2 class="title-article mt-4 mb-3">Chapitre II : DE L'OBJET</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 3 : </a></h4>
            <p>La Mutuelle a pour objet de créer, d'entretenir et de promouvoir des liens de solidarité et
                d'entraide entre ses membres en cas d'évènement malheureux ou heureux. A cet effet :
            <ol>
                <li>Elle organise pour les membres, des réunions, des manifestations culturelles ou des spectacles ;
                </li>
                <li>Dans les conditions fixées par les présents statuts :
                    <ol type="a">
                        <li>elle verse une allocation aux membres dans les cas suivants :</li>
                        <ul>
                            <li>décès du conjoint, d'un ascendant ou d'un descendant direct du membre ; </li>
                            <li>obsèques en cas de décès d'un membre ;</li>
                            <li>mariage, accouchement, décoration et départ à la retraite. </li>
                        </ul>
                        <li>elle participe, en partie ou en totalité, au remboursement des frais médicaux et
                            pharmaceutiques dans les conditions fixées par les présents statuts. </li>
                        <li>elle peut accorder une avance exceptionnelle aux membres actifs, en cas de maladie grave
                            ou de longue durée, d'intervention chirurgicale ou hospitalisation.</li>
                    </ol>
                </li>
            </ol>
            </p>
        </div>

        <!-- TITRE I End -->
    </div>



    <div class="container">

        <!-- TITRE II Start -->

        <span id="title-2"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">TITRE II : <br>DE
                L'ORGANISATION ET DU
                FONCTIONNEMENT </h3>
        </div>

        <!-- TITRE II - CHAP I -->

        <span id="title2-chap1"></span>
        <h2 class="title-article mt-5 mb-3">Chapitre I : DE LA QUALITE DE MEMBRE</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 4 : </a></h4>
            <p>La mutuelle comprend :
            <ul>
                <li>Des membres honoraires ;</li>
                <li>Des membres bienfaiteurs ;</li>
                <li>Des membres actifs, ci-après désignés les "membres"</li>
            </ul>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 5 : </a></h4>
            <p>A la qualité de membre honoraire ou de membre bienfaiteur toute personne physique ou morale qui, sans
                bénéficier des avantages de la Mutuelle, contribue à la prospérité de celle-ci par des contributions
                ou prestations de toutes sortes.</p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 6 : </a></h4>
            <p>Est membre actif tout personnel en activité dans les services centraux ou déconcentrés de la
                Direction Générale du Budget, qui adhère aux présents statuts, verse un droit d’adhésion et
                s’acquitte régulièrement de ses cotisations dûes.</p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 7 : </a></h4>
            <p>Demeurent membres actifs, à condition de continuer à s’acquitter des cotisations dûes :
            <ul>
                <li>Les personnes visées à l’article 6 ci-dessus en position de détachement, de disponibilité ou
                    admis à faire valoir leurs droits à la retraite et ayant adhéré à la Mutuelle six (6) mois avant
                    leur départ.</li>
            </ul>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 8 : </a></h4>
            <p>La qualité de membre se perd par :
            <ul>
                <li>La démission ;</li>
                <li>La suspension ;</li>
                <li>La radiation ;</li>
                <li>Le décès.</li>
            </ul>
            Les modalités d’application sont déterminées par le règlement intérieur.
            </p>
        </div>

        <!-- TITRE II - CHAP II -->

        <span id="title2-chap2"></span>
        <h2 class="title-article mt-5 mb-3">Chapitre II : DE L'ADMINISTRATION</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 9 : </a></h4>
            <p>L’administration de la Mutuelle est assurée par les organes ci-après :
            <ul>
                <li>L’assemblée Générale ;</li>
                <li>Le conseil d’administration ;</li>
                <li>Le bureau exécutif ;</li>
                <li>La commission financière.</li>
            </ul>
            </p>
        </div>

        <!-- TITRE II - CHAP II - SECTION I -->

        <span id="title2-chap2-sect1"></span>
        <h2 class="title-section mt-5 mb-3">Section I : De l'Assemblée Générale</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 10 : </a></h4>
            <p>
            <ol>
                <li>L’Assemblée Générale est l’instance suprême de la Mutuelle.</li>
                <li>Elle comprend tout le personnel de la Direction Général du Budget, membre actif au sens des
                    articles 4,-et 7 ci-dessus.</li>
                <li>Les travaux de l’Assemblée Générale sont présidés par le Directeur Général du Budget.</li>
                <li>Le Directeur Exécutif rapporte les affaires inscrites à l’ordre du jour.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 11 : </a></h4>
            <p>L’Assemblée Générale est chargée :
            <ul>
                <li>De définir les grandes orientations de la Mutuelle ;</li>
                <li>D’élire les membres de conseil d’Administration ;</li>
                <li>D’élire les membres de la commission financière ;</li>
                <li>D’élire les membres du bureau exécutif ;</li>
                <li>D’adopter et de modifier les statuts et le règlement intérieur.</li>
            </ul>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 12 : </a></h4>
            <p>
            <ol>
                <li>L’Assemblée Générale se tient une fois par an au siège de la Mutuelle en session ordinaire sur
                    convocation de son président ou sur la demande des 2/3 de ses membres.
                    <br>Les décisions sont prises à la majorité simple des membres présents ou représentés. En cas
                    d’égalité de voix, celle du président est prépondérante.
                </li>
                <li>Elle peut également se réunir en cas de nécessité en session extraordinaire sur convocation de
                    son Président ou à la demande des 2/3 de ses membres <br>
                    Dans ce cas, les décisions sont prises à la majorité des 2/3 des membres présents ou
                    représentés.</li>
                <li>Chaque membre a droit à une voix en cas de vote. Aucun membre ne peut être porteur de plus d’un
                    mandat de représentation.</li>
                <li>Elle ne peut siéger et délibérer valablement que si les ¾ de ses membres sont présents ou
                    représentés.</li>
            </ol>
            </p>
        </div>

        <!-- TITRE II - CHAP II - SECTION II -->

        <span id="title2-chap2-sect2"></span>
        <h2 class="title-section mt-5 mb-3">Section II : Du Conseil d'Administration</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 13 : </a></h4>
            <p>
            <ol>
                <li>Le conseil d’Administration de la Mutuelle comprend 10 (dix) membres élus répartis par collège
                    comme suit :
                    <ul>
                        <li>Collège des Contrôleurs régionaux des finances : 1 membre</li>
                        <li>Collège des Contrôleurs départementaux des finances : 1 membre</li>
                        <li>Collège des Directeurs et chef de division : 1 membre</li>
                        <li>Collège des sous directeurs : 1membre </li>
                        <li>Collège des Contrôleurs financiers centraux et spécialisés : 1 membre ;</li>
                        <li>Collège des chefs service : 1 membre ;</li>
                        <li>Collège des cadres: 1 membre </li>
                        <li>Collège des agents: 1 membre </li>
                        <li>Collège des retraités: 1 membre.</li>
                    </ul>
                    Les membres du conseil d’administration sont élus pour un mandat de deux ans renouvelable.
                </li>
                <li>le conseil d’administration élit en son sein son président, a la majorité de 2/3 des membres
                    présents ou représentés. En cas de pluralité de de candidature et qu’il faille recourir à un
                    second tour, la majorité simple suffit pour départager les deux candidats ayant obtenu le plus
                    grand nombre de suffrages.</li>
                <li>Le conseil d’administration se réunit au moins deux (2) fois par an et sur convocation de son
                    président. Il peut se réunir en session extraordinaire sur convocation de son Président ou sur
                    demande de la moitié de ses membres.
                    <br><br>Dans tous les cas, il est tenu de siéger avant chaque session de l’assemblée Générale.
                </li>
                <li>la fonction de membre du conseil d’administration est gratuite. Toutefois, les administrateurs
                    bénéficient des dépenses occasionnées par les sessions, sur présentation des pièces
                    justificatives.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 14 : </a></h4>
            <p>le conseil d’administration dispose des pouvoirs les plus étendus pour évaluer la gestion de la
                mutuelle. A ce titre, il est chargé notamment :
            <ul>
                <li>De fixer le programme d’action de la mutuelle ;</li>
                <li>D’adopter le budget de la mutuelle ;</li>
                <li>D’adopter les rapports les d’activités ;</li>
                <li>D’arrêter de manière définitive les comptes et les états financiers annuels (administratif et de
                    gestion) ;</li>
                <li>D’adopter les projets d’ordre du jour de l’assemblée général ainsi que tous les documents soumis
                    à cette instance ; </li>
            </ul>
            </p>
        </div>

        <!-- TITRE II - CHAP II - SECTION III -->

        <span id="title2-chap2-sect3"></span>
        <h2 class="title-section mt-5 mb-3">Section III : Du Bureau Exécutif</h2>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 15 : </a></h4>
            <p>
            <ol>
                <li>Le bureau exécutif est l’organe de <b>gestion</b> de la mutuelle.</li>
                <li>Il comprend :
                    <ul>
                        <li>Un directeur exécutif ;</li>
                        <li>Un secrétaire général ;</li>
                        <li>Un service général adjoint ;</li>
                        <li>Un trésorier général ;</li>
                        <li>Un trésorier général adjoint.</li>
                    </ul>
                </li>
                <li>Le bureau exécutif est représenté localement par les délégations régionales composer de :
                    <ul>
                        <li>Un délégué ;</li>
                        <li>Un secrétaire ;</li>
                        <li>Un trésorier.</li>
                    </ul>
                </li>
                <li>Les membre du bureau exécutif sont élus pour une période de deux(2) ans renouvelable par
                    l’assemblée générale.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 16 : </a></h4>
            <p>
            <ol>
                <li>Les membre du bureau exécutif sont solidaires dans la gestion de la mutuelle.</li>
                <li>Le bureau exécutif se réunit au moins une fois par mois et aussi souvent que l’exigent les
                    circonstances sure convocation du directeur exécutif pour débattre a des problèmes lies a la
                    gestion de la mutuelle et à l’accomplissement de leurs fonctions.</li>
                <li>Le secrétaire générale rapporte les affaires inscrites à l’ordre du jour des réunions du bureau
                    exécutif que convoque et préside le directeur exécutif.
                    <br>En dehors du directeur exécutif ; leurs attributions sont précisées par le règlement
                    intérieur
                </li>
                <li>Le bureau exécutif peut déléguer certaines de ses attributions aux délégations régionales. Le
                    délégué régional rend comte, en tant que de besoin de l’utilisation de cette délégation.</li>
            </ol>
            </p>
        </div>

        <!-- TITRE II - CHAP II - SECTION III - PARAGRAPH I -->

        <h2 class="title-paragraph mt-5 mb-3">Paragraphe I : Du Directeur Exécutif</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 17 : </a></h4>
            <p>
            <ol>
                <li>le directeur exécutif représente la mutuelle dans tous les actes de la vie civile et en justice.
                    A ce titre notamment, il :
                    <ul>
                        <li>Convoque et préside les réunions du bureau exécutif ;</li>
                        <li>Est l’ordonnateur du budget de la mutuelle ;</li>
                        <li>Propose au conseil d’administration toutes mesures nécessaires au bon fonctionnement de
                            la mutuelle ;</li>
                        <li>Rapporte les affaires inscrites à l’ordre du jour de l’assemblée générale et du conseil
                            d’administration.</li>
                    </ul>
                </li>
                <li>Rapporte les affaires inscrites à l’ordre du jour de l’assemblée générale et du conseil
                    d’administration</li>
            </ol>
            </p>
        </div>

        <!-- TITRE II - CHAP II - SECTION III - PARAGRAPH II -->

        <h2 class="title-paragraph mt-5 mb-3">Paragraphe II : Des Délégations Régionales</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 18 : </a></h4>
            <p>
            <ol>
                <li>La mutuelle est représentée hors de Yaoundé par des délégations régionales chargées d’assister
                    le bureau exécutif dans l’accomplissement de ses missions.</li>
                <li>Les membres de la délégation régionale sont élus par une assemble locale pour durer deux ans
                    renouvelable.</li>
                <li>Chaque délégation régionale comprend :
                    <ul>
                        <li>Un délégué régional ;</li>
                        <li>Un secrétaire régional ;</li>
                        <li>Un trésorier régional.</li>
                    </ul>
                    Leurs attributions sont précisées par le règlement intérieur.
                </li>
            </ol>
            </p>
        </div>

        <!-- TITRE II - CHAP II - SECTION IV -->

        <span id="title2-chap2-sect4"></span>
        <h2 class="title-section mt-5 mb-3">Section IV : De la Commission Financière</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 19 : </a></h4>
            <p>
            <ol>
                <li>La Commission Financière comprend :
                    <ul>
                        <li>Un Président</li>
                        <li>Un Rapporteur</li>
                        <li>Un Membre</li>

                    </ul>
                </li>
                <li>Elle est élue pour une période de deux (02) ans renouvelable, par Assemblée Général au scrutin
                    de liste majoritaire a un tour.
                    <br>Leurs attributions sont précisées par le règlement intérieur.
                </li>
            </ol>
            </p>
        </div>

        <!-- TITRE II End -->
    </div>



    <div class="container">

        <!-- TITRE III Start -->

        <span id="title-3"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">TITRE III : <br>DES
                DISPOSITIONS FINANCIERES</h3>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 20 : </a></h4>
            <p>L’exercice financier de la Mutuelle court du 1er janvier au 31 décembre.</p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 21 : </a></h4>
            <p>La gestion financier et comptable de la mutuelle est soumise aux règles de la comptabilité privée.
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 22 : </a></h4>
            <p>Les ressources et emplois sont inscrits dans un budget présenté en équilibre.</p>
        </div>

        <!-- TITRE III - CHAP I -->

        <span id="title3-chap1"></span>
        <h2 class="title-article mt-5 mb-3">Chapitre I : DES RESSOURCES</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 23 : </a></h4>
            <p>Les ressources de la Mutuelle proviennent :
            <ul>
                <li>Des souscriptions des membres bienfaiteurs et honoraires.</li>
                <li>Des droits d’adhésion ;</li>
                <li>Des cotisations mensuelles des membres,</li>
                <li>Des produits financiers des fonds place ou déposer auprès des établissements financiers ;</li>
                <li>Des produits divers : produits des œuvres artistiques et des manifestations culturelles et
                    sportives organisées par la Mutuelle.</li>
            </ul>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 24 : </a></h4>
            <p>
            <ol type="1">
                <li>Il est ouvert au nom de la Mutuelle, un ou plusieurs comptes bancaires au siège et dans les
                    délégations régionales.
                    <br>A l’ouverture du compte trois signatures sont déposées : celle du Directeur Exécutif, celle
                    du trésorier général et celle du secrétaire général.
                    <br>Dans les délégations régionales, celle du Délégué, du trésorier et du secrétaire.
                </li>
                <li>Tout retrait d’argent requiert obligatoirement une double signature. Celle du Directeur Exécutif
                    et du Trésorier Général. En ces d’empêchement de l’une de ces deux personnes, celle du
                    Secrétaire général. </li>
                <li>Dans les délégations régionales, celles du délégué et du trésorier. En cas d’empêchement de
                    l’une de ces deux personnes, celle du secrétaire général.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 25 : </a></h4>
            <p>
            <ol>
                <li>Les droits d’adhésion et de cotisations sont fixes de la manière suivante :</li>
                <ul><b>Adhésion</b> :
                    <li>Agents Décisionnaires : 10 000F</li>
                    <li>Agent Contractuel : 15 000F</li>
                    <li>Cadres : 20 000F</li>
                    <li>Chef de Service : 30 000F</li>
                    <li>Sous-Directeur : 50 000F</li>
                    <li>Chef de Division : 75 000F</li>
                    <li>Directeur : 100 000F</li>
                    <li>Directeur Général : PM</li>
                </ul>
                <ul>
                    <b>Cotisation annuelle</b> :
                    <li>Membre ayant rang de sous-Directeur et plus : 3 000 F  par mois soit 36 000F par an ;</li>
                    <li>Membre responsables jusqu’au rang de Chef de service : 2 500 F par mois soit 30 000 F par
                        an ;</li>
                    <li>Cadre et Contractuels : 2 000 F par mois soit 24 000 F par an ;</li>
                    <li>Agents Décisionnaires : 1 500 F par mois soit 18 000 F par an ;</li>
                    <li>Retraites : cadres et responsables : 1 500 F par mois soit 18 000 F par an ;</li>
                    <li>Agents : 1 000 F par mois soit 12 000 F par an ;</li>
                    <li>Conjoint : 2/3 du montant de la cotisation du membre ;</li>
                    <li>Enfant : 1/3 de la Cotisation du membre ;</li>
                    <li>Parent : 1/3 de la cotisation du membre.</li>
                </ul>
                <b>Le montant annuel de la cotisation doit etre versé au plus tard le 30 juin de l’année en
                    cours.</b>
            </ol>
            </p>
        </div>

        <!-- TITRE III - CHAP II -->

        <span id="title3-chap2"></span>
        <h2 class="title-article mt-5 mb-3">Chapitre II : DES EMPLOIS</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 26 : </a></h4>
            <p>
            <ol>
                <li>Les emplois comprennent : <ul>
                        <li>Les charges de la gestion de la Mutuelle ;</li>
                        <li>Les charges d’assistance ci-après ;</li>
                        <li>L’allocation de décès :</li>
                    </ul>
                </li>
                <li>Seuls peuvent prétendre aux prestations ci-dessus les membres a jour de leurs cotisation.</li>
                <li>Le bénéfice des avantages de la mutuelle court trente (30) jours après la date d’adhésion au
                    prorata de la cotisation.</li>
            </ol>
            </p>
        </div>

        <!-- TITRE III - CHAP II - SECTION I -->

        <span id="title3-chap2-sect1"></span>
        <h2 class="title-section mt-5 mb-3">Section I : De l'Allocation de Décès</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 27 : </a></h4>
            <p>
            <ol>
                <li>A l’occasion du décès d’un membre, de son conjoint, d’un parent, d’un enfant au sens de la
                    législation sur les prestations familiales, la mutuelle verse des allocations fixées de la
                    matière suivante : <ul>
                        <li>Membre : 300 000 F + 1 couronne de 50 000 F</li>
                        <li>Conjoint : 200 000 F</li>
                        <li>Parents : 100 000 F</li>
                        <li>Enfant : 50 000 F.</li>
                    </ul>
                </li>
            </ol>
            </p>
        </div>

        <!-- TITRE III - CHAP II - SECTION II -->

        <span id="title3-chap2-sect2"></span>
        <h2 class="title-section mt-5 mb-3">Section II : Remboursement des Frais d'Hôspitalisation,
            Médicaux et/ou Pharmaceutiques</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 28 : </a></h4>
            <p>
            <ol>
                <li>Les frais de séjour d’un adhérent ou d’un membre de sa famille au sens de la législation sur les
                    prestations familiales, dans une formation sanitaire agrée par le Conseil d’administrations,
                    sont rembourses de la manière suivante :
                    <ul><b>Frais d’hospitalisation</b> :
                        <li>Hopitaux publics : 40 %</li>
                        <li>Hôpitaux privés : 20 %</li>
                        <li>Consultation : 50 %</li>
                    </ul>
                    <ul><b>Soins dentaires</b> :
                        <li>Hôpitaux publics : 25 %</li>
                        <li>Hôpitaux privés : 15 %</li>
                    </ul>
                    <ul><b>Analyse médicale</b> :
                        <li>Laboratoire publics : 30 %</li>
                        <li>Laboratoire privés : 20 %</li>
                    </ul>
                    Les enfants ont le tiers payant et le conjoint les deux tiers.
                </li>
                <li>Les pièces justificatives pour le remboursement des frais d’hospitalisations, médicaux et ou
                    pharmaceutiques sont déterminés par une délibération du conseil d’Administration.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 29 : </a></h4>
            <p>Nul ne peut bénéficier aux cours d’un même exercice financier de remboursement supérieurs a dix(10)
                fois le montant de sa contribution annuelle.</p>
        </div>

        <!-- TITRE III - CHAP II - SECTION III -->

        <span id="title3-chap2-sect3"></span>
        <h2 class="title-section mt-5 mb-3">Section III : Allocation de mariage et d’accouchement</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 30 : </a></h4>
            <p>A l’occasion du mariage d’un membre à jour de ses cotisations, la Mutuelle lui verse une allocation
                fixée à 100.000 F</p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 31 : </a></h4>
            <p>A la naissance d'un enfant dans le foyer d'un membre a jour de ses cotisations, la Mutuelle célèbre
                l'évènement par l'octroi au membre d'une allocation fixée à 50 000 F.
                <br>Le traitement est unique si le membre et son conjoint sont membre de la MUNAP-DGB.
                <br>Les pièces justificatives des allocations fixées ci-dessus sont constituées des pièces
                officiellement reconnues au Cameroun en matière de prestation familiale.
            </p>
        </div>

        <!-- TITRE III - CHAP II - SECTION IV -->

        <span id="title3-chap2-sect4"></span>
        <h2 class="title-section mt-5 mb-3">Section IV : (Nouveau) Allocation de décoration et de départ à la
            retraite</h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 32 : </a></h4>
            <p>A l’occasion de la décoration d’un membre en règle, la Mutuelle lui verse une allocation fixée a 50
                000 F quelque soit le nombre de médailles reçus. </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 33 : </a></h4>
            <p>Lorsqu’un membre est admis à faire valoir ses droits à la retraite, la Mutuelle lui verse une
                allocation fixée à 100.000 F s’il a régulièrement verse ses cotisations au cours des trois (3)
                dernières années.</p>
        </div>

        <!-- TITRE III End -->
    </div>

    <div class="container">

        <!-- TITRE IV Start -->

        <span id="title-4"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">TITRE IV : <br>DES
                DISPOSITIONS DIVERSES, TRANSITOIRES ET FINALES</h3>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 34 : </a></h4>
            <p>
            <ol>
                <li>Toute modifications des statuts doit être approuvée par l’Assemblée Générale sur proposition du
                    conseil d’administration.
                    Dans ce cas, les membres de l’assemblée générale sont convoques au moins un (1) mois avant la
                    date fixée, par lettre individuelle dûment notifiée et indiquant l’ordre du jour.</li>
                <li>Toute propositions de modification doit être approuvée par l’assemblée générale à la majorité
                    des 2/3 au moins des membres présent ou représenter.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 35 : </a></h4>
            <p>
            <ol>
                <li>La dissolutions de la mutuelle ne peut être prononcée que par une assemblée générale
                    extraordinaire situant à la majorité des 2/3 au moins des membres ou représentés.</li>
                <li>L’assemblée générale, outre la dissolution, régle par délibération la dévolution du patrimoine
                    de la Mutuelle conformément à la législation en vigueur.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 36 : </a></h4>
            <p>
            <ol>
                <li>Les fonctions au sein de la mutuelle sont gratuites. Toutefois les membres des instances
                    dirigeantes de la mutuelle peuvent prétendre à des remboursements des frais exposés dans
                    l’intérêt de la mutuelle et à une indemnité pour travaux spéciaux octroyée par le Conseil
                    d’Administration.</li>
                <li>Il est prévu le recrutement d’un personnel d’appui a temps plein pour le fonctionnement des
                    services administratives de la mutuelle.</li>
            </ol>
            </p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 37 : </a></h4>
            <p>Les membres actuellement débiteurs envers l’association DB-Solidarité de l’ancienne direction du
                budget ne peuvent prétendre au bénéfice des prestations de la mutuelle qu’après paiement intégral de
                leurs dettes auprès du liquidateur de ladite association.</p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 38 : </a></h4>
            <p>Un règlement intérieur déterminera les modalités de fonctionnement de la mutuelle.</p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 39 : </a></h4>
            <p>
            <ol>
                <li>Les présents statuts ont été adoptés par l’assemblée générale constitutive de la mutuelle de
                    personnels de la direction générale du budget (MUNAP-DGB) le samedi 23 juin 2007. Ils ne peuvent
                    être modifies qu’en assemblée générale.</li>
                <li>Le Directeur exécutif est chargé des modalités de déclaration de la mutuelle. </li>
            </ol>
            </p>
        </div>

        <!-- TITRE IV End -->
    </div>

    <!-- About End -->

    <!-- Footer Start -->
    <?php include_once("footer.php") ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('docu').setAttribute("class", "nav-link active");
    </script>
</body>

</html>