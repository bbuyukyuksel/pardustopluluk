<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 23.09.2018
 * Time: 02:01
 */
?>


<?php
include "netting/connect.php";
$sql = "SELECT * FROM bilgiler";
$result = $mysqli->query($sql);
$counter = 0;
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>List Page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

    <div class="container">
        <table class="table table-striped table-dark" style="margin-top:3%;">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ad Soyad</th>
                <th scope="col">Şehir</th>
                <th scope="col">E-mail</th>
                <th scope="col">Beceriler</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr style="text-shadow:0 0 10px black;color:white;">
                        <th><?php echo $row["id"]; ?></th>
                        <td><?php echo strtolower($row["adsoyad"]);?></td>
                        <td><?php echo strtolower($row["il"]);?></td>
                        <td><?php echo strtolower($row["email"]);?></td>
                        <td><?php echo strtolower($row["beceriler"]);?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
