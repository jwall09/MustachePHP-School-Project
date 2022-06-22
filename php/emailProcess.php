<?php
/*********************
Name: Jacob Wallace
Coding 06
Purpose: This processes the conatact form
**********************/
/*
 * this is simulating input, validation, processing, and output
 */
if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["from"])&& !empty($_POST["subject"])&& !empty($_POST["message"])) {
    // this will be sent back to the calling function on the client
    echo "okay";
} else { 
    // this will be sent back to the calling function on the client
    echo "error";
}

function main() {

    $to = "max.wallace95@gmail.com";

    /* This will test to make sure we have a non-empty $_POST from
    * the form submission. */
    if (!empty($_POST['name']) && !empty($_POST['from']) && !empty($_POST['reemail']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
        $name = $_POST['name'];
        $from = $_POST['from'];
        $reemail = $_POST['reemail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    } else {
        $name = "";
        $from = "";
        $reemail = "";
        $subject = "";
        $message = "";
    }

    if (!empty($name) && !empty($from) && !empty($subject) && !empty($message)) {
        $to      = 'max.wallace95@gmail.com';
        $subject = 'the subject';
        $message = 'hello';
        $headers = 'From: webmaster@example.com' . "\r\n" .
                    'Reply-To: webmaster@example.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
    
        /* this forms the correct email headers to send an email *
        $headers = "From: $from\r\n";
        $headers .= "Reply-To: $from\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    
        /* Now attempt to send the email. This uses a REAL email function
        * and will send an email. Make sure you only sned it to yourself.
        * server, you would use just "mail" instead of "mymail" and
        * it will be sent normally. Read about the PHP mail() function
        * https://www.php.net/manual/en/function.mail.php
        * then it's up to you to fill out the paramters correctly.
        *
        if (mail($to, $name, $from, $subject, $message)) {
            
        }*/
    }
 
 // this kicks off the script
}

main();
 