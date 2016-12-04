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
<section class="top" id="top">
     <?php include_once("header.html"); ?>

<!--  Below is the code for the header image / strings / buttons -->
        <div class="header-content">
            <div class="header-content-inner">

                <h1 style="font-weight:100;">404 Error</h1>
            <br>
                <h5 style="color:white; font-family:raleway;font-weight:100;">The page you requested no longer exists or is temporarily unavailable.</h5>
            </div>
        </div>
</header>


<body>
</body>

<footer>
    <!-- Below is the code for the footer navigation bar -->
    <?php include_once("footer.html"); ?>
</footer>  
    <!-- Below is the code that imports all of the JavaScript and jQuery located in 'include_JS_JQ.html' -->
    <?php include_once("include_JS_JQ.html"); ?>
</html>