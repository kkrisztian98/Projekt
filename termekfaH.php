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
<script src="termekfaH.js"></script>
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
        <form id="data" method="post" onsubmit="return CheckData()" onkeyup="CheckData2()">


            <label for="ar">Termékfajta neve:</label>
            <br>
            <span class="error" id="errtefj"> </span>
            <br>
            <input type="text" class="termekfj" id="termekfj"  size="40">
            <br>
            <br>
            <br><br>
            <label for="kepnev">Kép neve, kiterjesztésel:</label>
            <br>
            <span class="error" id="errkepnev"> </span>
            <br>
            <input type="text" class="kepnev" id="kepnev"  size="40">
            <br>
            <br>
            <input type="submit" id="hozzaad" value="Hozzáadás">
        </form>
        <h3><a href="admin.php" title="vissza">Vissza</a> </h3>
    </div>
    <div class="valaszto"></div>
    <div class="also"><ins></ins> </div>
</div>


</body>
</html>