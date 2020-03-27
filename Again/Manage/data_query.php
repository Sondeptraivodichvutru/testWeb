
<?php

/*
  include '../CheckConnect.php';
  if (ISSET($_POST['res'])) {
  $query = "SELECT * FROM tblmusic";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($result)) {
  ?>
  <tr>
  <td><?=$row[0]?></td>
  <td><?=$row[1]?></td>
  <td><?=$row[2]?></td>
  <td><?=$row[3]?></td>
  <td><?=$row[4]?></td>
  <td><?=$row[5]?></td>
  <td><?=$row[6]?></td>
  <td><?=$row[7]?></td>
  <td><center><button class='btn btn-warning edit' ><span class='glyphicon glyphicon-edit' href='edit.php?id=<?=$row[0]?>'></span>Sửa </button> | <button class='btn btn-danger delete' name='" . $fetch['mem_id'] . "'><span class='glyphicon glyphicon-trash'></span>Xóa</button></center></td>
  </tr>
  <?php

  }
  } */
require_once '../CheckConnect.php';
if (ISSET($_POST['res'])) {
    $query = $conn->query("SELECT * FROM tblmusic");
    while ($fetch = $query->fetch_array()) {
        echo
        "
					<tr>
						<td>" . $fetch['_idM'] . "</td>
						<td>" . $fetch['_idC'] . "</td>
                                                <td>" . $fetch['_nameM'] . "</td>
                                                <td>" . $fetch['_priceM'] . "</td>
                                                <td>" . $fetch['_des'] . "</td>
                                                <td>" . $fetch['_link'] . "</td>
                                                <td>" . $fetch['_img'] . "</td>
                                                <td>" . $fetch['_idS'] . "</td>
                                                                        
						<td><center><button class='btn btn-warning edit' name='" . $fetch['_idM'] . "'><span class='glyphicon glyphicon-edit'></span>Sửa </button> | <button class='btn btn-danger delete' name='" . $fetch['_idM'] . "'><span class='glyphicon glyphicon-trash'></span>Xóa</button></center></td>
					</tr>
				";
    }
}
?> 
