
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
<h3>add thesis</h3>
        <br>
        <form name="createUser" action="<?php echo base_url().'index.php/thesis/create';?>" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
                    <?php echo form_error('name');?>
                </div>
                <div class="form-group">
                    <label>father_name</label>
                    <input type="text" name="father_name" value="<?php echo set_value('father_name')?>" class="form-control">
                    <?php echo form_error('father_name');?>
                </div>
                <div class="form-group">
                    <label>thesis title</label>
                    <input type="text" name="title" value="<?php echo set_value('title')?>" class="form-control">
                    <?php echo form_error('title');?>
                </div>
                <div class="form-group">
                    <label>teacher</label>
                    <input type="text" name="teacher" value="<?php echo set_value('teacher')?>" class="form-control">
                    <?php echo form_error('teacher');?>
                </div>
                
                <div class="form-group">
                    <label>view</label>
                    <input type="text" name="email" value="<?php echo set_value('email')?>" class="form-control">
                    <?php echo form_error('email');?>
                </div>
                <div class="controls">
                  <label>department</label>
                  <br>

                  <select id="selectError3">
                  <option>network</option>
                  <option>database</option>
                  <option>software</option>
                  </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">create</button>
                    <a href="<? echo base_url().'index.php/thesis/index'.$users['id'];?>" class="btn btn-danger btn">cancel</a>
                </div>
            </div>
        </div>
</form>


</body>
</html>
