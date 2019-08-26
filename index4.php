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
    <div class="bal">
        <br>
        <span><b> Menű:</b></span>
        <br>
        <ul>
            <li><a href="index.php">Home</a> </li>
            <li><a href="index2.php">Ruházat</a> </li>
            <li><a href="index3.php">Sisakok</a> </li>
            <li><a href="kereses.php">Keresés</a></li>
            <li><a href="foglalas.php">Foglalás</a></li>
            <li><a class="active" href="index4.php">Admin</a> </li>

        </ul>
    </div>
    <div class="jobb">
        <form id="flogin" name="flogin" method="post" action="login.php">
            <h3 id="beje">Bejelentkezés</h3>

            <br>
            <label for="felh">Felhasználónév:</label>
            <input type="text" id="user" name="user" maxlength="20" size="20" autofocus placeholder="Felhasznalónév">
            <br>
            <span id="error1"> </span>
            <br>
            <br>
            <label for="jelszo">Jelszó:</label>
            <input type="password" id="pass" name="pass" maxlength="20" size="20" autofocus placeholder="Jelszó">
            <br>
            <span  id="error2"> </span>
            <br>
            <br>
            <input type="submit" id="btnOk" name="sg" value="Küld">
            <input type="reset" id="btnBack"  name="rg" value="Mégsem">
        </form>

    </div>
    <div class="valaszto"></div>
    <div class="also"><ins></ins> </div>

</div>

</body>
</html>