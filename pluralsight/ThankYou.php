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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "events";
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
<div class="column-control section"><div>
<div class="container ">
        <div class="row padding-bottom-sixty">
            
                <div class="large-8 columns"><div class="column-control section"><div>
<div class="container ">
        <div class="row      ">
            
                <div class="large-10 columns"><div class="rich-text section">
<p>   </p>


</div>
<div class="parbase section text">

<div class="text-component" >
    <p style="font-size: 17.0px; font-weight:600;line-height: 1.75em;">Indian IT/ITES firms face a ‘chicken or egg first’ dilemma when it comes to re-skilling for future growth areas. They need to master/hire for new technologies/business processes before they win projects while finding that investing / hiring for new-age skills before they win the projects tend to be bank-breaking. The objective of this thought-leadership session is to give you a perspective of how new-age smart technology based learning platforms coupled with stellar curated content – all at one place -  can supercharge your delivery capabilities.<br>
<br />
</p>



</div>
</div>
<div class="rich-text section">
<h4 style="font-weight:600;">Why Attend:<br />
 </h4>                    
<ul>
<li>Understand changing Technology Learning landscape in India</li>
<li>Get introduced to state-of-the-art learning techniques &amp; best practices </li>
<li>Experience how new age platforms make learning and assessments easy &amp; fun</li>
</ul>


<h4 style="font-weight:600;">Your Speaker:<br />
 </h4>


<p style="font-size: 17.0px; font-weight:600;line-height: 1.75em;">Arun Rajamani is Country Head & General Manager at Pluralsight India Pvt Ltd. He is an IT Industry veteran with senior positions in Microsoft, HCL, & TCE. He is a passionate thinker & well-known keynote speaker on Managing Workforce, Education, Skill Development et al.<br />
</p>


<h4 style="font-weight:600;">Agenda:<br /></h4>
<ul>
<li>6:30 pm – Registration</li>
<li>6:45 pm – Introduction by Phanidhar Palakoti, CEO, PALS Global</li>
<li>7:00 pm – Keynote: ‘Nimbler Delivery Capability with Smarter Learning’ by Arun Rajamani, GM & Country Manager, Pluralsight</li>
<li>7:45 pm – ‘Experience the Pluralsight Platform’ by Geetha Rao, Director, Pluralsight</li>
<li>8:00 pm – Networking Dinner & Drinks</li>
</ul>

<h4 style="font-weight:600;">VENUE:<br /></h4>

<h4 style="font-weight:200;"> Lemontree Premier, HITEC City, Madhapur, Hyderabad</h4>


</div>

</div>
            
                <div class="large-2 columns">
</div>
            
        </div>
    </div>
</div>
</div>
<div class="image section">


</div>
<div class="image section">


</div>

</div>
            
                <div class="large-4 columns">
<div class="marketo-form section">
<div class="marketo-form-component marketo-form--stacked marketo-form--left  clearfix">
   
    
    <div class="large-4 columns"><div class="rich-text section">
<p>&nbsp; &nbsp;</p>


</div>


<form name="gc_form" class="marketo-target mktoForm mktoHasWidth mktoLayoutLeft" style="font-size: 13px; color: rgb(51, 51, 51); width: 301px;" id="gc_form" method="post" action="Thankyou.php">

<!--<form id="marketoForm" class="marketo-target mktoForm mktoHasWidth mktoLayoutLeft" style="font-size: 13px; color: rgb(51, 51, 51); width: 301px;">-->
   
    <div class="mktoFormRow">
        <div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 5px;">
            <div class="mktoOffset" style="width: 5px;"></div>
            <div class="mktoFieldWrap mktoRequiredField">
                <label for="FirstName" class="mktoLabel mktoHasWidth" style="width: 100px;">
                    <div class="mktoAsterix">*</div>First Name</label>
                <div class="mktoGutter mktoHasWidth" style="width: 5px;"></div>
                <input id="FirstName" name="FirstName" maxlength="255" type="text" class="mktoField mktoTextField mktoHasWidth mktoRequired mktoInvalid" style="width: 380px;" required>
                <div class="mktoClear"></div>
            </div>
            <div class="mktoClear"></div>
        </div>
        <div class="mktoClear"></div>
    </div>
    <div class="mktoFormRow">
        <div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 5px;">
            <div class="mktoOffset" style="width: 5px;"></div>
            <div class="mktoFieldWrap mktoRequiredField">
                <label for="LastName" class="mktoLabel mktoHasWidth" style="width: 100px;">
                    <div class="mktoAsterix">*</div>Last Name</label>
                <div class="mktoGutter mktoHasWidth" style="width: 5px;"></div>
                <input id="LastName" name="LastName" maxlength="255" type="text" class="mktoField mktoTextField mktoHasWidth mktoRequired" style="width: 380px;" required>
                <div class="mktoClear"></div>
            </div>
            <div class="mktoClear"></div>
        </div>
        <div class="mktoClear"></div>
    </div>
    <div class="mktoFormRow">
        <div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 5px;">
            <div class="mktoOffset" style="width: 5px;"></div>
            <div class="mktoFieldWrap mktoRequiredField">
                <label for="Email" class="mktoLabel mktoHasWidth" style="width: 100px;">
                    <div class="mktoAsterix">*</div>Email</label>
                <div class="mktoGutter mktoHasWidth" style="width: 5px;"></div>
                <input id="Email" name="Email" maxlength="255" type="email" class="mktoField mktoEmailField mktoHasWidth mktoRequired" style="width: 380px;" required>
                <div class="mktoClear"></div>
            </div>
            <div class="mktoClear"></div>
        </div>
        <div class="mktoClear"></div>
    </div>
    
    
    
    
    
    <div class="mktoFormRow">
        <div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 5px;">
            <div class="mktoOffset" style="width: 5px;"></div>
            <div class="mktoFieldWrap mktoRequiredField">
                <label for="Company" class="mktoLabel mktoHasWidth" style="width: 100px;">
                    <div class="mktoAsterix">*</div>Company</label>
                <div class="mktoGutter mktoHasWidth" style="width: 5px;"></div>
                <input id="Company" name="Company" maxlength="255" type="text" class="mktoField mktoTextField mktoHasWidth mktoRequired ui-autocomplete-input" style="width: 380px;" placeholder="To select, begin typing." autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                <div class="mktoClear"></div>
            </div>
            <div class="mktoClear"></div>
        </div>
        <div class="mktoClear"></div>
    </div>
    
    


    <div class="mktoFormRow">
        <div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 5px;">
            <div class="mktoOffset" style="width: 5px;"></div>
            <div class="mktoFieldWrap mktoRequiredField">
                <label for="mobile" class="mktoLabel mktoHasWidth" style="width: 100px;">
                    <div class="mktoAsterix">*</div>Mobile</label>
                <div class="mktoGutter mktoHasWidth" style="width: 5px;"></div>
                <input id="mobile" name="mobile" maxlength="255" type="text" class="mktoField mktoTextField mktoHasWidth mktoRequired ui-autocomplete-input" style="width: 380px;" placeholder="Mobile" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" required>
                <div class="mktoClear"></div>
            </div>
            <div class="mktoClear"></div>
        </div>
        <div class="mktoClear"></div>
    </div>
    

    
    
    
    
    
    <div class="mktoFormRow">
        <div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 5px;">
            <div class="mktoOffset" style="width: 5px;"></div>
            <div class="mktoFieldWrap mktoRequiredField">
                <label for="Job_Function__c" class="mktoLabel mktoHasWidth" style="width: 100px;">
                    <div class="mktoAsterix">*</div>Job Function</label>
                <div class="mktoGutter mktoHasWidth" style="width: 5px;"></div>
                <select id="Job_Function__c" name="Job_Function__c" class="mktoField mktoHasWidth mktoRequired" style="width: 150px;" required>
                    <option value="">Please select</option>
                    <option value="Student"> Student</option>
                    <option value="Educator"> Educator</option>
                    <option value="Consultant"> Consultant</option>
                    <option value="Individual Contributor"> Individual Contributor</option>
                    <option value="Manager / Sr. Manager"> Manager / Sr. Manager</option>
                    <option value="Director / Sr. Director"> Director / Sr. Director</option>
                    <option value="SVP / VP"> SVP / VP</option>
                    <option value="CXO / EVP"> CXO / EVP</option>
                    <option value="Other"> Other</option>
                </select>
                <div class="mktoClear"></div>
            </div>
            <div class="mktoClear"></div>
        </div>
        <div class="mktoClear"></div>
    </div>
    <div class="mktoFormRow">
        <div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 5px;">
            <div class="mktoOffset" style="width: 5px;"></div>
            <div class="mktoFieldWrap">
              
                    <div class="mktoAsterix">*</div>Topic of Interest</label>
                <div class="mktoGutter mktoHasWidth" style="width: 5px;"></div>
                <div class="mktoLogicalField mktoCheckboxList mktoHasWidth" style="width: 150px;">
                    
                     <input name="Animation" id="Animation" type="checkbox" value="3D &amp; Animation" class="mktoField" >
                    <label for="mktoCheckbox_16659_0" class="marginbottom8">3D &amp; Animation</label>
                    
                    <input name="Art" id="Art" type="checkbox" value="Art &amp; Design" class="mktoField">
                    <label for="mktoCheckbox_16659_1" class="marginbottom8">Art &amp; Design</label>
                    
                    <input name="Business" id="Business" type="checkbox" value="Business Professional" class="mktoField">
                    <label for="mktoCheckbox_16659_2" class="marginbottom8">Business Professional</label>
                   
                    <input name="Data" id="Data" type="checkbox" value="Data" class="mktoField">
                    <label for="mktoCheckbox_16659_3" class="marginbottom8">Data</label>
                   
                    <input name="Game" id="Game" type="checkbox" value="Game Development" class="mktoField">
                    <label for="mktoCheckbox_16659_4" class="marginbottom8">Game Development</label>
                    
                    <input name="IT" id="IT" type="checkbox" value="IT Ops / administration" class="mktoField">
                    <label for="mktoCheckbox_16659_5" class="marginbottom8">IT Ops / administration</label>
                    
                    <input name="Software" id="Software" type="checkbox" value="Software Development" class="mktoField">
                    <label for="mktoCheckbox_16659_6" class="marginbottom8">Software Development</label>
                    
                    <input name="Web" id="Web" type="checkbox" value="Web Design &amp; Development" class="mktoField">
                    <label for="mktoCheckbox_16659_7" class="marginbottom8">Web Design &amp; Development</label>
                    
                    <input name="Learning" id="Learning" type="checkbox" value="Learning &amp; Development" class="mktoField">
                    <label for="mktoCheckbox_16659_8" class="marginbottom8">Learning &amp; Development</label>
                    <input name="Architecture" id="Architecture" type="checkbox" value="Architecture &amp; construction" class="mktoField">
                    <label for="mktoCheckbox_16659_9" class="marginbottom8">Architecture &amp; construction</label>
                    <input name="Manufacturing" id="Manufacturing" type="checkbox" value="Manufacturing &amp; design" class="mktoField">
                    <label for="mktoCheckbox_16659_10" class="marginbottom8">Manufacturing &amp; design</label>
 </div>
                <div class="mktoClear"></div>
            </div>
            <div class="mktoClear"></div>
        </div>
        <div class="mktoClear"></div>
    </div>
    <div class="mktoFormRow">
        <div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 5px;">
            <div class="mktoOffset" style="width: 5px;"></div>
            <div class="mktoFieldWrap mktoRequiredField">
                <label for="Country" class="mktoLabel mktoHasWidth" style="width: 100px;">
                    <div class="mktoAsterix">*</div>Country</label>
                <div class="mktoGutter mktoHasWidth" style="width: 5px;"></div>
                <select id="Country" name="Country" title="Select.." class="mktoField mktoHasWidth mktoRequired" style="width: 150px;" required>
                    <option value="">Please select</option>
                    <option value="United States">United States</option>
                    <option value="Canada">Canada</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                    <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curaçao">Curaçao</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Réunion">Réunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Barthélemy">Saint Barthélemy</option>
                    <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                    <option value="South Sudan">South Sudan</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-Leste">Timor-Leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
                <div class="mktoClear"></div>
            </div>
            <div class="mktoClear"></div>
        </div>
        <div class="mktoClear"></div>
    </div>
    <div class="mktoFormRow">
        <div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 5px;">
            <div class="mktoOffset" style="width: 5px;"></div>
            <div class="mktoFieldWrap mktoRequiredField">
                <label for="How_Many_People_Do_You_Manage__c" class="mktoLabel mktoHasWidth" style="width: 100px;">
                    <div class="mktoAsterix">*</div>If you manage a team, how many people do you oversee?</label>
                <div class="mktoGutter mktoHasWidth" style="width: 5px;"></div>
                <input id="How_Many_People_Do_You_Manage__c" name="How_Many_People_Do_You_Manage__c" maxlength="2000" type="number" class="mktoField mktoNumberField mktoHasWidth mktoRequired" min="0" max="" step="" style="width: 380px;">
                <div class="mktoClear"></div>
            </div>
            <div class="mktoClear"></div>
        </div>
        <div class="mktoClear"></div>
    </div>
    
    <div class="mktoFormRow">
        <div class="mktoFormCol" style="margin-bottom: 5px;">
            <div class="mktoOffset mktoHasWidth" style="width: 5px;"></div>
            <div class="mktoFieldWrap">
                <div class="mktoHtmlText mktoHasWidth" style="width: 255px;"><span>Your </span><a href="https://www.pluralsight.com/privacy" target="_blank">privacy</a><span> is important to us.</span></div>
                <div class="mktoClear"></div>
            </div>
            <div class="mktoClear"></div>
        </div>
        <div class="mktoClear"></div>
    </div>
    <div class="mktoButtonRow"><span class="mktoButtonWrap mktoNative" style="margin-left: 110px;"><button type="submit" class="mktoButton">Submit</button></span></div>
    
</form>




<div class="section free-form-component">
<style>
  ::-webkit-input-placeholder {
   color: white;
}

:-moz-placeholder { /* Firefox 18- */
   color: white;
}

::-moz-placeholder {  /* Firefox 19+ */
   color: white;
}

:-ms-input-placeholder {  
   color: white;
}

.mktoForm input {
	margin-bottom: 9px !important;
	box-shadow: none;
	border-radius: 2px;
}

 
.mktoForm .mktoLabel {
    float: left;
    line-height: 1.75em;
    padding-top: 0.3em;
    width: auto !important;

    max-width: 300px;
    font-weight: 600 !important;
    color: #555553;
    font-size: .9em;
}


</style>

</div>

</div>
    
   
</div>
</div>
<div class="section free-form-component">
<style>
  ::-webkit-input-placeholder {
   color: white;
}

:-moz-placeholder { /* Firefox 18- */
   color: white;
}

::-moz-placeholder {  /* Firefox 19+ */
   color: white;
}

:-ms-input-placeholder {  
   color: white;
}

.mktoForm input {
	margin-bottom: 9px !important;
	box-shadow: none;
	border-radius: 2px;
}

 
.mktoForm .mktoLabel {
    float: left;
    line-height: 1.75em;
    padding-top: 0.3em;
    width: auto !important;
    max-width: 300px;
    font-weight: 600 !important;
    color: #555553;
    font-size: .9em;
}

label.mktoLabel , label.marginbottom8{ margin-bottom:8px !important; font-size:14px !important;  font-weight: 600 !important;}

</style>

</div>

</div>
            
        </div>
    </div>
</div>
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
