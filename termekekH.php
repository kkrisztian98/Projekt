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
<script src="termekekH.js"></script>
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
        <form id="data" method="post" onsubmit="return CheckData()"  onchange="CheckData3()" onkeyup="CheckData2()" onclick="CheckData4()">

            <label for="ter">Termék hozzáadása:</label>
            <br>
            <label for="termekv">Termékfajta:</label>
            <span class="error" id="errtkv"> </span>
            <br>
            <select id="termekv" name="termekv">
                <option value="">-Termék-</option>
                <option value="Sisak">Sisak</option>
                <?php
                $sql = "SELECT * FROM termekval";
                $query = mysqli_query( $connection,$sql);
                $results = mysqli_fetch_all($query,MYSQLI_ASSOC);

                foreach ($results as $result) {
                    echo "<option value='{$result['termeknev']}'>{$result['termeknev']}</option>";
                }
                ?>
            </select>
            <br>



            <label for="ter">Terméknév:</label>
            <span class="error" id="errt"> </span>
            <br>
            <input type="text" class="ter" id="ter"  size="40">
            <br>



            <label for="gyar">Gyartó:</label>
            <span class="error" id="errgyar"> </span>
            <br>
            <input type="text" class="gyar" id="gyar"  size="40">
            <br>



            <label for="ar">Ár:</label>
            <span class="error" id="errar"> </span>
            <br>
            <input type="text" class="ar" id="ar"  size="40" placeholder="Din">
            <br>



            <label for="lei">Leírás:</label>
            <span class="error" id="errlei"> </span>
            <br>
            <textarea rows="4" cols="85"  id=lei class="lei" placeholder="Leírás"></textarea>
            <br>

            <label for="szin">Szin:</label>
            <span class="error" id="errsz"> </span>
            <br>
            <input type="text" class="szin" id="szin"  size="40">
            <br>


            <label for="kepnev">Kép neve:</label>
            <span class="error" id="errkepnev"> </span>
            <br>
            <input type="text" class="kepnev" id="kepnev"  size="40">
            <br>


            <label for="pont">Pont:</label>
            <span class="error" id="errp"> </span>
            <br>
            <input type="number" min="0"  max="10" class="pont" id="pont"  size="10">
            <br>


            <input type="submit" id="hozzaad" value="Hozzáadás">
        </form>

    </div>
    <div class="valaszto"></div>
    <div class="also">  <a href="admin.php" title="vissza">Vissza</a> </div>
</div>


</body>
</html>