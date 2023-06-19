<?php

include 'auth.php';
$id=$_GET['id'];
$delete=mysqli_query($link, "DELETE FROM blog WHERE id = '$id'");
if ($delete){
    $_SESSION['successmessage'] = "Deleted successfully";
    echo "<script>window.open('view-blog.php','_self')</script>";
}else{
    $_SESSION['errormessage'] = "Error deleting";
    echo "<script>window.open('view-blog.php','_self')</script>";
}