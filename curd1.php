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






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD OPERATION</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="crud1.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h1> Student Curd Application</h1>
          </div>
          <div class="card-body">
            <form action="curd1.php" method="post" >
              <div class="form-group">
                <label>name :</label>
                <input type="text" name="name" class="form-control" required placeholder="Enter name">
              </div>
              <div class="form-group">
                <label>Address :</label>
                <input type="text" name="address" class="form-control" required placeholder="Enter Address">
              </div>
              <div class="form-group">
                <label>Mobile :</label>
                <input type="text" name="mobile" class="form-control" required placeholder="Mobile No">
              </div>
              <br><br><center>
              <input type="submit" class="btn btn-primary" name="submit" required value="Register">
              </center>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
  </div>

</body>

</html>