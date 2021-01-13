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

    <link rel='stylesheet' type='text/css' media='screen' href='index.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='FAQ.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='footer.css'>
</head>
<body>


<?php
ob_start();
if (array_key_exists('businessloggedin', $_SESSION) or array_key_exists('loggedin', $_SESSION) or array_key_exists('adminloggedin', $_SESSION)) {
    require_once("./homeheader.php");    
}
else{
    require_once("./header.php");
}
?>


<div class="container-fluid" id="faq-container">
    <div class="container pl-5 pr-0" id="outline-faqs">
        <div class="row mt-5 mb-3 pt-5 pb-2 col-12 d-flex justify-content-center">    
            <h2 class="text-white">Frequently Asked Questions</h2>
        </div>    
        <div class="row d-flex col-12 justify-content-center card-parent">    
            <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse0" aria-controls="collapse0" href="/faq"> Hvordan deltar jeg i en quiz? </a></h5></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse0"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Du kan delta i en quiz ved å opprette en bruker på www.fotballkviss.no, velge quizen du ønsker å delta i, og betale din påmeldingsavgift.</p></div></div></div>
        </div>

        <div class="row d-flex col-12 justify-content-center card-parent">
            <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse1" aria-controls="collapse1" href="/faq"> Trenger jeg å være god i quiz for å delta? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse1"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Absolutt ikke. Det vil være ulike spørsmål av ulik vanskelighetsgrad. Det betyr at alle vil kunne besvare mange av våre spørsmål. </p></div></div></div>
        </div>

        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse2" aria-controls="collapse2" href="/faq"> Må jeg bruke data? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse2"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Du kan delta i våre quizer via smarttelefon, nettbrett eller data.  </p></div></div></div>
        </div>

        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse3" aria-controls="collapse3" href="/faq"> Hvor lenge varer en quiz? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse3"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Våre quizer kan ha ulikt antall spørsmål, men vil som regel aldri overstige 15 minutter</p></div></div></div>
        </div>

        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse4" aria-controls="collapse4" href="/faq"> Kan jeg ta quizen senere? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse4"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Nei, våre quizer går live. Det betyr at quizen starter automatisk på oppgitt tidspunkt.</p></div></div></div>
        </div>

        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div  class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse5" aria-controls="collapse5" href="/faq"> Hva om jeg glemmer å delta i quizen? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse5"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Du vil få en automatisk epost-påminnelse 30 minutter før quizens start. Det er allikevel deltakers ansvar å påse at de ikke glemmer sin deltakelse. </p></div></div></div>
        </div>

        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse6" aria-controls="collapse6" href="/faq"> Hvordan fungerer quizen? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse6"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Quizen fungerer slik at den automatisk starter med en videosending, før første spørsmål automatisk dukker opp på skjermen. Du har da 30 sekunder på å avgi ditt svar. Når du har avgitt svar, lar du tastaturet hvile inntil svarfristen har utløpt. Riktig svar registreres automatisk. Når svarfristen har utløpt kommer det automatisk et nytt spørsmål til syne. Etter at svarfristen på siste spørsmål utløper vises resultatlisten av den aktuelle quizen på skjermen.</p></div></div></div>
        </div>

        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div  class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse7" aria-controls="collapse7" href="/faq"> Hvordan vinner man? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse7"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Vinneren av quizen er den som har høyest poengsum ved spillets slutt. Det betyr at vedkommende har avgitt flest riktig svar på kortest mulig tid.</p></div></div></div>
        </div>

        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse8" aria-controls="collapse8" href="/faq"> Kontaktes vinneren(e)? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse8"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Premievinneren(e) vil kontaktes av en representant fra fotballkviss en av de påfølgende dagene etter endt quiz. </p></div></div></div>
        </div>
        
        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse9" aria-controls="collapse9" href="/faq"> Er det bare én premievinner pr quiz? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse9"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Om det er én eller flere vinnere oppgis på de ulike quizene. Enkelte konkurranser vil ha én vinner, mens andre konkurranser vil også ha andre- og tredjepremie.</p></div></div></div>
        </div>

        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse10" aria-controls="collapse10" href="/faq"> Hva slags premier kan man vinne? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse10"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Man kan vinne både pengepremier, produkter og tjenester. </p></div></div></div>
        </div>

        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse11" aria-controls="collapse11" href="/faq"> Hva slags verdi har premiene? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse11"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Premiene har ulik verdi. Jo flere deltakere som deltar, desto større verdi får premiene.</p></div></div></div>
        </div>
        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse12" aria-controls="collapse12" href="/faq"> Dersom jeg vinner, hvor lang tid vil det ta før jeg mottar premien? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse12"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Din premie vil bli sendt innen 5 dager etter endt konkurranse. Samme vilkår gjelder ved pengepremier. </p></div></div></div>
        </div>
    
        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse13" aria-controls="collapse13" href="/faq"> Hvordan oppnår jeg bonus? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse13"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Du oppnår bonus ved å tipse dine venner og kjente om oss. Dersom en av disse deltar i en quiz, vil du automatisk motta bonus på din konto. En delbar lenke finner du under din profil. </p></div></div></div>
        </div>

        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse14" aria-controls="collapse14" href="/faq"> Hvor mye får jeg i bonus? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse14"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">For hver person du har tipset som deltar på en av våre quizer mottar du kr 5. </p></div></div></div>
        </div>

        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse15" aria-controls="collapse15" href="/faq"> Hva slags betaling godtar dere? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse15"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Vi godtar betaling med debit- eller kredittkort. I tillegg kan du betale ved bruk av opptjent bonus. </p></div></div></div>
        </div>

        <div class="row d-flex col-12 justify-content-center card-parent">
        <div class="card col-12 rounded mb-2"><div class="card-header"><h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" class="d-block text-left text-dark" data-target="#collapse16" aria-controls="collapse16" href="/faq"> Kan jeg betale både med kort og opptjent bonus? </a></h2></div><div aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse" id="collapse16"><div class="card-body"><h3 class="lead"><div class="badge badge-primary text-wra p-2">Answer</div></h3><p class="lead">Nei, du kan ikke delbetale med din bonus. Du må ha opptjent bonus tilsvarende quizens påmeldingsavgift eller høyere for å benytte din bonus. Dersom du ikke har opptjent bonus tilsvarende påmeldingsavgiften må du betale med kort.</p></div></div></div>
        </div>
    
    
        </div>
    </div>
</div>


<!-- Footer --><?php
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
<script src="login.js"></script>
</html>