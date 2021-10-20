<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
include_once('../Config/database.php');
include_once('../Objects/staff.php');

  $db=new db();
  $connect = $db->connect();

  $staff = new Staff($connect);
 


  $staff->id = isset($_GET['id']) ?$_GET['id']:die();

  $staff->show();
  $staff_item = array(
            'id' => $staff->id,
            'hoten' => $staff->hoten,
            'chucvu'=>$staff->chucvu,
            'luong'=>$staff->luong,
            'diachi'=>$staff->diachi,
            'email'=>$staff->email

        );
  print_r(json_encode($staff_item));

?>