<!DOCTYPE php>
<html lang="en">

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
<!-- Below is the code for the header navigation bar -->
     <?php include_once("header.html"); ?>


<!--  Below is the code for the header image / strings / buttons -->
        <div class="header-content">
            <div class="header-content-inner">

                <h1 id="homeHeading">This is a template page.</h1>
                <hr>
                <p style="color:white;">Duplicate, modify, and reuse me however you see fit. I can be turned into an amazing one of a kind page! I am 100% responsive and build on Twitters Bootstrap.</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
</header>


<body>
    <!-- This code is used to add a contact form to the contact page -->
        <?php include_once("contact_form.html"); ?>


<!-- This is the button for a Contact form within a Bootstrap modal -->
        <div class="container-fluid text-center">
            <div class="row-fluid">
                <button type="button" class="text-center btn btn-primary btn-md" data-toggle="modal" data-target="#contactUs" $('#contactUs').modal('show')>Contact</button>
</div>
</div>
<br>
<!-- Contact us modal-->
<div class="modal" id="contactUs" tabindex="5" z-index= "2" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="contactUs">Modal title</h4>
        </div>
        <div class="modal-body">
            <?php include_once("contact_form
            .html"); ?>
        </div>
        <div class="modal-footer">
        </div>
        </div>
      </div>
    </div>
</div>


<!-- This is placeholder code for the second content cell -->
<!-- Delete all content within the 'body' tags to start from scratch or modify what is already here -->
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">This is a new page template file!</h2>
                    <hr class="light">
                    <p class="text-faded" style="color:white;">Duplicate this page and make it suit your needs.</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
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