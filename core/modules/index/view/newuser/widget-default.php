<div class="row">
	<div class="col-md-12">
	<h1><?php echo L::titles_add_user; ?></h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=adduser" role="form">


  <div class="form-group">
    <label for="name" class="col-lg-2 control-label"><?php echo L::fields_name; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="<?php echo L::fields_name; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-lg-2 control-label"><?php echo L::fields_lastname; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="<?php echo L::fields_lastname; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-lg-2 control-label"><?php echo L::fields_username; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="username" class="form-control" required id="username" placeholder="<?php echo L::fields_username; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-lg-2 control-label"><?php echo L::fields_email; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email" placeholder="<?php echo L::fields_email; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="password" class="col-lg-2 control-label"><?php echo L::fields_password; ?></label>
    <div class="col-md-6">
      <input type="password" name="password" required class="form-control" id="password" placeholder="<?php echo L::fields_password; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="is_admin" class="col-lg-2 control-label"><?php echo L::fields_is_admin; ?></label>
    <div class="col-md-6">
<div class="checkbox">
    <label>
      <input type="checkbox" name="is_admin" id="is_admin">
    </label>
  </div>
    </div>
  </div>

  <p class="alert alert-info"><span class="mandatory"></span> <?php echo L::messages_mandatory_fields; ?></p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary"><?php echo L::buttons_add_user; ?></button>
    </div>
  </div>
</form>
	</div>
</div>
