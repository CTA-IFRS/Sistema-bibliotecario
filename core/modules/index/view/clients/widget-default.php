<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=newclient" class="btn btn-default"><i class='fa fa-male'></i> <?php echo L::buttons_new_client; ?></a>
<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/clients-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
-->
</div>
		<h2><?php echo L::titles_clients; ?></h2>
<br>
		<?php

		$users = ClientData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th><?php echo L::fields_full_name; ?></th>
			<th><?php echo L::fields_address; ?></th>
			<th><?php echo L::fields_email; ?></th>
			<th><?php echo L::fields_phone; ?></th>
			<th><?php echo L::fields_operations; ?></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><?php echo $user->address; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->phone; ?></td>
				<td style="width:200px;">
				<a href="index.php?view=clienthistory&id=<?php echo $user->id;?>" class="btn btn-default btn-xs"><?php echo L::buttons_historic; ?></a>
				<a href="index.php?view=editclient&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs"><?php echo L::buttons_edit; ?></a>
				<a href="index.php?action=delclient&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs"><?php echo L::buttons_delete; ?></a>
				</td>
				</tr>
				<?php

			}
?>
</table>
<?php


		}else{
			echo "<p class='alert alert-danger'>" . L::messages_no_clients . "</p>";
		}


		?>


	</div>
</div>
