<?php require ('sendEmail.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Touba Alhjiratou Paris</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="index.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Alhijratou Paris</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#projects">Historique</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">S'inscrire</a></li>
                    <li class="nav-item"><a class="nav-link" href="#message">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Alhijratou Lil Amali Wal Xidma</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Nous somme une anithée dans la grande organisation
                        appelée le mouridisme.</h2>
                    <a class="btn btn-primary" href="#contact">S'inscrire</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/H.png" alt="..." />
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Identité</h4>
                        <p class="text-black-50 mb-0">Al hidjratou est une organisation porteuse
                            d’alternatives qui prend en compte le respect scrupuleux de l’orthodoxie mouride et de
                            toutes les règles qui régissent la communauté</p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/M.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Mission</h4>
                                <p class="mb-0 text-white-50">Développer les capacités d’agir de l’entité à assurer sa
                                    propre protection et sa promotion sociale et économique, en harmonie avec les
                                    exigences de la communauté mouride, mettre en exergue l’apprentissage,
                                    les valeurs enseignées par le Cheikh, tout en vulgarisant la vie et l’œuvre de
                                    Cheikhoul Khadim.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/V.jpg" alt="..." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Vison</h4>
                                <p class="mb-0 text-white-50">Une entité juste et solidaire où les membres y resteront à
                                    jamais, pour être acteurs,
                                    de leur propre développement et épanouissement en toute dignité dans la communauté
                                    mouride!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Inscription &emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;</h2>

            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" name="name" id="name" type="text" placeholder="Your Name *"
                                data-sb-validations="required" required />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Prénom et nom requise.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" name="email" id="email" type="email" placeholder="Your Email *"
                                data-sb-validations="required,email" required />
                            <div class="invalid-feedback" data-sb-feedback="email:required">Adresse email requise.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email n'est pas valide.</div>
                        </div>
                        <div class="form-group">
                            <!-- Profession input ---->
                            <input class="form-control" name="profession" id="professsion" type="texte"
                                placeholder="Your profession" data-sb-validations="required,email" required />
                            <div class="invalid-feedback" data-sb-feedback="email:required">champ requis</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" name="phone" id="phone" type="tel" placeholder="Your Phone *"
                                data-sb-validations="required" required />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Numero de télephone
                                requise.
                            </div>
                        </div> <br>
                        <input class="inscription" type="submit" name="inscription" value="Inscription"> <br> <br>
                        <br><br>
                    </div>
                    <!---   <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0"> -->
                    <!-- Message input-->
                    <!-- <input class="form-control" type="text" name="emailMessage" placeholder="adresse email"
                                required>
                            <br> -->
                    <!-- Object of message--->
                    <!-- <input class="form-control" type="text" name="objectMessage"
                                placeholder="l'object de votre message" required> <br>
                            <textarea style="resize: none;" class="form-control" id="message" name="texteMessage"
                                placeholder="Your Message *" data-sb-validations="required" required></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Presentez vous!</div>
                        </div>
                    </div>
                </div>  -->
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <!----- PHP CODE FOR DATABASE AND CONTACT  ----->
                    <!-- <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="https://Toubaljiratou">https://Toubaljiratou.fr</a>
                    </div>
                </div> --->
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <!-- <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error de l'envoie de message!</div>
                </div>--->
                    <!-- Submit Button-->
                    <!---   <input class="message" type="submit" name="message" value="Envoyé messages"> --->
            </form>
            <!----  FONCTION PHP FOR SUBMIT ---->
            <?php
        extract($_POST);
        if(isset($_POST['inscription'])){
            $nom=htmlentities($_POST['name']);
            $email=htmlspecialchars($_POST['email']);
            $phone=htmlspecialchars($_POST['phone']);
            $profession=htmlspecialchars($_POST['profession']);
            inscription($nom,$email,$phone,$profession);
            ?>
            <script>
            alert("Inscription réussie.Consulter le mail envoyé pour plus d'informations.")
            </script>
            <?php
        }
        ?>
            <!---- UN AUTRE FORMULAIRE POUR ENVOYER DES MESSAGES ---->
            <div id="message" class="nousContacter">
                <h3><strong>Nous Contacter...</strong></h3>
                <form class="nousContacter" id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <input class="form-control" type="text" name="emailMessage" placeholder="adresse email"
                                required>
                            <br>
                            <!-- Object of message--->
                            <input class="form-control" type="text" name="objectMessage"
                                placeholder="l'object de votre message" required> <br>
                            <textarea style="resize: none;" class="form-control" id="message" name="texteMessage"
                                placeholder="Your Message *" data-sb-validations="required" required></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Presentez vous!</div> <br>
                            &emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" name="message" value="Envoyé messages"
                                style="background-color: grey;">
                        </div>
                    </div>
                </form>
            </div>
            <!---  PHP CODE FOR RECEIVING EMAIL  ---->
            <?php
        if(isset($_POST['message'])){
            $email=htmlspecialchars($_POST['emailMessage']);
            $message=htmlspecialchars($_POST['texteMessage']);
            $object=htmlspecialchars($_POST['objectMessage']);
            receiveEmail($email,$object,$message);
            ?>
            <script>
            alert("Votre message a été envoyé avec succès nous vous répondros très bientôt.")
            </script>
            <?php
        }

        ?>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">22 rue pierre grange, <br> 94120 Fontenay Sous-Bois</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">alhijratouparis@gmail.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+33 7 53 89 57 84</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="https://www.tiktok.com/@alhijratou_paris"><i class="fab fa-tiktok"></i></a>
                <a class="mx-2" href="https://www.instagram.com/alhijratou_paris/"><i class="fab fa-instagram"></i></a>
                <a class="mx-2"
                    href="https://l.instagram.com/?u=https%3A%2F%2Fyoutube.com%2Fchannel%2FUCEVaQ0eeW8ES2NNuWxPXnjQ&e=AT28Ilzi5ezKESwPX0BjgN7OOylorlkdJnx0jT_P_3X7BhkrRH-8zSB551k_ECbMZufs80HH4FL8399-0HL6IXNYj0ho5R4-imcTWx4fkuSbMHCRy-aEDWE"><i
                        class="fab fa-youtube"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; ALHIJRATOU 2023</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->

    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src=""></script>
</body>

</html>