<?php
include '../database/db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM nhan_su where id = $id";
$resul = $conn->query($sql);
while ($row = $resul->fetch()) {
?>
<table border="1" cellspacing="">
    <tr>
      <th>Ảnh</th>
      <td> <img src="<?=$row['anh']?>" alt="" width="300" ></td>
      <td>
          <table border="1" cellspacing=""> <tr>
    <th>tên</th>
      <td> <img src="" alt=""><?=$row['ten']?></td>
    </tr>
    <tr>
    <th>địa chỉ</th>
      <td> <img src="" alt=""><?=$row['dia_chi']?></td>
    </tr>
    <tr>
    <th>ngày sinh</th>
      <td> <img src="" alt=""><?=$row['ngay_sinh']?></td>
    </tr>
    <tr>
    <th>bộ phận</th>
      <td> <img src="" alt=""><?=$row['bo_phan']?></td>
    </tr>
    <tr>
    <th>chức vụ</th>
      <td> <img src="" alt=""><?=$row['chuc_vu']?></td>
    </tr>
    <tr>
    <th>số điện thoại</th>
      <td> <img src="" alt=""><?=$row['so_dien_thoai']?></td>
    </tr></table>
      </td>
    </tr>

</table>
<?php }