<?php
include('connection.php');
$con = connection();

$id = $_POST['id'];
$name = $_POST['name'];
$country = $_POST['country'];
$titles = $_POST['titles'];

$sql = "UPDATE equipos SET name='$name', country='$country', titles='$titles'
        WHERE id='$id' ";
$query = mysqli_query($con,$sql);        

if($query){
    Header("Location: index.php");
}

?>