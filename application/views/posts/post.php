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
    <br>
    <br>
    <br>
        <div class="row">
            <div class="col-lg-3">
                <a href="<?=base_url();?>post/index" class="btn btn-primary">Back to home</a>
            </div>
            <div class="col-lg-6">
                <form action="<?=base_url();?>post/create_post" method="post">
                <h3>Create Post</h3>
                    <?php if(isset($_GET['post']) && $_GET['post'] ='success'):?>
                      <p class="alert alert-success">Your post has been uploaded successfully!</p>
                    <?php endif;?>
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" id="" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <textarea name="body" id="" class="form-control" cols="30" rows="10" placeholder="Enter body"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-success btn-block" value="Create" id="">
                    </div>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</body>
</html>
