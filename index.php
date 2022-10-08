<?php 
declare(strict_types = 1);
include 'includes/autoLoader.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="includes/calc.inc.php" method="post" >
            <p>My own Calculator</p>
            <input type="number" name="num1" placeholder="First Number">
            <select name="oper">
                <option value="add">Addition</option>
                <option value="sub">Subsstraction</option>
                <option value="mul">Multiplication</option>
                <option value="div">Division</option>
            </select>
            <input type="number" name="num2" placeholder="Second Number">
            <button type="submit" name="submit">Calculate</button>
        </form>

        <?php
         $usersObject = new UsersView;
         $usersObject->showUsers("sdsd");

         $usersObject = new UsersContr;
         $usersObject->createUser("Maina", "Lawrance", "Mbezi", "+233434");

         
        ?>
    </body>
</html>