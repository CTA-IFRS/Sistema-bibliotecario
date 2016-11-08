<div class="row">
	<div class="col-md-12">
	<a href="index.php?view=newuser" class="btn btn-default pull-right"><i class='glyphicon glyphicon-user'></i> <?php echo L::buttons_new_user; ?></a>
		<h2><?php echo L::titles_users_list; ?></h2>
<br>
		<?php
		/*
		$u = new UserData();
		print_r($u);
		$u->name = "Agustin";
		$u->lastname = "Ramos";
		$u->email = "evilnapsis@gmail.com";
		$u->password = sha1(md5("l00lapal00za"));
		$u->add();


		$f = $u->createForm();
		print_r($f);
		echo $f->label("name")." ".$f->render("name");
		*/
		?>
		<?php

		$users = UserData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th><?php echo L::fields_full_name; ?></th>
			<th><?php echo L::fields_username; ?></th>
			<th><?php echo L::fields_status; ?></th>
			<th><?php echo L::fields_user; ?></th>
			<th><?php echo L::fields_operations; ?></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><?php echo $user->username; ?></td>
				<td>
					<?php if($user->is_active):?>
						Ativo
					<?php else: ?>
						Não ativo
					<?php endif; ?>
				</td>
				<td>
					<?php if($user->is_admin):?>
						Administrador
					<?php else: ?>
						Comum
					<?php endif; ?>
				</td>
				<td style="width:30px;">
					<a href="index.php?view=edituser&id=<?php echo $user->id;?>" class="btn btn-primary"><?php echo L::buttons_edit; ?></a>
				</td>
				</tr>
				<?php

			}



		}else{
			// no hay usuarios
		}


		?>


	</div>
</div>
