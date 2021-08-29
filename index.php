
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="pg.jpg" alt="GPP">
    <div class ="container">
        <h1> WELCOME TO GOVERNMENT POLYTECHNIC PUNE</h1>
        <p> Enter your Details and submit this form to confirm your trip</p>
        
        <form action="index.php" method="post">
            <input type="text" name="name" id="name"placeholder="Enter your name">
            <input type="text" name="age" id="age"placeholder="Enter your age">
            <input type="text" name="gender" id="gender"placeholder="Enter your Gender">
            <input type="email" name="email" id="email"placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone no."placeholder="Enter your Phone no.">
            <textarea name="desc" id="desc" cols="30" rows="5"placeholder="Enter any other info here!!!"></textarea>
            <button class="btn">Submit</button>

        </form>
    </div> 
    <?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);
 if(!$con){
     die("connerction to this database failed due to".mysqli_connect_error());
 }
//  echo "Success conneted to db"
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `picnic`.`picnic` ( `name`,`age`,`gender`,`email`, `phone`, `other`,`dt`) VALUES ('$name','$age','$gender','$email','$phone','$desc',current_timestamp())";
//echo $sql;

if($con->query($sql) == true){
   //echo "Successfully inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
?>

    <script src="index.js"></script>
    
</body>
</html>