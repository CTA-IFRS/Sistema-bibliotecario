<div class="row">
	<div class="col-md-12">
<h2><?php echo L::titles_reports; ?></h2>
<br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="reports">
  <div class="form-group">
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon"><?php echo L::fields_start; ?></span>
		  <input type="date" name="start_at" value="<?php if(isset($_GET['start_at']) && $_GET['start_at']!=""){ echo $_GET['start_at']; } ?>" class="form-control" placeholder="<?php echo L::fields_start_date; ?>">
		</div>
    </div>
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon"><?php echo L::fields_end; ?></span>
		  <input type="date" name="finish_at" value="<?php if(isset($_GET['finish_at']) && $_GET['finish_at']!=""){ echo $_GET['finish_at']; } ?>" class="form-control" placeholder="<?php echo L::fields_finish_date; ?>">
		</div>
    </div>
    <div class="col-lg-6">
    <button class="btn btn-primary btn-block"><?php echo L::buttons_execute; ?></button>
    </div>

  </div>
</form>
<?php
if(isset($_GET['start_at']) && $_GET['start_at']!="" && isset($_GET['finish_at']) && $_GET['finish_at']!=""){
	$users = OperationData::getByRange($_GET['start_at'],$_GET['finish_at']);
		if(count($users)>0){
			// si hay usuarios
			$_SESSION["report_data"] = $users;
			?>
			<div class="panel panel-default">
			<div class="panel-heading">
				<h2 style="font-size: 1em; padding:0; margin:0.1em"><?php echo L::fields_reports; ?></h2>
			</div>
			<table class="table table-bordered table-hover">
			<thead>
			<th><?php echo L::fields_copie; ?></th>
			<th><?php echo L::fields_book; ?></th>
			<th><?php echo L::fields_client; ?></th>
			<th><?php echo L::fields_date; ?></th>
			</thead>
			<?php
			$total = 0;
			foreach($users as $user){
				$item  = $user->getItem();
				$client  = $user->getClient();
				$book = $item->getBook();
				?>
				<tr>
				<td><?php echo $item->code; ?></td>
				<td><?php echo $book->title; ?></td>
				<td><?php echo $client->name." ".$client->lastname; ?></td>
				<td><?php echo $user->returned_at; ?></td>
				</tr>
				<?php

			}
			echo "</table>";
			?>
			<?php
		}else{
			echo "<p class='alert alert-danger'>" . L::messages_no_data . "</p>";
		}
		}else{
			echo "<p class='alert alert-danger'>" . L::messages_must_select_date_range . "</p>";
		}


		?>


	</div>
</div>
