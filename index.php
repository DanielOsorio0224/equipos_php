<?php
include('connection.php');
$con = connection();

$sql = "SELECT * FROM equipos";
$query = mysqli_query($con,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos</title>
</head>
<body>
    <div>
        <form action="insert_equip.php" method="POST">
            <div>Agregar Equipo</div>

            <input type="text" name="name" placeholder="Nombre del equipo">
            <input type="text" name="country" placeholder="Pais del equipo">
            <input type="text" name="titles" placeholder="Numero de titulos">

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div>
        <h2>Equipos registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Equipo</th>
                    <th>Pais del Equipo</th>
                    <th>Numero de titulos</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th><?= $row['id'] ?></th>
                    <th><?= $row['name'] ?></th>
                    <th><?= $row['country'] ?></th>
                    <th><?= $row['titles'] ?></th>
                    
                    <th><a href="edit_equip.php?id=<?= $row['id'] ?>">Editar</a></th>
                    <th><a href="delete_equip.php?id=<?= $row['id'] ?>">Eliminar</a></th>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>
</html>