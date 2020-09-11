<?php
session_start();


$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Password =$_POST['Password'];
$Pass = password_hash($Password,PASSWORD_BCRYPT);

if (!empty($Name) || !empty($Email) || !empty($Password))
{ $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "admin101";

  $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
  if (mysqli_connect_error())
  {
    die('Connect Error('.mysqli_connect_errorno().')'. mysqli_connect_error());
  }
  else {


    $SELECT = "SELECT Email FROM signup WHERE Email =? Limit 1 ";
    $INSERT = "INSERT INTO signup (Name,Email,Password) values(?, ?, ?)";
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$Email);
    $stmt->execute();
    $stmt->bind_result($Email);
    $stmt->store_result();
    $rnum= $stmt->num_rows;

    if($rnum==0){
    $stmt->close();
    $stmt = $conn->prepare($INSERT);

    $stmt->bind_param("sss",$Name,$Email,$Pass);

    $stmt->execute();
    $_SESSION["user"]=$Email;


      header("Location:events.php");
}
  else {

  echo '<script>alert("Email Account already exists!")</script>';
}
  $stmt->close();
  $conn->close();
       }
}


  else{
    echo "all fields required";
    die();
  }
  ?>
