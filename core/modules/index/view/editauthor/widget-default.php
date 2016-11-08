<?php $user = AuthorData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
	<h2><?php echo L::titles_edit_author; ?></h2>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=updateauthor" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_name; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="name" value="<?php echo $user->name;?>" class="form-control" id="name" placeholder="<?php echo L::fields_name; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_lastname; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="lastname" value="<?php echo $user->lastname;?>" class="form-control" id="name" placeholder="<?php echo L::fields_lastname; ?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-success"><?php echo L::buttons_update_author; ?></button>
    </div>
  </div>
</form>
	</div>
</div>
