<?php
use App\Form\Form;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119799253-1');
        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119799253-1"></script>
        <script type="text/javascript" src="assets/js/ga.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mickael POL Toulouse 31000, Développeur web.Recherche un poste.</title>
        <meta name="description" content="Développeur web Toulousain, ce CV me permet de mettre en avant mes compétences dans le web sur les techno Symfony, Laravel, Angular, html/css, Javascript, Bootstrap, MySQL, Méthodes agiles.N'hésitez pas à me contacter.">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link href="assets/css/app.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="img/photoprofil.jpg"/>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
        <!-- Balisage JSON-LD généré par l'outil d'aide au balisage de données structurées de Google -->
        <script type="application/ld+json">
        [ {
            "@context" : "http://schema.org",
            "@type" : "JobPosting",
            "title" : "Pol Mickael",
            "hiringOrganization" : "Developpeur Web et mobile",
            "jobLocation" : {
            "@type" : "place",
            "address" : {
                "@type" : "PostalAddress",
                "addressLocality" : "TOULOUSE",
                "addressRegion" : "Occitanie",
                "postalCode" : "31300",
                "streetAddress" : "18 Rue de cugnaux",
                "telephone" : "0781948113"
                }
            },
            "datePosted" : "2018-06-30",
            "baseSalary" : {
                "@type" : "MonetaryAmount",
                "currency" : "Euro",
                "value" : "22000€ brut/an"
            },
            "description" : "Développeur web en recherche de poste CDD CDI sur TOULOUSE",
            "employmentType" : "Développeur web et mobile",
            "validThrough" : "2020-01-01T15:30"
            }, {
            "@context" : "http://schema.org",
            "@type" : "JobPosting",
            "title" : "Pol Mickael",
            "hiringOrganization" : "Développeur Web et mobile",
            "jobLocation" : {
            "@type" : "place",
            "address" : {
                "@type" : "PostalAddress",
                "addressLocality" : "TOULOUSE",
                "addressRegion" : "Occitanie",
                "postalCode" : "31300",
                "streetAddress" : "18 Rue de cugnaux",
                "telephone" : "0781948113"
                }
            },
            "datePosted" : "2018-06-30",
            "baseSalary" : {
                "@type" : "MonetaryAmount",
                "currency" : "Euro",
                "value" : "22000€ brut/an"
            },
            "description" : "Développeur web en recherche de poste CDD CDI sur TOULOUSE",
            "employmentType" : "Développeur web et mobile",
            "validThrough" : "2020-01-01T15:30"
        } ]
        </script>
    </head>
    <body>

        <h1 class="hidden">Mickael POL CV, Développeur web Toulouse 31000</h1>
        
        <!-- Partie barre de navigation -->
        <div class="container">
            <nav class="navbar navbar-fixed-top navbar-inverse visible-xs">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">POL Mickael</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a class="homeClick" href="#">
                                    <span class="fa fa-home fa-xs-home"></span>
                                    Accueil
                                </a>
                            </li>
                            <li>
                                <a class="compClick" href="#">
                                    <span class="fa fa-map-marker fa-xs-marker"></span>
                                    Compétences
                                </a>
                            </li>
                            <li>
                                <a class="xpClick" href="#">
                                    <span class="fa fa-briefcase fa-xs-xp"></span>
                                    Expèriences
                                </a>
                            </li>
                            <li>
                                <a class="dipClick" href="#">
                                    <span class="fa fa-graduation-cap fa-xs-grad"></span>
                                    Diplomes
                                </a>
                            </li>
                            <li>
                                <a class="proClick" href="#">
                                    <span class="fa fa-folder-open fa-xs-pro"></span>
                                    Projets
                                </a>
                            </li>
                            <li>
                                <a class="contactClick" href="#">
                                    <span class="fa fa-envelope fa-xs-con"></span>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Fin partie barre de navigation -->

        <!-- Partie header -->
        <div class="container margeTop marginBot">
            <div class="row">
                <div class="row">
                        <div id="photoProfil" class="col-xs-12 col-sm-4 hidden-lg hidden-md">
                            <div id="loader" class="loader center-block"></div>
                        </div>
                        <div id="photoProfil2" class="col-lg-4 col-md-4 hidden-xs hidden-sm">
                            <div id="loader2" class="loader center-block"></div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-xs-12 col-sm-8">
                            <div class="row">
                                <div class="col-lg-10 col-xs-10 nP">
                                    <p>Pol Mickael</p>
                                </div>
                                <button id="cvPdf" data-toggle="modal" data-target="#myModal" class="col-lg-2 col-xs-2 np2 text-center dlCv">
                                    <i id="pop" class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-xs-12 col-sm-8">
                            <div class="row">
                                <div class="col-lg-10 col-xs-10 np4">
                                    <p>Developpeur Web et mobile</p>
                                </div>
                                <a id="github" rel="noopener" target="blank" href="https://github.com/mickaelpol?tab=repositories">
                                    <div class="col-lg-2 col-xs-2 np3 text-center">
                                        <i id="pop2" class="fa fa-github" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-4 hidden-xs">
                        <div class="text-center text-capitalize">
                            <div class="row">
                                <a class="homeClick" href="#">
                                    <div class="col-lg-2 col-md-2 col-sm-2 vert">
                                        <span class="fa fa-home fa-3x"></span></br>
                                        <small>accueil</small>
                                    </div>
                                </a>
                                <a class="compClick" href="#">
                                    <div class="col-lg-2 col-md-2 col-sm-2 jaune">
                                        <span class="fa fa-cog fa-3x"></span>
                                        </br>
                                        <small>compétences</small>
                                    </div>
                                </a>
                                <a class="xpClick" href="#">
                                    <div class="col-lg-2 col-md-2 col-sm-2 violet">
                                        <span class="fa fa-briefcase fa-3x"></span>
                                        </br>
                                        <small>expériences</small>
                                    </div>
                                </a>
                                <a class="dipClick" href="#">
                                    <div class="col-lg-2 col-md-2 col-sm-2 bleu">
                                        <span class="fa fa-graduation-cap fa-3x"></span>
                                        </br>
                                        <small>diplomes</small>
                                    </div>
                                </a>
                                <a class="proClick" href="#">
                                    <div class="col-lg-2 col-md-2 col-sm-2 orange">
                                        <span class="fa fa-folder-open fa-3x"></span>
                                        </br>
                                        <small>projets</small>
                                    </div>
                                </a>
                                <a class="contactClick" href="#">
                                    <div class="col-lg-2 col-md-2 col-sm-2 cont-color">
                                        <span class="fa fa-envelope fa-3x"></span>
                                        </br>
                                        <small>contact</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin partie header -->

        <!-- Partie presentation accueil -->
        <div id="home" class="container">
            <div class="row gridus">
                <div>
                    <div class="col-lg-6 text-center PersonalInfo bordArrondis">
                        <div class="row text-uppercase">
                            <h2>Informations Personnelles</h2>
                        </div>
                        <div class="row text-justify infoPerso">
                            <div class="col-lg-5 col-lg-offset-1 text-uppercase text-left">
                                <p>nom :</p>
                            </div>
                            <div class="col-lg-5">
                                <p class="fz18 text-left">Pol Mickael</p>
                            </div>
                        </div>
                        <div class="row text-justify">
                            <div class="col-lg-5 col-lg-offset-1 text-uppercase text-left">
                                <p>date de naissance :</p>
                            </div>
                            <div class="col-lg-5">
                                <p class="fz18">9 Aout 1989</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-5 col-lg-offset-1 text-uppercase text-left">
                                <p>adresse :</p>
                            </div>
                            <div class="col-lg-5 text-left">
                                <p class="fz18">18 Rue de cugnaux</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-5 col-lg-offset-1 text-uppercase text-left">
                                <p>Code postal :</p>
                            </div>
                            <div class="col-lg-5 text-left">
                                <p class="fz18">31300 Toulouse</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-5 col-lg-offset-1 text-uppercase text-left">
                                <p>tel :</p>
                            </div>
                            <div class="col-lg-5 text-left">
                                <p class="fz18">07 81 94 81 13</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-5 col-lg-offset-1 text-uppercase text-left">
                                <p>email :</p>
                            </div>
                            <div class="col-lg-5 text-left">
                                <p class="contactClick fz18 mail">mickael.devweb@gmail.com</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-5 col-lg-offset-1 text-uppercase text-left">
                                <p>permis :</p>
                            </div>
                            <div class="col-lg-5 text-left">
                                <p class="fz18 mail">Permis B</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-5 col-lg-offset-1 text-uppercase text-left">
                                <p>langue :</p>
                            </div>
                            <div class="col-lg-5 text-left">
                                <p class="fz18 mail">
                                    <img class="icone" src="img/francais.png" alt="icone drapeau français">
                                    <img class="icone" src="img/anglais.png" alt="icone drapeau anglais">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-uppercase text-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="Pbleu">Développeur Web et mobile</h2>
                                <small class="Pbleu">Résumé du CV</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 margeTop">
                                <div class="col-lg-2">
                                    <span class="fa fa-user-circle-o fa-3x"></span>
                                </div>
                                <div class="col-lg-10">
                                    <h3>À Propos de moi</h3>
                                </div>
                                <div class="col-lg-10 col-lg-offset-2 lhText">
                                    <p class="text-justify">
                                        <p>
                                            dans le bâtiment depuis 10 ans, je me suis lancé dans le développement web par passion.
                                        </p>
                                        <div class="page-header"></div>
                                        <p>
                                            j’ai suivi le parcours de formation développeur web et mobile simplon pendant 1 ans. aujourd’hui je suis a l’aise sur plusieurs technos, pour travailler en équipe et autonome pour la veille.
                                        </p>
                                        <div class="page-header"></div>
                                        <p>
                                            j’aime beaucoup les projets novateurs, tout ce qui touche à la réalité augmentée, réalité virtuelle.
                                        </p>
                                        <div class="page-header"></div>
                                        <p>
                                            de nature énergique et autonome, j’aime prendre les choses en main et je m’implique rapidement dans un projet.
                                        </p>
                                        <div class="page-header"></div>
                                        <p>
                                            de nature assez sociable j’aime travailler en équipe et partager.
                                        </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin partie presentation accueil -->

        <!-- Partie competences -->
        <div id="comp" class="skills container margeTop">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-uppercase">compétences</h2>
                    </br>
                    <div class="row padBot">
                        <div class="col-lg-4 col-sm-6">
                            <h3 class="text-center">HTML5-CSS3</h3>
                            <img class="css center-block" src="img/html5.png" alt="icone html css">
                            </br>
                            <div class="text-center fz30 star">
                                <div id="starHtml"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <h3 class="text-center">BOOTSTRAP</h3>
                            <img class="css center-block" src="img/bootstrap.png" alt="icone bootstrap">
                            </br>
                            <div class="text-center fz30 star">
                                <div id="starBoot"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <h3 class="text-center">JAVASCRIPT-JQUERY-AJAX</h3>
                            <img class="css center-block" src="img/ajax-tutorial-javascript-jquery.jpg" alt="icone js jquery ajax">
                            </br>
                            <div class="text-center fz30 star">
                                <div id="starJs"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-offset-1 col-lg-10 page-header"></div>
                    <div class="col-lg-12">
                        <div class="row padBot">
                            <div class="col-lg-4 col-sm-6">
                                <h3 class="text-center">PHP-SYMFONY-LARAVEL</h3>
                                <img class="css center-block" src="img/PHP-SymfonyVsLaravel.jpg" alt="icone php symfony laravel">
                                </br>
                                <div class="text-center fz30 star">
                                    <div id="starPhp"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <h3 class="text-center">MYSQL</h3>
                                <img class="css center-block" src="img/MySQL.svg.png" alt="icone mysql">
                                </br>
                                <div class="text-center fz30 star">
                                    <div id="starMysql"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <h3 class="text-center">METHODE AGILES SCRUM</h3>
                                <img class="css center-block" src="img/agile-pm-kanban-board.png" alt="icone methode agiles">
                                </br>
                                <div class="text-center fz30 star">
                                    <div id="starScrum"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-10 page-header"></div>
                    <div class="row padBot">
                        <div class="col-lg-4 col-sm-6">
                            <h3 class="text-center">PRESTASHOP</h3>
                            <img class="css center-block" src="img/prestashop.png" alt="icone prestashop">
                            </br>
                            <div class="text-center fz30 star">
                                <div id="starPresta"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <h3 class="text-center">WORDPRESS</h3>
                            <img class="css center-block" src="img/wordpress.png" alt="icone wordpress">
                            </br>
                            <div class="text-center fz30 star">
                                <div id="starWp"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin partie competences -->

        <!-- Partie experiences -->
        <div id="xp" class="container margeTop xP">
            <div class="row">
                <div class="col-lg-12 xp-content">
                    <h2 class="text-uppercase xp-title">
                        expériences
                    </h2>
                    </br>
                    <blockquote>
                        <ul>
                            <li class="date">
                                <h3 class="xp-title">
                                    Développeur web, Digital Dealer Factory (31) <span class="date fz18">10/2018 – 12/2018</span>
                                    <br>
                                    <span class="date fz18">Entreprise travaillant avec le groupe Argus pour améliorer les CRM et leur business</span><br>
                                    <span class="date fz18">
                                        Le projet sur lequel j'ai travaillé est une application interne .<br>
                                        c'est une plateforme regroupant les fichiers de plusieurs CRM de client automobiles afin d'analyser l'extension de ces fichiers (xml, json, etc...) stocké sur leur FTP ou envoyé directement sur la plateforme.<br>
                                        Il seront ensuite lu et formaté afin de traiter les données présentent et de les renvoyer toutes sous le même format et bien classée vers des sites "vitrines". <br>
                                        Cela permet aux client d'avoir un oeil sur toutes les données venant d'un de ses parc automobiles et d'envoyer ou non certain véhicule vers ses sites vitrines tout en y appliquant des filtres (année, énergie, boîte de vitesse, etc...).<br>
                                        Le tout étant héberger sur google plateforme avec plusieurs machine virtuelle qui s'auto allume et s'eteignent afin de traiter toutes les données et de ne pas surcharger la plateforme au risque de la faire crash.
                                    </span>
                                </h3>
                            </li>
                            <li class="list-unstyled lhTextP">
                            <li class="list-unstyled">
                                - Migration de version du projet existant (PHP 5.6 => 7.1, et Symfony 2.8 => 3.4)
                            </li>
                            <li class="list-unstyled">
                                - Mise en place des tests unitaire et couverture de code, test fonctionnel
                            </li>
                            <li class="list-unstyled">
                                - Initialisation d'un nouveau module sur ce projet permettant de lire les fichiers venant d'un nouveau client utilisant une API pour transmettre ces données
                            </li>
                            <li class="list-unstyled">
                                - Maintenance et Support du projet (correction d'erreur ou de bug)
                            </li>
                            <li class="list-unstyled">
                                - Relation avec le groupe du nouveau module afin d'établir un cahier des charges
                            </li>
                            </li>
                            <hr>
                            <li class="date">
                                <h3>
                                    Développeur web et mobile, Innoside (31) <span class="date fz18">02/2018 – 04/2018</span>
                                </h3>
                            </li>
                            <li class="list-unstyled lhTextP">
                                <li class="list-unstyled">
                                    - Établissement du cahier des charges, Wireframe , MCD et MPD de la base de données
                                </li>
                                <li class="list-unstyled">
                                    - Création du back-end en relation avec la base de données pour une application mobile de réalité augmenté avec des routes api servant à envoyer et récupérer des informations dans la base de données via l’application mobile
                                </li>
                                <li class="list-unstyled">
                                    - Mise en place du front de l’application web pour créer un accès utilisateur et admin sur le site servant de back-office à l’application mobile.
                                </li>
                                <li class="list-unstyled">
                                    - Le back-office gère le contenu ajouter à l’application mobile et les comptes utilisateurs/admin de l’application
                                </li>
                                <li class="list-unstyled">
                                    - Lien de l’application web : « <a target="_blank" href="http://www.innoside.com/">Light</a> »
                                </li>
                            </li>
                            <hr>
                            <li>
                                <h3 class="xp-title">
                                    Monteur en gaine de ventilation (31) <span class="date fz18">2015 – 2017</span>
                                </h3>
                            </li>
                            <hr>
                            <li>
                                <h3 class="xp-title">
                                    Poseur parquet / terrasse / pergola (31) <span class="date fz18">2014 – 2015</span>
                                </h3>
                            </li>
                            <hr>
                            <li>
                                <h3 class="xp-title">
                                    Installateur génie climatique en intérim (31) <span class="date fz18">2012 – 2014</span>
                                </h3>
                            </li>
                            <hr>
                            <li>
                                <h3 class="xp-title">
                                    Service des eaux Cambounès (81) <span class="date fz18">2011</span>
                                </h3>
                            </li>
                            <hr>
                            <li>
                                <h3 class="xp-title">
                                    Apprentissage génie climatique SPIE (81) <span class="date fz18">2008 – 2010</span>
                                </h3>
                            </li>
                        </ul>
                    </blockquote>
                </div>
            </div>
        </div>
        <!-- Fin partie experiences -->

        <!-- Partie Diplomes -->
        <div id="dip" class="container margeTop dip">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-uppercase">
                        Diplômes
                    </h2>
                    </br>
                    <blockquote>
                        <ul>
                            <li class="date">
                                <h3>
                                    Certification d’état développeur web et mobile de niveau III <span class="date fz18">(Juillet 2018)</span>
                                </h3>
                            </li>
                            <br>
                            <li>
                                <h3>
                                    Formation énergie renouvelable AFPA <span class="date fz18">2012</span>
                                </h3>
                            </li>
                            <br>
                            <li>
                                <h3>
                                    BAC Pro génie climatique <span class="date fz18">2008 – 2010</span>
                                </h3>
                            </li>
                            <br>
                            <li>
                                <h3>
                                    BEP Plombier / Chauffagiste <span class="date fz18">2006 – 2008</span>
                                </h3>
                            </li>
                            <br>
                            <li>
                                <h3>
                                    Brevet des collèges <span class="date fz18">2006</span>
                                </h3>
                            </li>
                        </ul>
                    </blockquote>
                </div>
            </div>
        </div>
        <!-- Fin partie diplomes -->

        <!-- Partie projets -->
        <div id="pro" class="container margeTop pro">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-uppercase text-center">
                    Projets <br> <small class="white fz16">(cliquez sur les titres de chaque projet pour accéder à leur repo github)</small>
                    </h2>
                    <div class="text-center">
                        <a href="#innoside">
                            <button class="text-uppercase btn btn-info">
                                Innoside
                            </button>
                        </a>
                        <a href="#ma_pause_mode">
                            <button class="text-uppercase btn btn-info">
                                Ma pause mode
                            </button>
                        </a>
                        <a href="#loutrotter">
                            <button class="text-uppercase btn btn-info">
                                Loutrotter
                            </button>
                        </a>
                        <a href="#CV_Symfony">
                            <button class="text-uppercase btn btn-info">
                                CV Symfony
                            </button>
                        </a>
                        <a href="#CV_POO">
                            <button class="text-uppercase btn btn-info">
                                CV POO
                            </button>
                        </a>
                        <a href="#annonce_immo">
                            <button class="text-uppercase btn btn-info">
                                Annonce immo
                            </button>
                        </a>
                    </div>
                    <div class="page-header"></div>
                    <br>
                    <div class="owl-carousel">
                    <div data-hash="innoside" class="item">
                        <a href="https://bitbucket.org/mystiick/light/src/master/" rel="noopener" target="blank">
                            <h3 class="text-center">
                            Light by innoside
                            </h3>
                            <img src="img/innoside.jpg" class="img-title css-projet center-block" alt="innoside logo">
                        </a>
                        <p style="margin-top:30px;" class="text-center">
                            <strong>(Projet en période de stage / en ligne)</strong>
                            <strong><i>01/02/2018 - 31/04/2018</i></strong>
                        </p>
                        <p class="fz18 prez text-center">
                            Le projet repose sur de la réalité augmenté, principalement l’application mobile avec Cordova permettant de cibler des points d’intérêts proche de soit s’affichant sous formes d’affiche virtuelle et le back-office pour la gestion d’ajout/édition/suppression de contenu et modération des comptes utilisateurs.
                        </p>
                        <p class="fz18 prez text-center">
                            Il a été créer et réalisé en Symfony 3.3.7, seul sur le côté back-end et back-office, j’ai établi un cahier des charges, des Wireframes, MCD MPD de la base de données et un Trello pour le suivi des taches. J’ai mis en place le back-end avec une api permettant d’envoyer les informations contenues en base de données vers l’application mobile sous Cordova.
                            <br>
                            Le traitement des informations sur l’application mobile revenait à mon collègue de stage.
                        </p>
                        <p class="fz18 prez text-center">
                            Le côté back-office de l’application light by innoside est visible et en ligne à cette
                            <a target="blank" rel="noopener" href="http://145.239.73.238/light/"><b class="adresse"><i>adresse</i></b></a><br>
                            Il reste néanmoins en phase de test par les clients donc en attente d’un feed-back pour possiblement ajouter ou supprimer des fonctionnalités.
                        </p>
                        <div class="owl-project">
                            <div class="item-project">
                                <img src="img/projet/screen_innoside_project/1.png" class="img-project center-block" alt="barre de navigation">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_innoside_project/2.png" class="img-project center-block" alt="back office">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_innoside_project/3.png" class="img-project center-block" alt="lecteur pdf">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_innoside_project/4.png" class="img-project center-block" alt="accueil">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_innoside_project/5.png" class="img-project center-block" alt="profil">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_innoside_project/6.png" class="img-project center-block" alt="vue d'un point d'interet">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_innoside_project/7.png" class="img-project center-block" alt="accueil 2">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_innoside_project/8.png" class="img-project center-block" alt="login">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_innoside_project/9.png" class="img-project center-block" alt="creation point d'interet">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_innoside_project/10.png" class="img-project center-block" alt="index point d'interet">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_innoside_project/11.png" class="img-project center-block" alt="back office utilisateur">
                            </div>
                        </div>
                    </div>
                    <div data-hash="ma_pause_mode" class="item">
                        <a href="https://github.com/mickaelpol/ma_pause_mode" rel="noopener" target="blank">
                            <h3 class="text-center">
                                Ma pause mode
                            </h3>
                            <img class="img-title css-projet center-block" src="img/projet/mapausemode.png" alt="Logo projet ma pause mode">
                        </a>
                        <p style="margin-top:30px;" class="text-center">
                            <strong>(Projet pédagogique 2de vague)</strong>
                            <strong><i>15/01/2018 - 29/01/2018</i></strong>
                        </p>
                        <h4 class="prez text-center">
                            Ma pause mode fait partie de la deuxième vague de projets pédagogique en relation avec des entreprises.
                        </h4>
                        <p class="fz18 prez text-center">
                            Le projet repose sur un mix entre la globe-trotteuse et un site voulant mettre en avant sa passion pour la mode et faire découvrir de nouvelles tendances à travers le monde.
                        </p>
                        <p class="fz18 prez text-center">
                            Il a été créer et réalisé en Symfony 3.3.7, en groupe de 3 personnes à l’aide des outils Trello pour l’organisation du travail en équipe et Github pour le versionning.
                        </p>
                        <p class="fz18 prez text-center">
                            Il n’est pas encore mis en ligne pour des raisons d’optimisation et d’ajout de fonctionnalité voulu par la porteuse de projet avant sa mise en ligne.
                        </p>
                        <div class="owl-project">
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/1.png" class="img-project center-block" alt="onglet createurs">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/2.png" class="img-project center-block" alt="accueil 2">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/3.png" class="img-project center-block" alt="liste des pages">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/4.png" class="img-project center-block" alt="editer profil">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/5.png" class="img-project center-block" alt="article">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/6.png" class="img-project center-block" alt="onglet tendances">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/7.png" class="img-project center-block" alt="editer article">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/8.png" class="img-project center-block" alt="footer">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/9.png" class="img-project center-block" alt="accueil">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/10.png" class="img-project center-block" alt="a propos">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/11.png" class="img-project center-block" alt="modification du mot de passe">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/12.png" class="img-project center-block" alt="creation d'article">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/13.png" class="img-project center-block" alt="article">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/14.png" class="img-project center-block" alt="liste utilisateurs">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/15.png" class="img-project center-block" alt="onglet presse">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/16.png" class="img-project center-block" alt="barre de recherche">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/17.png" class="img-project center-block" alt="inscription">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/18.png" class="img-project center-block" alt="profil">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/19.png" class="img-project center-block" alt="compte utilisateur">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/20.png" class="img-project center-block" alt="liste des articles ">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/21.png" class="img-project center-block" alt="onglet createurs">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/22.png" class="img-project center-block" alt="suppression profil">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/23.png" class="img-project center-block" alt="modification mentions légales">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/24.png" class="img-project center-block" alt="article">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/25.png" class="img-project center-block" alt="onglet contact">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/26.png" class="img-project center-block" alt="login">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/27.png" class="img-project center-block" alt="mot de passe oublié">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/28.png" class="img-project center-block" alt="auteur de l'article">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/29.png" class="img-project center-block" alt="categorie back office">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/30.png" class="img-project center-block" alt="onglet mode">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/31.png" class="img-project center-block" alt="accueil">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/32.png" class="img-project center-block" alt="onglet voyages">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/33.png" class="img-project center-block" alt="profil dos">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_mpm/34.png" class="img-project center-block" alt="editer profil">
                            </div>
                        </div>
                    </div>
                    <div data-hash="loutrotter" class="item">
                        <a href="https://github.com/mickaelpol/loutrotter" rel="noopener" target="blank">
                            <h3 class=text-center>
                                Loutrotter
                                <img class="img-title css-projet center-block" src="img/projet/loutrotter.png" alt="icone projet loutrotter">
                            </h3>
                        </a>
                        <p style="margin-top:30px;" class="text-center">
                            <strong>(Projet pédagogique 1re vague)</strong>
                            <strong><i>09/10/2017 - 25/10/2017</i></strong>
                        </p>
                        <h4 class="prez text-center">
                            Au cours de ma formation nous avons eu des projets pédagogiques en relation avec de réelles entreprises, Loutrotter en fait partie.
                        </h4>
                        <p class="fz18 prez text-center">
                            Le projet repose sur un globe-trotter voulant mettre en avant ses voyages, faire voyager les personnes au travers de ses expériences personnelles et faire participer sa communauté.
                        </p>
                        <p class="fz18 prez text-center">
                            Il a été créer et réalisé en PHP 7 natifs sans POO, en groupe de 3 personnes à l’aide des outils Trello pour l’organisation du travail en équipe et Github pour le versionning.
                        </p>
                        <p class="fz18 prez text-center">
                            Il a été mis en ligne mais n’est plus visible actuellement étant donné que le propriétaire à changer de nom de domaine et n’a pas remis en ligne ce projet pour l’instant.
                        </p>
                        <div class="owl-project">
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/1.png" class="img-project center-block" alt="connexion">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/2.png" class="img-project center-block" alt="ajouter un pays">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/3.png" class="img-project center-block" alt="inscription">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/4.png" class="img-project center-block" alt="back office">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/5.png" class="img-project center-block" alt="suppression d'article">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/6.png" class="img-project center-block" alt="article">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/7.png" class="img-project center-block" alt="accueil">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/8.png" class="img-project center-block" alt="editer article">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/9.png" class="img-project center-block" alt="ajouter un pays validé">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/10.png" class="img-project center-block" alt="contact">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/11.png" class="img-project center-block" alt="accueil">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/12.png" class="img-project center-block" alt="liste des pays par continent">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/13.png" class="img-project center-block" alt="inscription">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/14.png" class="img-project center-block" alt="liste des articles">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/15.png" class="img-project center-block" alt="commentaire des articles">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/16.png" class="img-project center-block" alt="liste des utilisateurs">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/17.png" class="img-project center-block" alt="ajoutr un pays par continent">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/18.png" class="img-project center-block" alt="connexion validé">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_loutrotter/19.png" class="img-project center-block" alt="creation d'article">
                            </div>
                        </div>
                    </div>


                    <div data-hash="CV_POO" class="item">
                        <a href="https://github.com/mickaelpol/CV_php" rel="noopener" target="blank">
                            <h3 class="text-center">
                                CV PHP natif POO
                                <img class="img-title css-projet center-block" src="img/projet/cv.png" alt="icone projet loutrotter">
                            </h3>
                        </a>
                        <p style="margin-top:30px;" class="text-center">
                            <strong>(CV sur lequel vous vous trouvez)</strong>
                            <strong><b><i>01/05/2018 - 15/05/2018</i></b></strong>
                        </p>
                        <h4 class="prez text-center">
                            Ce CV permet de mettre en avant mes compétences dans le numérique mais aussi de retracer mon parcours.
                        </h4>
                        <p class="fz18 prez text-center">
                            Le projet repose sur l’envie de me faire connaître et mettre en avant les projets sur lesquels j’ai travaillé, mes compétences, mon expérience du web et ma passion du numérique.
                        </p>
                        <p class="fz18 prez text-center">
                            Il a été créer et réalisé en PHP 7 sans Framework, en POO pour le formulaire de contact, gérer directement via une classe pour générer le HTML, une classe pour valider le formulaire, vérifier que les champs obligatoires soit bien remplis et comporte les bonnes informations.<br>
                            Puis la dernière classe étant PHPMailer qui permet d’envoyer un email via un service de messagerie comme gmail par exemple sans pour autant ajouter de Plugin sur Heroku.<br>
                            La partie Ajax du CV permet de récupérer ma photo de profil sur un Google stylesheet et le reste du script en JavaScript me permet de changer le contenu des pages sans les recharger.<br>
                            Ce CV à été versionner sur Github et mis en lien sur la plate-forme Heroku pour le déploiement automatique, il suffit de push ses modifications vers le repos Github et Heroku étant lié mettra automatiquement à jour le site.
                        </p>
                        <div class="owl-project">
                            <div class="item-project">
                                <img src="img/projet/screen_poo/1.png" class="img-project center-block" alt="onglet diplômes">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_poo/2.png" class="img-project center-block" alt="onglet compétences">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_poo/3.png" class="img-project center-block" alt="accueil">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_poo/4.png" class="img-project center-block" alt="expériences">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_poo/5.png" class="img-project center-block" alt="formulaire de contact">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_poo/6.png" class="img-project center-block" alt="téléchargement du CV">
                            </div>
                        </div>
                    </div>

                    <div data-hash="CV_Symfony" class="item">
                        <a href="https://github.com/mickaelpol/Cv_Back_Symfony_Api_2018" rel="noopener" target="blank">
                            <h3 class="text-center">
                                CV Symfony
                                <img class="img-title css-projet center-block" src="img/projet/cv.png" alt="icone projet cv Symfony">
                            </h3>
                        </a>
                        <p style="margin-top:30px;" class="text-center">
                            <strong>(en cours)</strong><br>
                            <strong><i>01/05/2018 - ?/?/2018</i></strong>
                        </p>
                        <h4 class="prez text-center">
                            Mon CV avec le Framework Symfony et AngularJs est en cours de création, il me permet de me former sur le framework AngularJs.
                        </h4>
                        <p class="fz18 prez text-center">
                            Il me permettrait de maintenir à jour mon CV plus simplement avec un back-office, une APIREST, une base de données et une application en front avec le Framework JavaScript AngularJs pour afficher mon CV en SPA (single page application).
                        </p>
                        <p class="fz18 prez text-center">
                            J’ai déjà établi les MCD/MPD de ma base de données, créer le back-end et front de mon back-office.<br>
                            Pour l’instant l’application avec Symfony est terminé, elle me permet d’ajouter des catégories et du contenu dans celle-ci, elle envoie bien des données au format Json que je pourrais traiter avec AngularJs pour afficher chacune de ces catégories et leur contenu respectif.
                        </p>
                        <p class="fz18 prez text-center">
                            Il n’est pas encore mis en ligne, car la partie Angular reste manquante, mais est à venir prochainement.
                        </p>
                        <div class="owl-project">
                            <div class="item-project">
                                <img src="img/projet/screen_symfony/1.png" class="img-project center-block" alt="profil">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_symfony/2.png" class="img-project center-block" alt="ajout de contenu">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_symfony/3.png" class="img-project center-block" alt="visualisation du contenu">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_symfony/4.png" class="img-project center-block" alt="ajout de contenu">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_symfony/5.png" class="img-project center-block" alt="ajout de contenu en ajax validé">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_symfony/6.png" class="img-project center-block" alt="accueil">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_symfony/7.png" class="img-project center-block" alt="pop up de confirmation ajout de categorie">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_symfony/8.png" class="img-project center-block" alt="profil">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_symfony/9.png" class="img-project center-block" alt="connexion via pop up">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_symfony/10.png" class="img-project center-block" alt="categorie et son contenu">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_symfony/11.png" class="img-project center-block" alt="ajouter une categorie">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_symfony/12.png" class="img-project center-block" alt="suppression de categorie">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_symfony/13.png" class="img-project center-block" alt="validation d'ajout de categorie en ajax">
                            </div>
                        </div>
                    </div>


                    <div data-hash="annonce_immo" class="item">
                        <a href="https://github.com/mickaelpol/annonce_immo" rel="noopener" target="blank">
                            <h3 class="text-center">
                                Projet d’évaluation
                            </h3>
                            <img class="img-title css-projet center-block" src="img/projet/immo.jpg" alt="icone projet évaluation annonce immo">
                        </a>
                        <p style="margin-top:30px;" class="text-center">
                            <strong>(Projet d'evaluation de compétences)</strong>
                            <strong><b><i>01/01/2018 - 05/02/2018</i></b></strong>
                        </p>
                        <h4 class="prez text-center">
                            Le projet avait pour but d’évaluer nos compétences étant proche de la fin de formation.<br>
                        </h4>
                        <p class="fz18 prez text-center">
                            Il impliquait de créer un projet permettant de gérer un site d’annonce immobilière en ligne.<br>
                            Mettre en vente ou en location un bien appartenant à un client par le biais d’un vendeur, le bien devait contenir une ou des photos du bien, le nom de son propriétaire, son prix, une brève description et le vendeur ayant mis en ligne la maison ou Appartement.<br>
                            Une gestion des comptes utilisateurs étant les vendeurs qui possèdent un espace personnel leur permettant d’avoir leur base client et les biens mis en ligne depuis leur espace.<br>
                            Tous les biens devaient être consultable depuis la page d’accueil, on devait pouvoir effectuer une recherche via un input de recherche, pouvoir aussi trier par titre et par prix chaque bien.<br>
                            Pour finir le projet devait contenir une brève description en anglais du projet sur Github.<br>
                            Ce projet permettait de voir si l’on avait bien pris en main le côté POO de Symfony c’est-à-dire la gestion d’entité, de classe, des formulaires, des requêtes repository, le côté moteur de template (Twig / Blade), l’installation même du Framework et être à l’aise avec les lignes de commande propre a Symfony ainsi qu’être à l’aise sur le côté technique en anglais.
                        </p>
                        <p class="fz18 prez text-center">
                            Il a été créer et réalisé avec Symfony 3.3.7, Le projet devait être réalisé seul.<br>
                            Versionné via Github, les MCD/MPD de la base de données ont été créer ainsi que les Wireframes de l’application.<br>
                            Puis la base de donnée mis en place j’ai pu mettre en place tout le côté fonctionnel de l’application (connexion / ajout de bien / mise à jour / suppression, etc...).<br>
                            Une fois terminé j’ai mis en place un peu de CSS pour enjoliver le site, ajouter une fonctionnalité Jquery pour trier les bien par prix et par titre ainsi que l'upload de fichier via un bouton permettant l’ajout d’un bouton supplémentaire d'upload de fichier, cela permettait d’envoyer plusieurs fichier ou un seul selon les besoins. Par la suite en consultant l’annonce les images s’affiche sous forme de carrousel dans un modal Bootstrap.
                        </p>
                        <p class="fz18 prez text-center">
                            Le projet n’a pas été mis en ligne, étant donné que ce n’était qu’un projet d’évaluation permettant de remplir les compétences requises pour la certification, mais il a été vu et « noté » par notre lead formateur pour permettre de valider nos compétences.
                        </p>
                        <div class="owl-project">
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/1.png" class="img-project center-block" alt="profil d'un client">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/2.png" class="img-project center-block" alt="liste des types d'anonces">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/3.png" class="img-project center-block" alt="visualisation d'image d'une annonce">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/4.png" class="img-project center-block" alt="liste des annonces en admin">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/5.png" class="img-project center-block" alt="Annonce">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/6.png" class="img-project center-block" alt="liste des annonces en utilisateurs">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/7.png" class="img-project center-block" alt="création d'un nouveau client">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/8.png" class="img-project center-block" alt="visualisation des images d'une annonce dans un modal">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/9.png" class="img-project center-block" alt="création d'une annonce">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/10.png" class="img-project center-block" alt="creation d'un nouveau type d'annonce">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/11.png" class="img-project center-block" alt="connexion">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/12.png" class="img-project center-block" alt="editer un client">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/13.png" class="img-project center-block" alt="liste des clients">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/14.png" class="img-project center-block" alt="type d'annonce">
                            </div>
                            <div class="item-project">
                                <img src="img/projet/screen_annonce/15.png" class="img-project center-block" alt="editer un type d'annonce">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Fin de partie projets -->

        <!-- Partie formulaire de contact -->
        <div id="contact" class="container margeTop cont">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <h2 class="text-uppercase text-center">
                    Formulaire de contact
                    </h2>
                    <br>
                    <div class="form-area">
                        <?php if (array_key_exists('errors', $_SESSION)) : ?>
                        <div class="col-lg-12">
                            <div class="alert alert-danger">
                            <strong><?= implode('<br>', $_SESSION['errors']); ?></strong>
                            </div>
                        </div>
                        <?php endif; ?>
                        <form method="POST" action="?p=contact">
                            <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : ""); ?>
                            <div class="col-lg-6 col-xs-12">
                                <?= $form->text("nom", "nom") ?>
                                <?= $form->email("email", "email") ?>
                                <?= $form->mobile("mobile", "Téléphone (optionnel)") ?>
                                <?= $form->text("sujet", "Sujet") ?>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <?= $form->textarea("message", "Message") ?>
                                <span class="help-block">
                                <p id="characterLeft" class="text-contact help-block">Vous avez atteint la limite</p>
                                </span>
                            </div>
                            <div class="col-lg-offset-6 col-lg-6 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-xs-6">
                                        <?= $form->captcha() ?>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 visible-md visible-sm">
                                        <?= $form->submit("envoyer") ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 hidden-sm hidden-md col-xs-12">
                                        <?= $form->submit("envoyer") ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin partie formulaire de contact -->

        <div class="container">
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">X</button>
                            <h3 class="modal-title text-center">Téléchargement du CV</h3>
                            <p>Cliquez sur l'image pour télécharger le CV de votre choix</p>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="cv-pdf-d col-lg-4 col-lg-offset-1 col-md-6 col-sm-6 col-xs-12">
                                    <a download="pdffile/CV2018black.pdf" href="pdffile/CV2018black.pdf">
                                        <img class="center-block img-responsive css-modal" src="./img/imgpdfile/imgcvblack.png" alt="image du CV version couleur">
                                    </a>
                                    <br>
                                    <p class="text-center">
                                        Version couleur
                                    </p>
                                </div>
                                <div class="cv-pdf-d col-lg-4 col-lg-offset-2 col-md-6 col-sm-6 col-xs-12">
                                    <a download="pdffile/CV2019white.pdf" href="pdffile/CV2019white.pdf">
                                        <img class="center-block img-responsive css-modal" src="./img/imgpdfile/imgcvwhite.png" alt="image du CV version noir et blanc">
                                    </a>
                                    <br>
                                    <p class="text-center">
                                        Version noir et blanc
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="fz20 text-center text-success"><strong>Merci d'avoir télécharger mon CV</strong></p>
                                    <p class="fz18 text-center">J'espère entrer en contact avec vous prochainement.
                                    <br>Mickael POL
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-6">
                        <ul class="footer-list">
                            <span>Adresse</span>
                            <li>
                                <p>18 Rue de cugnaux</p>
                                <p>Appartement B 324</p>
                                <p>31300 Toulouse</p>
                            </li>
                            <li>
                                <p>07 81 94 81 13</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-6">
                        <ul class="footer-list">
                            <span>Menu</span>
                            <a href="#" class="homeClick">
                                <li>Accueil</li>
                            </a>
                            <a href="#" class="compClick">
                                <li>Compétences</li>
                            </a>
                            <a href="#" class="xpClick">
                                <li>Expériences</li>
                            </a>
                            <a href="#" class="dipClick">
                                <li>Diplomes</li>
                            </a>
                            <a href="#" class="proClick">
                                <li>Projet</li>
                            </a>
                            <a href="#" class="contactClick">
                                <li>Contact</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12">
                        <ul class="social">
                            <span>Social</span>
                            <li>
                                <a target="blank" rel="noopener" href="https://github.com/mickaelpol?tab=repositories">
                                    <i class="fa fa-github fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a target="blank" rel="noopener" href="https://www.linkedin.com/in/mickael-pol-02785a7a"/>
                                    <i class="fa fa-linkedin fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a class="contactClick" href="#">
                                    <i class="fa fa-google-plus fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/section.min.js"></script>
        <?php if (array_key_exists('errors', $_SESSION)) : ?>
        <?= $_SESSION['script'] ? $_SESSION['script'] : '' ?>
        <?php
        unset($_SESSION['errors']);
        unset($_SESSION['script']);
        unset($_SESSION['inputs']);
        endif;
        ?>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/app.min.js"></script>
    </body>
</html>