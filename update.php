<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Header:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

include_once('../Config/database.php');
include_once('../Objects/staff.php');

  $db=new db();
  $connect = $db->connect();

  $staff = new Staff($connect);

  $data = json_decode((file_get_contents("php://input")));

  $staff->id = $data->id;
  $staff->hoten = $data->hoten;
  $staff->chucvu = $data->chucvu;
  $staff->luong = $data->luong;
  $staff->diachi = $data->diachi;
  $staff->email = $data->email;

  if($staff->update()){
    echo json_encode(array('message','Staff Updated'));

  }else{
    echo json_encode(array('message','Staff Not Updated'));
  }
?>