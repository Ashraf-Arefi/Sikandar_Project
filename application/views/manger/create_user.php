
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
</head>
<div class="container">
<h3>add user with some permission</h3>
        <br>
        <form name="createUser" action="<?php echo base_url().'index.php/manger/add';?>" method="post">
        <div class="row">
            <div class="col-md-6">
              <div class="controls">
                <label>kind of user</label>
                <br>

                <select name="kind" id="selectError3">
                <option value="admin">admin</option>
                <option value="teacher">teacher</option>
                <option value="student">student</option>
                </select>
              </div>
              <br>
                <div class="form-group">
                    <label>first_name</label>
                    <input type="text" name="first_name" value="<?php echo set_value('first_name')?>" class="form-control">
                    <?php echo form_error('first_name');?>
                </div>
                <div class="form-group">
                    <label>last_name</label>
                    <input type="text" name="last_name" value="<?php echo set_value('last_name')?>" class="form-control">
                    <?php echo form_error('last_name');?>
                </div>
                <div class="form-group">
                    <label>username</label>
                    <input type="text" name="username" value="<?php echo set_value('username')?>" class="form-control">
                    <?php echo form_error('username');?>
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" name="password" value="<?php echo set_value('password')?>" class="form-control">
                    <?php echo form_error('password');?>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Create" class="btn btn-primary">

                </div>
            </div>
        </div>
</form>


</body>
</html>
