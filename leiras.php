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
    <script type="text/javascript" src="java.js"></script>
</head>
<body>
<div class="alap">
    <div class="fej">
        <h1 id="cim">Motoros Ruházat</h1>
    </div>
    <div class="valaszto"></div>
    <div class="bal" >
        <br>
        <span><b> Menű:</b></span>
        <br>
        <ul>
            <li><a href="index.php">Home</a> </li>
            <li><a  href="index2.php">Ruházat</a> </li>
            <li><a href="index3.php">Sisakok</a> </li>
            <li><a href="kereses.php">Keresés</a></li>
            <li><a href="foglalas.php">Foglalás</a></li>
            <li><a href="index4.php">Admin</a> </li>

        </ul>
    </div>
    <div class="jobb">

        <h1 id="cikk" >&nbsp Termék:</h1>

            <?php
            include "db_config.php";
            $term=$_POST['termek'];


            $sql = 'SELECT * FROM termek WHERE id = "'.$term.'"';
            $result = $connection->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $nev=$row["nev"];
                    $ar=$row["Ar"];
                    $gyarto=$row["gyarto"];
                    $leiras=$row["leiras"];
                    $kep=$row["kep"];
                    $pont=$row["pont"];

                }
            } else {
                echo "0 results";
            }

            $connection->close();


            ?>
   <div id="leiraskep">
<h2>
    <?php
    echo $nev;
    ?>

</h2>

       <?php
       echo  "<img src=".$kep." alt='photo of me' width='300' height='300'/>";
       ?>
       <h2 id="Ar">
           <?php
           echo "Ár:".$ar." din";
           ?>
       </h2>
    </div>
<div id="leirasszoveg">
    <br>
<h3>
    <?php
    echo "Gyártó:".$gyarto;
    ?>
</h3>
    <h3>
        <?php
        echo "Védelem: 10/".$pont;
        ?>
    </h3>

    <h3>
        <?php
        echo "Leírás: <br>".$leiras;
        ?>
    </h3>
</div>



    </div>
    <div class="valaszto"></div>
    <div class="also"><ins></ins> </div>
</div>


</body>
</html>