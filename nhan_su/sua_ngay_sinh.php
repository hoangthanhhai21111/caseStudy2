<?php
include '../database/db.php';
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ngay_sinh = $_POST["ngay_sinh"];
    $sql = "UPDATE 
    `nhan_su` 
SET 
    `ngay_sinh` = '$ngay_sinh'
WHERE 
    id = $id;";
    if ($conn->query($sql) == true) {
        $sql = "SELECT *  FROM nhan_su where id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch();
        if ($row['bo_phan'] == "phòng nhân sự") {
            header('location:http://localhost/qua_ly_nhan_su/phong_nhan_su/view.php');
        } else if ($row['bo_phan'] == "phòng tài chính") {
            header('location:http://localhost/qua_ly_nhan_su/phong_tai_chinh/view.php');
        } else if ($row['bo_phan'] == "phòng hành chính") {
            header('location:http://localhost/qua_ly_nhan_su/phong_hanh_chinh/view.php');
        } else if ($row['bo_phan'] == "phòng marketing") {
            header('location:http://localhost/qua_ly_nhan_su/phong_marketing/view.php');
        } else if ($row['bo_phan'] == "phòng kinh doanh"){
            header('location:http://localhost/qua_ly_nhan_su/phong_kinh_doanh/view.php');
        }
    } else {
        echo "lỗi {$sql}" . $conn->error;
    }
}


?>

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
                        <h1>nội dùng cần chỉnh sửa</h1>

                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                            <thead>
                                <tr>
                                    <th width="5%" class="sorting"><a href="#">
                                            <h4>ID</h4>
                                        </a></th>
                                    <th width="10%" class="sorting"><a href="#">
                                            <h4>họ và tên</h4>
                                        </a></th>
                                    <th width="10%" class="sorting"><a href="#">
                                            <h4>ngày sinh</h4>
                                        </a>
                                    </th>
                                    <th width="10%" class="sorting"><a href="#">
                                            <h4>địa chỉ</h4>
                                        </a>
                                    </th>
                                    <th width="10%" class="sorting"><a href="#">
                                            <h4>bộ phận</h4>
                                        </a>
                                    </th>
                                    <th width="10%" class="sorting"><a href="#">
                                            <h4>chức vụ</h4>
                                        </a></th>
                                    <th width="10%" class="sorting"><a href="#">
                                            <h4>số điện thoại</h4>
                                        </a></th>
                                    <th width="15%" class="sorting"><a href="#">
                                            <h4>ảnh</h4>
                                        </a></th>
                                    <th width="10%">
                                        <h4>tùy chọn</h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // include "./datebase/db.php";
                                $sql = "SELECT *  FROM nhan_su where id = $id";
                                $result = $conn->query($sql);
                                $stt = 1;
                                while ($row = $result->fetch()) { ?>
                                    <tr>
                                        <td><a href=""><?= $row['id'] ?>2072022</a></td>
                                        <td><a href="http://localhost/qua_ly_nhan_su/nhan_su/sua_ten_nhan_vien.php?id=<?= $row['id'] ?>"><?= $row['ten'] ?></a></td>
                                        <td><a href="http://localhost/qua_ly_nhan_su/nhan_su/sua_ngay_sinh.php?id=<?= $row['id'] ?>"><?= $row['ngay_sinh'] ?></a></td>
                                        <td><a href="http://localhost/qua_ly_nhan_su/nhan_su/sua_dia_chi.php?id=<?= $row['id'] ?>"><?= $row['dia_chi'] ?></a></td>
                                        <td><a href="http://localhost/qua_ly_nhan_su/nhan_su/sua_bo_phan.php?id=<?= $row['id'] ?>"><?= $row['bo_phan'] ?></a></td>
                                        <td><a href="http://localhost/qua_ly_nhan_su/nhan_su/sua_chuc_vu.php?id=<?= $row['id'] ?>"><?= $row['chuc_vu'] ?></a></td>
                                        <td><a href="http://localhost/qua_ly_nhan_su/nhan_su/sua_so_dien_thoai.php?id=<?= $row['id'] ?>"><?= $row['so_dien_thoai'] ?></a></td>
                                        <td><img src="<?= $row['anh']; ?>" alt="" width="100" height="100"></td>
                                        <td><a href="http://localhost/qua_ly_nhan_su/nhan_su/sua_tat_ca.php?id=<?= $row['id'] ?>" class='btn btn-info'> sửa</a>
                                            <a href="http://localhost/qua_ly_nhan_su/nhan_su/xoa.php?id=<?= $row['id'] ?>" class='btn btn-info'> xóa</a>
                                        </td>
                                    </tr>


                                <?php } ?>
                            </tbody>
                        </table>
                        <form method="post" action="" enctype="multipart/form-data">

                            <div class="row-form">
                                <div class="span3">ngày sinh</div>
                                <div class="span9">
                                    <input type="date" name="ngay_sinh">
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