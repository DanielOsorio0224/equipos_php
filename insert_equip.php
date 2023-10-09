<?php
include('connection.php');
$con = connection();

$id = $_POST['id'];
$name = $_POST['name'];
$country = $_POST['country'];
$titles = $_POST['titles'];

$sql = "INSERT INTO equipos VALUES('$id','$name','$country','$titles')";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>