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
        <header class="masthead" style="background-image: url('assets/img/header-bg.jpg');">
            <div class="container">
                <!-- <div class="masthead-subheading"><?php echo $tbl_config[0]['valeur']; ?></div> -->
                <!-- <div class="masthead-heading text-uppercase" style="font-size: 35px;"><?php echo $tbl_config[1]['valeur']; ?></div> --> <br><br><br><br><br><br><br><br>
                <a class="btn btn-primary btn-xl text-uppercase"href="blog.php" href="<?php echo $tbl_config[3]['valeur']; ?>"><?php echo $tbl_config[2]['valeur']; ?></a>
            </div>
        </header>

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                                        
                    <h2 class="section-heading text-uppercase" style="font-size: 28px;"><?php echo $tbl_config[4]['valeur']; ?></h2>
                    <h3 class="section-subheading text-muted" ><?php echo $tbl_config[5]['valeur']; ?></h3>
                </div>
                <div class="row text-center">

            <?php foreach($liste_services as $registre) { ?>

                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x" style="color: #e7d5bd;"></i>
                            <i class="fas <?php echo $registre["icone"];?> fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3"> <?php echo $registre["title"];?></h4>
                        <p class="text-muted"> <?php echo $registre["description"];?></p>
                    </div>
            
            <?php } ?>               

                </div>
            </div>
        </section>


        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo $tbl_config[6]['valeur']; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $tbl_config[7]['valeur']; ?></h3>
                </div>
                <div class="row">

                <?php foreach($liste_portfolio as $registre) { ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $registre["ID"];?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/<?php echo $registre["image"];?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> <?php echo $registre["title"];?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $registre["subtitle"];?></div>
                            </div>
                        </div>
                    </div>
                      
                  

            <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $registre["ID"];?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $registre["title"];?></h2>
                                    <p class="item-intro text-muted"><?php echo $registre["subtitle"];?></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/<?php echo $registre["image"];?>" alt="..." />
                                    <p><?php echo $registre["description"];?></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            <?php echo $registre["client"];?>
                                        </li>
                                        <li>
                                            <strong>Categorie:</strong>
                                            <?php echo $registre["categorie"];?>
                                        </li>
                                        <li>
                                            <strong>URL :</strong>
                                            <?php echo $registre["url"];?>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>  
                    </div>
                </div>
            </div>
        </section>
        
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo $tbl_config[8]['valeur']; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $tbl_config[9]['valeur']; ?></h3>
                </div>
                <ul class="timeline">

                <?php
                $contador=1;
                foreach($liste_entre as $registre) { 
                    
                    ?>

                    <li <?php echo (($contador%2)==0)?'class="timeline-inverted"':"" ;?> >
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/<?php echo $registre['image'];?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo $registre['date'];?></h4>
                                <h4 class="subheading"><?php echo $registre['title'];?></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                <?php echo $registre['description'];?>
                                </p>
                            </div>
                        </div>
                    </li>
                <?php 
            $contador++;
            } ?>
                    

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4><br/>
                            <?php echo $tbl_config[10]['valeur']; ?>
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

      
        
    <!-- Contenido de tu página aquí -->
<!-- 
    <div class="popup" id="popup">
        <div class="popup-content">
            <span class="close" id="closePopup">&times;</span>
            <h2 style="text-align: center;" >Bienvenue !</h2> <br><br>
            <img class="image-pop" src="assets/img/klole-logo-popup.png">  <br>
            <p style="font-size: 25px;" >Restez en contact avec le plaisir en rejoignant notre communauté</p>

            <div class="mb-3">
                          
                <input class="form-control1 w-100 py-3 ps-4 pe-5" type="text" placeholder="Adresse e-mail*"/>          
                <button type="button" class="btn btn-primary py-2  top-15 end-10 mt-2 me-2">S'inscrire </button><br><br>        
                </div>                 
            
        </div>
    </div>
</body>
</html> -->




        
      

       
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
