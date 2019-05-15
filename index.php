<?php

require "_inc.php";
require "pages/PHPMailer/src/Exception.php";
require "pages/PHPMailer/src/PHPMailer.php";
require "pages/PHPMailer/src/SMTP.php";




if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = "accueil";
}



if ($p === 'accueil') {
    require 'pages/home.php';
}

if ($p === "contact") {
    require 'pages/form.php';
}
