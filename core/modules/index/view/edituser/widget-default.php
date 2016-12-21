<?php $user = UserData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
	<h2><?php echo L::titles_edit_user; ?></h2>
    <div class="col-md-12">
        <p class="alert alert-info"><span class="mandatory"><?php echo L::fields_mandatory; ?></span> <?php echo L::messages_mandatory_fields; ?></p>
    </div>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=updateuser" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_name; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="name" value="<?php echo $user->name;?>" required class="form-control" id="name" placeholder="<?php echo L::fields_name; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_lastname; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="lastname" value="<?php echo $user->lastname;?>"  class="form-control" id="lastname" placeholder="<?php echo L::fields_lastname; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_username; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="username" value="<?php echo $user->username;?>" class="form-control" required id="username" placeholder="<?php echo L::fields_username; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_email ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="email" value="<?php echo $user->email;?>" class="form-control" id="email" placeholder="<?php echo L::fields_email; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_password; ?></label>
    <div class="col-md-6">
      <input type="password" name="password" class="form-control" id="inputEmail1" placeholder="<?php echo L::fields_password; ?>">
	  <p class="help-block"><?php echo L::messages_password_only_updated_if_field; ?></p>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" ><?php echo L::fields_is_active; ?></label>
    <div class="col-md-6">
<div class="checkbox">
    <label>
      <input type="checkbox" name="is_active" <?php if($user->is_active){ echo "checked";}?>>
    </label>
  </div>
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" ><?php echo L::fields_is_admin; ?></label>
    <div class="col-md-6">
<div class="checkbox">
    <label>
      <input type="checkbox" name="is_admin" <?php if($user->is_admin){ echo "checked";}?>>
    </label>
  </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary"><?php echo L::buttons_update_user; ?></button>
    </div>
  </div>
</form>
	</div>
</div>
