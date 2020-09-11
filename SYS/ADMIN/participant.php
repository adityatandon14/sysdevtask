<?php
$conn = mysqli_connect("localhost","root","", "admin101");
  $sql = "SELECT * FROM `image`";
$result = $conn->query($sql);


{ while($row = $result->fetch_assoc()){

  echo '<div class = "card ">';
  echo '<div class = "head">';
  echo 'EVENT ID :' .$row['id'];
  echo '</div>';
  echo '<div class ="card-body">';
  echo '<h5 class= "cardtitle">ID: '.$row['id'];
  echo '</h5>';
	  echo '</h5>';
  echo '<h5 class = "cardtitle">EVENT NAME:' .$row['eventname'];
  echo '</h5>';
  echo '<h5 class = "cardtitle"> DETAILS' .$row['Details'];

   echo '<form action="" method ="POST">';
   echo '<input type = "submit" class ="viewbtn" value = "DELETE" name ="DELETE">';

   echo '</form>';
  echo '</div>';
  echo '</div>';
  echo '</div>';

}

}
?>
</div>
</div>
<div>
<?php

if(isset($_REQUEST['DELETE']))
	$sql = "SELECT * FROM image WHERE id = {$_REQUEST['id']}";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
	$sql = "DELETE * FROM image WHERE id = {$_REQUEST['id']}";
	if($sql == TRUE)
	{
		echo "event deleted";
	}




  ?>
