<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Header:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

include_once('../Config/database.php');
include_once('../Objects/staff.php');

  $db=new db();
  $connect = $db->connect();

  $staff = new Staff($connect);

  $data = json_decode((file_get_contents("php://input")));

  $staff->id = $data->id;

  if($staff->delete()){
    echo json_encode(array('message','Staff Deleted'));

  }else{
    echo json_encode(array('message','Staff Not Deleted'));
  }
?>