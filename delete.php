<?php
 $conn=mysqli_connect("localhost","root","","epms");
 
 if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql="DELETE FROM `salary` WHERE `id`='$id'";
    $res=mysqli_query($conn,$sql);
    header("location:viewsal.php");
 }

?>
