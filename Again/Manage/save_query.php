<?php

/*
  include 'CheckConnect.php';

  $id = $_POST['txtid'];
  $t = $_POST['txttype'];
  $n = $_POST['txtname'];
  $p = $_POST['txtprice'];
  $d = $_POST['txtdes'];
  $m = $_POST['txtmusic'];
  $img = $_POST['txtimg'];
  $s = $_POST['txtsinger'];

  $query = "INSERT INTO tblmusic VALUES('$id', '$t', '$n', '$p','$d','$m','$img','$s')";
  $result = mysqli_query($conn, $query);
 */
require_once '../CheckConnect.php';

$id = $_POST['id'];
$type = $_POST['type'];
$name = $_POST['name'];
$price = $_POST['price'];
$des = $_POST['des'];
$music = $_POST['music'];
$img = $_POST['img'];
$singer = $_POST['singer'];

$conn->query("INSERT INTO `tblmusic` VALUES('$id', '$type', '$name', '$price','$des','$music','$img','$singer')");
?>