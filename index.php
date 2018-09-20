<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20.09.2018
 * Time: 22:37
 */
?>

<html>
<head>
    <meta charset="utf-8"/>
    <title>PARDUS TOPLULUK</title>
</head>

<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">

    <div class="contact-image">
        <img src="pardus_icon.png" alt="rocket_contact"/>
    </div>
    <?php
    if(isset($_GET["success"])){
        if ($_GET["success"] === "true" && isset($_GET["success"])) {
            ?>
            <div class="row">
                <div class="col">
                    <div style="text-align: center" ; class="alert alert-success" role="alert">
                        İletiniz başarılı bir şekilde gönderilmiştir :)
                    </div>
                </div>
            </div>
            <?php
        }}
    ?>

    <form method="post" action="netting\process.php" role="form">
        <h3>İletişime Geçelim</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text"  name="adsoyad" class="form-control" placeholder="Adınız Soyadınız *" value="" />
                </div>
                <div class="form-group">
                    <input type="text"  name="il" class="form-control" placeholder="Yaşadığınız Şehir *" value="" />
                </div>
                <div class="form-group">
                    <input type="email"  name="email" class="form-control" placeholder="E-mail Adresiniz *" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Gönder" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="beceriler" class="form-control" placeholder="Becerileriniz *" style="width: 100%; height: 150px;"></textarea>

                </div>

            </div>

        </div>

    </form>

</div>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="sign">
            <a href="https://www.linkedin.com/in/buyukyukselburak/" target="_blank">
                <p style="color:white;text-decoration: none;">Burak Büyükyüksel</p>
            </a>
        </div>
    </div>
</div>
</div>


</body>

</html>

