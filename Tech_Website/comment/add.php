<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
    <?php 
    $host="localhost";
$uname="a";
$password="";
$db="demo";
 $Id=$_POST["name"];
    $age=$_POST["age"];
    $phone=$_POST["phone"];
    $gender=$_POST["gender"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $comment=$_POST["comment"];
    
   

$connection=new mysqli($host,$uname,$password,$db);
   
        $s=$connection->prepare("insert into comments (Name,Age,Phone,Gender,E_Mail,Address,Comment) values(?,?,?,?,?,?,?)");
    $s->bind_param("sssssss",$Id,$age,$phone,$gender,$email,$address,$comment);
    $s->execute();
            echo "<h1> Successful operation, شكرا لك </h1>";  
?>
</body>
</html>
