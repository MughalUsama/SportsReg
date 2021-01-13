<?php
session_start();
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>SportsReg</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" href="./img/logo2.png"/>
    <!--bootstrap   -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--JQUERY AND popper   -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!--JQUERY AND bootstrap.js   -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel='stylesheet' type='text/css' media='screen' href='index.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='blog.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='footer.css'>
</head>
<body>


<?php
if (array_key_exists('businessloggedin', $_SESSION) or array_key_exists('loggedin', $_SESSION) or array_key_exists('adminloggedin', $_SESSION)) {
    require_once("./homeheader.php");    
}
else{
    require_once("./header.php");
}
?>
<div class="container d-flex justify-content-center align-items-center" id="news-container">
    <div class="row  col-12 justify-content-center" id = "new-outline">

        <div class="row pt-4 my-2 col-12 mt-2 justify-content-center">
            <h2>Blog/News</h2>
        </div>
        <div class="row col-12 justify-content-center">
            <hr width="100" class="pt-0 mt-0 mb-3" id="new-hr">
        </div>

        <div class="px-4"> 
            <!-- Write news here! -->
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien nisi, in elementum nunc ullamcorper non. Fusce sed urna quis nunc faucibus semper in eu ligula. Donec tempor tempus massa, nec faucibus ante eleifend at. Cras vitae libero ac mi placerat vehicula. Mauris in turpis vitae ex maximus dictum. Fusce vitae quam in ligula facilisis dictum. Nulla facilisi. Integer ut iaculis dui, faucibus faucibus dolor.

In maximus lorem metus, eget aliquet nulla faucibus sit amet. Maecenas dui felis, commodo in malesuada id, aliquet et ante. Ut mollis dolor nec mauris dapibus consequat. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam blandit magna vel erat rhoncus faucibus. Fusce hendrerit lacinia volutpat. Vivamus nec tempus libero. Morbi commodo gravida diam, vitae commodo ante pharetra sed. Interdum et malesuada fames ac ante ipsum primis in faucibus.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien nisi, in elementum nunc ullamcorper non. Fusce sed urna quis nunc faucibus semper in eu ligula. Donec tempor tempus massa, nec faucibus ante eleifend at. Cras vitae libero ac mi placerat vehicula. Mauris in turpis vitae ex maximus dictum. Fusce vitae quam in ligula facilisis dictum. Nulla facilisi. Integer ut iaculis dui, faucibus faucibus dolor.
</p>
<p>
In maximus lorem metus, eget aliquet nulla faucibus sit amet. Maecenas dui felis, commodo in malesuada id, aliquet et ante. Ut mollis dolor nec mauris dapibus consequat. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam blandit magna vel erat rhoncus faucibus. Fusce hendrerit lacinia volutpat. Vivamus nec tempus libero. Morbi commodo gravida diam, vitae commodo ante pharetra sed. Interdum et malesuada fames ac ante ipsum primis in faucibus.
</p>
        </div>

    </div>
</div>


<!-- Footer -->
<?php
require_once("./footer.php");
?>
<!-- Footer -->
</body>
<?php
if (array_key_exists('businessloggedin', $_SESSION) or array_key_exists('loggedin', $_SESSION) or array_key_exists('adminloggedin', $_SESSION)) {
    require_once("homeheader.js");
    
}
else{
    echo("<script src = \"header.js\"></script>");
}
?>
<script src="blog.js"></script>
</html>