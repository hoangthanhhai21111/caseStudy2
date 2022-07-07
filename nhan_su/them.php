<?php
include '../database/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten = $_POST["ten"];
    $ngay_sinh = $_POST["ngay_sinh"];
    $dia_chi = $_POST["dia_chi"];
    $bo_phan = $_POST["bo_phan"];
    $chuc_vu = $_POST["chuc_vu"];
    $so_dien_thoai = $_POST["so_dien_thoai"];
    $unique_image ="";
    if(isset($_FILES['operating_status'])){
        $img = $_FILES['operating_status']['name'];
        $tmp_img = $_FILES['operating_status']['tmp_name'];
        $unique_image="../anh/upload/".$img;
        move_uploaded_file($tmp_img,$unique_image);
    }   
    $sql = "INSERT INTO nhan_su( `ten`, `ngay_sinh`, `anh`,`dia_chi`,`bo_phan`,`chuc_vu`,`so_dien_thoai`)
VALUES ('$ten','$ngay_sinh','$unique_image','$dia_chi','$bo_phan','$chuc_vu','$so_dien_thoai');";
// print_r($sql);die();
    if ($conn->query($sql) == true) {
        if($bo_phan == "phòng nhân sự"){
        header('location:http://localhost/qua_ly_nhan_su/phong_nhan_su/view.php');
        } else if($bo_phan == "phòng tài chính"){
        header('location:http://localhost/qua_ly_nhan_su/phong_tai_chinh/view.php');

        } else if($bo_phan == "phòng hành chính"){
            header('location:http://localhost/qua_ly_nhan_su/phong_hanh_chinh/view.php');
    
            } else if($bo_phan == "phòng kinh doanh"){
                header('location:http://localhost/qua_ly_nhan_su/phong_kinh_doanh/view.php');
        
                } else {
                    header('location:http://localhost/qua_ly_nhan_su/phong_marketing/view.php');
            
                    } 
        
    } else {
        echo "lỗi {$sql}" . $conn->error;
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <title>NTQ Solution Admin Control Panel</title>

    <link rel="icon" type="image/ico" href="favicon.ico" />

    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="header">
        <a class="logo" href="list-categories.php">
            <img src="img/logo.png" alt="NTQ Solution - Admin Control Panel" title="NTQ Solution - Admin Control Panel" />
        </a>

    </div>

    <div class="menu">

        <div class="breadLine">
            <div class="arrow"></div>
            <div class="adminControl active">
            </div>
        </div>

        <div class="admin">
            <div class="image">
                <img src="img/users/avatar.jpg" class="img-polaroid" />
            </div>
            <ul class="control">
                <li><span class="icon-cog"></span> <a href="edit-user.php">Update Profile</a></li>
                <li><span class="icon-share-alt"></span> <a href="http://localhost/eshop-dashboard/dang_nhap.php">Logout</a></li>
            </ul>
        </div>
        <ul class="navigation">
            <li>
                <a href="http://localhost/qua_ly_nhan_su/nhan_su/view.php">
                    <span class="isw-grid"></span><span class="text">phòng nhân sự</span>
                </a>
            </li>
            <li>
                <a href="http://localhost/qua_ly_nhan_su/nhan_su/view.php">
                    <span class="isw-list"></span><span class="text">phòng kinh doanh</span>
                </a>
            </li>
            <li>
                <a href="http://localhost/qua_ly_nhan_su/nhan_su/view.php">
                    <span class="isw-user"></span><span class="text">phòng marketing</span>
                </a>
            <li>
                <a href="http://localhost/qua_ly_nhan_su/nhan_su/view.php">
                    <span class="isw-user"></span><span class="text">phòng tài chính</span>
                </a>
            </li>
            <li>
                <a href="http://localhost/qua_ly_nhan_su/nhan_su/view.php">
                    <span class="isw-user"></span><span class="text">phòng hành chính</span>
                </a>               
            </li>
            <li>
                <a href="http://localhost/qua_ly_nhan_su/nhan_su/view.php">
                    <span class="isw-user"></span><span class="text">tổng nhân sự</span>
                </a>               
            </li>

            </li>
        </ul>

    </div>

    <div class="content">


        <div class="breadLine">

            <ul class="breadcrumb">
                <li><a href="list-categories.php">List Categories</a> <span class="divider">></span></li>
                <li class="active">Add</li>
            </ul>

        </div>

        <div class="workplace">

            <div class="row-fluid">

                <div class="span12">
                    <div class="head">
                        <div class="isw-grid"></div>
                        <h1>thêm nhân viên</h1>

                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row-form">
                                <div class="span3">tên</div>
                                <div class="span9"><input type="text" name="ten" placeholder="some text value..." /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">ngày sinh</div>
                                <div class="span9"><input type="DATE" name="ngay_sinh" placeholder="some text value..." /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">địa chỉ</div>
                                <div class="span9"><input type="text" name="dia_chi" placeholder="some text value..." /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">bộ phận</div>
                                <div class="span9">
                                    <select name="bo_phan" id="">
                                            <option value="phòng nhân sự">phòng nhân sự</option>
                                            <option value="phòng tài chính">phòng tài chính</option>
                                            <option value="phòng kinh doanh">phòng kinh doanh</option>
                                            <option value="phòng marketing">phòng marketing</option>
                                            <option value="phòng hành chính">phòng hành chính</option>
                                    </select>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">chức vụ</div>
                                <div class="span9">
                                    <select name="chuc_vu" id="">
                                        <option value="nhân viên">nhân viên</option>
                                        <option value="trưởng phòng">trưởng phòng</option>
                                        <option value="phó phòng">phó phòng</option>
                                    </select>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">số điện thoại</div>
                                <div class="span9"><input type="number" name="so_dien_thoai" placeholder="some text value..." /></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">ảnh</div>
                                <div class="span9">
                                    <input type="file" name="operating_status">
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row-form">
                                <button class="btn btn-success" type="submit">Create</button>
                                <div class="clear"></div>
                            </div>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
            <div class="dr"><span></span></div>

        </div>

    </div>

</body>

</html>