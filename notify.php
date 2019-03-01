<?php
include 'db/dbconfig.php';
$count="select count(id) as total from sign_up where status='requested'";
$result=mysqli_query($con,$count);
$row=mysqli_fetch_assoc($result);
$num_count=$row['total'];
?>