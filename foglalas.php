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
<script src="foglalas.js"></script>
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


        <form id="data" class="foglal" method="post" onsubmit="return CheckData()" onkeyup="CheckData2()" onchange="CheckData3()">


            <label for="nev">Név:</label>
            <span class="error" id="errn"> </span>
            <br>
            <input type="text" class="nev" id="nev"  size="30">
            <br>
            <br>

            <label for="vnev">Vezetéknév:</label>
            <span class="error" id="errvn"> </span>
            <br>
            <input type="text" class="vnev" id="vnev"  size="30">
            <br>
            <br>

            <label for="date">Dátum:</label>
            <span class="error" id="errd"> </span>
            <br>
            <input type="date" class="date" id="date"  size="30">
            <br>
            <br>

            <label for="ido">Idő:</label>
            <span class="error" id="erri"> </span>
            <br>
            <input type="time"  class="time" id="time"  >
            <br>
            <br>
            <label for="ter">Termék neve:</label>
            <span class="error" id="errt"> </span>
            <br>
            <select id="termekk" name="termekk">
                <option value="">-Termék-</option>
                <?php
                $sql = "SELECT * FROM termek";
                $query = mysqli_query( $connection,$sql);
                $results = mysqli_fetch_all($query,MYSQLI_ASSOC);

                foreach ($results as $result) {
                    echo "<option value='{$result['nev']}'>{$result['nev']}</option>";
                }
                ?>
            </select>
            <br>
            <input type="submit" id="kuld" value="Küldés">
        </form>

    </div>
    <div class="valaszto"></div>

</div>
</div>
<script src="java.js"></script>
</body>
</html>