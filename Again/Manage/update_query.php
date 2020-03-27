
<?php

require_once '../CheckConnect.php';

if (ISSET($_POST['id'])) {
    $id = $_POST['id'];
    $type = $_POST['type'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $des = $_POST['des'];
    $img = $_POST['img'];
    $music = $_POST['music'];
    $singer = $_POST['singer'];
    $conn->query("UPDATE `tblmusic` set `_idC` = '$type', `_nameM` = '$name', `_priceM` = '$price', `_des` = '$des', `_link` = '$img', `_img` = '$music', `_idS` = '$singer' WHERE `_idM` = '$id'");
}
?>