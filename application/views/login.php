<html>
<head>
<title>Login</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>
<div class="container-fluid">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">User Name</label>
                            <div class="col-md-9">
                                <input name="username" placeholder="User Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password" placeholder="Password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
            			<div class="modal-footer">
                			<button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                			<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            			</div>
                        
                    </div>
                </form>
</div>

</body>
</html>