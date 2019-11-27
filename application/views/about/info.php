<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">

<?php
echo form_open_multipart('about/info');
 ?>
  <?php form_upload('sikandar_image');
  ?>
  <div class="row">
      <div class="col-md-8 text-center">
        <p>name<span>:Iskandar Hafizi</span></p>
        <p>father_name<span>:wali mohammad</span></p>
        <p>i Graduated from korka high school at 1394 </p>
        <p>i study at herat university faculty of computer science</p>
        <p>upload documentation of thesis</p>
        <input type="file" size="19" style="opacity: 0;">
<br>
        <img src="<?php echo base_url();?>img/1.jpg" alt="HTML5 Icon" style="width:128px;height:128px;">
        
      </div>
