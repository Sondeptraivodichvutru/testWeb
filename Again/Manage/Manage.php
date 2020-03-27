<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">Manage</a>
            </div>
        </nav>
        <div class="col-md-1"></div>
        <div class="col-md-10 well">
            <h3 class="text-primary">Thêm sửa xóa php kết hợp ajax cực bá đạo</h3>
            <hr style="border-top:1px dotted #ccc;"/>
            <form method="POST">
                <div class="form-inline">
                    <label>Mã nhạc</label>
                    <input type="text" id="id" class="form-control"/>
                    <label>Loại nhạc</label>               
                    <select name="txttype" id="type">
                        <?php
                        include '../CheckConnect.php';
                        $query1 = "SELECT* FROM tblcategory";
                        $result1 = mysqli_query($conn, $query1);
                        while ($row1 = mysqli_fetch_array($result1)) {
                            ?>
                            <option value="<?= $row1[0] ?>"><?= $row1[1] ?></option>        
                            <?php
                        }
                        ?>
                    </select>

                    <br>
                    <br>
                    <label>Tên nhạc</label>
                    <input type="text" id="name" class="form-control"/>                   
                    <label>Giá nhạc</label>
                    <input type="text" id="price" class="form-control"/>
                    <br>
                    <br>
                    <label>Mô tả</label>
                    <input type="text" id="des" class="form-control"/>
                    <label>Link ảnh</label>
                    <input type="text" id="img" class="form-control"/>
                    <br>
                    <br>
                    <label>Link nhạc</label>
                    <input type="text" id="music" class="form-control"/>
                    <br>
                    <br>
                </div>
                <div class="form-inline">
                    <label>Ca sĩ</label>
                    <select id="singer">
                        <?php
                        include '../CheckConnect.php';
                        $query1 = "SELECT* FROM tblsinger";
                        $result1 = mysqli_query($conn, $query1);
                        while ($row1 = mysqli_fetch_array($result1)) {
                            ?>
                            <option value="<?= $row1[0] ?>"><?= $row1[1] ?></option>        
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <br />
                <center>
                    <button type="button" id="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Thêm vào</button>
                    <button type="button" id="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa thông tin</button>
                </center>
            </form>
            <br />
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mã</th>
                        <th>Loại</th>
                        <th>Tên nhạc</th>
                        <th>Giá nhạc</th>
                        <th>Mô tả</th>
                        <th>Link nhạc</th>
                        <th>Link Ảnh</th>
                        <th>Ca sĩ</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody id="data"></tbody>
            </table>
        </div>
    </body>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
</html>