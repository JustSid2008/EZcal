<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>calculator</title>
</head>
<body>
  
<h1 class="tite">Calculator</h1>


<div class="Border" style="text-align:center">


<!-- Creating the form -->

<form>
    <input type="text" class="fir" placeholder='First Number' name="first">
</br>
    <input type="text" class="sec" placeholder='Second Number' name="second">

    
</br>
    <select class="ope" name="operator"> 
        <option>Choose a operator</option>
        <option>Add (+)</option>
        <option>Minus (-) </option>
        <option>Multiply (x)</option>
        <option>Divide (÷) </option>
    </select>

<!-- the buttom -->
</br>
    <button name="submit" value="submit" class="butt" type="submit">Calculate</button>
</form>

<p class="ans">The answer is: 
    <?php 
    
    

    if (isset($_GET['submit'])) {
        $result1 = $_GET['first'];
        $result2 = $_GET['second'];
        $operator = $_GET['operator'];

        echo $result1.' ' . $operator.' ' . $result2." = ";
    
        Switch ($operator) {
            case "Choose a operator":
            echo "There is no operator chosen";
            break;
            
            case 'Add (+)':
                echo $result1 + $result2;
            break;

            case 'Minus (-)': 
                echo $result1 - $result2;
            break;

            case 'Multiply (x)':
                echo $result1 * $result2;
            break;

            case 'Divide (÷)':
                echo $result1 / $result2;
            break;

        }

    }
?>
</p>





</div>


</body>
</html>

 <!-- php code -->

