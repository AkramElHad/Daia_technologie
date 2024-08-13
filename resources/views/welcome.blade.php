<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <title>DAIA TECHNOLOGIE</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

</head>
<body id="page-top">

    <!-- Navigation-->
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <span class="navbar-brand">
                <img src="https://daia-technologie.ma/logo.svg" alt="Logo de l'entreprise" class="log">
            </span>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#propos">À Propos</a></li>                  

                    <li class="nav-item"><a class="nav-link" href="#service">Services <i class="fas fa-caret-down">  </i></a>
                    <!--<div class="dropdown__menu">
                        <ul>
                            <li>
                                <a href="{{route('market')}}">Marketing digital</a>
                                <a href="{{route('market')}}">Marketing digital</a>

                            </li>
                        </ul>
                    </div>-->
                    
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <style>
        .pa {
            border-bottom: 4px solid rgb(76, 117, 76); 
            padding-bottom: 9px;
        }
    </style>

<section id="accueil">
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="col-lg-6 dai">
                <p class="pa">
                    <span class="highlight">Daia Technologie</span> 
                    <span class="lp">vous aide à découvrir le secret du marketing digital, de la production audiovisuelle et de la création d'événements.</span> 
                </p>                    
            </div>
        </div>
    </header>
</section>

    
    <!-- About-->
    <section class="page-section bg-light" id="propos">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-heading">À PROPOS DE</h2>
                    <h3 class="section-subheading">DAIA TECHNOLOGIE</h3>
                    <p class="text-muted">Daia Technologie est une agence marocaine, de conseil en stratégie média et branding. Daia Technologie accompagne les annonceurs afin de promouvoir leur image de marque, grâce à son œil graphique pointu et sa main technologique qualifiée. De la réflexion à la créativité, vous êtes au cœur des stratégies de notre agence, délivrant des solutions adaptées à votre secteur d’activité. Pour vous fournir des réalisations de qualité, parfaitement alignées avec vos objectifs, nous vous impliquons du début du processus à la fin de la création de votre projet. Orientée résultat, notre équipe pluridisciplinaire passionnée, dynamique et expérimentée met tout en œuvre pour atteindre les objectifs fixés.</p>
                    <a class="btn btn-success" href="#service">Plus !</a>
                </div>
                <div class="col-lg-6 background-image-container">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8d2Vic2l0ZXxlbnwwfHwwfHx8MA%3D%3D" alt="About DAIA Technologie">
                </div>
                
                
            </div>
        </div>
    </section>



    <section class="new-section bg-light" id="service">
        <p class="oo">Découvrez nos services !</p>
    
        <div class="container">
            <a href="{{route('market')}}" class="card-link">
                <div class="card">
                    <h2>Marketing Digital</h2>
                    <p>Nous créons et exécutons des campagnes de marketing digital efficaces pour atteindre vos objectifs commerciaux.</p>
                </div>
            </a>
            
            <a href="{{route('product')}}" class="card-link">
                <div class="card">
                    <h2>Production audiovisuelle</h2>
                    <p>Nous donnons vie à vos idées créatives avec une production audiovisuelle professionnelle et captivante.</p>
                </div>
            </a>
            
            <a href="{{route('creation')}}" class="card-link">
                <div class="card">
                    <h2>Création des évennements</h2>
                    <p>Créez des souvenirs mémorables à chaque événement avec notre expertise en organisation et production.</p>
                </div>
            </a>
        </div>
    </section>
    
    
    

    <!-- Section équipe-->

    <section class="page-section bg-light">
        <div class="container px-4 px-lg-5">
            <p class="tm text-center"> Notre équipe</p>
            <div class="row justify-content-center">
                <!-- Première carte membre d'équipe -->
                <div class="row justify-content-center">
                    <!-- Première carte membre d'équipe -->
                    <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/portfolio/jam.png" alt="Mr Jamal Ghazal">
                            <div class="card-body text-center">
                                <h5 class="card-title">Mr Jamal Ghazal</h5>
                                <p class="card-text">Directeur Général</p>
                                <div class="social">
                                    <a href="https://wa.me/+212 629250527" target="_blank" class="social-icon">
                                        <i class="fab fa-whatsapp"></i></a>
                                        <a href="mailto:Dg.ghazal@daia-technologie.ma" class="social-icon">
                                            <i class="fas fa-envelope"></i></a>
                                </div>

                                
                            </div>
                            
                        </div>
                    </div>
                    <!-- Deuxième carte membre d'équipe -->
                    <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card h-100">
                            <img class="card-img-top" src="assets/img/portfolio/tof.png" alt="Mme Meryem MOUNIR">
                            <div class="card-body text-center">
                                <h5 class="card-title">Mme aaa aa</h5>
                                <p class="card-text">Responsable R.H</p>
                                <div class="social">
                                    <a href="https://wa.me/+212 629250527" target="_blank" class="social-icon">
                                        <i class="fab fa-whatsapp"></i></a>
                                        <a href="mailto:jamal_ghazal@gmail.com" class="social-icon">
                                            <i class="fas fa-envelope"></i></a>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            

        </div>


    </section>



    <section class="clients-section bg-light">
        <p class="np">Nos Clients<p>
        <div class="clients-logos">
            <img src="assets/img/portfolio/guichet-removebg-preview.png" alt="Client 8">

            <img src="assets/img/portfolio/engraiss-removebg-preview.png" alt="Client 2">
            <img src="assets/img/portfolio/Capture_d_écran_2024-06-23_140237-removebg-preview.png" alt="Client 3">
            <img src="assets/img/portfolio/m2m-removebg-preview.png" alt="Client 4">
            <img src="assets/img/portfolio/ensa-removebg-preview.png" alt="Client 9">
            <img src="assets/img/portfolio/uni_-removebg-preview.png" alt="Client 10">

            <img src="assets/img/portfolio/ocp-removebg-preview.png" alt="Client 10">
            <img src="assets/img/portfolio/fsjes-removebg-preview.png" class="sl" alt="Client 5">
            <img src="assets/img/portfolio/abbatage-removebg-preview.png" alt="Client 6">
            <img src="assets/img/portfolio/e_logi-removebg-preview.png" alt="Client 7">
            <img src="assets/img/portfolio/tt-removebg-preview.png" alt="Client 7">



        </div>
    </section>

    <section class="page-section bg-light" id="contact" href="#contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <p class="npp">Contactez-nous!<p>
                        <p class="text-mutedd mb-5">Vous avez des questions ? Contactez-nous dès aujourd'hui pour obtenir plus d'informations sur nos services.!</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <!-- Afficher les messages de succès ou d'erreur -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
    
                    <form id="contactForm" action="{{ route('send.contact') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required />
                            <label for="name" class="custom-label">Nom complet</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                            <label for="email" class="custom-label">addresse mail</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" required />
                            <label for="phone" class="custom-label">Numéro de téléphone</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                            <label for="message" class="custom-label">Message</label>
                        </div>
                        <div class="d-grid">
                            <button class="btnr btn-primary btn-xl" type="submit">Submit</button> 
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="ft">
    <div class="container px-4 px-lg-5">
        <span class="image">
            <img src="https://daia-technologie.ma/logo.svg" alt="Logo de l'entreprise" class="logg">
        </span>
    </div>

    
    <div class="con">Copyright &copy; 2024 - DAIA TECHNOLOGIE</div>
    
    <!-- Nouvelle section pour le paragraphe à gauche -->
    <div class="footer-left">
        <p class="fr">Nos sièges : </p>

        <ul class="list-unstyled">
            <li><i class="fas fa-check"></i>El Jadida</li>
            <li><i class="fas fa-check"></i> Casablanca </li>
            <li><i class="fas fa-check"></i> Rabat</li>
            <li><i class="fas fa-check"></i> Marrakech</li>
            <li><i class="fas fa-check"></i> Tanger</li>

        </ul>
    </div>
    <div class="social-iconss">
        <a href="https://www.instagram.com/daia_technologie?igsh=MXc0dXI2aTJ4bXR3OQ==" target="_blank" class="social-iconn">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Afsd_profile%3AACoAAEAqPzoBFWvoc69j_5v7I-rP9mrgJKgTqnc&keywords=daia%20technologie&origin=RICH_QUERY_SUGGESTION&position=2&searchId=04b2082f-0625-4277-a27e-ea23af64a6bd&sid=UuX&spellCorrectionEnabled=false" target="_blank" class="social-iconn">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://www.facebook.com/people/DAIA-Technologie/100088413447416/" target="_blank" class="social-iconn">
            <i class="fab fa-facebook"></i>
        </a>
    </div>

    <div class="iv">
        <p class="fr">Nos Réseaux Sociaux</p>
    </div>

    <div class="foot">
        <p><i class="fas fa-envelope"></i> Email : Contact@daia-technologie.ma</p>
        <p><i class="fas fa-phone"></i> (Service Commercial) : +212 623415967</p>
        <p><i class="fas fa-phone"></i> (Service administratif) : +212 776697974 </p>
    </div>
</footer>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

    <script src="js/scripts.js"></script>
    <script src="<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />"></script>

</body>
</html>
