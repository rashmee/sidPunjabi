<?php

    if (isset($_POST['fullName']) && isset($_POST['phNum']) && isset($_POST['emailAddress']) && isset($_POST['message'])) {
        
        $fullName = $_POST['fullName'];
        $phNum = $_POST['phNum'];
        $emailAddress = $_POST['emailAddress'];
        $message = $_POST['message'];
        
        if (!empty($fullName) && !empty($phNum) && !empty($emailAddress) && !empty($message) ) {
        
        $to = 'sid@sidpunjabi.com';
        $subject = 'Contact Information from Sid Punjabi Website';
        $body = $fullName."\n".$phNum."\n".$message;
        $headers = 'From: '.$emailAddress;
        
        if (@mail($to, $subject, $body, $headers)) {
            
            $thankYou =  'Thanks for contacting us. We\'ll be in touch soon!';
        }
        else {
            $sorryMsg =  'Sorry, an error occurred. Please try again later.';
        }
            
        }
        else {
            $validate =  'All fields are required!';
        }
    }

?>


<html>
<head>
<meta charset="UTF-8">
<title>Contact</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" style="text/css" href="theCss.css">
<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript">
    
//    $(document).ready(function() {
//                            $('#theForm').submit(function(){
//            $('#removeForm').hide(); 
//    });
//    });
    
</script>
    
</head>

<body>
    <div class="theMainMenu">
        <ul class="nav">
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="work.html">SERVICES</a></li>
                <li class="selectedMenu"><a href="contact.php">CONTACT</a></li>
         </ul>
    </div>
    <div class="theContactInner">
        <h1>Contact</h1>
        <p><strong>Phone Number: </strong><i>(647)287-4860</i></p>
        <p><strong>Email: </strong><a href="mailto:sid@sidpunjabi.com?Subject=Hello!%20I%20would%20like%20your%20advice" target="_top">sid@sidpunjabi.com</a></p>
        <p><strong>Linkedin: </strong><a href="https://ca.linkedin.com/in/sidpunjabi"target="_blank">https://ca.linkedin.com/in/sidpunjabi</a></p>
        <div id="removeForm">
        <p>Thank you for visiting our website. Please fill out the following form to request information about our products and services or to provide feedback about our site. When you are finished, click the 'Submit' button to send us your message. You will see a confirmation below.</p>
        <p id="theValidate"><i><?php echo $validate; ?></i></p>
        <p id="theThankYou"><strong><?php echo $thankYou; ?></strong></p>
        <p id="theSorry"><strong><?php echo $sorryMsg; ?></strong></p>
        <fieldset id="theForm">
        <form action="contact.php" method="post" name="contact_form" id="theForm">
        <table id="contactTable">
            <tr>
                <td><strong>Name:</strong></td>
                <td><input type="text" name="fullName" id="fullName" size="35" /></td>
            </tr>
            <tr>
                <td><strong>Phone Number:</strong></td>
                <td><input type="text" name="phNum" id="phNum" size="35" /></td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td><input type="text" name="emailAddress" id="emailAddress" size="35" /></td>
            </tr>
            <tr>
                <td><strong>Message:</strong></td>
                <td><textarea name="message" rows="10" cols="35"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" id="submit" value="Submit" /> 
                &nbsp; 
                    <input type="reset" name="reset" id="reset" value="Reset" />
                </td>
            </tr>
        </table>
        </form>
        </fieldset>
        </div>
    </div>
</body>
</html>