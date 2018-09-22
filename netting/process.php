<?php
ob_start();
include "connect.php";

if(isset($_POST["btnSubmit"])){
    $done = null;
    $adsoyad = $_POST["adsoyad"];
    $il = $_POST["il"];
    $email = $_POST["email"];
    $beceriler = $_POST["beceriler"];

    //echo "Ad Soyad : " . $adsoyad . "<br/>";
    //echo "İl : " . $il . "<br/>";
    //echo "email: " . $email . "<br/>";
    //echo "beceriler : " . $beceriler . "<br/>";


    $format = "INSERT INTO `bilgiler` (`id`, `adsoyad`, `il`, `email`, `beceriler`) VALUES (NULL, '%s', '%s', '%s', '%s');";
    $query = sprintf($format, $adsoyad,$il,$email,$beceriler);

    if ($mysqli->query($query) === TRUE) {
        echo "<h1 style='text-align:center;color:green;margin-top:2%;'>New record created successfully</h1>";
        $done = "true";
    }
    else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
        $done = "false";
    }
    header("Refresh:2;url=https://" .$_SERVER["HTTP_HOST"] . '/index.php?success=' . $done);
}
?>
