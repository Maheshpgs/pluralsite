<!DOCTYPE html>
<html>  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="keywords">
<meta name="description">
<meta name="viewport" content="width=device-width">
<meta name="robots" content="index, follow">
<link rel="stylesheet" href="css/font.css" type="text/css">
<link rel="stylesheet" href="css/forms2.css" type="text/css">

<link rel="stylesheet" href="css/styles.css" type="text/css">

<link rel="stylesheet" href="css/aggregate-pages.css" type="text/css">
<link rel="stylesheet" href="css/aggregate-compnents.css" type="text/css">   
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Pluralsight | Round Table</title>
</head>

    

<body class="mode-disabled b2b-template">
<?php
// Turn off error reporting
error_reporting(0);

//print_r($_REQUEST);
//die;
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "events";
*/
/*
$servername="fabs.cloudapp.net";
$username="root";
$password="P@1S2)l5#2O!2";
$database="test_weatherdb";
*/
$servername="139.59.7.234";
$username="timemgmt";
$password="P@ls2015";
$dbname="events";

/*
CREATE TABLE `pluralsight` (                                                              
	`ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,                                  
	FirstName varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	LastName varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Email varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Company varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	mobile varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Job_Function__c varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Animation varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Art varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Business varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Data varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Game varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	IT varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Software varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Web varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Learning varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Architecture varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Manufacturing varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	Country varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	How_Many_People_Do_You_Manage__c varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	`user_status` int(11) NOT NULL DEFAULT '0',                                        
	`user_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,                    
	PRIMARY KEY (`ID`)                                                                 
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci  

*/

// Database=acsm_70271d13b405930;Data Source=ap-cdbr-azure-southeast-b.cloudapp.net;User Id=b9638ac1a1d625;Password=2d8b8a3a
/*
$servername = "ap-cdbr-azure-southeast-b.cloudapp.net";
$username = "b9638ac1a1d625";
$password = "2d8b8a3a";
$dbname = "acsm_70271d13b405930";
*/

/*
Server: palsevents.database.windows.net,1433 \r\nSQL Database: events\r\nUser Name: palsevents\r\n\r\nPHP Data Objects(PDO) Sample Code:\r\n\r\ntry {\r\n   $conn = new PDO ( \"sqlsrv:server = tcp:palsevents.database.windows.net,1433; Database = events\", \"palsevents\", \"{your_password_here}\");\r\n    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );\r\n}\r\ncatch ( PDOException $e ) {\r\n   print( \"Error connecting to SQL Server.\" );\r\n   die(print_r($e));\r\n}\r\n\rSQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"palsevents@palsevents\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"events\", \"LoginTimeout\" => 30, \"Encrypt\" => 1);\r\n$serverName = \"tcp:palsevents.database.windows.net,1433\";\r\n$conn = sqlsrv_connect($serverName, $connectionInfo);
*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "INSERT INTO events (pro_fname, pro_lname, pro_email,pro_phone,pro_ans_field08,pro_organization,pro_ans_field10) VALUES ('".mysql_real_escape_string($_POST['pro_fname'])."', '".mysql_real_escape_string($_POST['pro_lname'])."', '".mysql_real_escape_string($_POST['pro_email'])."','".mysql_real_escape_string($_POST['pro_phone'])."','".mysql_real_escape_string($_POST['pro_ans_field08'])."','".mysql_real_escape_string($_POST['pro_organization'])."','".mysql_real_escape_string($_POST['pro_ans_field10'])."')";


$sql = "INSERT INTO pluralsight (FirstName,LastName,Email,Company,mobile,Job_Function__c,Animation,Art,Business,Data,Game,IT,Software,Web,Learning,Architecture,Manufacturing,Country,How_Many_People_Do_You_Manage__c)
VALUES ('".$_POST[FirstName]."','".$_POST[LastName]."','".$_POST[Email]."','".$_POST[Company]."','".$_POST[mobile]."','".$_POST[Job_Function__c]."','".$_POST[Animation]."','".$_POST[Art]."','".$_POST[Business]."','".$_POST[Data]."','".$_POST[Game]."','".$_POST[IT]."','".$_POST[Software]."','".$_POST[Web]."','".$_POST[Learning]."','".$_POST[Architecture]."','".$_POST[Manufacturing]."','".$_POST[Country]."','".$_POST[How_Many_People_Do_You_Manage__c]."')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfullyMessage sent!";
	include("examples/smtp.php");
//	die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	die();
}

//$conn->close();
	//die("Registration COmpleted......");

?>
    <div class="site-wrap">
        <div class="nav-context ">
            <div class="header-container"><div class="checkout-header--wrapper clearfix light">
    <span class="global-header__logo" style="float:left; margin:17px 0 0 30px ;">
        <div class="logo">
            <a title="Pluralsight" target="_blank">
                <img src="images/ps_logo_f-03.png" alt="Pluralsight">
            </a>
        </div>
        
    </span>
     <span class="global-header__logo" style="float:right; width:100px !important">
    
     <div class="logo">
            <a title="Pluralsight" target="_blank">
                <img src="images/pals_logo.png" alt="palslogo">
            </a>
        </div>
    
    </span>
    <span class="global-header__logodark">
        <div class="logo">
            <a title="Pluralsight" target="_blank">
                <img src="images/PluralSight_BlackLogo.svg" alt="Pluralsight">
            </a>
        </div>
    </span>
    <span class="global-header__mobilelogo">
        <div class="logo">
            <a title="Pluralsight" target="_blank">
                <img src="images/ps_logo_f-03.png" alt="Pluralsight">
            </a>
        </div>
    </span>
    <span class="global-header__mobilelogodark">
        <div class="logo">
            <a title="Pluralsight" target="_blank">
                <img src="images/PluralSight_BlackLogo.svg" alt="Pluralsight">
            </a>
        </div>
    </span>
</div></div>
            <div id="content" class="b2b-content" role="main">
  <div class="contain"><div class="section generic-block">
    
    <div class="generic-block-wrapper parallax block block--black block--center block--middle clearfix" style="background-image: url('images/landing-page-images.jpg'); padding:100px 0;">
        <div class="main clearfix">
            <div class="clearfix"><div class="column-control section"><div>
<div class="container ">
        <div class="row      ">
            
                <div class="medium-12 columns"><div class="section title">

<div data-emptytext="Title">
    <h2 class=" title--center ">
       Nimbler Delivery Capability with Smarter Learning
    </h2>
</div></div>
<div class="section title">

<div data-emptytext="Title">
    <h4 class=" title--center ">
        Making your delivery teams faster, proficient, & happier using smarter technical learning<br>
    </h4>
</div></div>

</div>
            
        </div>
    </div>
</div>
</div>

</div>
       </div>
    </div>

</div>

<div class="text-component" >
<h4 style="font-weight:600;"  class=" title--center "> <br>
Thank you for registering! 
</h4>
    <p style="font-size: 17.0px; font-weight:600;line-height: 1.75em;"  class=" title--center ">We will confirm your participation within 48 Hrs.</p>
</div>

<div class="section generic-block">
    
    <div class="generic-block-wrapper parallax block block--white&#x20;block--light block--left block--middle     clearfix" style="background-image: ;">
        <div class="main clearfix">
            <div class="clearfix"><div class="column-control section"><div>
<div class="container ">
        <div class="row      ">
            
                <div class="medium-12 columns"><div class="share section">

    

    <div class="share-component share__links addthis_toolbox share--share clearfix 13">

        <p>SHARE:</p>

        <div class="share__links__links clearfix">
            <a href="http://wd.sharethis.com/api/sharer.php?destination=facebook&amp;url=http://pluralsight.com/&amp;title=Managing-Techies-for-Top-Performance" class="share__link face-icon  " target="_blank" alt="Like">
                <div></div>
            </a>
            <a href="http://wd.sharethis.com/api/sharer.php?destination=twitter&amp;url=http://pluralsight.com/&amp;title=Managing-Techies-for-Top-Performance" class="share__link tweet-icon  " target="_blank" alt="Like">
                <div></div>
            </a>
            <a href="http://wd.sharethis.com/api/sharer.php?destination=linkedin&amp;url=http://pluralsight.com/&amp;title=Managing-Techies-for-Top-Performance" class="share__link linkedin-icon  " target="_blank" alt="Like">
                <div></div>
            </a>
            <a href="http://wd.sharethis.com/api/sharer.php?destination=googleplus&amp;url=http://pluralsight.com/&amp;title=Managing-Techies-for-Top-Performance" class="share__link goog-icon  " target="_blank" alt="Like">
                <div></div>
            </a>
        </div>

    </div></div>

</div>
            
        </div>
    </div>
</div>
</div>

</div>
       </div>
    </div>

</div>

</div>
</div>
            
            
    

        </div>
    </div>
</body>

</html>
