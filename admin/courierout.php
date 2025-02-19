<?php
session_start();

if(!isset($_SESSION['adminlogin']) || $_SESSION['adminlogin'] !==true)
{
    header("location: adminlogin.php");
}
    require_once("../config.php");
    if(isset($_POST['collected'])){
      $id = $_POST['id'];
      $q = "SELECT * FROM `outgoing` WHERE id = '$id'";
      $query = mysqli_query($conn,$q);
      $result= mysqli_fetch_assoc($query);
      $requestPersonName =  $result['requestPersonName'];
      $totalPlateWant = $result['totalPlateWant'];
      $address = $result['address'];
      $requestedTime = $result['requestedTime'];
      $courierdatainsert = "INSERT INTO `courierout`(`requestPersonName`, `totalPlateWant`, `address`, `requestedTime`,`status`) VALUES ('$requestPersonName','$totalPlateWant','$address','$requestedTime','Not Delivered')";
      mysqli_query($conn,$courierdatainsert);
      $q2 = "DELETE FROM `outgoing` WHERE id = '$id'";
      mysqli_query($conn,$q2);
    }
    elseif(isset($_POST['NotCollected'])){
      $id = $_POST['id'];
      $q = "SELECT * FROM `outgoing` WHERE id = '$id'";
      $query = mysqli_query($conn,$q);
      $result= mysqli_fetch_assoc($query);
      $requestPersonName =  $result['requestPersonName'];
      $totalPlateWant = $result['totalPlateWant'];
      $address = $result['address'];
      $requestedTime = $result['requestedTime'];
      $courierdatainsert = "INSERT INTO `courierout`(`requestPersonName`, `totalPlateWant`, `address`, `requestedTime`,`status`) VALUES ('$requestPersonName','$totalPlateWant','$address','$requestedTime','Cancelled')";
      mysqli_query($conn,$courierdatainsert);
      $q2 = "DELETE FROM `outgoing` WHERE id = '$id'";
      mysqli_query($conn,$q2);  
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Courier</title>
</head>
<body>
    <?php include("adminheader.php");?>
    
  <div class="container">
<table class="table table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Request Person Name</th>
      <th scope="col">Total Plate Want</th>
      <th scope="col">Address</th>
      <th scope="col">Requested Time</th>
      <th scope="col">Status</th>
      <th scope="col">Delivered To</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $q = "SELECT * FROM `courierout`";
      $senddata = mysqli_query($conn,$q);
      while($result = mysqli_fetch_assoc($senddata)){
      ?>
    <tr>
      <th scope="row"><?php echo $result['id']; ?></th>
      <td><?php echo $result['requestPersonName'] ?></td>
      <td><?php echo $result['totalPlateWant'] ?></td>
      <td><?php echo $result['address'] ?></td>
      <td><?php echo $result['requestedTime'] ?></td>
      <td><?php 
      if($result['status']=="Cancelled")
      {
         echo "<p class='text-danger'>".$result['status'].'</p>'; 
      }
      elseif($result['status']=="Not Delivered")
      {
        echo "<p class='text-warning'>".$result['status'].'</p>'; 
      } 
      elseif($result['status']=="We are out of stock")
      {
        echo "<p class='text-danger'>".$result['status'].'</p>'; 
      }
      else
      {
        echo "<p class='text-success'>".$result['status'].'</p>'; 
      } 
      ?>
      </td>
     <td>
       <form action="CheckFood.php" method="POST">
         <input type="hidden" name="id" value="<?php echo $result['id']; ?>" />
         <button class="btn btn-outline-success" id="dbtn" name="Deliver" type="submit">Deliver</button>
      </form>
    </td>
    </tr>
    <?php
}
?>
  </tbody>
</table>
</div>
</body>
</html>