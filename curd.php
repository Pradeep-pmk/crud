<?php
$connection = mysqli_connect("localhost","root","","crud");
if(isset($_POST['submit']))
{
    $name =$_POST['name'];
    $address =$_POST['address'];
    $mobile =$_POST['mobile'];
    $sql="insert into student(name,address,mobile)values('$name','$address','$mobile')";
    if(mysqli_query($connection,$sql))
    {
      echo '<script>location.replace("curd2.php")</script>';
    }
    else{
      echo "somthing error".$connection->error;
    }
}
?>