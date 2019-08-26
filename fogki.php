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
    <script type="text/javascript" src="Kereses.js.js"></script>
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

    <div class="jobbadmin">
        <h2>Foglalások:</h2>

         <?php
        $sql1 = 'SELECT * FROM foglalas';
        $result = mysqli_query($connection, $sql1) or die(mysqli_error($connection));
        while($record=mysqli_fetch_array($result))
        {
        echo " Név:$record[veznev]&nbsp$record[nev]&nbsp &nbsp Dátum:$record[datum]&nbsp &nbsp Idő:$record[ido]&nbsp &nbsp Termék:$record[termeknev]<hr> ";
        }
        mysqli_free_result($result);
        mysqli_close($connection);
         ?>
    </div>
    <div class="valaszto"></div>
    <div class="also"><ins></ins> </div>
</div>


</body>
</html>