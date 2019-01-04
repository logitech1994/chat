<!-- Chat Room Password -->
    <div class="modal fade" id="join_chat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Parol kiritish</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="confirm_password.php">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Parol:</span>
						<input type="text" style="width:350px;" class="form-control" name="chat_pass" required>
						<input type="hidden" id="chatid" name="chatid">
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Bekor qilish</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Tasdiqlash</button>
				</form>
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
                        <span class="input-group-addon" style="width:150px;">Guruh nomi:</span>
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
                    <button type="button" class="btn btn-primary" id="addchatroom"><span class="glyphicon glyphicon-check"></span> Kiritish</button>
				</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->