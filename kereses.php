<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Kaszas Krisztian">
    <meta name="description" content="Web shop">
    <meta name="keywords" content="HTML, CSS, HTML5">
    <meta name="robots" content=“index,follow">
    <title>Wb shop</title>
    <link rel="stylesheet" href="css1.css" type="text/css" >

</head>
<body>
<?php
require_once 'db_config.php';
?>
<div class="alap">
    <div class="fej">
        <h1 id="cim">Motoros Ruházat</h1>
    </div>
    <div class="valaszto"></div>
    <div class="bal" >
        <br>
        <span><b> Menű:</b></span>
        <br>
        <ul>
            <li><a href="index.php">Home</a> </li>
            <li><a href="index2.php">Ruházat</a> </li>
            <li><a href="index3.php">Sisakok</a> </li>
            <li><a class="active" href="kereses.php">Keresés</a></li>
            <li><a href="foglalas.php">Foglalás</a></li>
            <li><a href="index4.php">Admin</a> </li>
        </ul>
    </div>
    <div class="jobb">

        <h1 >&nbsp Cikekk:</h1>
        <form id="formk" name="keres" method="post" action="kereses2.php">

            <h1>Keresés termékek közt</h1>
            <h4>Termék fajtája</h4>
            <p id="error1"></p>

            <select id="termek" name="termek">
                <option value="">-Termék-</option>
                <?php
                $sql = "SELECT * FROM termekval";
                $query = mysqli_query( $connection,$sql);
                $results = mysqli_fetch_all($query,MYSQLI_ASSOC);

                foreach ($results as $result) {
                    echo "<option value='{$result['termeknev']}'>{$result['termeknev']}</option>";
                }
                ?>


                <input type="submit" name="sg" value="Keresés">

        </form>


    </div>
    <div class="valaszto"></div>
    <div class="also"><ins></ins> </div>
</div>


</body>
</html>