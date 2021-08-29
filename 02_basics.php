<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container
    {
        max-width :80%;
        background-color :rgb(219, 219, 107) ;
        margin :auto;
        padding:23px;
    }
</style>
<body>
    <div class ="container">
        <h1>lets learn about php</h1>
        <p>Your party status is here</p> 
<?php
    $age = 34;
    if ($age>18){
        echo "You can go to party";
    }
    else{
        echo "you cannot go to party";
    }
    //arrays
    $language = array("java","c++","php","python");
    echo $language[2];
    echo count($language);

    //loops in php
    $a = 1;
    while ($a <= 10) {
        echo "<br> The value of a: ";
        echo $a;
        $a++;
    }

    // Internation arrays in php using while 
    $a = 0;
    while ($a < count($language)) {
        echo "<br> The value of languages: ";
        echo $language[$a];
        $a++;
    }
    //do while()
    $a=1;
    
    do {
        echo "<br> The value of a: ";
        echo $a;
        $a++;
    }while ($a <= 10);
      
    //for loop
    $i=1;
    for($i=1;$i<=10;$i++)
    {
        echo $i;
    }
    //foreach loop
    foreach ($language as $value) {
        echo "<br> Value from foreach loop is :";
        echo $value;
    }
//functions
    function print5(){
        echo "FIVE";
    }
    print5();

    function print_number($number){
        echo "<br>Your number: ";
        echo $number;
    }
    print_number(77);
    print_number(55);
//String!!!
    $str = "MADHUR MAHAJAN";
    echo "<br>String name: ";
    echo $str;
    $lenn = strlen($str); //length of string
    echo "<br> Length of String: ". $lenn; //String concatinate using "."
    echo "<br> word in String :". str_word_count($str);//count the words in the string
    echo "<br> reverse the string :". strrev($str);//reverse function
    echo "<br> find the position of MAHAJAN in string :".strpos($str,"MAHAJAN");//find the position of the word
    echo "<br> Replace the string :".str_replace("A","a",$str);//Replace the word
?>
</div>
</body>
</html>