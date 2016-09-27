<br><br><br><br><div class="row">
	<div class="col-md-3">

	</div>
	<div class="col-md-6">
	<h2><?php echo L::titles_change_psw; ?></h2>
<br>	<form class="form-horizontal" id="changepasswd" method="post" action="index.php?view=changepasswd" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-4 control-label"><?php echo L::fields_actual_psw; ?></label>
    <div class="col-lg-8">
      <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo L::fields_actual_psw; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword1" class="col-lg-4 control-label"><?php echo L::fields_new_psw; ?></label>
    <div class="col-lg-8">
      <input type="password" class="form-control"  id="newpassword" name="newpassword" placeholder="<?php echo L::fields_new_psw; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword1" class="col-lg-4 control-label"><?php echo L::fields_confirm_new_psw; ?></label>
    <div class="col-lg-8">
      <input type="password" class="form-control" id="confirmnewpassword" name="confirmnewpassword" placeholder="<?php echo L::fields_confirm_new_psw; ?>">
    </div>
  </div>



  <div class="form-group">
    <div class="col-lg-offset-4 col-lg-8">
      <button type="submit" class="btn btn-success "><?php echo L::buttons_change_psw; ?></button>
    </div>
  </div>
</form>

<script>
$("#changepasswd").submit(function(e){
	if($("#password").val()=="" || $("#newpassword").val()=="" || $("#confirmnewpassword").val()==""){
		e.preventDefault();
		alert("<?php echo L::messages_must_not_have_whitespaces; ?>");

	}else{
		if($("#newpassword").val() == $("#confirmnewpassword").val()){
//			alert("Correcto");
		}else{
			e.preventDefault();
			alert("<?php echo L::messages_psw_dont_match; ?>");
		}
	}
});

</script>
	</div>
</div>
<br><br><br><br><br><br><br><br><br>
