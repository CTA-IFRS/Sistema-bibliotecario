<?php $client = ClientData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
	<h2><?php echo L::titles_edit_client; ?></h2>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=updateclient" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_name; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="name" value="<?php echo $client->name;?>" class="form-control" id="name" placeholder="<?php echo L::fields_name; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_lastname; ?>*</label>
    <div class="col-md-6">
      <input type="text" name="lastname" value="<?php echo $client->lastname;?>" required class="form-control" id="lastname" placeholder="<?php echo L::fields_lastname; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_address; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="address" value="<?php echo $client->address;?>" class="form-control" required id="username" placeholder="<?php echo L::fields_address; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_email; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="email" value="<?php echo $client->email;?>" class="form-control" id="email" placeholder="<?php echo L::fields_email; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_phone; ?></label>
    <div class="col-md-6">
      <input type="text" name="phone"  value="<?php echo $client->phone;?>"  class="form-control" id="inputEmail1" placeholder="<?php echo L::fields_phone; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"></label>
    <div class="col-md-6">
  <p class="alert alert-info"><span class="mandatory"><?php echo L::fields_mandatory; ?></span> <?php echo L::messages_mandatory_fields; ?></p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $client->id;?>">
      <button type="submit" class="btn btn-success"><?php echo L::buttons_update_client; ?></button>
    </div>
  </div>
</form>
	</div>
</div>
