<?php
$rent = OperationData::getById($_GET['id']);
?>
<div class="row">
    <div class="col-md-12">
	<h2><?php echo L::buttons_edit . ' ' . L::titles_loan; ?></h2>
    <form class="form-horizontal" role="form" method="post" action="./?action=editrent">
      <div class="form-group">

        <div class="col-lg-3">
            <label class="control-label"><?php echo L::fields_client; ?></label>
        	<select name="client_id" required class="form-control">
        	    <option value=""><?php echo L::fields_select; ?></option>
            	<?php foreach(ClientData::getAll() as $p):?>
            	<option value="<?php echo $p->id; ?>" <?php echo ($rent->client_id == $p->id) ? 'selected' : ''; ?>>
                    <?php echo $p->name." ".$p->lastname; ?>
                </option>
            	<?php endforeach; ?>
        	</select>
        </div>

        <div class="col-lg-3">
        <label class="control-label"><?php echo L::fields_start; ?></label>
          <input type="date" name="start_at" required class="form-control" placeholder="<?php echo L::fields_start_date; ?>" value="<?php echo $rent->start_at; ?>">
        </div>
        <div class="col-lg-3">
        <label class="control-label"><?php echo L::fields_end; ?></label>
          <input type="date" name="finish_at" required class="form-control" placeholder="<?php echo L::fields_finish_date; ?>"  value="<?php echo $rent->finish_at; ?>">
        </div>
        <div class="col-lg-2">
        <label class="control-label"><br></label>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <input type="hidden" name="item_id" value="<?php echo $rent->item_id; ?>">
            <input type="hidden" name="returned_at" value="<?php echo $rent->returned_at; ?>">
            <input type="hidden" name="user_id" value="<?php echo $rent->user_id; ?>">
            <input type="hidden" name="receptor_id" value="<?php echo $rent->receptor_id; ?>">
            <input type="submit" value="<?php echo L::buttons_execute; ?>" class="btn btn-primary btn-block">
        </div>
      </div>

    </form>
	</div>
</div>
