<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>For each 2</title>
</head>

<style>
    div {
        margin: auto;
        padding: 100px;
        text-align: center;
        border-style: solid;
        border-color: black;
        width: 300px;
        }
</style>

<body>

<div>
    <h1>Klassenformulier</h1>
    <p>Ik zit in klas: </p>

<form>
    <select>

        <option selected="selected"></option>
        <?php
          

        $klassen = array("8A", "8B", "8C", "8D", "9A", "9B", "9C", "9D", "9E");

        echo "<ul>";
        foreach($klassen as $klas){
            echo "<li><option value='strtolower($klas)'>$klas</option></li>";
        }

        echo "</ul>";
        ?>
    </select>
    <input type="submit" value="Verzend">
</form>
</div>
</body>
</html>

