<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
</head>
<body class="hold-transition login-page" id="login_body" style="background:url('<?php echo base_url();?>assets/img/home_bg.jpg') no-repeat 100% center">
    <div class="container">
    <br>
    <br>
    <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="jumbotron">
                <form action="<?=base_url();?>auth/login" method="post">
                <h3>Login Form</h3>
                <?php
                    if(isset($_GET['login']) && $_GET['login'] == 'failed') :
                ?>

                    <p class="alert alert-danger">Wrong email or password, please try again!</p>

                    <?php endif;?>
                    <div class="form-group">
                      <select class="form-control" name="login_type" data-style="btn-primary btn-outline" style="width:100%" required>
                       <option value="admin">admin</option>
                       <option value="teacher">teacher</option>
                       <option value="student">student</option>

                   </select>
                      </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="" placeholder="Enter password">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-success btn-block" value="Login" id="">
                    </div>
                </form>
                </div>
            </div>

            <div class="col-lg-3"></div>
        </div>
    </div>
</body>
</html>
