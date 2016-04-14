<?php
/********************************************
*********************************************
Developer:	Kalpataru Mallick
User Id:	kalpataru44
Skype Id:	kalpataru44
Twitter :   kalpataru44
Email Id:	kalpataru.mallick@gmail.com
Buy bot :	www.buy-bot.com
My Site :	www.kalpataru44.com
*********************************************
*********************************************/
?>

<!doctype html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://lockdownrsvp.net/test/css/main.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="http://lockdownrsvp.net/test/js/main.js"></script>
    <title>Mortgage Calculator</title>   
</head>
<body>
<div class="mainContainer">
    <div class="calcName">Mortgage Calculator</div>
    
    <div class="box">
        <div class="box1">
            <div id="circle1" class="circle">1</div>
            <div class="box2">Property Info</div>
        </div>
        <div class="box1">
            <div id="circle2" class="circle">2</div>
            <div class="box2">Purchase Info</div>
        </div>
        <div class="box1">
            <div id="circle3" class="circle">3</div>
            <div class="box2">Rental Info</div>
        </div>   
        <div class="box4">
            <div id="circle4" class="circle">4</div>
            <div class="box2">Results</div>
        </div>          
    </div> 
    <form id="calcForm" action="step4.php" method="POST" enctype="multipart/form-data" >
    <?php include 'step1.php';?>
    <?php include 'step2.php';?>
    <?php include 'step3.php';?>  
    </form>
    <span class="float-middle">Notice any errors or mistakes? <a href="">Send us an email</a>!</span>
    <br/><br/><br/>
</div>  
</body>