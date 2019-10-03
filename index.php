<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
    Calculadora em php // Manipulacao de variaveis
    </p>
    <form action="index.php">
    
    <input type="text" name="Number1" placeholder="Number1:">
    <input type="text" name="Number2" placeholder="Number2:">
    <select name="operator">
    <option value="Multiply">Multply</option>
    <option value="Add">Add</option>
    <option value="Subtract">Subtract</option>
    <option value="Divide">Divide</option>
    </select>
    <br>
    <hr>
    <button type="submit" value="submit" name="submit">Calculate</button>
    </form>
    <p>
    O Resultado foi:
    </p>
    <?php
    if (isset($_GET["submit"])){
        $result1=$_GET["Number1"];
        $result2=$_GET["Number2"];
        $operator=$_GET["operator"];
        switch($operator){
            case "None":
                    echo"You need to select a method";
                    break;
            case "Multiply":
                    echo $result1*$result2;
            case "Subtract":
                    echo $result1-$result2;
                    break;
            case "Add":
                    echo $result1+$result2;
                    break;
            case "Divide":
                    echo $result1/$result2;
                    break;
        }
    }
    
?>
<p>
Mesmo metodo que o selecionador inteligente.
Exercicios online licao de mmnuts.

Nice aplication of get method and switch.
</p>
</body>
</html>