
 
 
 
 
 
 
 
 
 
 
 
 
 
 <?php

$conn = mysqli_connect('sql304.epizy.com', 'epiz_31635742', 'W1W9DcNFcwAyVV' , 'epiz_31635742_rail');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$fname = $_POST["fname"];
$email = $_POST["email"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];
$pdate = $_POST["date"];
$trainno = $_POST["trainno"];
$type = $_POST["type"];

/*
echo $batchno;
echo $password;
echo $project;
*/
$sql = "INSERT INTO passengers(pname,pmail,pword,pmobile,pdoj,ptrainno,pcat)  VALUES ('$fname','$email','$password','$mobile','$pdate','$trainno','$type')";


if (mysqli_query($conn, $sql)) {
   echo "successfull: " . header('Location: login.html');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>