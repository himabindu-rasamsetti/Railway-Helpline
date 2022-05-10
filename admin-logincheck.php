<?php
session_start();
$conn = mysqli_connect('sql304.epizy.com', 'epiz_31635742', 'W1W9DcNFcwAyVV' , 'epiz_31635742_rail');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "select * from admin where auname = '".$username."' and apword = '".$password."' ";



$result = mysqli_query($conn,$sql) ;
$row = mysqli_fetch_assoc($result);


if($row)
{
$_SESSION["auname"] = $row["auname"];
$_SESSION["aid"] = $row["aid"];


/*
echo "" . $_SESSION["bproject"]. " - Name: " . $_SESSION["bid"]. " " . $_SESSION["batchno"]. "<br>";

*/

header('Location: admin.php');   

}
else
{

header('Location: admin-error.html');   

}

/*
if (($_SESSION["level"])==1)
 {
header('Location: admin.php');    


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