<!DOCTYPE php>
<html lang="en">

<!-- THIS IS THE HOME PAGE FOR YOUR WEBSITE -->

<head>
    <!-- Update the meta below for each new page -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>


<!-- This pulls in all of the CSS included within the 'includes.html' file and helps reduce clutter -->
    <?php include_once("include_CSS.html"); ?>


<!-- Remove this line if you will not be using the 'froced_modal.html' file to display a popup -->
    <?php include_once("forced_modal.html"); ?>

</head>



<header>
        <section class="top" id="top">
<!-- Below is the code for the header navigation bar -->
     <?php include_once("header.html"); ?>


<!--  Below is the code for the header image / strings / buttons -->
         <div class="header-content" style="background-attachment: fixed;">
            <div class="header-content-inner">

                <h1 id="homeHeading" style="align:left;float:left;">Welcome to Canvas.</h1>
                <br>
                <hr>
                <p style="color:white; font-family: Roboto, sans-serif; font-size:3vh; font-weight:100;">A mobile first website constructed using PHP and Twitters popular framework.</p>
                <a href="#about" class="btn btn-primary btn-outline btn-lg">Find Out More</a>
                <div>
                    <a class="page-scroll" href="#about" style="color:white; font-size:15px;">•••</a>
                 </div>
</div>
</div>


            </div>
        </div>
</header>


<body>
   
<section class="bg-primary" id="about">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span9 text-center">
                    <h2 class="section-heading" style="font-family:raleway; font-size:4vh;">All the features you want</h2>
                    <h5 style="font-size: 1.7vh; font-family:raleway;">Integer nec neque leo. Pellentesque nec ipsum ante. Vivamus viverra, libero.</h5>
                    <hr class="light" style="max-width:80px;">
                    </div>
                </div>
                </div>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-md-6" style="font-family: Roboto, sans-serif; font-weight:100; text-align:left;">
        <br>
        <br>
        <p class="col-xs-2">
            <img class="img-responsive sr-button" src="img/icons/tools_64px.png" alt="icon" style="float:left; padding-top:5px;">
            </p>
        <p style="font-size:3vh; font-family:raleway; margin-bottom:-5px;">Fast cloud upload</p>
        <p style="font-size:1.7vh; overflow: hidden;">Integer nec neque leo. Pellentesque nec ipsum ante. Vivamus viverra, libero et hendrerit placerat.</p>
        <br>
        <br>
        <p class="col-xs-2">
            <img class="img-responsive sr-button" src="img/icons/beaker_64px.png" alt="icon" style="float:left;">
            </p>
        <p style="font-size:3vh; font-family:raleway; margin-bottom:-5px; margin-top:-10px;">Smart search</p>
        <p style="font-size:1.7vh; overflow: hidden;">Integer nec neque leo. Pellentesque nec ipsum ante. Vivamus viverra, libero et hendrerit placerat.</p>
        <br>
        <br>
        <p class="col-xs-2">
            <img class="img-responsive sr-button" src="img/icons/browser_64px.png" alt="icon" style="float:left;">
            </p>
        <p style="font-size:3vh; font-family:raleway; margin-bottom:-5px; margin-top:-10px;">Full analytics</p>
        <p style="font-size:1.7vh; overflow: hidden;">Integer nec neque leo. Pellentesque nec ipsum ante. Vivamus viverra, libero et hendrerit placerat.</p>
        <br>
        <br>
        <div class="col-md-6 text-center" style="margin: 0 auto; float:none;">
        <a href="#services" class="page-scroll btn btn-default btn-outline btn-xl sr-button">Get Started!</a>
        <br>
        <br>
        </div>
        </div>
        <div class="col-md-6 text-center">
        <br>
        <br>
        <img class="img-responsive sr-button" src="img/macbook1.png" alt="computer" style="display: block; margin: 0 auto; vertical-align:middle;">
    </div>
</div>
</section>




    <section class="bg-primary testBlock .img-responsive" id="about">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span9 text-center">
                    <h2 class="section-heading" style="font-family:raleway; font-size:4vh;">Powerful yet simple</h2>
                    <h5 style="font-size: 1.7vh; font-family:raleway;">Integer nec neque leo. Pellentesque nec ipsum ante. Vivamus viverra, libero.</h5>
                    </div>
                </div>


<div class="container-fluid">
    <div class="row-fluid">
         <div class="col-md-6 text-center">
        <br>
        <br>
        <img class="img-responsive sr-button" src="img/responsive.png" alt="computer" style="display: block; margin: 0 auto; vertical-align:middle;">
    </div>
        <div class="col-md-6" style="font-family: Roboto, sans-serif; font-weight:100; text-align:left;">
        <br>
        <br>
        <p class="col-xs-2">
            <img class="img-responsive sr-button" src="img/icons/tools_64px.png" alt="icon" style="float:left; padding-top:5px;">
            </p>
        <p style="font-size:3vh; font-family:raleway; margin-bottom:-5px;">Full hosted and secure</p>
        <p style="font-size:1.7vh; overflow: hidden;">Integer nec neque leo. Pellentesque nec ipsum ante. Vivamus viverra, libero et hendrerit placerat.</p>
        <br>
        <br>
        <p class="col-xs-2">
            <img class="img-responsive sr-button" src="img/icons/beaker_64px.png" alt="icon" style="float:left;">
            </p>
        <p style="font-size:3vh; font-family:raleway; margin-bottom:-5px; margin-top:-10px;">High resolution</p>
        <p style="font-size:1.7vh; overflow: hidden;">Integer nec neque leo. Pellentesque nec ipsum ante. Vivamus viverra, libero et hendrerit placerat.</p>
        <br>
        <br>
        <p class="col-xs-2">
            <img class="img-responsive sr-button" src="img/icons/browser_64px.png" alt="icon" style="float:left;">
            </p>
        <p style="font-size:3vh; font-family:raleway; margin-bottom:-5px; margin-top:-10px;">Social Integration</p>
        <p style="font-size:1.7vh; overflow: hidden;">Integer nec neque leo. Pellentesque nec ipsum ante. Vivamus viverra, libero et hendrerit placerat.</p>
        </div>
        </div>
</div>
</section>







    <section class="bg-primary" id="about" style="background-color:#00D379 !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="" style="font-family: Roboto, sans-serif; font-weight:100;">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <a href="#services" class="page-scroll btn btn-default btn-outline btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-dashboard text-primary sr-icons" style="margin-bottom:15px; color: #0275D8;"></i>
                        <p style="font-size:3.3vh; font-family:raleway; margin-top:-10px; margin-bottom:5px;"><lead>Sturdy Templates</lead></p>
                        <p class="" style="font-size:2.3vh; font-family:raleway;">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons" style="margin-bottom:15px;"></i>
                        <h3>Ready to Ship</h3>
                        <p class="">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons" style="margin-bottom:15px;"></i>
                        <h3>Up to Date</h3>
                        <p class="">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons" style="margin-bottom:15px;"></i>
                        <h3>Made with Love</h3>
                        <p class="" style="font-size:2vh; font-family: Roboto, sans-serif;">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl">Download Now!</a>
            </div>
        </div>
    </aside>

    <section id="contact" style="background-color:#fff !important;>
        <div class="container>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading";>Let's Get In Touch!</h2>
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>                                 
                        <?php include_once("contact_form.html"); ?>
</div>
</div>
    </section>

    
    <section class="bg-primary testBlock .img-responsive" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading sr-icons">We've got what you need!</h2>
                    <hr class="light">
                    <p class="page-scroll" style="font-family: Roboto, sans-serif; font-weight:100;">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <a href="#services" class="page-scroll btn btn-default btn-outline btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>



</body>

<footer>
    <!-- Below is the code for the footer navigation bar -->
    <?php include_once("footer.html"); ?>
</footer>  
    <!-- Below is the code that imports all of the JavaScript and jQuery located in 'include_JS_JQ.html' -->
    <?php include_once("include_JS_JQ.html"); ?>

</html>