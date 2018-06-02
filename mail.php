<?php
/* Set e-mail recipient */
$myemail = "andys.schoolofmotoring@yahoo.com";

$subject = "Andy's SOM Query";




/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Enter your name");
$address = check_input($_POST['address'], "Enter your address");
$pnumber = check_input($_POST['pnumber'], "Enter you phone number");
$frommonhours = $_POST['frommonhours'];
$frommonminutes = $_POST['frommonminutes'];
$tomonhours = $_POST['tomonhours'];
$tomonminutes = $_POST['tomonminutes'];
$fromtuehours = $_POST['fromtuehours'];
$fromtueminutes = $_POST['fromtueminutes'];
$totuehours = $_POST['totuehours'];
$totueminutes = $_POST['totueminutes'];
$fromwedhours = $_POST['fromwedhours'];
$fromwedminutes = $_POST['fromwedminutes'];
$towedhours = $_POST['towedhours'];
$towedminutes = $_POST['towedminutes'];
$fromthuhours = $_POST['fromthuhours'];
$fromthuminutes = $_POST['fromthuminutes'];
$tothuhours = $_POST['tothuhours'];
$tothuminutes = $_POST['tothuminutes'];
$fromfrihours = $_POST['fromfrihours'];
$fromfriminutes = $_POST['fromfriminutes'];
$tofrihours = $_POST['tofrihours'];
$tofriminutes = $_POST['tofriminutes'];
$fromsathours = $_POST['fromsathours'];
$fromsatminutes = $_POST['fromsatminutes'];
$tosathours = $_POST['tosathours'];
$tosatminutes = $_POST['tosatminutes'];
$fromsunhours = $_POST['fromsunhours'];
$fromsunminutes = $_POST['fromsunminutes'];
$tosunhours = $_POST['tosunhours'];
$tosunminutes = $_POST['tosunminutes'];
$prevexp = $_POST['prevexp'];
$email = check_input($_POST['email']);
$message = check_input($_POST['message'], "Write your message");



/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("E-mail address not valid");
}



/* Let's prepare the message for the e-mail */

$message = "

Name: $name
Address: $address

Email: $email
Phone Number: $pnumber


Days and Time Available: 

Monday: 
From $frommonhours : $frommonminutes to $tomonhours : $tomonminutes

Tuesday: 
From $fromtuehours : $fromtueminutes to $totuehours : $totueminutes

Wednesday: 
From $fromwedhours : $fromwedminutes to $towedhours : $towedminutes

Thursday:
From $fromthuhours : $fromthuminutes to $tothuhours : $tothuminutes

Friday: 
From $fromfrihours : $fromfriminutes to $tofrihours : $tofriminutes


Saturday: 
From $fromsathours : $fromsatminutes to $tosathours : $tosatminutes


Sunday: 
From $fromsunhours : $fromsunminutes to $tosunhours : $tosunminutes


Previous Experiance:
$prevexp

Message:
$message


";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: thankyou.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <link rel="icon" href="images/favicon.ico" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andy's School of Motoring</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    
    <div class="banner">
        <img class="logo" width="40%" src="images/logo.jpg" alt="Banner Image" />
        <img class="passplus" width="9%" src="images/img3.png" alt="Pass Plus Registered Instructor" />

        <ul class="topnav">
          <li><a href="index.html">Home</a></li>
          <li><a href="free.html">Free Lessons</a></li>
          <li><a href="areas.html">Areas covered &amp; prices</a></li>
          <li><a href="automatic.html">Automatic</a></li>
          <li><a href="theory.html">Theory test</a></li>
          <li><a class="active" href="practical.html">Practical test</a></li>
          <li><a href="passplus.html">Pass plus</a></li>
          <li><a href="fastpass.html">Fast pass</a></li>
          <li><a href="instructor.html">Instructor training</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li class="right"><a href="https://www.facebook.com/Andysdrivingschoolcheshire/">Facebook</a></li>
        </ul>
    </div>

    <div class="container">
        
        
        
        <!--Start of Content -->
        
        
        <div class="text">
            <h1>Sorry!</h1>
            
            
        </div>
        <div class="text">    
            

            <p>It would appear an error has occured while filling out the form</p>
            
            <p>Please ensure that...</p>
            
            <ul class="list">
                <li>All the fields are filled</li>
                <li>Name is your full name</li>
                <li>Address is your full address</li>
                <li>Email is correct <i>(example@email.com)</i></li>
                <li>Phone number is all numerical</li>
            </ul>
            
            
            
            
            
            <a class="link" href="contact.html"> Click here to return</a>
            
            
            
			
			<br />
			
			

          
        </div>


        
    </div>

</body>
</html>





<?php
exit();
}
?>