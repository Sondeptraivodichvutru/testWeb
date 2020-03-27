
<?php

function login($u, $p) {
    session_start();
    include '../CheckConnect.php';
    $query = "SELECT* FROM tblaccount WHERE _nameU='$u' AND _passU='$p'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $_SESSION['acc'] = $u;
        header('Location:../index.php');
    } else {
        echo 'Đăng nhập thất bại';
    }
}

function ConnectMusic() {
    include 'CheckConnect.php';
    $query = "select * from tblmusic";
    $result = mysqli_query($conn, $query);
}

function ConnectCategory() {
    include 'CheckConnect.php';
    $query = "SELECT* FROM tblcategory";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
    }                     
}

function ConnectSinger() {
    include 'CheckConnect.php';
    $query = "SELECT* FROM tblsinger";
    $result = mysqli_query($conn, $query);
}
