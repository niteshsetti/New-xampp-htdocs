<?php
 if(isset($_POST["num1"]) || isset($_POST["num2"]))
 {
     $num1=$_POST["num1"];
     $num2=$_POST["num2"];
     $sum=$num1+$num2;
    define("result",$sum);
 }

?>
<!DOCTYPE html>
<html>
<body>
    <form action="second.php?" method="post">
        <input type="text" placeholder="Enter number1" name="num1"><br><br>
        <input type="text" placeholder="Enter number2" name="num2"><br><br>
        <input type="submit" value="Submit" name="click">
    </form>
</body>

</html>