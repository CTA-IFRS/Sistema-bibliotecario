<div class="row">
	<div class="col-md-12">
		<h1><i class='fa fa-th-large'></i> <?php echo L::titles_loans; ?></h1>
<br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="rents">
  <div class="form-group">
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon"><?php echo L::fields_start; ?></span>
		  <input type="date" name="start_at" required value="<?php if(isset($_GET["start_at"]) && $_GET["start_at"]!=""){ echo $_GET["start_at"]; } ?>" class="form-control" placeholder="<?php echo L::fields_start_date; ?>">
		</div>
    </div>
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon"><?php echo L::fields_end; ?></span>
		  <input type="date" name="finish_at" required value="<?php if(isset($_GET["finish_at"]) && $_GET["finish_at"]!=""){ echo $_GET["finish_at"]; } ?>" class="form-control" placeholder="<?php echo L::fields_finish_date; ?>">
		</div>
    </div>
    <div class="col-lg-6">
    <button class="btn btn-primary btn-block"><?php echo L::buttons_execute; ?></button>
    </div>

  </div>
</form>
<?php
$products = array();
if(isset($_GET["start_at"]) && $_GET["start_at"]!="" && isset($_GET["finish_at"]) && $_GET["finish_at"]!=""){
if($_GET["start_at"]<$_GET["finish_at"]){
$products = OperationData::getRentsByRange($_GET["start_at"],$_GET["finish_at"]);
}
}else{
$products = OperationData::getRents();

}
if(count($products)>0){
?>
<br>
<table class="table table-bordered table-hover	">
	<thead>
		<th><?php echo L::fields_copie; ?></th>
		<th><?php echo L::fields_book; ?></th>
		<th><?php echo L::fields_client; ?></th>
		<th><?php echo L::fields_start; ?></th>
		<th><?php echo L::fields_end; ?></th>
		<th><?php echo L::fields_operations; ?></th>
	</thead>
	<?php foreach($products as $sell):
$item = $sell->getItem();
$book = $item->getBook();
$client = $sell->getClient();
	?>
	<tr>
		<td style="width:30px;">
		<?php echo $item->code; ?>
		</td>
		<td>
		<?php echo $book->title; ?>
		</td>
		<td>
		<?php echo $client->name." ".$client->lastname; ?>
		</td>
		<td><?php echo $sell->start_at; ?></td>
		<td><?php echo $sell->finish_at; ?></td>
		<td style="text-align: right">
			<?php if($sell->returned_at==""):?>
			<a href="index.php?action=finalize&id=<?php echo $sell->id; ?>" class="btn btn-success"><?php echo L::buttons_finish; ?></a>
			<?php endif;?>
			<a href="index.php?action=deloperation&id=<?php echo $sell->id; ?>" class="btn btn-danger">Excluir</a>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<div class="clearfix"></div>

	<?php
}else{
	?>
	<p class="alert alert-danger"><?php echo L::messages_no_loan; ?></p>
	<?php
}

?>
<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>
