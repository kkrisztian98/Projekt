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


        $termek= "";
        $kepnev = "";


        if (isset($_POST['termek']))
            $termek = mysqli_real_escape_string($connection, $_POST['termek']);

        if (isset($_POST['kepnev']))
            $kepnev = mysqli_real_escape_string($connection, $_POST['kepnev']);
        mysqli_set_charset($connection,"utf8");


        $sql = "INSERT INTO termekval (termeknev,kepnev)
                        VALUES ('$termek','$kepnev')";

        if ($connection->query($sql) === TRUE) {
            echo "<h3><b>A bevitel sikeresen megtörtént.</b><h3>";
        }
        else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
        //Kiirja azt az adatot amit a fentiekben bevittünk az adatbázisba
        $sql1 = 'SELECT termeknev,kepnev FROM termekval WHERE termeknev = "'.$termek.'"';
        $result = mysqli_query($connection, $sql1) or die(mysqli_error($connection));
        while($record=mysqli_fetch_array($result))
        {
            echo " $record[termeknev]<br>
 <img src=\"$record[kepnev]\" alt='photo of parts' height='170' width='220'/><hr><br> ";
        }
        mysqli_free_result($result);
        mysqli_close($connection);
        ?>
        <h3><a href="termekfaH.php" title="vissza">Vissza</a> </h3>
    </div>
    <div class="valaszto"></div>
    <div class="also"><ins></ins> </div>
</div>


</body>
</html>