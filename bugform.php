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
            <br>
                <p style="color:white;">Duplicate, modify, and reuse me however you see fit.</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll" style="margin-bottom:30px;">Find Out More</a>
            </div>
        </div>
</header>


<body>
   


<!-- LIVE UPDATES. SECTION -->
    <!-- Subscribe Block / CSS/Main.css .subscribeBlock -->

<section>
        <div class="container-fluid">
            <div class="row-fluid">
                                <div class="form-group row">
                                <div class="col-md-9 col-xs-12">
                                        <label for="form_name"><!--Text above field--></label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Firstname (required)" required="required" data-error="Firstname is required.">
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="col-md-3">
                                        <label for="form_lastname"><!--Text above field--></label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Lastname (required)" required="required" data-error="Lastname is required.">
                                    </div>
                                </div>
                <div style="margin:10 auto;">
                            <div class="form-group">
                                <div class="col-md-4 col-xs-12">
                                        <label for="form_name"><!--Text above field--></label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Firstname (required)" required="required" data-error="Firstname is required.">
                                    </div>

                                <div class="form-group">
                                <div class="col-md-4">
                                        <label for="form_lastname"><!--Text above field--></label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Lastname (required)" required="required" data-error="Lastname is required.">
                                    </div>
                                </div>

                                <div class="form-group">
                                <div class="col-md-4">
                                        <label for="form_lastname"><!--Text above field--></label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Lastname (required)" required="required" data-error="Lastname is required.">
                                    </div>
                                </div>
                            </div>
                        </div>


                <div style="margin:10 auto;">
                    <div class="form-group">
                                <div class="col-md-5 col-xs-12">
                                        <label for="form_name"><!--Text above field--></label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Firstname (required)" required="required" data-error="Firstname is required.">
                                    </div>

                                <div class="col-md-4">
                                        <label for="form_lastname"><!--Text above field--></label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Lastname (required)" required="required" data-error="Lastname is required.">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                        <label for="form_lastname"><!--Text above field--></label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Lastname (required)" required="required" data-error="Lastname is required.">
                                    </div>
                                </div>

                                <div class="col-md-1" style="margin:10 auto;">
                                    <input type="submit" class="btn btn-success btn-sm btn-send" value="Submit">
                                </div>


                            </div>
                        </div>









                                <div class="form-group">
                                <div class="col-md-3">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-lrg btn-send" value="Submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</section>

</body>

<footer style="margin-top:0px;">
    <!-- Below is the code for the footer navigation bar -->
    <?php include_once("footer.html"); ?>
</footer>  
    <!-- Below is the code that imports all of the JavaScript and jQuery located in 'include_JS_JQ.html' -->
    <?php include_once("include_JS_JQ.html"); ?>
</html>