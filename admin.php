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
        <form name="termekfaH" action="termekfaH.php" method="post">
            <input type="submit" name="sg1" value="Termékfajta hozzáadása">
        </form>
        <hr>
        <form name="termekfaT" action="termekfaT.php" method="post">
            <input type="submit" name="sg2" value="Termékfajta  törlése">
        </form>
        <hr>
        <form name="termekekH" action="termekekH.php" method="post">
            <input type="submit" name="sg3" value="Termékek hozzáadása">
        </form>
        <hr>
        <form name="termekekT" action="termekekT.php" method="post">
            <input type="submit" name="sg4" value="Termékek törlése">
        </form>
        <hr>
        <form name="foglalasok" action="fogki.php" method="post">
            <input type="submit" name="sg5" value="Foglalások listázása">
        </form>
        <hr>
        <form name="foglalasT" action="fogT.php" method="post">
            <input type="submit" name="sg5" value="Foglalások törlése">
        </form>
    </div>
    <div class="valaszto"></div>
    <div class="also"><ins></ins> </div>
</div>


</body>
</html>