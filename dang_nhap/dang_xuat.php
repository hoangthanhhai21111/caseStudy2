<?php
session_start();
if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
}
header('location:http://localhost/qua_ly_nhan_su/dang_nhap/dang_nhap.php');