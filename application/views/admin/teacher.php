<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
</head>
<div class="container">
<div class="row">
          <div class="col-md-11 text-center">
            <div class="col-4 text-left">
              <?php if($_SESSION['kind_user'] != 'student'):?>
          <a href="<?php echo base_url().'index.php/teacher/create';?>" class="btn btn-primary">create</a>
<?php endif;?>
        </div>
        <br>
            <table class="table table-striped">
              <tr>
                <th>number</th>
                <th>teacher name</th>
                <th>seggist title</th>
                <th>department</th>
                <th>established date</th>
                <th width="60">view</th>
              </tr>
              <?php if(!empty($users)){foreach ($users as $user) {?>
              <tr>
                <td><?php echo $user['id']?></td>
                <td><?php echo $user['teacher_id']?> </td>
                <td><?php echo $user['title']?></td>
                <td><?php echo $user['deparment']?></td>
                <td><?php echo $user['created_at']?></td>
                <td>
                  <a href="<?php echo base_url().'index.php/teacher/detail/'.$user['id']?>" class="btn btn-primary">view</a>
               </td>
              </tr>
            <?php  }} else{?>
            <tr>
              <td colspan="5"> records not found</td>
            </tr>
            <?php }?>
            </table>
          <ul class="pagination">
            <li><a href="#">prev</a></li>
            <li  class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li class="disabled"><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li ><a href="#">6</a></li>
            <li><a href="#">next</a></li>
          </ul>

          </div>
        </div>
        </div>
        </div>

    </div>

</body>
</html>
