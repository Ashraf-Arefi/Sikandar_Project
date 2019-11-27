<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
</head>
<body>
<div class="container">
        <h3>update thesis info</h3>
        <br>
        <form name="createUser" action="<?php echo base_url().'index.php/thesis/edit/'.$user['id'];?>" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                  <input type="text" name="name" value="<?php echo set_value('first_name',$user['name'])?>" class="form-control">
                    <?php echo form_error('name');?>
                </div>
                <div class="form-group">
                    <label>last Name</label>
                    <input type="text" name="father_name" value="<?php echo set_value('father_name',$user['father_name'])?>" class="form-control">
                    <?php echo form_error('father_name');?>
                </div>
                <div class="form-group">
                    <label>address</label>
                    <input type="text" name="title" value="<?php echo set_value('address',$user['title'])?>" class="form-control">
                    <?php echo form_error('title');?>
                </div>
                <div class="form-group">
                    <label>salary</label>
                    <input type="text" name="teacher" value="<?php echo set_value('teacher',$user['teacher'])?>" class="form-control">
                    <?php echo form_error('teacher');?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo set_value('email',$user['email'])?>" class="form-control">
                    <?php echo form_error('email');?>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">update</button>
                    <a href="<?php echo base_url().'index.php/thesis/index';?>" class="btn btn-danger btn">cancel</a>

                </div>
            </div>
        </div>
</form>
    </div>
</body>
</html>
