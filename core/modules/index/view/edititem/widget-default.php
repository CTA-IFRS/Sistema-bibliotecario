<?php
$item = ItemData::getById($_GET["id"]);
$book = BookData::getById($item->book_id); ?>
<div class="row">
	<div class="col-md-12">
	<h2><?php echo $book->title; ?> <small><?php echo L::titles_edit_copie; ?></small></h2>
	<br>
	<form class="form-horizontal" method="post" id="addcategory" action="./index.php?action=updateitem" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_code; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
      <input type="text" name="code" required value="<?php echo $item->code; ?>" class="form-control" id="code" placeholder="<?php echo L::fields_code; ?>">
    </div>
  </div>

  <div class="form-group">
	<label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_patrimony; ?></label>
	<div class="col-md-6">
	  <input type="text" name="patrimonio" class="form-control" id="code" placeholder="<?php echo L::fields_patrimony; ?>">
	</div>
  </div>

  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_status ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-md-6">
	<select name="status_id" class="form-control">
		<option value="1"><?php echo L::fields_is_available; ?></option>
		<option value="2"><?php echo L::fields_busy; ?></option>
		<option value="3"><?php echo L::fields_inactive; ?></option>
	</select>
    </div>
  </div>





  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="item_id" value="<?php echo $item->id; ?>">
      <button type="submit" class="btn btn-success"><?php echo L::buttons_update_copie; ?></button>
    </div>
  </div>
</form>
	</div>
</div>
