<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Yönlendirme</title>
      <meta http-equiv="refresh" content="0.0001;URL=http://localhost/proje/fen-quiz.php">
      
</head>
<body>
<?php


$servername = "localhost";
$database = "hilal_db";
$username = "hilal";
$password = "12345";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
//echo "Connected successfully  ", "<br>"; 

$sql = "INSERT INTO kayit (isim,soy_isim) VALUES ('$_POST[namee]','$_POST[lname]')";
//$sonuc=mysqli_query($conn,$sql);

if (mysqli_query($conn, $sql)) {
      //echo "Sınav sayfasına yönlendiriliyorsunuz..."; 
      
} else {
     // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
 

?>

</body>
</html>
 