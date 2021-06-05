<?php

/* Setting for my email */
$my_email= "spammminda@gmail.com";
$date= date("d/m/Y");
$day= date("l");

/**Checks if data is received 
if(isset($_POST['submit'])){  */

/* checks if the message is empty or not */
$name = $_POST['name'];
$email = $_POST['email'];
$subject  = $_POST['subject'];

if($_POST['message']){
        $message=$_POST['message'];
    }
else {
    $message="They left no message";
}

 /* Mail i should receive */
$write_me = "Hi, on $day $date you got a message! 

Name: $name
E-mail: $email

Message:
$message
";

echo($write_me);

/** Sends mail with mail() function */
$headers = "From:" . $email; 

if(mail($my_email, $subject, $write_me, $headers)){
    echo("Message sent");
}
else {
    echo("Failed");
}

/* Redirect visitor to the main page */
header('Location: index.html');

?>
