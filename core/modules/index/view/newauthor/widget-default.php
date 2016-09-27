<div class="row">
	<div class="col-md-12">
	<h1><?php echo L::titles_new_athor; ?></h1>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="index.php?action=addauthor" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_name; ?> *</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="<?php echo L::fields_name; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_lastname; ?> *</label>
    <div class="col-md-6">
      <input type="text" name="lastname" required class="form-control" id="lastname" placeholder="<?php echo L::fields_lastname; ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary"><?php echo L::buttons_add_author; ?></button>
    </div>
  </div>
</form>
	</div>
</div>
