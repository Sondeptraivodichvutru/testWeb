
<?php
include '../CheckConnect.php';
$name = $_POST['name'];
$sql = "SELECT * FROM tblmusic WHERE _nameM='$name'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
?>
<table border="1" width="60%" align="center">
    <tr>
        <TH>Mã nhạc</TH>
        <TH>Tên nhạc</TH>
        <TH>Nghe</TH>

    </tr>
    <?php
    if ($count != 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>

            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[2] ?></td>
                <td> <audio preload="auto" controls>
                        <source src="<?= $row[5] ?>">
                    </audio></td>

            </tr>
            <?php
        }
    } else {
        echo'<td>Kkhông thấy.</td>';
    }
    ?>   
