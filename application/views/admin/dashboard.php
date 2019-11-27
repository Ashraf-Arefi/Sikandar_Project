<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		  </a>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
<div class="col-lg-10 text-right">

    <div class="container">
    <div class="col-3 text-left">
        <div class="col-lg-3"><p>Welcome to Sport website <?=$_SESSION['first_name'];?>!</p></div>
      </div>
    </div>
				<a data-rel="tooltip" title=" total thesis with other information." class="well span3 top-block" href="<?=base_url();?>thesis/index">
					<span class="icon32 icon-red icon-user"></span>
					<div>Total thesis storage</div>
					<div><?php echo isset($total_thesis) ? $total_thesis : 0; ?></div>
					<span class="notification"><?php echo isset($total_thesis) ? $total_thesis : 0; ?></span>
				</a>

				<a data-rel="tooltip" title="total teacher." class="well span3 top-block" href="<?=base_url();?>teacher/index">
					<span class="icon32 icon-color icon-star-on"></span>
					<div>teacher</div>
					<div><?php echo isset($total_teacher) ? $total_teacher : 0; ?></div>
					<span class="notification green"><?php echo isset($total_teacher) ? $total_teacher : 0; ?></span>
				</a>

				<a data-rel="tooltip" title="total department." class="well span3 top-block" href="#">
					<span class="icon32 icon-color icon-cart"></span>
					<div>department</div>
					<div><?php echo isset($total_dep) ? $total_dep : 0; ?></div>
					<span class="notification yellow"><?php echo isset($total_dep) ? $total_dep : 0; ?></span>
				</a>
			</div>
    </div>
