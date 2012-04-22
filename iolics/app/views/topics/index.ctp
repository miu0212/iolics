<?php if (!empty($user)) : ?>
	<?= $this->element('topics' . DS . 'input');?>
<?php else : ?>
	<div>
		投稿したい場合は <?= $facebook->login(); ?> してください。
	</div>
<?php endif; ?>

<ul id="topic_tab" class="pills">
	<li class="active"><a data-topic-type="all">新着</a></li>
	<li><a data-topic-type="question">質問</a></li>
	<li><a data-topic-type="problem">問題</a></li>
	<li><a data-topic-type="idea">アイデア</a></li>
	<li><a data-topic-type="prise">感謝</a></li>
</ul>
<div id="topics" data-topic-type="all"></div>

<?= $html->script('topic', array('inline'=>false)); ?>
