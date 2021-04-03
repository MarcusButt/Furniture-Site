<?php

if($_POST["submit"]) {
    $mailTo="mjcb32@mun.ca";
    $name = $_POST["name"];
    $title = $_POST["title"];
    $comment = $_POST["comment"];
    $email = $_POST["email"];

    $txt = "You have received an email from ".$name.".\n\n".$comment;

    mail($mailTo, $txt, "From: $name <$email>");
}

?>