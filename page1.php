<!DOCTYPE html>
<html >
<head>

     <title>PHPJabbers.com | Free Job Agency Website Template</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO HERE -->
                       <div class="col-md-offset-1 col-md-4 col-xs-12 pull-right">
                         <img src="images/Logo-CNS.jpeg" width="450"    class="img-responsive img-circle" alt="" >
                    
                   </div> 
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li class="active"><a href="index.html">Home</a></li>
                         <li><a href="about-us.html">About Us</a></li>
                     
                         <li><a href="contact.html">Contact Us</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <!-- HOME -->
     <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                       
                                     
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                    
                                   </div>
                              </div>
                         </div>
                    </div>

                
               </div>
          </div>
     </section>

     <main>
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="text-center">

                                   <br>

                                   <p class="lead">
                                        
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

<section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>
                                   <small>
                                


<?php 
$log1='p1';
$mdp1='123';
$log2='p2';
$mdp='143';
$log3='p3';
$mdp3='128';

if (empty($_POST)) header("location:index.html"); 
else if

      (empty($_POST['Login']) || empty($_POST['mdp'])) {
          header("location:p1.html");
          echo 'Veuillez premplir tous les chapmps<br>';
          echo '<a href="index.html">Home</a>';

     }
     else {
      if  ((strcmp($_POST['Login'],$log1)==0 &&  strcmp($_POST['mdp'],$mdp1)==0  )
          ||
          (strcmp($_POST['Login'],$log2)==0 &&  strcmp($_POST['mdp'],$mdp2)==0  )
     ||
     (strcmp($_POST['Login'],$log3)==0 &&  strcmp($_POST['mdp'],$mdp3)==0  )
) 
          echo "connexion réussie";
     else 
        {          header("location:p2.html");
                  echo "Login ou mot de passe incorrecte<br>"; 
                 echo '<a href="index.html">Home</a>';
        }

     }


 ?>








                                   </small></h2>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="" class="img-responsive" alt="">
                                        </div>
                                       
                                   </div>

                                   <div class="">
                                        <h3><a href="">
                                             
                                        </a></h3>

                                        <p class="lead"><strong></strong></p>

                                        <p> <strong></strong></p>
                                   </div>

                                   <div class="">
                                        <a href="" ></a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="" class="img-responsive" alt="">
                                        </div>
                                      
                                   </div>

                               

                               
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="" class="img-responsive" alt="">
                                        </div>
                                      
                                   </div>


                                
                              </div>
                         </div>

                    </div>
               </div>
          </section>

          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                              
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="" class="img-responsive" alt="">
                                        </div>
                                     
                                   </div>

                                 

                                 
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="" class="img-responsive" alt="">
                                        </div>
                                      
                                   </div>

                               
                              </div>
                         </div>

  <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="" class="img-responsive" alt="">
                                        </div>
                                       
                                   </div>

                              </div>
                         </div>
                    </div>
               </div>
          </section>
          

          <section id="testimonial">
               <div class="container">
                    <div class="row">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   
                              </div>

                              <div class="">
                                   <div class="col-md-4 col-sm-4">
                                        <div class="">
                                         
                                           
                                           
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="">
                                         
                                          
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="">
                                       
                                        
                                         
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                      
                                   </div>

                              </div>
                        </div>
                    </div>
               </div>
          </section> 
     </main>

     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required>
                    
                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required>

                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>       

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                  <p>Avenue Cheikh Mohammed <br>Al Fadhel Ben Achour,<br>
                                    Bâtiment B4, Centre Urbain Nord,<br> Tunis 1082.<br>
                                   </p>                              </address>

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/cnstunisie/" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                <p>Copyright &copy; 2021 CNS</p>
                               </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                <p>70556641</p>
                                   <p><a href="mailto:contact@company.com">ccns2021@gmail.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>