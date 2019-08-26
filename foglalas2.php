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
    <div class="bal">
        <br>
        <span><b> Menu:</b></span>
        <br>
        <ul>
            <li><a href="index.php">Home</a> </li>
            <li><a href="index2.php">Ruházat</a> </li>
            <li><a href="index3.php">Sisakok</a> </li>
            <li><a href="kereses.php">Keresés</a></li>
            <li><a class="active" href="foglalas.php">Foglalás</a></li>
            <li><a  href="index4.php">Admin</a> </li>

        </ul>
    </div>
    <div class="jobb">

        <?php
        $nev= "";
        $vnev = "";
        $date = "";
        $time= "";
        $termek = "";
        if (isset($_POST['nev']))
        $nev = mysqli_real_escape_string($connection, $_POST['nev']);
        if (isset($_POST['vnev']))
        $vnev = mysqli_real_escape_string($connection, $_POST['vnev']);
        if (isset($_POST['date']))
        $date = mysqli_real_escape_string($connection, $_POST['date']);
        if (isset($_POST['time']))
        $time= mysqli_real_escape_string($connection, $_POST['time']);
        if (isset($_POST['termek']))
        $termek = mysqli_real_escape_string($connection, $_POST['termek']);
        mysqli_set_charset($connection,"utf8");


        $sql = "INSERT INTO foglalas (nev,veznev,datum,ido,termeknev)
        VALUES ('$nev','$vnev','$date','$time','$termek')";

        if ($connection->query($sql) === TRUE) {
        echo "<h3 class='foglal'><b>A időpont bejegyzése megtörtént.</b><h3>";
                }
                else {
                echo "Error: " . $sql . "<br>" . $connection->error;
                }

                mysqli_close($connection);
                ?>

    </div>
    <div class="valaszto"></div>

</div>
</div>
<script src="java.js"></script>
</body>
</html>