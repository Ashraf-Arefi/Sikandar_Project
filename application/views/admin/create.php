
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
<h3>add seggist title</h3>
        <br>
        <form name="createUser" action="<?php echo base_url().'index.php/teacher/create';?>" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>teacher</label>
                        <select class="form-control" name="">
                    <?php if(isset($teachers)):foreach($teachers as $item):?>

                        <option value="<?=$item['id']?>"><?=$item['first_name'].' '.$item['last_name']?></option>

                    <?php endforeach;endif;?>
                      </select>
                    <?php echo form_error('teacher');?>
                </div>

                <div class="form-group">
                    <label>thesis title</label>
                    <input type="text" name="title" value="<?php echo set_value('title')?>" class="form-control">
                    <?php echo form_error('title');?>
                </div>
                <div class="form-group">
                    <label>deparment</label>
                    <input type="text" name="deparment" value="<?php echo set_value('deparment')?>" class="form-control">
                    <?php echo form_error('deparment');?>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">create</button>
                    <a href="<? echo base_url().'index.php/teacher/index'.$users['id'];?>" class="btn btn-danger btn">cancel</a>
                </div>
            </div>
        </div>
</form>


</body>
</html>
