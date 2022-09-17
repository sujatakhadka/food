<?php

include("connection/connect.php");

$rating = $_POST['rate'];
$pid = $_POST['pid'];




$sql = "select total_rating, total_raters from dishes where title = '$pid'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$a = $row['total_rating']+$rating;
$b = $row['total_raters']+1;
$c = $a/$b;

$sql1 = "Update dishes set average_rating = $c, total_rating = $a, total_raters= $b where title='$pid'";


if($db->query($sql1)){
    header('Location:your_orders.php?msg=Rated Successfully.');
}else{
    echo mysqli_error($db);
}

?>