<?php
$u=null;
if(Session::getUID()!="")
    $u = UserData::getById(Session::getUID());
?>
<div class="row">
	<div class="col-md-12">
	<a href="index.php?view=newuser" class="btn btn-default pull-right"><i class='glyphicon glyphicon-user'></i> <?php echo L::buttons_new_user; ?></a>
		<h2><?php echo L::titles_users_list; ?></h2>
		<br>
		<?php

		$users = UserData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>
			 <table id="datatable" class="table  table-hover">
			<thead><tr>
<th><?php echo L::fields_full_name; ?></th>
			<th><?php echo L::fields_username; ?></th>
			<th><?php echo L::fields_status; ?></th>
			<th><?php echo L::fields_user; ?></th>
			<th id="ops"><?php echo L::fields_operations; ?></tr></th>
</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><?php echo $user->username; ?></td>
				<td>
					<?php
					if($user->is_active) echo L::fields_active;
					else echo L::fields_not_active;
					?>
				</td>
				<td>
					<?php
					if($user->is_admin) echo L::fields_admin;
					else echo L::fields_common;
					?>
				</td>
				<td id="ops">
					<a href="index.php?view=edituser&id=<?php echo $user->id;?>" class="btn btn-primary">
						<?php echo L::buttons_edit; ?>
						<span class="sr-only">
							<?php echo ' ' . L::fields_user . ' ' . $user->name." ".$user->lastname; ?>
						</span>
					</a>
					<?php if ($u->is_admin): ?>
						<a href="index.php?action=deluser&id=<?php echo $user->id;?>" class="btn btn-danger">
							<?php echo L::buttons_delete; ?>
							<span class="sr-only">
								<?php echo ' ' . L::fields_user . ' ' . $user->name." ".$user->lastname; ?>
							</span>
						</a>
					<?php endif; ?>

				</td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger' role='alert'>" . L::messages_no_users . "</p>";
		}


		?>


	</div>
</div>
