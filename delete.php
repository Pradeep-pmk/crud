
<?php
$connection = mysqli_connect("localhost","root","","crud");
$delete=$_GET['del'];

$sql="delete from student where id='$delete'";
if(mysqli_query($connection,$sql))
{
  echo '<script>location.replace("curd2.php")</script>';
}
else{
  echo "somthing error".$connection->error;
}
?>