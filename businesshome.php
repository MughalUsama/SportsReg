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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!--JQUERY AND bootstrap.js   -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='index.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='businesshome.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='sidebar.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='footer.css'>
</head>
<body>

<?php
ob_start();
if (!array_key_exists("businessloggedin",$_SESSION)) {
    # code...
    header("Location: ./index.php"); /* Redirect browser */

    /* Make sure that code below does not get executed when we redirect. */
    exit;
}
require_once("./homeheader.php");
if (isset($_REQUEST["logout"]))
{
    // remove all session variables
    session_unset();

// destroy the session
    session_destroy();
    header("Location: ./index.php");
    exit;
}
?>

<!-- -->
<div class="row mid-body col-12">


<div class="content-container">

<div class="container-fluid">
    <div class="row outline-1">
        <div class="row pt-3 mt-2 pl-3 ml-2 justify-content-start">
            <h2>Requests</h2>
        </div>  
        <div class="row pl-3 ml-2 col-12 justify-content-start">
            <div class="row d-flex col-12 mb-5 pb-2 justify-content-start" id="fillcards">    
            <h5 class="mx-auto">No Requests</h5>
            </div>
        </div>


    <!--container 2-->
    </div>
    <li class="mt-5 pt-2 ml-2 d-inline d-md-none">
        <a href="#"  class="pt-2">
            <i class="fa fa-home" aria-hidden="true"></i> Homepage
        </a>
    </li>

    <li class="mt-5 pt-2 ml-2 border-top border-light d-inline d-md-none">
        <a href="./businessprofile.php" class="pt-2">
            <i class="fa fa-user" aria-hidden="true"></i> My Profile
        </a>
    </li> 
    <li class="mt-5 pt-2 ml-2 border-top border-light d-inline d-md-none">
        <a href="./aboutus.php"  class="pt-2">
            <i class="fa fa-question-circle" aria-hidden="true"></i> About Us
        </a> 
    </li>
    

</div>
<!-- Footer -->
<?php
require_once("./footer.php");
?>
<!-- Footer -->
</div>

    <div class="sidebar-container">
    <ul class="sidebar-navigation">
        
    <li>
        <a href="#">
            <i class="fa fa-home" aria-hidden="true"></i> Homepage
        </a>
        </li>
        <li class="border-top border-light">
        <a href="./businessprofile.php">
            <i class="fa fa-user" aria-hidden="true"></i> My Profile
        </a>
        </li> 
        <li class="border-top border-light">
        <a href="./aboutus.php">
            <i class="fa fa-question-circle" aria-hidden="true"></i> About Us
        </a> 
        </li>
        <li class="border-top border-bottom border-light">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <button class="bg-transparent border-0  logout-btn" type="submit"  name="logout">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
            </button> 
        </form>
        
        </li>
    </ul>
    </div>
</div>



</body>

<script src="homeheader.js"></script>
<script src="sidebar.js"></script>
<script src="businesshome.js"></script>
</html>