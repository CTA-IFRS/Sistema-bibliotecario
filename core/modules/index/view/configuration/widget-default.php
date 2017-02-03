<div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-6">
        <div class="col-md-12">
            <p class="alert alert-info"><span class="mandatory"><?php echo L::fields_mandatory; ?></span> <?php echo L::messages_mandatory_fields; ?></p>
        </div>
        <h2><?php echo L::titles_change_lang; ?></h2>
        <form class="form-horizontal" id="changepasswd" method="post" action="index.php?action=changelang" role="form">
            <div class="form-group">
                <label for="lang" class="col-lg-5 control-label"><?php echo L::fields_available_langs; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
                <div class="col-lg-7 select2-container">
                    <select name="lang" id="lang" class="form-control input-sm" required>
                        <option value="pt">Português</option>
                        <option value="en">English</option>
                        <option value="es">Español</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-4 col-lg-8">
                    <button type="submit" class="btn btn-success "><?php echo L::buttons_change_lang; ?></button>
                </div>
            </div>
        </form>
        <hr>
        <h2><?php echo L::titles_change_psw; ?></h2>
        <form class="form-horizontal" id="changepasswd" method="post" action="index.php?action=changepasswd" role="form">
          <div class="form-group">
            <label for="password" class="col-lg-5 control-label"><?php echo L::fields_actual_psw; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
            <div class="col-lg-7">
              <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo L::fields_actual_psw; ?>" required>
            </div>
          </div>

          <div class="form-group">
            <label for="newpassword" class="col-lg-5 control-label"><?php echo L::fields_new_psw; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
            <div class="col-lg-7">
              <input type="password" class="form-control"  id="newpassword" name="newpassword" placeholder="<?php echo L::fields_new_psw; ?>" required>
            </div>
          </div>

          <div class="form-group">
            <label for="confirmnewpassword" class="col-lg-5 control-label"><?php echo L::fields_confirm_new_psw; ?> <span class="mandatory"><?php echo L::fields_mandatory; ?></span></label>
            <div class="col-lg-7">
              <input type="password" class="form-control" id="confirmnewpassword" name="confirmnewpassword" placeholder="<?php echo L::fields_confirm_new_psw; ?>" required>
            </div>
          </div>



          <div class="form-group">
            <div class="col-lg-offset-4 col-lg-8">
              <button type="submit" class="btn btn-success "><?php echo L::buttons_change_psw; ?></button>
            </div>
          </div>
        </form>
	</div>
</div>
