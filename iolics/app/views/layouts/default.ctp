<!DOCTYPE html>
<?= $facebook->html(); ?>
<html>
<head>
	<?= $html->charset(); ?>
	<title><?= $title_for_layout; ?></title>
	<?= $html->meta('icon'); ?>
	<?= $html->css('bootstrap'); ?>
	<?= $html->css('application'); ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?= $html->script('jquery-1.7.1.min'); ?>
	<?= $html->script('jquery.easyui.min'); ?>
	<?= $html->script('jquery.timeago'); ?>
	<?= $html->script('jquery.elastic'); ?>
	<?= $html->script('application'); ?>
	<?= $scripts_for_layout; ?>
</head>
<body>
	<div class="topbar">
		<div class="fill">
			<div class="container">
				<a class="brand" href="/">IOLI CS</a>
				<ul class="nav">
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<?= $this->Session->flash(); ?>
		<?= $content_for_layout; ?>
	</div>
	<footer>
		<p>&copy; IOLI Lab.</p>
	</footer>
	<?= $this->element('sql_dump'); ?>
	<?= $facebook->init(null, false); ?>
</body>
</html>
