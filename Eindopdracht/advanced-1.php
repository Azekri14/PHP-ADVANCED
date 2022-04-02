<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  

<form action="advanced-2.php" method="post">

<label>Kies een tekstkleur:</label>
<select name="tkleur">
  <?php
  $kleuren = array("red", "blue", "green", "black", "brown");
  
  foreach($kleuren as $kleur){
    echo "<option>" . $kleur . "</option>";
        }
        ?>
    </select>
  <br><br>
  
  <label>Kies een achtergrondkleur:</label>
<select name="akleur">
  <?php
  $kleuren = array("red", "blue", "green", "black", "brown");
  
  foreach($kleuren as $kleur){
    echo "<option>" . $kleur . "</option>";
        }
        ?>
    </select>
  <br><br>

  <label for="tabel">Tabel-border dikte:</label>
  <input type="number" id="tabel" name="tabel" min="0"><br><br>

  <label for="cel">Cel-padding:</label>
  <input type="number" id="cel" name="cel" min="0"><br><br>

  <input type="submit" value="Verstuur">
</form> 

</body>
</html>

