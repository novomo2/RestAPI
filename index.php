<!DOCTYPE html>
<html>
 <head>
  <title>Staff</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   
   <h3 align="center">Thông Tin Nhân Viên</h3>
   <br />
   <div align="right" style="margin-bottom:5px;">
    <button type="button" name="add_button" id="add_button" class="btn btn-success">Add</button>
   </div>

   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Họ Tên</th>
       <th>Chức Vụ</th>
       <th>Lương</th>
       <th>Địa Chỉ</th>
       <th>Email</th>
       <th>Edit</th>
      </tr>
     </thead>
     <tbody></tbody>
    </table>
   </div>
  </div>
 </body>
</html>

<div id="apicrudModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <form method="post" id="api_crud_form">
    <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Add Staff</h4>
         </div>
         <div class="modal-body">
          <div class="form-group">
            <label>Nhập Họ Tên</label>
            <input type="text" name="hoten" id="hoten" class="form-control" />
           </div>
           <div class="form-group">
            <label>Chức Vụ</label>
            <input type="text" name="chucvu" id="chucvu" class="form-control" />
           </div>
           <div class="form-group">
            <label>Lương</label>
            <input type="text" name="luong" id="luong" class="form-control" />
           </div>
           <div class="form-group">
            <label>Địa Chỉ</label>
            <input type="text" name="diachi" id="diachi" class="form-control" />
           </div>
           <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" id="email" class="form-control" />
           </div>
       </div>
       <div class="modal-footer">
        <input type="hidden" name="hidden_id" id="hidden_id" />
        <input type="hidden" name="action" id="action" value="insert" />
        <input type="submit" name="button_action" id="button_action" class="btn btn-info" value="Insert" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
   </form>
  </div>
   </div>
</div>


