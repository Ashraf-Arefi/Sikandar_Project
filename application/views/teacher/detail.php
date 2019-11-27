<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
<div class="col-lg-3">
  <h4>id number</h4>
  <span><?php echo $user['id']; ?></span>
  <h4>title of thesis</h4>
  <h2><?php echo $user['title']; ?></h2>
  <h4>teacher name</h4>
  <span><?php echo $user['first_name'].' '.$user['last_name']; ?></span>

  <h4>Department</h4>
  <span><?php echo $user['deparment']; ?></span>
  <h4>time of established</h4>
  <span><?php echo $user['created_at']; ?></span>
                <form action="<?=base_url();?>/teacher/add_comment" method="post">
                  <input type="hidden" name="teacher_id" value="<?=$user['t_id']?>">
                    <input type="hidden" name="student_id" value="<?=$_SESSION['id']?>">
                    <?php if(isset($_GET['post']) && $_GET['post'] ='success'):?>
                      <p class="alert alert-success">Your post has been uploaded successfully!</p>
                    <?php endif;?>
                    <h3>you can suggist this thesis title to supervisor</h3>
                    <div class="form-group">
                          <input type="text" name="title" class="form-control" value="" placeholder="title">
                      </div>
                    <div class="form-group">
                        <textarea name="body" id="" class="form-control" cols="30" rows="10" placeholder="Enter comment"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-success btn-block" value="comment" id="">
                    </div>
                </form>
