
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
<div class="row">
          <div class="row">
        <div class="col-3 text-left">
          <a href="<?php //echo base_url().'index.php/thesis/create';?>" class="btn btn-primary">create</a>
          </div
          </div>
      <hr>
          <div class="col-md-11 text-center">
            <table class="table table-striped">
              <tr>
                <th>ID</th>
                <th>title</th>
                <th>body</th>
                <th>student_id</th>
                <th>teacher_id</th>
              </tr>
              <?php if(!empty($users)){foreach ($users as $user) {?>
              <tr>
                <td><?php echo $user['id']?></td>
                <td><?php echo $user['title']?></td>
                <td><?php echo $user['body']?></td>
                <td><?php echo $user['student_id']?></td>
                <td><?php echo $user['teacher_id']?></td>
              </tr>
            <?php  }} else{?>
            <tr>
              <td colspan="5"> records not found</td>
            </tr>
            <?php }?>
            </table>
          </div>
        </div>
        </div>
        </div>

</div>
</body>
</html>
