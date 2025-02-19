<?php
require('../config.php');
if(isset($_POST['Deliver'])){
    $id = $_POST['id'];
    $q1 = "SELECT * FROM `courierout` WHERE id = '$id'";
    $query1 = mysqli_query($conn,$q1);
    $result1= mysqli_fetch_assoc($query1);
    $q = "SELECT * FROM `courierin`";
    $query = mysqli_query($conn,$q);
    $total = 0;
    while($result= mysqli_fetch_assoc($query)){
        $total = $total + $result['totalPlate'];
    }
    if($total > $result1['totalPlateWant']){
        $q = "UPDATE `courierout` SET `status`='Under Process' WHERE id = '$id'";
        $query = mysqli_query($conn,$q);            
        header('location:courierout.php');
    }
    else{
        $q = "UPDATE `courierout` SET `status`='We are out of stock' WHERE id = '$id'";
        $query = mysqli_query($conn,$q);            
        header('location:courierout.php');
    }
}
?>