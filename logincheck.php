








<?php
session_start();
$conn = mysqli_connect('sql304.epizy.com', 'epiz_31635742', 'W1W9DcNFcwAyVV' , 'epiz_31635742_rail');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST["email"];
$password = $_POST["password"];
$projecttype = $_POST["type"];

$sql = "select * from passengers where pmail = '".$email."' and pword = '".$password."' and pcat = '".$projecttype."'";

echo $sql;



$result = mysqli_query($conn,$sql) ;
$row = mysqli_fetch_assoc($result);


if($row)
{
$_SESSION["fname"] = $row["pname"];
$_SESSION["email"] = $row["pmail"];
$_SESSION["mobile"] = $row["pmobile"];
$_SESSION["doj"] = $row["pdoj"];
$_SESSION["trainno"] = $row["ptrainno"];
$_SESSION["cat"] = $row["pcat"];

echo "" . $_SESSION["fname"]. " - Name: " . $_SESSION["cat"]. " " . $_SESSION["mobile"]. "<br>";


header('Location: passenger.php');    






}
else
{

header('Location: error.html');   

}

/*
if (($_SESSION["level"])==1)
 {
header('Location: admin.php');    
header('Location: student.php');   

 }
 else if (($_SESSION["level"])==0) 
 {
header('Location: user.php');    


 }

mysqli_close($conn);

/*

if (mysqli_query($conn, $sql)) {

    echo "New record created successfully";

} else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




$db = new mysqli ('localhost', 'root', 'root' , 'mytour') or die("unable to connect");

$mail = $_POST["email"];
$pwd = $_POST["password"];

  $sql = "select name from register where email = '".$mail."' and password = '".$pwd."' ";


  $result = mysqli_query($db,$sql) ;



   $row = $result->fetch_array(MYSQLI_ASSOC);

   if($row)
   {
	   echo "hello";
   }
   else
   {
	   echo "failure";
   }
mysqli_close($db);
*/


?>