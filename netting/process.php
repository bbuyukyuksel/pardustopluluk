<?php
include "connect.php";

if(isset($_POST["btnSubmit"])){

    $adsoyad = $_POST["adsoyad"];
    $il = $_POST["il"];
    $email = $_POST["email"];
    $beceriler = $_POST["beceriler"];

    echo "Ad Soyad : " . $adsoyad . "<br/>";
    echo "İl : " . $il . "<br/>";
    echo "email: " . $email . "<br/>";
    echo "beceriler : " . $beceriler . "<br/>";


    $format = "INSERT INTO `bilgiler` (`id`, `adsoyad`, `il`, `email`, `beceriler`) VALUES (NULL, '%s', '%s', '%s', '%s');";
    $query = sprintf($format, $adsoyad,$il,$email,$beceriler);
    echo "QUERY : " . $query . "<br/>";

    if ($mysqli->query($query) === TRUE) {
        echo "New record created successfully";
        header("Location: ../index.php?success=true");
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
        header("Location: ../index.php?success=false");
    }
    $mysqli->close();
}
?>