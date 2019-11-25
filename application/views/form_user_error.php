<div>
	<?php echo form_open('user/save'. $is_update) ?>
	<span><?php echo validation_errors() ?></span>

	<div>
		Nama:
		<input type="text" name="nama" value="<?php echo set_value('nama') ?>" size="50" mxlength="100" />
	</div>
	<br/>
	<div>
		Username:
		<input type="text" name="username" value="<?php echo set_value('username') ?>" size="50" mxlength="100" />
	</div>
	<br/>
	<div>
		Password:
		<input type="password" name="password" value="<?php echo set_value('password') ?>" size="50" mxlength="100" />
	</div>
	<br/>
	<div>
		Email:
		<input type="text" name="email" value="<?php echo set_value('email') ?>" size="50" mxlength="100" />
	</div>
	<br/>
	<div>
		Alamat:
		<textarea name="alamat" rows="10" cols="40" ><?php echo set_value('alamat') ?></textarea>
	</div>
	<br/>
	<div>
		Jenis Kelamin:
		<select name="gender">
			<option value="Male" <?php echo set_select('gender', 'Male', TRUE); ?> >Male</option>
			<option value="Female" <?php echo set_select('gender', 'Female', TRUE); ?> >Female</option>
		</select>
	</div>
	<br/>
	<div>
		Level:
		<select name="level">
			<option value="admin" <?php echo set_select('level', 'admin', TRUE); ?> >Admin</option>
			<option value="user" <?php echo set_select('level', 'user', TRUE); ?> >User</option>
		</select>
	</div>
	<br/>
	<div>
		<input type="submit" value="Simpan" name="submit" />
	</div>

	<?php echo form_close()?>
</div>
