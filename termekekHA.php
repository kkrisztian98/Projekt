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
        <h3><a href="index.php" title="kijelentkezés">Kijelentkezés</a> </h3>
        <hr>
        <?php
        $termekv = "";
 $gyarto = "";
 $ar = "";
   $leiras= "";
    $szin = "";
    $pont= "";
        $termek= "";
        $kepnev = "";
        if (isset($_POST['termekv']))
            $termekv = mysqli_real_escape_string($connection, $_POST['termekv']);
        if (isset($_POST['gyarto']))
            $gyarto = mysqli_real_escape_string($connection, $_POST['gyarto']);
        if (isset($_POST['leiras']))
            $leiras = mysqli_real_escape_string($connection, $_POST['leiras']);
        if (isset($_POST['szin']))
            $szin = mysqli_real_escape_string($connection, $_POST['szin']);
        if (isset($_POST['pont']))
            $pont = mysqli_real_escape_string($connection, $_POST['pont']);
        if (isset($_POST['ar']))
            $ar = mysqli_real_escape_string($connection, $_POST['ar']);

        if (isset($_POST['termek']))
            $termek = mysqli_real_escape_string($connection, $_POST['termek']);

        if (isset($_POST['kepnev']))
            $kepnev = mysqli_real_escape_string($connection, $_POST['kepnev']);
        mysqli_set_charset($connection,"utf8");


        $sql = "INSERT INTO termek (termek,nev,gyarto,szin,leiras,Ar,kep,pont)
                        VALUES ('$termekv','$termek','$gyarto','$szin','$leiras','$ar','$kepnev','$pont')";

        if ($connection->query($sql) === TRUE) {
            echo "<h3><b>A bevitel sikeresen megtörtént.</b><h3>";
        }
        else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

        $sql1 = 'SELECT termek,nev,gyarto,szin,leiras,Ar,kep,pont FROM termek WHERE nev = "'.$termek.'"';
        $result = mysqli_query($connection, $sql1) or die(mysqli_error($connection));
        while($record=mysqli_fetch_array($result))
        {
            echo " $record[termek]<br>$record[nev]<br>$record[gyarto]<br>$record[szin]<br>$record[leiras]<br>$record[Ar]<br>$record[pont]<br>
 <img src=\"$record[kep]\" alt='photo of parts' height='170' width='220'/><hr><br> ";
        }
        mysqli_free_result($result);
        mysqli_close($connection);
        ?>
        <h3><a href="termekekH.php" title="vissza">Vissza</a> </h3>
    </div>
    <div class="valaszto"></div>
    <div class="also"><ins></ins> </div>
</div>


</body>
</html>