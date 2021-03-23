<?php

$_SESSION["streetnumber"] = "";
$_SESSION["email"] = "";
$_SESSION["street"] = "";
$_SESSION["city"] = "";
$_SESSION["zipcode"] = "";

$invalid_street = "";
$invalid_email = "";
$invalid_city = "";
$invalid_streetnumber = "";
$invalid_zip = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $_SESSION["email"] = $_POST["email"];
    } else {
        $invalid_email = "Invalid email format";
    }

    if (empty($_POST["street"])) {
        $invalid_street = "A street is required";
    } else {
        $_SESSION["street"] = $_POST["street"];
    }

    if (empty($_POST["streetnumber"]) || !is_numeric ($_POST["streetnumber"])) {
        $invalid_streetnumber = "A valid streetnumber is required";
    } else {
        $_SESSION["streetnumber"] = $_POST["streetnumber"];
    }

    if (empty($_POST["city"])) {
        $invalid_city = "A city is required";
    } else {
        $_SESSION["city"] = $_POST["city"];
    }

    if (empty($_POST["zipcode"]) || !is_numeric ($_POST["zipcode"])) {
        $invalid_zip = "A valid zipcode is required";
    } else {
        $_SESSION["zipcode"] = $_POST["zipcode"];
    }
}