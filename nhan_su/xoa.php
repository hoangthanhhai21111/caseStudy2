<?php
include "../database/db.php";
$id = $_GET['id'];
//  echo "<h1>$id ko được xóa </h1>";
$sql = "DELETE FROM nhan_su WHERE id=$id;";
// print_r($sql);die;
$result = $conn->query($sql);
if($result){
    header('location: http://localhost/qua_ly_nhan_su/nhan_su/view.php');
} else {
   echo "ko thực hiện được"; 
}
?>