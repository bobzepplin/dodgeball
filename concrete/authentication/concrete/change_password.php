<?php defined('C5_EXECUTE') or die('Access denied.'); ?>

<h4><?php echo t('Reset Password') ?></h4>
<div class="help-block"><?php echo t('Enter your new password below.') ?></div>
<div class="change-password">
	<form method="post" action="<?php echo URL::to('/login', 'callback', $authType->getAuthenticationTypeHandle(), 'change_password', $uHash) ?>">
		<div class="form-group">
			<label class="control-label" for="uPassword"><?php echo t('New Password') ?></label>
			<input type="password" name="uPassword" id="uPassword" class="form-control" autocomplete="off"/>
		</div>
		<div class="form-group">
			<label class="control-label" for="uPassword"><?php echo t('Confirm New Password') ?></label>
			<input type="password" name="uPasswordConfirm" id="uPasswordConfirm" class="form-control" autocomplete="off"/>
		</div>
		<div class="form-group">
			<button class="btn btn-primary"><?php echo t('Change password and sign in') ?></button>
		</div>
	</form>
</div>
