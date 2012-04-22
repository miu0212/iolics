<h1>Facebook Example</h1>

<?php if($facebook_user): ?>
	<?= debug($facebook_user); ?>
<?php else: ?>
	<?= $html->link(__('ログイン',true), $facebook_login_url); ?>
<?php endif; ?>

