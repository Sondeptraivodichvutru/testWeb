<?php

include '../CheckConnect.php';

$id = $_POST['id'];

$conn->query("DELETE FROM `tblmusic` WHERE `_idM` = '$id'");
?>
