<?php
$client = ClientData::getById($_GET["id"]);
?>
<div class="row">
	<div class="col-md-12">
		<h2><i class='fa fa-clock-o'></i> <?php echo $client->name." ".$client->lastname; ?> </h2>
<br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="itemhistory">
<input type="hidden" name="id" value="<?php echo $client->id; ?>">
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
    <button class="btn btn-primary btn-block"><?php echo L::buttons_execute ?></button>
    </div>

  </div>
</form>
<?php
$products = array();
if(isset($_GET["start_at"]) && $_GET["start_at"]!="" && isset($_GET["finish_at"]) && $_GET["finish_at"]!=""){
if($_GET["start_at"]<$_GET["finish_at"]){
$products = OperationData::getAllByClientIdAndRange($client->id,$_GET["start_at"],$_GET["finish_at"]);
}
}else{
$products = OperationData::getAllByClientId($client->id);

}
if(count($products)>0){
?>
<br>
    <?php ob_start(); ?>
    <h2 class="hidden"><i class='fa fa-clock-o'></i> <?php echo $client->name." ".$client->lastname; ?> </h2>
 <table id="datatable" class="table  table-hover	">
	<thead><tr>
<th><?php echo L::fields_copie; ?></th>
		<th><?php echo L::fields_book; ?></th>
		<th><?php echo L::fields_client; ?></th>
		<th><?php echo L::fields_start; ?></th>
		<th><?php echo L::fields_end; ?></th>
		<th><?php echo L::fields_devolution; ?></tr></th>
</thead>
	<?php foreach($products as $sell):
$item = $sell->getItem();
$book = $item->getBook();
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
		<td><?php echo $sell->returned_at; ?></td>
	</tr>
<?php endforeach; ?>
</table>
    <?php
    $content = ob_get_contents();
    ob_end_flush();
    ?>
    <form target="_blank" action="index.php?action=pdfreports" method="post">
        <textarea name="table" id="contenttable" cols="30" rows="10" style="display: none !important;"><?php echo $content; ?></textarea>
        <button type="submit" class="btn btn-primary" id="pdfgen">Criar PDF</button>
    </form>

<div class="clearfix"></div>

	<?php
}else{
	?>
	<p class="alert alert-danger"><?php echo L::messages_no_loan; ?>.</p>
	<?php
}

?>
<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>
