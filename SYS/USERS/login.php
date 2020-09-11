
<?php
session_start();
$con = new mysqli("localhost","root","","admin101");
if (isset($_POST['button'])){

$Email = $_POST['Email'];
$Password = $_POST['Password'];

$email_search = " select * from signup where Email= '$Email'";
$query = mysqli_query($con,$email_search);

$email_count = mysqli_num_rows($query);




    if($email_count){

      $email_pass = mysqli_fetch_assoc($query);
      $db_pass = $email_pass['Password'];
      $pass_decode = password_verify($Password, $db_pass);
      if($pass_decode)
  {       $_SESSION["user"]=$Email;
    echo "<h2>LOGIN SUCCESSS</h2>";
       header("Location:events.php");


       }
   else{
      echo '<script>alert("Invalid Password or Email!")</script>';
          }}
  else{
echo '<script>alert("Invalid Password or Email!")</script>';
  }

}

?>
