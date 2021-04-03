<?php

if($_POST['submit']) {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $comment = $_POST['comment'];
    $email = $_POST['email'];

    $mailTo = "mjcb32@mun.ca";
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
}

?>