<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fikom_unimerz_19";
try{
    $conn = new PDO ("mysql:host=$servername; dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

}
?>