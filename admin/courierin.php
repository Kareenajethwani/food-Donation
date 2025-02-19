<?php
session_start();

if(!isset($_SESSION['adminlogin']) || $_SESSION['adminlogin'] !==true)
{
    header("location: adminlogin.php");
}
    require_once("../config.php");
    if(isset($_POST['collected'])){
        $id = $_POST['id'];
        $q = "SELECT * FROM `incoming` WHERE id = '$id'";
        $query = mysqli_query($conn,$q);
        $result= mysqli_fetch_assoc($query);
        $fullName =  $result['fullName'];
        $dishName = $result['dishName'];
        $totalPlate = $result['totalPlate'];
        $donateBy = $result['donateBy'];
        $collectAddress = $result['collectAddress'];
        $courierdatainsert = "INSERT INTO `courierin`(`fullName`, `dishName`, `totalPlate`, `donateBy`, `collectAddress`, `deliveryStatus`) VALUES ('$fullName','$dishName','$totalPlate','$donateBy','$collectAddress','Collected')";
        mysqli_query($conn,$courierdatainsert);
        $q2 = "DELETE FROM `incoming` WHERE id = '$id'";
        mysqli_query($conn,$q2);
    }
    elseif(isset($_POST['NotCollected'])){
      $id = $_POST['id'];
      $q = "SELECT * FROM `incoming` WHERE id = '$id'";
      $query = mysqli_query($conn,$q);
      $result= mysqli_fetch_assoc($query);
      $fullName =  $result['fullName'];
      $dishName = $result['dishName'];
      $totalPlate = $result['totalPlate'];
      $donateBy = $result['donateBy'];
      $collectAddress = $result['collectAddress'];
      $courierdatainsert = "INSERT INTO `courierin`(`fullName`, `dishName`, `totalPlate`, `donateBy`, `collectAddress`, `deliveryStatus`) VALUES ('$fullName','$dishName','$totalPlate','$donateBy','$collectAddress','Cancelled')";
      mysqli_query($conn,$courierdatainsert);
      $q2 = "DELETE FROM `incoming` WHERE id = '$id'";
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
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Dish Name</th>
      <th scope="col">Total Plate</th>
      <th scope="col">Donate By</th>
      <th scope="col">Collect Address</th>
      <th scope="col">Delivery Status</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $q = "SELECT * FROM `courierin`";
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
      <td><?php 
      if($result['deliveryStatus']=="Cancelled")
      {
         echo "<p class='text-danger'>".$result['deliveryStatus'].'</p>'; 
      }
      else{
        echo "<p class='text-success'>".$result['deliveryStatus'].'</p>'; 
      } ?></td>
    </tr>
    <?php
}
?>
  </tbody>
</table>
</div>
</body>
</html>