<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
include_once('../Config/database.php');
include_once('../Objects/staff.php');

 $db=new db();
 $connect = $db->connect();

 $staff = new Staff($connect);
 $read = $staff->read();

 $num = $read->rowCount();
 if($num>0){
    $staff_array= [];
    $staff_array['staff'] = [];

    while($row = $read->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $staff_item = array(
            'id' => $id,
            'hoten' => $hoten,
            'chucvu'=>$chucvu,
            'luong'=>$luong,
            'diachi'=>$diachi,
            'email'=>$email

        );
        array_push($staff_array['staff'], $staff_item);
    }
    echo json_encode($staff_array);
 }
?>