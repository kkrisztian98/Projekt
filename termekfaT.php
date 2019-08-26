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
<script src="termekfaT.js"></script>
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
        <form id="data" method="post" onsubmit="return CheckData()" onchange="CheckData2()">
            <label for="termek">Adja meg a törölni kivánt trmékfajtát</label>
            <br>
            <span class="error" id="errt"> </span>
            <br>
            <select id="term" name="term">
                <option value="">-Termék-</option>
                <?php
                $sql = "SELECT * FROM termekval";
                $query = mysqli_query( $connection,$sql);
                $results = mysqli_fetch_all($query,MYSQLI_ASSOC);

                foreach ($results as $result) {
                    echo "<option value='{$result['termeknev']}'>{$result['termeknev']}</option>";
                }
                ?>
            </select>


            <input type="submit" id="torles" value="Törlés">
        </form>

        <h3><a href="admin.php" title="vissza">Vissza</a> </h3>
    </div>
    <div class="valaszto"></div>
    <div class="also"><ins></ins> </div>
</div>


</body>
</html>