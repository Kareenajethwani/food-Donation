<?php
require_once("../config.php");
session_start();

if(!isset($_SESSION['adminlogin']) || $_SESSION['adminlogin'] !==true)
{
    header("location: adminlogin.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Incoming Request</title>
  </head>
  <body>
  <?php
include("adminheader.php");
?>

  <div class="container">
<table class="table table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Dish Name</th>
      <th scope="col">Total Plate</th>
      <th scope="col">Donate By</th>
      <th scope="col">Collect Address</th>
      <th scope="col">Collected</th>
      <th scope="col">Not Collected</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $q = "SELECT * FROM `incoming`";
      $senddata = mysqli_query($conn,$q);
      while($result = mysqli_fetch_assoc($senddata)){
      ?>
    <tr>
      <th scope="row"><?php echo $result['id'] ?></th>
      <td><?php echo $result['fullName'] ?></td>
      <td><?php echo $result['dishName'] ?></td>
      <td><?php echo $result['totalPlate'] ?></td>
      <td><?php echo $result['donateBy'] ?></td>
      <td><?php echo $result['collectAddress'] ?></td>
      <td><form action="courierin.php" method="POST"><input type="hidden" name="id" value="<?php echo $result['id']?>" /><button type="submit" name="collected" class="btn btn-outline-success">Collected</button></form></td>
      <td><form action="courierin.php" method="POST"><input type="hidden" name="id" value="<?php echo $result['id']?>" /><button type="submit" name="NotCollected" class="btn btn-outline-danger">Not Collected</button></form></td>
    </tr>
    <?php
}
?>
  </tbody>
</table>
</div>
</body>
</html>