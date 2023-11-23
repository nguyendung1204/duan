<?php

require "../../global.php";
require "../../model/loai.php";
require "../../model/hang-hoa.php";
require "../../model/khach-hang.php";
require "../../model/binh-luan.php";
check_login();


$loai = count(loai_select_all());
$hang_hoa = count(hang_hoa_select_all());
$khach_hang = count(khach_hang_select_all());
$binh_luan = count(binh_luan_select_all());

$VIEW_NAME = "trang-chinh/home.php";

require "../layout.php";