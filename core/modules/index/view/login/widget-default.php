<?php

if(isset($_SESSION['user_id']))
    if ($_SESSION['user_id'] !=""){
	ob_clean();
	header('Location: index.php?view=home');
}

?>
<br><br><br><br><br>
<div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    	<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success" role="alert" aria-live="assertive">
    		<p><i class='glyphicon glyphicon-off'></i> <?php echo L::messages_if_changed_password_with_success; ?></p>
    		<p><?php echo L::messages_can_login_with_new_password; ?></p>

    		</div>
    	<?php setcookie("password_updated","",time()-18600);
    	 endif; ?>
    		<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h2 class="panel-title"><?php echo L::titles_login; ?></h2>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="<?php echo L::fields_username; ?>" name="mail" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="<?php echo L::fields_password; ?>" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-primary btn-block" type="submit" value="<?php echo L::fields_login; ?>">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
