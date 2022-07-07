<?php
session_start(); {
    if (!isset($_SESSION['username'])) {
        header('location:http://localhost/qua_ly_nhan_su/dang_nhap/dang_nhap.php');
    }
}
include '../database/db.php';
if(isset($_POST['searchs'])){
       $search = $_POST['search'];
       header('location: http://localhost/qua_ly_nhan_su/nhan_su/tim_kiem.php?name='.$search);
}

?>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <title>trang chủ</title>

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
                siêu thị điện máy
            </div>
        </div>

        <div class="admin">
            <div class="image">
                <img src="img/users/avatar.jpg" class="img-polaroid" />
            </div>
            <ul class="control">
                <li><span class="icon-cog"></span> <a href="edit-user.php">Update Profile</a></li>
                <li><span class="icon-share-alt"></span> <a href="http://localhost/qua_ly_nhan_su/dang_nhap/dang_xuat.php">Logout</a></li>
            </ul>
        </div>

        <ul class="navigation">
            <li>
                <a href="http://localhost/qua_ly_nhan_su/phong/view.php">
                    <span class="isw-grid"></span><span class="text">admin</span>
                </a>
            </li>
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
                <li><a href="list-categories.php">List Categories</a></li>
            </ul>

        </div>

        <div class="workplace">

            <div class="row-fluid">
                <div class="span12 search">
                    <form method="post" action>
                        <input type="text" class="span11" placeholder="Some text for search..." name="search" />
                        <button class="btn span1" type="submit" name="searchs">Search</button>
                    </form>
                </div>
            </div>
            <!-- /row-fluid-->

            <div class="row-fluid">

                <div class="span12">
                    <div class="head">
                        <div class="isw-grid"></div>
                        <h1>danh sách các bộ phận</h1>

                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid table-sorting">
                        <!-- <a href="http://localhost/eshop-dashboard/cua_hang/them.php" class="btn btn-add">Thêm cửa hàng</a> -->
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                            <thead>
                                <tr>
                                    <th width="10%" class="sorting"><a href="#">
                                            <h4>ID</h4>
                                        </a></th>
                                    <th width="35%" class="sorting"><a href="#">
                                            <h4>tên bộ phận</h4>
                                        </a></th>
                                    <th width="30%" class="sorting"><a href="#">
                                            <h4>hotline</h4>
                                        </a></th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // include "./datebase/db.php";
                                $sql = "SELECT *  FROM phong";
                                $result = $conn->query($sql);

                                $stt = 1;
                                while ($row = $result->fetch()) {

                                    echo
                                    " <tr>
                                    <td><a href=''>" . $row['id'] . "</a></td>
                                    <td><a href=''>" . $row['name'] . "</a></td>
                                    <td><a href=''>" . $row['so_dien_thoai'] . "</a></td>                                   
                                    
                                </tr>";
                                } ?>
                            </tbody>
                        </table>
                        <div class="bulk-action">
                            <a href="#" class="btn btn-success">Activate</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div><!-- /bulk-action-->
                        <div class="dataTables_paginate">
                            <a class="first paginate_button paginate_button_disabled" href="#">First</a>
                            <a class="previous paginate_button paginate_button_disabled" href="#">Previous</a>
                            <span>
                                <a class="paginate_active" href="#">1</a>
                                <a class="paginate_button" href="#">2</a>
                            </span>
                            <a class="next paginate_button" href="#">Next</a>
                            <a class="last paginate_button" href="#">Last</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
            <div class="dr"><span></span></div>

        </div>

    </div>

</body>

</html>