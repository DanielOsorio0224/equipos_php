<?php
include('connection.php');
$con = connection();

$id=$_GET['id'];

$sql = "SELECT * FROM equipos WHERE id='$id'";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar equipo</title>
</head>
<body>
    <div>
        <form action="update_equip.php" method="POST">
            <h2>Editar Equipo</h2>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="name" value="<?= $row['name'] ?>">
            <input type="text" name="country" value="<?= $row['country'] ?>">
            <input type="text" name="titles" value="<?= $row['titles'] ?>">
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>