<h2><?php echo "Add department faculty"; ?></h2>
<?php
 	echo form_open_multipart('department/add',array('style'=>'width:600px;float:left;margin:0'));
?>


<div class="control-group">
<label class="control-label" for="d_name">department name</label>
<div class="controls">
  <input class="input-xlarge focused" id="d_name" name="d_name" type="text" value="" >
</div>
</div>

<div class="control-group">
	<label class="control-label" for="d_mgr">department manager</label>
	<div class="controls">
	  <select id="d_mgr" name="d_mgr" data-rel="chosen">
	  </select>
	</div>
	</div>


<div class="control-group">
  <label class="control-label" for="d_desc">department describtion</label>
  <div class="controls">
	<textarea class="cleditor" id="d_desc" rows="3" name="d_desc" >
	</textarea>
  </div>
</div>

<div class="form-actions">
  <input type="submit" class="btn btn-primary" value="Save changes" name="submit">
  <button type="reset" class="btn">Cancel</button>
</div>

<?php
echo form_close();
echo validation_errors();
?>
