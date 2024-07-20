<html lang="en">
<?php 
 require('Connect.php');
 $query=mysqli_query($link,"SELECT * FROM info");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <table>
        <tr>
           <th>NOMBRE</th>
           <th>APELLIDO</th>
           <th>EMAIL</th>
           <th>CONTACTO</th>
        </tr>
        <?php 
            while($row=mysqli_fetch_array($query)) {?>
            <tr>
                <td><?php echo($row['NOMBRE'])?></td>
                <td><?php echo($row['APELLIDO'])?></td>
                <td><?php echo($row['MAIL'])?></td>
                <td><?php echo($row['CONTACTO'])?></td>
            </tr>
        <?php }
        ?>
    </table>
    <div > 
                <a href="index.html">Volver al inicio</a>
            </div>
</body>
</html>