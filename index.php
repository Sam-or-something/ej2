<?php
    include_once("./calculadora.php");
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de daño</title>
</head>
<body>
    <h2>Calculadora de daño</h2>
    <form action="./index.php" method="POST">
        <label for = "vida">Vida actual: </label>
        <input type = "number" name = "vida"><br>
 
        <label for = "Ataque"> Seleccione el tipo de ataque: </label>
        <select name = "Ataque"> <br>
            <option value = "golpe">Golpe </option>
            <option value = "patada">Patada</option>
            <option value = "espadazo">Espadazo</option>
        </select>
 
        <br><label for = "pocion" >Seleccione el tipo de pocion: </label> <br>
        <input type = "radio" name = "pocion" value = 0> Poción de veneno. <br>
        <input type = "radio" name = "pocion" value = 1> Poción de fuego. <br>
        <input type = "radio" name = "pocion" value = 2> Poción de adormecimiento. <br>

        <br><input type="submit" value="Calcular">
    </form>
    <?php
        if(isset($_POST["ataque"])){
        }
    ?>
</body>
</html>
 
