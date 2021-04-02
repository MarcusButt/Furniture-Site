<?php

if(isset($_GET['submit'])) {
    $name = $_GET['name'];
    $title = $_GET['title'];
    $comment = $_GET['comment'];
    $email = $_GET['email'];

    $mailTo = "mjcb32@mun.ca";
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: index.htm?mailsend")
}