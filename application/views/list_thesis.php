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
          <div class="row">
        <div class="col-3 text-left">
          <a href="<?php echo base_url().'index.php/thesis/create';?>" class="btn btn-primary">create</a>
          </div
          </div>
        <div class="col-4 text-right">
          <li>
              <input placeholder="Search title of thesis" class="search-query" id="searchbox" name="query" type="text">
          </li>
        </div>
      <hr>
          <div class="col-md-11 text-center">
            <table class="table table-striped">
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>father_name</th>
                <th>title thesis</th>
                <th>superviser</th>
                <th>view</th>
                <th width="60">edit</th>
              </tr>
              <?php if(!empty($users)){foreach ($users as $user) {?>
              <tr>
                <td><?php echo $user['id']?></td>
                <td><?php echo $user['name']?></td>
                <td><?php echo $user['father_name']?></td>
                <td><?php echo $user['title']?></td>
                <td><?php echo $user['teacher']?></td>
                <td><?php echo $user['email']?></td>
                <?php $type = $_SESSION['kind_user'];?>
                <?php if($type != 'teacher' && $type != 'student'):?>
                <td>
                  <a href="<?php echo base_url().'index.php/thesis/edit/'.$user['id']?>" class="btn btn-primary">edit</a>
               </td>
               <?php endif;?>
              </tr>
            <?php  }} else{?>
            <tr>
              <td colspan="5"> records not found</td>
            </tr>
            <?php }?>
            </table>
            <?php $pages?>
<?php echo $this->pagination->create_links();?>
          </div>
        </div>
        </div>
        </div>

</div>


<script type="text/javascript">
  $(document).ready(function(){
    $('#searchbox').keyup(function(){
      let keyword = $(this).val();
      if(keyword != '') {
        //ajax
        $.post(
          'http://localhost/pro/index.php/searching/search',
          {
            key:keyword
          },
          function(data) {
            //show data
            let obj = JSON.parse(data);
            let output="  <tr><th>ID</th><th>name</th><th>father_name</th><th>title thesis</th><th>superviser</th><th>view</th><th width='60'>edit</th></tr>";
            Object.keys(obj).forEach(function(key,index) {
             output += "<tr>";
              output += "<td>"+obj[key].id+"</td>";
              output += "<td>"+obj[key].name+"</td>";
              output += "<td>"+obj[key].father_name+"</td>";
              output += "<td>"+obj[key].title+"</td>";
              output += "<td>"+obj[key].teacher+"</td>";
              output += "<td>"+obj[key].email+"</td>";
              output += "<td><a href='http://localhost/pro/index.php/thesis/edit/'"+obj[key].id+" class='btn btn-primary'>Edit</a></td>";
              output += "</tr>";
            });

            //put it into table
            $('table').html(output);
        })  ;
      }
    });
  });
</script>

</body>
</html>
