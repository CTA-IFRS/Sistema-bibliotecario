<?php

$categories = CategoryData::getAll();
$authors = AuthorData::getAll();
$editorials = EditorialData::getAll();

?>

<div class="row">
<div class="col-md-12">
<h1><?php echo L::titles_new_book; ?></h1>
<p class="alert alert-info"><span class="mandatory"></span> <?php echo L::messages_mandatory_fields; ?></p>
<form class="form-horizontal" role="form" method="post" action="./?action=addbook" id="addbook">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_isbn; ?></label>
    <div class="col-lg-10">
      <input type="text" name="isbn" class="form-control" id="inputEmail1" placeholder="<?php echo L::fields_isbn; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_title; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-lg-10">
      <input type="text" name="title" required class="form-control" id="inputEmail1" placeholder="<?php echo L::fields_title; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_subtitle; ?></label>
    <div class="col-lg-10">
      <input type="text" name="subtitle" class="form-control" id="inputEmail1" placeholder="<?php echo L::fields_subtitle; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_description; ?></label>
    <div class="col-lg-10">
    <textarea class="form-control" name="description" placeholder="<?php echo L::fields_description; ?>"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_page_number; ?></label>
    <div class="col-lg-4">
      <input type="text" name="n_pag" class="form-control" id="inputEmail1" placeholder="<?php echo L::fields_page_number; ?>">
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_year; ?></label>
    <div class="col-lg-4">
      <input type="text" name="year" class="form-control" id="inputEmail1" placeholder="<?php echo L::fields_year; ?>">
    </div>

  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_category; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-lg-10">
<select name="category_id" class="form-control">
<option value=""><?php echo L::fields_select; ?></option>
  <?php foreach($categories as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_publisher; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-lg-10">
<select name="editorial_id" class="form-control">
<option value=""><?php echo L::fields_select; ?></option>
  <?php foreach($editorials as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_author; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
    <div class="col-lg-10">
<select name="author_id" class="form-control">
<option value=""><?php echo L::fields_select; ?></option>
  <?php foreach($authors as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->name." ".$p->lastname; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary"><?php echo L::buttons_add_book; ?></button>
      <button type="reset" class="btn btn-default" id="clear"><?php echo L::buttons_clean_fields; ?></button>
    </div>
  </div>
</form>

</div>
</div>
