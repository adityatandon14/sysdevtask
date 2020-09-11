<?php
session_start();





if (isset($_POST['submit']))
{ $eventname = $_POST['eventname'];
  $Details = $_POST['Details'];

  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "admin101";

  $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
  if (mysqli_connect_error())
  {
    die('Connect Error('.mysqli_connect_errorno().')'. mysqli_connect_error());
  }
  else {



    $INSERT = "INSERT INTO image (eventname,Details) values(?, ?)";
    $stmt = $conn->prepare($INSERT);

    $stmt->bind_param("ss",$eventname,$Details);

    $stmt->execute();
    if($stmt == TRUE)

  {echo '<script>alert("New event added!")</script>';}


}
  $stmt->close();
  $conn->close();
}




  ?>
