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

                <h1 id="homeHeading" style="font-size:calc(60% + 3.9vw); font-family:raleway; font-weight:100;">Welcome to ARGUS.</h1>
                <br>
                <p style="color:white; font-size:calc(70% + .8vw); font-family:raleway; font-weight:100;">A mobile first website template constructed using PHP and Twitters popular Bootstrap framework.</p>
                <div class="container-fluid">
                    <div class="row-fluid">
                <a href="#about" class="btn btn-primary btn-outline .col-xs-6 .col-sm-4" style="margin-right:10px;">GET STARTED</a>
                <a href="#about" class="btn btn-primary btn-outline .col-xs-6 .col-sm-4">TAKE TOUR</a>
                <div>
                    <br>
                    <a class="page-scroll" href="#about" style="color:white; font-size:15px;">•••</a>
                 </div>
            </div>
        </div>
    </div>
</div>
</header>

<body>
<!-- ALL THE FEATURES YOU WANT - BLUE SECTION -->
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


<!-- POWERFUL YET SIMPLE SECTION -->
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

<!-- WE'VE GOT WHAT YOU NEED! - GREEN SECTION -->
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

<!-- BUILT USING THE LATEST AND GREATEST - WHAT WE EXCEL AT -->
    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="font-size:4vh;">BUILT USING THE LATEST AND GREATEST</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-stack-overflow text-primary sr-icons fa-icons" style="margin-bottom:15px;"></i>
                        <p style="font-size:2vh; font-family:raleway; margin-top:-6px; margin-bottom:5px;"><lead><strong>STURDY TEMPLATES</strong></lead></p>
                        <p class="" style="font-size:1.6vh; font-family:raleway;">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-github text-primary sr-icons fa-icons" style="margin-bottom:15px;"></i>
                        <p style="font-size:2vh; font-family:raleway; margin-top:-10px; margin-bottom:5px;"><lead><strong>GITHUB WORKFLOW</strong></lead></p>
                        <p class="" style="font-size:1.6vh; font-family:raleway;">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-css3 text-primary sr-icons fa-icons" style="margin-bottom:15px;"></i>
                        <p style="font-size:2vh; font-family:raleway; margin-top:-10px; margin-bottom:5px;"><lead><strong>CSS3 DESIGN</strong></lead></p>
                        <p class="" style="font-size:1.6vh; font-family:raleway;">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-html5 text-primary sr-icons fa-icons" style="margin-bottom:15px;"></i>
                        <p style="font-size:2vh; font-family:raleway; margin-top:-10px; margin-bottom:5px;"><lead><strong>UTILIZE HTML5</strong></lead></p>
                        <p class="" style="font-size:1.6vh; font-family:raleway;">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




<!-- LIVE UPDATES. SECTION -->
    <!-- Subscribe Block / CSS/Main.css .subscribeBlock -->
    <section class="bg-primary subscribeBlock .img-responsive" id="about">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="col-md-3 text-center ">
                    <p class="section-heading sr-icons text-center vertical-center" style="margin-top:-5px; font-size:calc(45% + 1.5vw);">LIVE UPDATES.</p>
                </div>
                <div class="col-md-3 form-group text-center vertical-center">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Full name">
                </div>
                <div class="col-md-3 form-group text-center vertical-center" style="margin: 0 auto;">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">  
                </div>
                <p class="form-group">
                <div class="col-md-1 form-group text-center" style="">
                    <a href="#services" class="form-group page-scroll btn btn-default btn-outline btn-xl sr-button">Get Started!</a>
                </div>
                </div>
            </div>
                <div class="col-md-12 text-center form-group" style="margin-top:0px;">
                <h6 class="page-scroll text-center form-group" style="font-family: Roboto, sans-serif; font-weight:100;">No spam promise – only latest news and prices!</h6>
                </div>
            </div>
        </div>
    </section>

<!-- PORTFOLIO IMAGES -->
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption portfolioOne">
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
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box img-responsive">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption portfolioTwo">
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
                        <div class="portfolio-box-caption portfolioThree">
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
                        <div class="portfolio-box-caption portfolioFour">
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
                        <div class="portfolio-box-caption portfolioFive">
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
                <div class="col-lg-4 col-sm-6 portfolioOne">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption portfolioSix">
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

<!-- OUR AWWARDS SECTION -->
<section>
        <div class="container-fluid">
        <div class="row-fluid">

    <div class="col-md-12 text-center">
        <p style="font-family:raleway; font-size:5vh; font-weight: 100; margin-bottom:-8px;">OUR <a style="color:#1AC6FF; font-weight:100; font-family:raleway; font-size:5vh;">AWWARDS</a></p></div>
            <p class="text-center" style="font-family:raleway; font-size:2vh;">Our certificates and awards that we are very proud of
        </p>
    </div>
  <br>
<div class="col-xs-12 col-md-offset-2 text-center pagination-centered">
    <div class="carousel slide" style="" data-ride="carousel" data-type="multi" data-interval="1700" id="myCarousel">
    <div class="carousel-inner">
    <div class="item active">
        <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="https://startuplywp.com/demo/wp-content/uploads/2014/09/logo-41.png" class="img-responsive" style="max-height:120px;"></a></div>
        <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="https://startuplywp.com/demo/wp-content/uploads/2014/09/logo-51.png" class="img-responsive"></a></div>
        <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="https://startuplywp.com/demo/wp-content/uploads/2014/09/logo-11.png" class="img-responsive"></a></div>
        <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="https://startuplywp.com/demo/wp-content/uploads/2014/09/logo-21.png" class="img-responsive"></a></div>
        </div>
    <div class="item">
      <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="https://startuplywp.com/demo/wp-content/uploads/2014/09/logo-11.png" class="img-responsive"></a></div>
      <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="https://startuplywp.com/demo/wp-content/uploads/2014/09/logo-41.png" class="img-responsive"></a></div>
      <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="https://startuplywp.com/demo/wp-content/uploads/2014/09/logo-51.png" class="img-responsive"></a></div>
      <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="https://startuplywp.com/demo/wp-content/uploads/2014/09/logo-21.png" class="img-responsive"></a></div>
    </div>
  </div>
  </div>
</div>
</section>

<!-- Testimonials section -->
<section class="subscribeBlock">
        <div class="container-fluid">
        <div class="row-fluid">

<div class="tab-content col-md-12 text-center" style="">
    <div class="sr-icons" style="font-size:calc(80% + 3vw); margin-bottom: 15px; color: #fff; font-weight:100; font-family:raleway;">
WHAT <a style="color:#1AC6FF;">CLIENTS</a> SAY</div>
  <div role="tabpanel" class="tab-pane fade in fadeClients active blockquote-footer" id="marcus" style="font-size:calc(60% + .8vw); font-weight:100; font-family:raleway; padding-right:calc(20% + .1vw); padding-left:calc(20% + .1vw); color: #fff;">
    I’ve been fan and follower for years. Through my business, I’ve had exposure to a number of different marketing software solutions. I chose them for their dedication to customer support, the ease of use, and their web analytics were better than any other tool I tested.</div>
  <div role="tabpanel" class="tab-pane fade blockquote-footer fadeClients" id="jason" style="font-size:calc(60% + .8vw); font-weight:100; font-family:raleway; padding-right:calc(20% + .1vw); padding-left:calc(20% + .1vw); color: #fff;">It's completely transformed the way we do marketing. Not only from the platform perspective, but also from the inbound philosophy angle. Project continued efforts to educate its own customers. It is not only admirable, but inspiring.</div>
  <div role="tabpanel" class="tab-pane fade blockquote-footer fadeClients" id="hellen" style="font-size:calc(60% + .8vw); font-weight:100; font-family:raleway; padding-right:calc(20% + .1vw); padding-left:calc(20% + .1vw); color: #fff;">Fantastic tool, and well-suited for customers who want to manage all content in-house. We have seen increased website traffic and blog readership since using it, and the platform's ease-of-use to manage our website makes use of this software a no-brainer.</div>
</div>
</div>
</section>

<section>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs pagination-centered col-md-12" style="border-bottom:0px; margin-top:-50px;" role="tablist">
    <li role="presentation" class="sr-icons active col-md-4 col-xs-12 text-center"><a href="#marcus" aria-controls="home" role="tab" data-toggle="tab" style="font-size:calc(30% + .8vw);">
         <img class="img-circle sr-icons" src="https://startuplywp.com/demo/wp-content/uploads/2014/09/Marcus-e14120140881701.png" alt="Smiley face" height="60px" width="60px" style="margin-right:20px;">
MARCUS BLIFFORD</h3></a>
    </li>
    
    <li role="presentation" class="sr-icons col-md-4 col-xs-12 text-center"><a href="#jason" aria-controls="home" role="tab" data-toggle="tab" style="font-size:calc(30% + .8vw);">
         <img class="img-circle sr-icons" src="https://startuplywp.com/demo/wp-content/uploads/2014/09/Jason-e14120140639411.png" alt="Smiley face" height="60px" width="60px" style="margin-right:20px;">
JASON PETTERSON</h3></a>
    </li>
    <li role="presentation" class="sr-icons col-md-4 col-xs-12 text-center"><a href="#hellen" aria-controls="home" role="tab" data-toggle="tab" style="font-size:calc(30% + .8vw);">
         <img class="img-circle sr-icons" src="https://startuplywp.com/demo/wp-content/uploads/2014/09/Hellen-e14120140355041.png" alt="Smiley face" height="60px" width="60px" style="margin-right:20px;">
HELLEN HENDERSON</h3></a>
    </li>
  </ul>
</section>

<hr style="max-width:60%; margin-top:-25px; margin-bottom: 50px; border-style:dashed;">



<!-- FEATURES TABS SECTION -->
<!-- Nav tabs -->
 <section>
    <div class="container-fluid">
        <div class="row-fluid">
        <div class="btn-group col-md-6 offset-md-3 offset-sm-3 offset-xs-2 nav nav-tabs center-block" data-toggle="buttons" role="tablist" aria-label="..." style="border-bottom:0px; margin-top:-100px;">
            <button class="btn btn-default col-xs-4 col-md-4 col-sm-4 btn-full-width active" type="radio" data-toggle="tab" href="#first" role="tab" style="font-size:calc(30% + .8vw);"><i class="fa fa-users fa-1x" aria-hidden="true" style="padding-right:5px;"></i> FIRST TAB</button>
            <button class="btn btn-default col-xs-4 col-md-4 col-sm-4 btn-full-width" type="radio" data-toggle="tab" href="#second" role="tab" style="font-size:calc(30% + .8vw);"><i class="fa fa-cloud fa-1x" aria-hidden="true" style="padding-right:5px;"></i> SECOND TAB</button>
            <button class="btn btn-default col-xs-4 col-md-4 col-sm-4 btn-full-width" type="radio" data-toggle="tab" href="#third" role="tab" style="font-size:calc(30% + .8vw);"><i class="fa fa-database fa-1x" aria-hidden="true" style="padding-right:5px;"></i> THIRD TAB</button>
        </div>
    </div>
</div>


<!-- Tab panes -->
<div class="tab-content">

<!-- Active Tab starts here -->
  <div class="tab-pane active" id="first" role="tabpanel">
            <img class="sr-icons col-md-6 img-responsive img-fluid" src="https://startuplywp.com/demo/wp-content/uploads/2014/09/phone1.jpg" alt="Smiley face" height="" width="" style="margin:; padding-right:30px; padding-left:30px; z-index:-2;">
    <p class="col-md-6" style="">
    <span class="sr-icons text-center col-md-12 col-xs-12" style="font-size:calc(30% + 2vw); margin-bottom: 10px; margin-top:10px; color: #000; font-weight:100; font-family:raleway;">FOR EVERY <span style="color:#1AC6FF;">STARTUP</span></span>
    <span class="col-xs-12" style="line-height:1.5; font-size:calc(40% + .8vw); font-weight:100; font-family:raleway; color: #000; margin-bottom:30px;">Partnership or temporary organization designed to search for a repeatable and scalable business model. Ever thought of launching beautiful landing page for your very own startup project? It’s easy now with startuply! This first step usually requires a lot of value. Your startup must have most modern and unique design, and you can start with startuply as it will fit almost any project.
        </span>
          <div class="container-fluid">
            <div class="row-fluid text-center col-md-6" style="margin-top:60px; margin-bottom:60px;">
            <a href="#about" class="btn btn-secondary  .col-xs-6 .col-sm-4" style="margin-right:10px;">GET STARTED</a>
            <a href="#about" class="btn btn-secondary  .col-xs-6 .col-sm-4">TAKE TOUR</a>
            <div>
            </span>
         </p>
    </div>
  </div>
</div>
</div>


<!-- Second Tab starts here -->
  <div class="tab-pane" id="second" role="tabpanel">
    <img class="sr-icons col-md-6 img-responsive img-fluid" src="https://startuplywp.com/demo/wp-content/uploads/2014/09/people1.jpg" alt="Smiley face" height="" width="" style="margin:; padding-right:30px; padding-left:30px; margin-bottom:-50px; z-index:-2; overflow:hidden;">
    <p class="col-md-6" style="">
    <span class="sr-icons text-center col-md-12" style="font-size:calc(30% + 2vw); margin-bottom: 15px; color: #000; font-weight:100; font-family:raleway;">NEW AGE <span style="color:#1AC6FF;">TECHNOLOGY</span></span>
    <span class="" style="line-height:1.5; font-size:calc(40% + .8vw); font-weight:100; font-family:raleway; color: #000;">Mobile code division multiple access (CDMA) technology has evolved rapidly over the past few years. Since the start of this millennium, a standard mobile device has gone from being no more than a simple two-way pager to being a mobile phone, an embedded web browser and instant messaging client, and a handheld game console. Tablets are available on the 3G and 4G networks.
        phone.</span><span>
          <div class="container-fluid">
            <div class="row-fluid text-center col-md-6" style="margin-top:40px;">
            <a href="#about" class="btn btn-secondary  .col-xs-6 .col-sm-4" style="margin-right:10px;">GET STARTED</a>
            <a href="#about" class="btn btn-secondary  .col-xs-6 .col-sm-4">TAKE TOUR</a>
            <div>
            </span>
         </p>
    </div>
  </div>
</div>
</div>

<!-- Third Tab starts here -->
  <div class="tab-pane" id="third" role="tabpanel">
    <p class="col-md-12" style="">
    <span class="sr-icons text-center col-md-12" style="font-size:calc(30% + 2vw); margin-bottom: 15px; color: #000; font-weight:100; font-family:raleway;">LATEST <span style="color:#1AC6FF;">TRENDS</span></span>
    <span class="text-center col-md-12" style="line-height:1.5; font-size:calc(40% + .8vw); font-weight:100; font-family:raleway; color: #000; padding-right:14%; padding-left:14%;">Measurement, collection, analysis and reporting it helps one to estimate how traffic to a website changes after the launch of a new advertising campaign
        phone.</span><span>
          <div class="container-fluid">
            <div class="row-fluid text-center col-md-12" style="margin-top:40px;">
            <a href="#about" class="btn btn-secondary  .col-xs-6 .col-sm-4" style="margin-right:10px;">GET STARTED</a>
            <a href="#about" class="btn btn-secondary  .col-xs-6 .col-sm-4">TAKE TOUR</a>
            <div>
            </span>
         </p><img class="sr-icons col-md-6 img-responsive img-fluid" src="https://startuplywp.com/demo/wp-content/uploads/2014/09/ipad11.jpg" alt="Smiley face" height="" width="" style="margin:0px; padding:0px; width:100%; height:250px; margin-top:-50px; margin-bottom:-50px; z-index:-2;">
    </div>
  </div>
</div>
</div>

</section>
<!--///// End Features Section /////-->


<section>
    <aside class="bg-dark" style="margin-top:-200px;">
        <div class="container text-center">
            <div class="call-to-action">
                <h2 style="font-size:calc(60% + 1vw);">Free Download at Start Bootstrap!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl">Download Now!</a>
            </div>
        </div>
    </aside>
</section>
    <section id="contact" style="background-color:#fff !important;>
        <div class="container>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading" style="font-size:calc(70% + 1.9vw);";>Let's Get In Touch!</h2>
                    <p style="font-size:calc(40% + 1vw);">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>                                 
                        <?php include_once("contact_form.html"); ?>
            </div>
        </div>
    </section>

    
    <section class="bg-primary testBlock text-center col-md-12 col-sm-12" id="about">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="text-center">
                    <h2 class="section-heading sr-icons" style="font-size:calc(70% + 1.9vw);">We've got what you need!</h2>
                    <hr class="light">
                    <p class="page-scroll" style="font-family: Roboto, sans-serif; font-weight:100; font-size:calc(50% + 1vw);">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
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