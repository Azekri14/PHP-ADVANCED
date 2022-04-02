<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:<?php echo $_POST['akleur']; ?>; border-radius: <?php echo $_POST ['tabel'];?>px;">

<style>
    table, td{
        border: solid white;
        border-collapse: collapse;
    }
</style>
<table>

<?php 
$informatie = array(
    "Naam" => "Mohamed",
    "Leeftijd" => "26 jaar",
    "Woonplaats" => "Amsterdam",
    "Geboortestad" => "Tetouan",
    "Hobby" => "Lezen"
);


function maakRij ($keys , $value) {
    echo "<tr>
     <td style=padding:" . $_POST['cel'] . "px> <p style=color:" . $_POST['tkleur'] . ">" . $keys . "</p> </td>
     <td style=padding:" . $_POST['cel'] . "px> <p style=color:" . $_POST['tkleur'] . ">" . $value . "</p> </td>
   </tr>";
 }

 foreach ($informatie as $keys => $values) {
    maakRij($keys, $values);
    }

 ?>
</table>
    </body>
</html>