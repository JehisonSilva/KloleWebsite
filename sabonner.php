
<?php include("admin/bd.php");

// selection services
$sentencia=$conexion->prepare("SELECT * FROM `tlb_services`");
$sentencia->execute();
$liste_services=$sentencia->fetchAll(PDO::FETCH_ASSOC);

// selection produits
$sentencia=$conexion->prepare("SELECT * FROM `tbl_portfolio`");
$sentencia->execute();
$liste_portfolio=$sentencia->fetchAll(PDO::FETCH_ASSOC);

// selection entre
$sentencia=$conexion->prepare("SELECT * FROM `tbl_entre`");
$sentencia->execute();
$liste_entre=$sentencia->fetchAll(PDO::FETCH_ASSOC);

// selection registre
$sentencia=$conexion->prepare("SELECT * FROM `tbl_team`");
$sentencia->execute();
$liste_team=$sentencia->fetchAll(PDO::FETCH_ASSOC);

// selection config
$sentencia=$conexion->prepare("SELECT * FROM `tbl_config`");
$sentencia->execute();
$tbl_config=$sentencia->fetchAll(PDO::FETCH_ASSOC);

// selection blog
$sentencia=$conexion->prepare("SELECT * FROM `blog`");
$sentencia->execute();
$liste_blog=$sentencia->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Klole</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
       
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="assets/img/klole-logo.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        
                        <li class="nav-item"><a class="nav-link" href="noscoffrets.php">Nos coffrets</a></li>
                        <li class="nav-item"><a class="nav-link" href="offrir.php">Offrir</a></li>
                        <li class="nav-item"><a class="nav-link" href="leconcept.php">Le concept</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="parrainage.php">Parrainage</a></li>
                        <li class="nav-item"><a class="nav-link" href="sabonner.php">S'abonner</a></li>





                        <!-- <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="apropos.php">À propos</a></li>    
                        -->
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="background-image: url('assets/img/header-bg-contact.jpg');">
            <div class="container">
                <!-- <div class="masthead-subheading"><?php echo $tbl_config[0]['valeur']; ?></div>
                <div class="masthead-heading text-uppercase" style="font-size: 35px;"><?php echo $tbl_config[1]['valeur']; ?></div>
                <a class="btn btn-primary btn-xl text-uppercase"href="blog.php" href="<?php echo $tbl_config[3]['valeur']; ?>"><?php echo $tbl_config[2]['valeur']; ?></a> -->
            </div>
        </header>

   
        


        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo $tbl_config[13]['valeur']; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $tbl_config[14]['valeur']; ?></h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>


       
       <!-- Footer Start -->

    <div class="container-fluid footer1 bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" >
      <div class="container py-3">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Address</h5>           
            <p class="mb-2">
            <i class="fa fa-phone-alt me-3"></i>+33 ## ## ## ## </p>
            <p class="mb-2"> <i class="fa fa-envelope me-3"></i>info@klole.fr</p>  
            <div class="d-flex pt-2">              
                <a class="btn btn-outline-light btn-social" href="https://www.tiktok.com/@klol580"><i class="fab fa-tiktok"><svg xmlns="http://www.w3.org/2000/svg"   width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16"><path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13. 797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/></svg></i></a>
                <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/klole.box/"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>             
            </div>
          </div>
                  
          <div class="col-lg-9 col-md-6">
            <h3 class="text-light mb-2">Newsletter</h3>
            <p>Restez informé et profitez d'avantages exclusifs en vous inscrivant !</p>

            <div class="position-relative mx-auto" style="max-width: 600px">

             <div class="mb-3">
                          
              <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Adresse e-mail*"/>          
              <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">  S'inscrire  </button>            
            </div>
          </div>
        </div>
      </div>
     
      <br>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a class="border-bottom" href="#">Klole</a>, All Right Reserved. </div>
            <div class="col-md-6 text-center text-md-end"> Designed By Distributed By:
              <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer End -->
       
        <!-- Footer-->
        <!-- <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="<?php echo $tbl_config[15]['valeur']; ?>" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="<?php echo $tbl_config[16]['valeur']; ?>" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="<?php echo $tbl_config[17]['valeur']; ?>" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>



        
      
     

   


    </body>
</html>
