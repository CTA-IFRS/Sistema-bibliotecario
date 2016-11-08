<?php
$book = BookData::getById($_GET["id"]);
$categories = CategoryData::getAll();
$authors = AuthorData::getAll();
$editorials = EditorialData::getAll();

?>

<div class="row">
<div class="col-md-12">
<h2><?php echo $book->title; ?> <small><?php echo L::titles_edit_book; ?></small></h2>
<form class="form-horizontal" role="form" method="post" action="./?action=updatebook" id="addbook">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_isbn; ?></label>
    <div class="col-lg-10">
      <input type="text" name="isbn" class="form-control" value="<?php echo $book->isbn; ?>" id="inputEmail1" placeholder="<?php echo L::fields_isbn; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_title; ?></label>
    <div class="col-lg-10">
      <input type="text" name="title" required class="form-control" value="<?php echo $book->title; ?>" id="inputEmail1" placeholder="<?php echo L::fields_title; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_subtitle; ?></label>
    <div class="col-lg-10">
      <input type="text" name="subtitle" class="form-control" value="<?php echo $book->subtitle; ?>" id="inputEmail1" placeholder="<?php echo L::fields_subtitle; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_description; ?></label>
    <div class="col-lg-10">
    <textarea class="form-control" name="description" placeholder="<?php echo L::fields_description; ?>"><?php echo $book->description; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_page_number; ?></label>
    <div class="col-lg-4">
      <input type="text" name="n_pag" class="form-control" id="inputEmail1" value="<?php echo $book->n_pag; ?>" placeholder="<?php echo L::fields_page_number; ?>">
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_year; ?></label>
    <div class="col-lg-4">
      <input type="text" name="year" class="form-control" id="inputEmail1" value="<?php echo $book->year; ?>" placeholder="<?php echo L::fields_year; ?>">
    </div>

  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_category; ?></label>
    <div class="col-lg-10">
<select name="category_id" class="form-control">
<option value=""><?php echo L::fields_select; ?></option>
  <?php foreach($categories as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($book->category_id!=null && $book->category_id==$p->id){ echo "selected"; }?>><?php echo $p->name; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_publisher; ?></label>
    <div class="col-lg-10">
<select name="editorial_id" class="form-control">
<option value=""><?php echo L::fields_select; ?></option>
  <?php foreach($editorials as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($book->editorial_id!=null && $book->editorial_id==$p->id){ echo "selected"; }?>><?php echo $p->name; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_author; ?></label>
    <div class="col-lg-10">
<select name="author_id" class="form-control">
<option value=""><?php echo L::fields_select; ?></option>
  <?php foreach($authors as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($book->author_id!=null && $book->author_id==$p->id){ echo "selected"; }?>><?php echo $p->name." ".$p->lastname; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>






  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $book->id; ?>">
      <button type="submit" class="btn btn-success"><?php echo L::buttons_add_book; ?></button>
      <button type="reset" class="btn btn-default" id="clear"><?php echo L::buttons_clean_fields; ?></button>
    </div>
  </div>
</form>

</div>
</div>
