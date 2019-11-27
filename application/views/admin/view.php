<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js">

    </script>
</head>
<div class="container">
<div class="row">
      <hr>
      <div class="row">
    <div class="col-3 text-left">
      <a href="<?php echo base_url().'index.php//manger/add';?>" class="btn btn-primary">create user</a>
      </div
      </div>
          <div class="col-md-11 text-center">
            <table class="table table-striped">
              <tr>
                <th>ID</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>username</th>
                <th>User type</th>
                <th width="50">Delete</th>
              </tr>
              <?php if(!empty($users)){foreach ($users as $user) {?>
              <tr>
                <td><?php echo $user['id']?></td>
                <td><?php echo $user['first_name']?></td>
                <td><?php echo $user['last_name']?></td>
                <td><?php echo $user['username']?></td>
                <td><?php
                $type = $user['kind_user'];
                switch($type) {
                  case 'admin':
                  echo '<small class="badge bg-green" style="background-color:#00a65a !important">Admin</small>';
                  break;
                  case 'teacher':
                  echo '<small class="badge bg-red" style="background-color:#f56954 !important">teacher</small>';
                  break;
                  case 'student':
                  echo '<small class="badge bg-blue" style="background-color:#f39c12 !important">student</small>';
                  break;
                }
                ?></td>
                <td>
                   <a href="<?php echo base_url().'index.php/manger/delete/'.$user['id']?>" class="btn btn-danger">delete</a>
                </td>
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
