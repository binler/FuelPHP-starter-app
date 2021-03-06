<div class="hero-unit">
	<?php echo Form::open(array()); ?>
	<fieldset>
		<legend>Login</legend>
	
		<?php if (1==1): ?>
			<?php echo Form::hidden('destination', Input::referrer()); ?>
		<?php endif; ?>
	
		<?php if (isset($login_error)): ?>
			<div class="error"><?php echo $login_error; ?></div>
		<?php endif; ?>
		
		<div class="clearfix <?php if ($val->errors('email')) echo 'error'; ?>" style="margin-bottom:6px;">
			<label for="email">Email or Username:</label>
			<div class="input">
				<?php if ($val->errors('email')): ?>
				<?php echo Form::input('email', Input::post('email'), array('class'=>'error')); ?>
				<span class="help-inline"><?php echo $val->errors('email')->get_message('You must provide a username or email'); ?></span>
				<?php else: ?>
				<?php echo Form::input('email', Input::post('email')); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="clearfix <?php if ($val->errors('password')) echo 'error'; ?>">
			<label for="password">Password:</label>
			<div class="input">
				<?php if ($val->errors('password')): ?>
				<?php echo Form::password('password'); ?>
				<span class="help-inline"><?php echo $val->errors('password')->get_message(':label cannot be blank'); ?></span>
				<?php else: ?>
				<?php echo Form::password('password'); ?>
				<?php endif; ?>
			</div>
		</div>		
		<div class="clearfix">
			<label for="password"></label>
			<div class="input">
				<ul class="inputs-list">
					<li>
						<label>
							<?php echo Form::checkbox('remember_me', 'remember_me', Input::post('remember_me', false) ? array('checked'=>'checked') : array()); ?>
							<span>remember me</span>
						</label>
					</li>
				</ul>
			</div>
		</div>		
		<div class="clearfix">
			<label for="">&nbsp;</label>
			<div class="input"><?php echo Form::submit(array('value'=>'Login', 'name'=>'submit', 'class'=>'btn primary')); ?></div>
		</div>
	</fieldset>

	<fieldset>
		<legend>Signup with</legend>

		<div class="clearfix">
			<label for="password"></label>
			<div class="input">
				<div style="padding-bottom:5px;"><?php echo Html::anchor('/auth/facebook', Asset::img('auth_facebook.png')); ?></div>
				<div><?php echo Html::anchor('/auth/twitter', Asset::img('auth_twitter.png')); ?></div>
			</div>
		</div>		
	
	</fieldset>
	<?php echo Form::close(); ?>
</div>

