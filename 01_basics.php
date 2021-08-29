<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
     This is my first php website   
     <?php 
        echo "coded by madhur mahajan ";
        echo "<br>";
        //we can write secret algorithm inside this code. user cannot see this code also after viewing source code 
        $variable1 = 2;//variable name starts with $
        $variable2 = 4;//variable name 
        $variable3 = 6;
        $variable4 = 8;
        echo "addition of two number: ";
        echo $variable1 + $variable2;//printing the variable
        echo "<br>";
        //Operators in PHP
        //Arithemetic Operators (+) (-) (*) (/) (%)
        echo "<br>";
        echo"The value of variable1 + variabl2 is ";
        echo $variable1 + $variable2;
        echo "<br>";
        echo"The value of variable1 - variabl2 is ";
        echo $variable1 - $variable2;
        echo "<br>";
        echo"The value of variable1 * variabl2 is ";
        echo $variable1 * $variable2;
        echo "<br>";
        echo"The value of variable1 / variabl2 is ";
        echo $variable1 / $variable2;
        echo "<br>";
        echo"The value of variable1 % variabl2 is ";
        echo $variable1 % $variable2;
        echo "<br>";
        echo "<br>";
        //Assignment Operators (+=) (-=) (*=) (/=)
        $newVar = $variable1;
        $newVar += 1;
        echo "The value of new variable is ";
        echo $newVar;
        echo "<br>";
        $newVar1 = $variable1;
        $newVar1 -= 1;
        echo "The value of new variable is ";
        echo $newVar1;
        echo "<br>";
        $newVar3 = $variable1;
        $newVar3 *= 2;
        echo "The value of new variable is ";
        echo $newVar3;
        echo "<br>";
        $newVar4 = $variable1;
        $newVar4 /= 1;
        echo "The value of new variable is ";
        echo $newVar4;
        echo "<br>";
        //Comparison Operators (==) (!=) (<=) (>=)
        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "<br>";
        
        // Increment/Decrement Operators
        echo "initial value: ";
        echo $variable1++;
        echo "<br>";
        echo "After variable1++: ";
        echo $variable1;
        echo "<br>";
        echo "initial value: ";
        echo $variable2--;
        echo "<br>";
        echo "After variable2--: ";
        echo $variable2;
        echo "<br>";
        echo "initail value: ";
        echo $variable3;
        echo "<br>";
        echo ++$variable3;
        echo "<br>";
        echo "after ++ variable3: ";
        echo $variable3;
        echo "<br>";
        echo "initail value: ";
        echo $variable4;
        echo "<br>";
        echo --$variable4;
        echo "<br>";
        echo "after -- variable4: ";
        echo $variable4;
        echo "<br>";

        //Logical operator 
        //and(&&)
        //or(||)
        //xor
        // |
        //and
        $myVar1 = (true and true);
        echo "<br>";
        echo var_dump($myVar1);
        //or 
        $myVar2 = (false or true);
        echo "<br>";
        echo var_dump($myVar2);
        //xor (ture xor true is false)
        $myVar3 = (true xor true);
        echo "<br>";
        echo var_dump($myVar3);   
     ?>

     <?php
        //Data types in PHP
        //1. String
        //2. Integer
        //3. Float
        //4. Boolean
        //5. Array
        //6. Object
        echo "<br> Data types <br>";
        $var = "My name is V";
        echo "string";
        echo var_dump($var);
        echo "<br>";
        $vari = 11;
        echo "integer";
        echo var_dump($vari);
        echo "<br>";
        $varf = 11.65;
        echo "float";
        echo var_dump($varf);
        echo"<br>";
        $varb = true;
        echo "boolean";
        echo var_dump ($varb);
        echo "<br>";






     ?>
   
   
</body>
</html>