<?php

session_start();

if(!isset($_SESSION['adminlogin']) || $_SESSION['adminlogin'] !==true)
{
    header("location: adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outgoing Request's</title> 
</head>
<body>
    <?php
    include("adminheader.php");
    require("../config.php");
    ?>
    
  <div class="container">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Request Person Name</th>
      <th scope="col">Total Plate Want</th>
      <th scope="col">Address</th>
      <th scope="col">Requested Time</th>
      <th scope="col">Collected</th>
      <th scope="col">Not Collected</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $q = "SELECT * FROM `outgoing`";
      $senddata = mysqli_query($conn,$q);
      while($result = mysqli_fetch_assoc($senddata)){
      ?>
    <tr>
      <th scope="row"><?php echo $result['id'] ?></th>
      <td><?php echo $result['requestPersonName'] ?></td>
      <td><?php echo $result['totalPlateWant'] ?></td>
      <td><?php echo $result['address'] ?></td>
      <td><?php echo $result['requestedTime'] ?></td>
      <td><form action="courierout.php" method="POST"><input type="hidden" name="id" value="<?php echo $result['id']?>" /><button class="btn btn-outline-success" name="collected" type="submit">Collected</button></form></td>
      <td><form action="courierout.php" method="POST"><input type="hidden" name="id" value="<?php echo $result['id']?>" /><button class="btn btn-outline-danger" name="NotCollected">Not Collected</button></form></td>
    </tr>
    <?php
}
?>
  </tbody>
</table>
</div>
</body>
</html>