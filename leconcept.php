<?php include("admin/bd.php");

// selection blog
$sentencia=$conexion->prepare("SELECT * FROM `blog`");
$sentencia->execute();
$liste_blog=$sentencia->fetchAll(PDO::FETCH_ASSOC);

// selection newsletter
$sentencia=$conexion->prepare("SELECT * FROM `newsletter`");
$sentencia->execute();
$liste_newsletter=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet"/>
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
                        
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>

                        <li class="nav-item"><a class="nav-link" href="offrir.php">Offrir</a></li>
                        <li class="nav-item"><a class="nav-link" href="leconcept.php">Le concept</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="parrainage.php">Parrainage</a></li>
                        <li class="nav-item"><a class="nav-link" href="sabonner.php">S'abonner</a></li>


                        <!-- <li class="nav-item"><a class="nav-link" href="noscoffrets.php">Nos coffrets</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Découvrez le Plaisir Authentique et Sensuel !!!</div>
            </div>
        </header>
        
     <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">     
          <div class="col-lg-12">
            <div style="font-size: 22px;">
            
                <p style="text-align: justify;">Bienvenue chez Klole, votre source de produits érotiques naturels qui éveillent vos sens et renforcent votre connexion intime. Nous croyons en la beauté et la puissance de la nature, c'est pourquoi chaque produit que nous proposons est créé avec soin à partir d'ingrédients naturels et authentiques. 
                Explorez notre collection exquise qui allie passion et pureté. De l'harmonie sensuelle de nos huiles de massage aux délices captivants de nos bougies parfumées, chaque expérience Klole est conçue pour vous rapprocher de votre partenaire tout en vous permettant de vous détendre et de vous abandonner à la passion. 
                Nous comprenons que votre intimité mérite le meilleur. C'est pourquoi chez Klole, nous nous engageons à vous offrir des produits exempts de produits chimiques agressifs, privilégiant des formules naturelles qui nourrissent et subliment. Laissez-vous emporter par la magie de l'authenticité et offrez-vous des moments de plaisir qui sont à la fois doux pour vous et pour la planète. Découvrez l'art de l'amour dans sa forme la plus naturelle. Rejoignez-nous chez Klole et laissez les sensations érotiques naturelles éveiller vos désirs les plus profonds. Profitez d'une intimité épanouie tout en préservant l'équilibre de la nature qui nous entoure. 
                Plongez dans un monde où la passion rencontre la pureté. Klole - Éveillez vos sens, naturellement.</p>
                <div>
              <div>
            <div>
            
   <!-- Start retroy layout blog posts -->
	<section class="">
			<div class="row align-items-stretch retro-layout">
				
      <div class="col-sm-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">						
          <img class="card-img-top" src="assets/img/about/photo-1.JPG" alt="Title">
						<div class="text">
						</div>
					</a>
					<br>
          <a href="single.html" class="h-entry v-height gradient">				
          <img class="card-img-top" src="assets/img/about/photo-2.JPG" alt="Title">
						<div class="text">
						</div>
					</a>
			</div>
				
      <div class="col-sm-8">
				<a href="" class="h-entry img-5 h-100 gradient">
          <img class="card-img-top" src="assets/img/about/photo-3.JPG" alt="Title">
						<div class="text">						
						</div>
				</a>
			</div>     
	</section>


  <div class="container">     
          <div class="col-lg-12">
            <div>
                <h2 style="text-align: center;"></h2>
                <p style="text-align: justify;">Chez Klole, nous croyons en la beauté de la nature et en son pouvoir d'enrichir nos vies intimes. Nos produits sont soigneusement élaborés à partir d'ingrédients naturels, apportant une touche de douceur et de passion à vos moments les plus intenses. Que vous cherchiez à raviver la flamme de la passion ou à explorer de nouvelles sensations, notre collection saura répondre à vos désirs les plus profonds. 
                
                Découvrez des huiles de massage qui nourrissent non seulement votre peau, mais aussi vos liens émotionnels. Laissez nos bougies parfumées éclairer vos nuits, créant une ambiance séduisante et relaxante. Chaque produit Klole est une invitation à vous connecter avec votre partenaire d'une manière nouvelle et captivante.  
                
                Nous nous engageons à respecter votre bien-être et votre santé, c'est pourquoi tous nos produits sont exempts de produits chimiques agressifs et de substances synthétiques. Vivez vos fantasmes en toute confiance, sachant que Klole vous accompagne avec des solutions naturelles qui chérissent votre corps et votre esprit. 
                
                Rejoignez-nous dans cette aventure sensuelle où le naturel rencontre le plaisir. Klole vous invite à explorer des horizons érotiques inexplorés tout en honorant votre connexion avec la nature. Transformez vos moments intimes en expériences authentiques et épanouissantes. 
                
                Éveillez vos sens, choisissez Klole.</p>
                <div>
              <div>
            <div>
	<!-- End retroy layout blog posts -->



                  </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->
        
 
        


        <!-- Footer-->

        <!-- <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer> -->

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
              <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">                
                S'inscrire
              </button>            
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
