<div class="row">
	<div class="col-md-12">
	<h2><?php echo L::titles_new_publisher; ?></h2>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="index.php?action=addeditorial" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_name; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="<?php echo L::fields_name; ?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary"><?php echo L::buttons_add_publisher; ?></button>
    </div>
  </div>
</form>
	</div>
</div>
