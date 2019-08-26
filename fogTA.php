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

    <div class="jobbadmin">
        <h3><a href="index.php" title="kijelentkezés">Kijelentkezés</a> </h3>
        <hr>

        <?php
        $id = "";

        if (isset($_POST['id']))
            $id = mysqli_real_escape_string($connection, $_POST['id']);
        $sql = 'DELETE FROM foglalas WHERE id="'.$id.'"';

        if ($connection->query($sql) === TRUE) {
            echo "<h3><b>A törlés sikeres</b></h3>";
        } else {
            echo "Hiba a törlés folyamatban: " . $connection->error;
        }
        mysqli_close($connection);
        ?>



        <h3><a href="fogT.php" title="vissza">Vissza</a> </h3>
    </div>
    <div class="valaszto"></div>
    <div class="also"><ins></ins> </div>
</div>


</body>
</html>