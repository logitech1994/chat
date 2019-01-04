<!-- Delete Room -->
    <div class="modal fade" id="delete_room" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Guruhni o'chirish...</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h3><center>Ishonchingiz komilmi ?</center></h3>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Bekor qilish</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete"><span class="glyphicon glyphicon-check"></span> O'chirish</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Edit Room -->
    <div class="modal fade" id="edit_room" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Guruhni taxrirlash</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Guruh nomi:</span>
                        <input type="text" style="width:350px;" class="form-control" id="room_name">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Parol:</span>
                        <input type="text" style="width:350px;" class="form-control" id="room_password">
                    </div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Bekor qilish</button>
                    <button type="button" class="btn btn-success" id="confirm_update"><span class="glyphicon glyphicon-check"></span> O'zgartirish</button>
				
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Add Chat Room -->
    <div class="modal fade" id="add_chatroom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Yangi guruh yaratish</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form>
					<div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Yangi guruh nomi:</span>
                        <input type="text" style="width:350px;" class="form-control" id="chat_name" required>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Parol:</span>
                        <input type="text" style="width:350px;" class="form-control" id="chat_password">
                    </div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Bekor qilish</button>
                    <button type="button" class="btn btn-primary" id="addchatroom"><span class="glyphicon glyphicon-check"></span> Qo'shish</button>
				</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->