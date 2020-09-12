<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .box{
            border:solid 0.08rem black;
            box-shadow: 2px 2px 4px black;
        }
    </style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial=scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<link
	  rel="stylesheet"
	  href="https://use.fontawesome.com/release/v5.8.1/css/all.css"
	  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
	  crossorigin="anonymous"
	  />
	<title>LOGIN admin/user</title>
	<link rel="stylesheet" type="text/css" href="./events.css">
    <div class="ro">
	<h2>EVENTS DETAILS</h2>
	</div>

</head>




<body>
 <div class="container">
	 <div class="github">
		<img src="data:image/png;base64,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"  width="75%" height="200px">
     </div>

	<div class="playfold">
	  <img src="https://image.freepik.com/free-vector/neon-sign-arcade-game-machine_73458-16.jpg" width="75%" height="200px">

	</div>

	<div class="android">
		<img src="https://cdn57.androidauthority.net/wp-content/uploads/2019/08/new-android-logo-2019-robot-head-reactions-animated-2.gif" width="75%" height="200px">

	  </div>



 </div>
</body>

<button onclick="location.href='logout.php'">Click here to logout</button>


</html>

<?php
$conn = mysqli_connect("localhost","root", "","admin101");
  $sql = "SELECT * FROM `image`";
$result = $conn->query($sql);



{ while($row = $result->fetch_assoc()){

  echo '<div class = "card ">';

  echo '<div class ="card-body">';

    echo '<div class ="box">';
	echo '<h5 class= "cardtitle"> EVENT ID '.$row['id'];
  echo '<h5 class= "cardtitle"> EVENT NAME '.$row['eventname'];
  echo '<h5 class = "cardtitle">DESCRIPTION:' .$row['Details'];
  echo '</h5>';
  echo '<div class = "float-right">';
    echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';

}

}
echo '</div>';
?>
