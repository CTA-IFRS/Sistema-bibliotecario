	<?php
if (isset($_GET["id"]))
	$book = BookData::getById($_GET["id"]);
else
 	header("Location: index.php?view=books");
?>
<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=newitem&book_id=<?php echo $book->id; ?>" class="btn btn-default"><i class='fa fa-th-list'></i> <?php echo L::buttons_new_copie; ?></a>
</div>
		<h2><?php echo $book->title;?> <small><?php echo L::fields_copies; ?></small></h2>
<br>
		<?php

		$users = ItemData::getAllByBookId($book->id);
		if(count($users)>0){
			// si hay usuarios
			?>

			 <table id="datatable" class="table  table-hover">
			<thead><tr>
<th><?php echo L::fields_code; ?></th>
			<th><?php echo L::fields_state; ?></th>
			<th><?php echo L::fields_patrimony; ?></th>
			<th id="ops"><?php echo L::fields_operations; ?></tr></th>
</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->code; ?></td>
				<td><?php
				switch ($user->status_id) {
					case 1:
						echo L::fields_is_available;
						break;
					case 2:
						echo L::fields_busy;
						break;
					case 3:
						echo L::fields_inactive;
						break;
				}
				?></td>
				<td><?php echo ($user->patrimonio == null) ? L::fields_no_patrimony : $user->patrimonio; ?></td>
				<td id="ops" style="width:200px;"><a href="index.php?view=itemhistory&id=<?php echo $user->id;?>" class="btn btn-default btn-xs"><?php echo L::buttons_historic; ?><span class="sr-only"><?php echo ' do ' . L::fields_copie . ' ' . $user->code; ?></span></a> <a href="index.php?view=edititem&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs"><?php echo L::buttons_edit; ?><span class="sr-only"><?php echo ' ' . L::fields_copie . ' ' . $user->code; ?></span></a> <a href="index.php?action=delitem&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs"><?php echo L::buttons_delete; ?><span class="sr-only"><?php echo ' ' . L::fields_copie . ' ' . $user->code; ?></span></a></td>
				</tr>
				<?php

			}
			?>
			</table>
			<?php
		}else{
			echo "<p class='alert alert-danger'>". L::messages_no_copies . "</p>";
		}


		?>


	</div>
</div>
