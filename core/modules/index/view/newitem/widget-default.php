<?php $book = BookData::getById($_GET["book_id"]); ?>
<div class="row">
	<div class="col-md-12">
	<h1><?php echo $book->title; ?> <small><?php echo L::titles_new_item; ?></small></h1>
	<br>
	<form class="form-horizontal" method="post" id="addcategory" action="./index.php?action=additem" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_code; ?> *</label>
    <div class="col-md-6">
      <input type="text" name="code" required class="form-control" id="code" placeholder="<?php echo L::fields_code; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_status; ?> *</label>
    <div class="col-md-6">
<select name="status_id" class="form-control">
  <?php foreach(StatusData::getAll() as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>





  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="book_id" value="<?php echo $book->id; ?>">
      <button type="submit" class="btn btn-primary"><?php echo L::buttons_add_item; ?></button>
    </div>
  </div>
</form>
	</div>
</div>
