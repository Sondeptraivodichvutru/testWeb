<?php

/*
  include '../CheckConnect.php';

  if (ISSET($_POST['id'])) {

  $id = $_POST['id'];
  $query = "SELECT * FROM tblmusic WHERE _idM ='$id'";
  $result = mysqli_query($conn, $query);
  while ($row= mysqli_fetch_array($result)){

  }

  } else {
  echo'Không thấy nhạc';
  } */
require_once '../CheckConnect.php';

if (ISSET($_POST['id'])) {
    $id = $_POST['id'];

    $query = $conn->query("SELECT * FROM `tblmusic` WHERE `_idM` ='$id'");
    $fetch = $query->fetch_array();

    $array = array(
        'id' => $fetch['_idM'],
        'type' => $fetch['_idC'],
        'name' => $fetch['_nameM'],
        'price' => $fetch['_priceM'],
        'des' => $fetch['_des'],
        'music' => $fetch['_link'],
        'img' => $fetch['_img'],
        'singer' => $fetch['_idS'],
    );

    echo json_encode($array);
}
?>
