<?php
require_once 'db_config.php';
$username = $_POST["user"];
$pass = $_POST["pass"];



$sql = 'SELECT * FROM login WHERE username = "'.$username.'"';
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $password=$row["password"];

       }

} else {
    header("Location: index.php");
    exit();

}
if($pass==$password) {
    header("Location: admin.php");
    exit();
}
else{
    header("Location: index.php");
    exit();
}

$connection->close();
