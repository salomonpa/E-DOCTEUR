$
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hallo E-docteur</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body background="">



    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
                <i class="bi bi-phone"></i> +226 74586074
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="https://twitter.com/simplonco" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://web.facebook.com/Simplon.co/?locale=fr_FR&_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/simplonco/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Aorganization%3A3148332&keywords=simplon.co&origin=RICH_QUERY_SUGGESTION&position=0&searchId=2d320258-7f49-48a9-aa1d-95e1b448a79f&sid=%2C4A&spellCorrectionEnabled=false" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </div>



    <section class="section">
        <div>


            <!-- ======= Header ======= -->
            <header id="header" class="fixed-top">
                <div class="container d-flex align-items-center">

                    <h1 class="logo me-auto"><a href="index.html">Hallo E-docteur</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
                            <li><a class="nav-link scrollto" href="#about">A propos</a></li>
                            <li><a class="nav-link scrollto" href="#services">Services</a></li>
                            <li><a class="nav-link scrollto" href="#departments">Spécialités</a></li>
                            <li><a class="nav-link scrollto" href="#doctors">Docteurs</a></li>

                            </li>
                            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->

                    <a href="{{ route('login') }}" class="appointment-btn scrollto"><span
                            class="d-none d-md-inline">Se</span> connecter</a>

                </div>
            </header><!-- End Header -->

            <!-- ======= Hero Section ======= -->
            <section id="hero" class="d-flex align-itemsv-center">
                <div class="container">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Bienvenue Hallo E-Docteur</h1>
                    <h2>Votre santé, notre priorité</h2>

                </div>
            </section><!-- End Hero -->

            <main id="main">


                <!-- ======= Why Us Section ======= -->
                <section id="why-us" class="why-us">
                    <div class="container">

                        <div class="row">
                            <a class="cta-btn scrollto m-2" href="{{ route('rendezvouses.create') }}"><span
                                    class="appointment-btn scrollto">Prendre Rendez-vous</span> </a>

                            <div class="col-lg-4 d-flex align-items-stretch">
                                <div class="content">
                                    <h3>Pourquoi choisir Edocteur?</h3>
                                    <p>
                                        Avec Edocteur, vous pouvez obtenir des consultations médicales de qualité, des
                                        conseils personnalisés.
                                        Nous sommes là pour vous offrir des soins de santé pratiques, rapides et dignes
                                        de confiance.
                                        N'attendez pas, choisissez eDocteur pour une meilleure gestion de votre santé."


                                    </p>
                                    <div class="text-center">
                                        <a href="#" class="more-btn">Télécharger le document pour les examens ici<i class="bx bx-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 d-flex align-items-stretch">
                                <div class="icon-boxes d-flex flex-column justify-content-center">
                                  <div class="row">
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                      <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Alimentation Équilibrée</h4>
                                        <p> Adoptez une alimentation équilibrée en incluant une variété de fruits, légumes, protéines maigres et grains entiers.
                                             Évitez les excès de sucre et de sel, et privilégiez
                                             des portions adaptées à vos besoins nutritionnels individuels
                                            </p>
                                      </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                      <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Hydratation Adequate</h4>
                                        <p>Assurez-vous de maintenir une hydratation adéquate tout au long de la journée. Boire suffisamment d'eau est essentiel pour 
                                      la santé générale contribuant à la digestion, à la régulation de la température corporelle.</p>
                                      </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                      <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <h4>Sommeil de qualité</h4>
                                        <p>Priorisez un sommeil de qualité en établissant une routine régulière. Évitez les écrans avant le coucher,
                                             créez un environnement propice au sommeil, et assurez-vous de bénéficier
                                             de 7 à 9 heures de sommeil chaque nuit pour favoriser une récupération optimale</p>
                                      </div>
                                    </div>
                                  </div>
                                    </div><!-- End .content-->
                                </div>
                            </div>
                    
                          </div>
                        </section><!-- End Why Us Section -->
                    
                <!-- ======= About Section ======= -->
                <section id="about" class="about">

                    <div class="container-fluid">

                        <div class="row">
                            <div
                                class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                                <a href="https://www.youtube.com/watch?v=5aDA0BNBpSY"
                                    class="glightbox play-btn mb-4"></a>
                            </div>

                            <div
                                class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                                <h3>Bienvenue sur eDocteur, votre destination de confiance pour avoir des soins de santé
                                    de
                                    qualité</h3>
                                <p>Fondée avec la vision de rendre les soins médicaux accessibles et personnalisés,
                                    notre
                                    clinique en ligne réunit une équipe de spécialistes dévoués</p>

                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-fingerprint"></i></div>
                                    <h4 class="title"><a href="">Mission</a></h4>
                                    <p class="description">Notre mission est fournir des services médicaux tout en
                                        facilitant
                                        les échanges grace à la pointe de la technologie, tout en maintenant une
                                        approche
                                        humaine et empathique. Chaque membre de notre équipe partage un engagement
                                        profond
                                        envers le bien-être de nos patients.

                                    </p>
                                </div>

                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-gift"></i></div>
                                    <h4 class="title">Disponibilité de l'équipe médicale<a href=""></a></h4>
                                    <p class="description">Chez Hallo eDocteur, nous comprenons l'importance cruciale
                                        de la
                                        relation entre le patient et le médecin. C'est pourquoi nous mettons l'accent
                                        sur une
                                        communication transparente et un soutien continu. Nos spécialistes, experts dans
                                        leurs
                                        domaines respectifs, sont là pour vous guider à chaque étape de votre parcours
                                        de santé.
                                        /p>
                                </div>

                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-atom"></i></div>
                                    <h4 class="title"><a href="">Obejectifs</a></h4>
                                    <p class="description">Nous sommes fiers d'intégrer les dernières avancées
                                        technologiques
                                        pour vous offrir des renseignements pratiques sur nos services et
                                        prestations.Explorez
                                        notre plateforme en un clic pour en savoir plus nos services diversifiés.
                                        Rejoignez-nous
                                        chez eDocteur, où votre bien-être est notre priorité. Nous sommes impatients de
                                        vous
                                        accompagner vers une vie plus saine et épanouissante.</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </section><!-- End About Section -->

                <!-- ======= Counts Section ======= -->
                <section id="counts" class="counts">
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="count-box">
                                    <i class="fas fa-user-md"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="20"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Docteurs</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                                <div class="count-box">
                                    <i class="far fa-hospital"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="18"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Departements</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                                <div class="count-box">
                                    <i class="fas fa-flask"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="12"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Laboratoire de recherche</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                                <div class="count-box">
                                    <i class="fas fa-award"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="5000"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Prix</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Counts Section -->

                <!-- ======= Services Section ======= -->
                <section id="services" class="services">
                    <div class="container">

                        <div class="section-title">
                            <h2>Services</h2>
                            <p>La clinique médicale Hallo E-Docteur vous propose une gamme complète de services de
                                santé, allant
                                de bon conseils à suivre en ligne à des diagnostics avancés, pour vous offrir des soins
                                médicaux
                                de qualité."
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                <div class="icon-box">
                                    <div class="icon"><i class="fas fa-heartbeat"></i></div>
                                    <h4><a href="">Service de Réanimation</a></h4>
                                    <p>Notre service de réanimation est dédié à assurer des soins intensifs de qualité,
                                        avec une
                                        équipe médicale spécialisée et des équipements de pointe, afin de garantir la
                                        meilleure
                                        prise en charge pour nos patients les plus critiques."</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                                <div class="icon-box">
                                    <div class="icon"><i class="fas fa-pills"></i></div>
                                    <h4><a href="">Lorem Ipsum</a></h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                                <div class="icon-box">
                                    <div class="icon"><i class="fas fa-hospital-user"></i></div>
                                    <h4><a href="">Pharmacie</a></h4>
                                    <p>Notre pharmacie assure un accès rapide et pratique à une large gamme de
                                        médicaments et de
                                        soins pharmaceutiques, garantissant ainsi votre bien-être avec
                                        efficacité et expertise."
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box">
                                    <div class="icon"><i class="fas fa-dna"></i></div>
                                    <h4><a href="">Laboratoire</a></h4>
                                    <p>Notre laboratoire dispose des outils de qualité afin de garantir la justesse et
                                        la
                                        fiabilité des résultats d'analyses </p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box">
                                    <div class="icon"><i class="fas fa-wheelchair"></i></div>
                                    <h4><a href="">Salle des patients</a></h4>
                                    <p>"Notre salle des patients à la clinique Hallo E-Docteur est conçue pour assurer
                                        votre
                                        confort et votre intimité. Avec des aménagements accueillants, nous créons un
                                        environnement propice à votre rétablissement, tout en veillant à votre bien-être
                                        pendant votre séjour."</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box">
                                    <div class="icon"><i class="fas fa-notes-medical"></i></div>
                                    <h4><a href="">Service chirurgical</a></h4>
                                    <p> Le service chirurgical offre des interventions spécialisées et personnalisées,
                                        combinant
                                        l'expertise de nos chirurgiens chevronnés avec des installations modernes,
                                        assurant
                                        ainsi des soins chirurgicaux de haut niveau pour votre bien-être</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Services Section -->

                <!-- ======= Appointment Section ======= -->
                <!-- End Appointment Section -->

                <!-- ======= Departments Section ======= -->
                <section id="departments" class="departments">
                    <div class="container">

                        <div class="section-title">
                            <h2>Spécialités</h2>
                            <p>Gagnez du temps, prenez rendez-vous avec vos praticiens afin de garantir votre bien être
                            </p>
                        </div>

                        <div class="row gy-4">
                            <div class="col-lg-3">
                                <ul class="nav nav-tabs flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-bs-toggle="tab"
                                            href="#tab-1">Cardiologie</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurologie</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hepatologie</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrie</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Ophtalmologie</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-9">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tab-1">
                                        <div class="row gy-4">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>Cardiologie</h3>
                                                <p class="fst-italic">Notre établissement offre des soins en
                                                    cardiologie</p>
                                                <p>Notre équipe de professionnels de la santé est dévouée à assurer des
                                                    soins
                                                    cardiaques de la plus haute qualité, allant de la prévention et du
                                                    diagnostic aux traitements avancés. La santé de votre cœur est entre
                                                    de
                                                    bonnes mains chez nous</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="assets/img/departments-1.jpg" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-2">
                                        <div class="row gy-4">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>Neurologie</h3>
                                                <p class="fst-italic">Nous sommes heureux de vous présenter notre
                                                    département
                                                    en neurologie, dédié à la compréhension et au traitement des
                                                    troubles
                                                    neurologiques</p>
                                                <p>Notre équipe de spécialistes en neurologie est engagée à offrir des
                                                    soins de
                                                    premier ordre pour les patients souffrant de maladies du système
                                                    nerveux.
                                                    Qu'il s'agisse de diagnostics précis, de traitements innovants ou de
                                                    la
                                                    prise en charge des affections neurologiques,
                                                    nous sommes là pour soutenir votre bien-être neurologique."
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="assets/img/departments-2.jpg" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-3">
                                        <div class="row gy-4">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>Hepatologie</h3>
                                                <p class="fst-italic">Nous avons également des spécialistes en
                                                    Hématologie.
                                                    spécialisé dans le diagnostic et le traitement des maladies du foie.
                                                </p>
                                                <p> Notre équipe de experts en hépatologie s'engage à offrir des soins
                                                    de
                                                    qualité supérieure pour prendre en charge un large éventail de
                                                    troubles
                                                    hépatiques. Votre santé hépatique est précieuse, et nous sommes là
                                                    pour vous
                                                    offrir l'expertise
                                                    et le soutien nécessaires pour maintenir votre foie en bonne santé."
                                                </p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="assets/img/departments-3.jpg" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-4">
                                        <div class="row gy-4">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>Pédiatrie</h3>
                                                <p class="fst-italic">Dedié au bien et la santé de vos enfants</p>
                                                <p>Nous comprenons à quel point la santé de vos enfants est importante,
                                                    c'est
                                                    pourquoi notre équipe de professionnels
                                                    de la pédiatrie se consacre à fournir des soins attentionnés et
                                                    spécialisés
                                                    pour les enfants,
                                                    des nourrissons aux adolescents. Chez nous, la santé de vos enfants
                                                    est
                                                    notre priorité,
                                                    et nous travaillons pour les aider à grandir en bonne
                                                    santé et heureux.</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="assets/img/departments-4.jpg" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-5">
                                        <div class="row gy-4">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>Ophtamologie</h3>
                                                <p class="fst-italic"> Pour la préservation et à l'amélioration de la
                                                    santé
                                                    visuelle.</p>
                                                <p>Nos ophtalmologistes hautement qualifiés sont là pour prendre soin de
                                                    vos
                                                    yeux, que ce soit pour des examens de routine, des traitements
                                                    médicaux ou
                                                    des interventions chirurgicales. La vue est précieuse, et nous
                                                    mettons tout
                                                    en œuvre pour assurer votre confort visuel
                                                    et votre bien-être</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="assets/img/departments-5.jpg" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section><!-- End Departments Section -->

                <!-- ======= Doctors Section ======= -->
                <section id="doctors" class="doctors">
                    <div class="container">

                        <div class="section-title">
                            <h2>Docteurs</h2>
                            <p> Rencontrez notre équipe de médecins hautement qualifiés et dévoués, prêts à vous offrir des conseils médicaux personnalisés.
                                 Nos professionnels de la santé sont là pour répondre à vos questions, discuter de vos préoccupations médicales et
                                 vous guider vers des solutions adaptées</p>
                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="member d-flex align-items-start">
                                    <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Robert Rolphe White</h4>
                                        <span>Medecin chef</span>
                                        <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                        <div class="social">
                                            <a href="https://twitter.com/home?lang=fr"><i class="ri-twitter-fill"></i></a>
                                            <a href="https://web.facebook.com/profile.php?id=100089984245344&locale=fr_FR"><i class="ri-facebook-fill"></i></a>
                                            <a href="https://www.instagram.com/chirurgienpediatre/"><i class="ri-instagram-fill"></i></a>
                                            <a href="https://www.linkedin.com/feed/"> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="member d-flex align-items-start">
                                    <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Chantal Sandaniv</h4>
                                        <span>Cardiologue</span>
                                        <p>Téléphone: 02030455</p>
                                        <div class="social">
                                            <a href="https://twitter.com/home?lang=fr"><i class="ri-twitter-fill"></i></a>
                                            <a href="https://web.facebook.com/pages/Medecin-Cardiologue/599844070413473?locale=fr_FR"><i class="ri-facebook-fill"></i></a>
                                            <a href="https://www.instagram.com/medecin_cardiologue/"><i class="ri-instagram-fill"></i></a>
                                            <a href="https://www.linkedin.com/feed/"> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="member d-flex align-items-start">
                                    <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>William Anderson</h4>
                                        <span>Ophtamologue</span>
                                        <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                        <div class="social">
                                            <a href="https://twitter.com/home?lang=fr"><i class="ri-twitter-fill"></i></a>
                                            <a href="https://web.facebook.com/groups/258162064593690/user/100002463813981/?locale=fr_FR"><i class="ri-facebook-fill"></i></a>
                                            <a href="https://www.instagram.com/ophtalmologue_fridi/"><i class="ri-instagram-fill"></i></a>
                                            <a href="https://www.linkedin.com/feed/"> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="member d-flex align-items-start">
                                    <div class="pic"><img src="assets/img/flo1.jpg2.jpg" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Flora Bems</h4>
                                        <span>Pédiatre</span>
                                        <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                        <div class="social">
                                            <a href="https://twitter.com/home?lang=fr"><i class="ri-twitter-fill"></i></a>
                                            <a href="https://web.facebook.com/groups/297231083722928?locale=fr_FR"><i class="ri-facebook-fill"></i></a>
                                            <a href="https://www.instagram.com/chirurgienpediatre/"><i class="ri-instagram-fill"></i></a>
                                            <a href="https://www.linkedin.com/feed/"> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Doctors Section -->

                <!-- ======= Frequently Asked Questions Section ======= -->
                <section id="faq" class="faq section-bg">
                    <div class="container">

                        <div class="section-title">
                            <h2>Questions fréquemment posées</h2>
                            <p></p>
                        </div>

                        <div class="faq-list">
                            <ul>
                                <li data-aos="fade-up">
                                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                        class="collapse" data-bs-target="#faq-list-1">Quelles sont les politiques de remboursement en cas d'annulation de rendez-vous? <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                        <p>
                                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                            Faucibus
                                            pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                            suscipit.
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                        data-bs-target="#faq-list-2" class="collapsed">Quels types d'assurances médicales sont acceptés, le cas échéant?
                                        nunc? <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                            convallis
                                            tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                        data-bs-target="#faq-list-3" class="collapsed">Comment puis-je annuler ou reporter un rendez-vous médical? <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                            Faucibus
                                            pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                            suscipit.
                                            Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                            convallis
                                            tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                        data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec
                                        nam
                                        aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                            suspendisse in
                                            est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                            suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus
                                            in.
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                        data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus
                                        ornare.
                                        Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae
                                            ultricies leo
                                            integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet.
                                            Turpis nunc
                                            eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </section><!-- End Frequently Asked Questions Section -->

                <!-- ======= Testimonials Section ======= -->
                <section id="testimonials" class="testimonials">
                    <div class="container">

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <img src="assets/img/testimonials/testimonials-1.jpg"
                                                class="testimonial-img" alt="">
                                            <h3>Saul Goodman</h3>
                                            <h4>Ceo &amp; Founder</h4>
                                            <p>
                                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                Dans l'intérêt de l'objectif, il convient de veiller aux résultats jusqu'à ce que la compagnie aérienne
                                                il reprend CNN. Quant aux accusateurs, il faut une certaine discipline
                                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <img src="assets/img/testimonials/testimonials-2.jpg"
                                                class="testimonial-img" alt="">
                                            <h3>Sara Wilsson</h3>
                                            <h4>Designer</h4>
                                            <p>
                                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                «Quelques jours avant un voyage, le bas de mon dos s’est bloqué. J’ai pu
                                                avoir
                                                rapidement un rendez-vous grâce à Hallo E-docteur qui m’a permis
                                                d’aller
                                                mieux et de pouvoir partir et profiter de mon voyage.»


                                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <img src="assets/img/testimonials/testimonials-3.jpg"
                                                class="testimonial-img" alt="">
                                            <h3>Jena Karlis</h3>
                                            <h4>Store Owner</h4>
                                            <p>
                                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                Enim nisi quem export duis labore cillum quae magna enim sint quorum
                                                nulla quem
                                                veniam duis minim tempor labore quem eram duis noster aute amet eram
                                                fore quis
                                                sint minim.
                                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <img src="assets/img/testimonials/testimonials-4.jpg"
                                                class="testimonial-img" alt="">
                                            <h3>Matt Brandon</h3>
                                            <h4>Freelancer</h4>
                                            <p>
                                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export
                                                minim
                                                fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt
                                                elit fore
                                                quem dolore labore illum veniam.
                                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <img src="assets/img/testimonials/testimonials-5.jpg"
                                                class="testimonial-img" alt="">
                                            <h3>John Larson</h3>
                                            <h4>Entrepreneur</h4>
                                            <p>
                                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam
                                                tempor
                                                noster veniam enim culpa labore duis sunt culpa nulla illum cillum
                                                fugiat legam
                                                esse veniam culpa fore nisi cillum quid.
                                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </section><!-- End Testimonials Section -->

                <!-- ======= Gallery Section ======= -->
                <section id="gallery" class="gallery">
                    <div class="container">

                        <div class="section-title">
                            <h2>Gallerie</h2>
                            <p>Découvrez l'excellence visuelle de notre clinique à travers notre galerie en ligne.
                                 Parcourez des clichés captivants de nos installations modernes,
                                 de notre équipe dévouée et des services de pointe que nous offrons.</p>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row g-0">

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-1.jpg" class="galelry-lightbox">
                                        <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                                        <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                                        <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                                        <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                                        <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                                        <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                                        <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <div class="gallery-item">
                                    <a href="assets/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                                        <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Gallery Section -->

                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact">
                    <div class="container">

                        <div class="section-title">
                            <h2>Contact</h2>
                            <p>CONTACTEZ NOUS</p>
                            <p>Remplissez le formulaire</p>
                        </div>
                    </div>

                    <div>
                        <iframe
                            style="border:0; width: 100%; height: 350px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.095979164438!2d-1.5030509258212703!3d12.376502827647675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe47e1af9855%3A0x1278af12903c216!2sCampus%20Num%C3%A9rique%20Francophone%20de%20Ouagadougou%20(AUF%20OUAGA)!5e0!3m2!1sfr!2sbf!4v1699368879879!5m2!1sfr!2sbf"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="container">
                        <div class="row mt-5">

                            <div class="col-lg-4">
                                <div class="info">
                                    <div class="address">
                                        <i class="bi bi-geo-alt"></i>
                                        <h4>Location:</h4>
                                        <p>Ouaga2000, Ouagadougou, BF 535022</p>
                                    </div>

                                    <div class="email">
                                        <i class="bi bi-envelope"></i>
                                        <h4>Email:</h4>
                                        <p>info@example.com</p>
                                    </div>

                                    <div class="phone">
                                        <i class="bi bi-phone"></i>
                                        <h4>Appellez:</h4>
                                        <p>+226 55 89 55 55</p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-8 mt-5 mt-lg-0">

                                <form action="forms/contact.php" method="post" role="form"
                                    class="php-email-form">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Your Name" required>
                                        </div>
                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Send Message</button></div>
                                </form>

                            </div>

                        </div>

                    </div>
                </section><!-- End Contact Section -->

            </main><!-- End #main -->

            <!-- ======= Footer ======= -->
            <footer id="footer">

                <div class="footer-top">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-3 col-md-6 footer-contact">
                                <h3>Hallo E-docteur</h3>
                                <p>
                                    Ouaga2000 <br>
                                    Ouagadougou, 535022<br>
                                    Burkina Faso <br><br>
                                    <strong>Phone:</strong> +226 55 89 55 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>
                            </div>

                            <div class="col-lg-2 col-md-6 footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Equipe & service</a>
                                    </li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>Nos Services</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a>
                                    </li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-4 col-md-6 footer-newsletter">
                                <h4>Rejoingnez notre Newsletter</h4>
                                <p>Veuillez saisir votre Email</p>
                                <form action="" method="post">
                                    <input type="email" name="email"><input type="submit" value="Subscribe">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="container d-md-flex py-4">

                    <div class="me-md-auto text-center text-md-start">
                        <div class="copyright">
                            &copy; Copyright <strong><span>Hallo E-docteur</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                    <div class="social-links text-center text-md-right pt-3 pt-md-0">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
            </footer><!-- End Footer -->

            <div id="preloader"></div>
            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>

            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>

</body>

</html>
