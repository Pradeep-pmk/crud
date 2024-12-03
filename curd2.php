<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD OPERATION</title>
  <link rel="stylesheet" href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <form method="post">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h1> Student Curd Application</h1>
          </div>
          <div class="card-body">
            <a href="curd1.php" value="add" class="btn">Add</a>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">name</th>
                  <th scope="col">address</th>
                  <th scope="col">mobile</th>
                  <th scope="col">Options</th>

                </tr>
              </thead>
              <tbody>
              </form>
                <?php
                $connection = mysqli_connect("localhost", "root", "", "crud");
                $sql = "select * from student";
                $hi = mysqli_query($connection, $sql);
                $id = 1;
                while ($row = mysqli_fetch_array($hi)) {
                  $uid = $row['id'];
                  $name = $row['name'];
                  $address = $row['address'];
                  $mobile = $row['mobile'];




                  ?>
                  <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $address ?></td>
                    <td><?php echo $mobile ?></td>
                    <td>
                    <button class="btn btn-success"> <a href='edit.php?edit=<?php echo $uid ?>' class="text-light">Edit</a> </button>&nbsp;
                    <button class="btn btn-danger"> <a href='delete.php?del=<?php echo $uid ?>' class="text-light">Delete</a> </button>
                    </td>
                  </tr>
                  <?php $id++;
                } ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>

</body>

</html>