<?php
/*********************
Name: Jacob Wallace
Coding 06
Purpose: This processes the title generation form.
**********************/

/* 
 * this is simulating input, validation, processing, and output
 */
if (!empty($_POST["title"]) && !empty($_POST["favDrink"])&& !empty($_POST["pet"])&& !empty($_POST["favFic"])&& !empty($_POST["favReal"])&& !empty($_POST["email"])) {
    // this will be sent back to the calling function on the client
    echo "okay";
} else {
    // this will be sent back to the calling function on the client
    echo "error";
}

?> 