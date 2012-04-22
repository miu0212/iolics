<div class="topic-input-area-show"><a class="btn primary">投稿したい</a></div>
<div class="topic-input-area">
	<ul id="topic_type_tab" class="tabs">
		<li class="active"><a data-topic-type="question" data-topic-use-title="true">質問</a></li>
		<li><a data-topic-type="problem" data-topic-use-title="true">問題</a></li>
		<li><a data-topic-type="idea" data-topic-use-title="true">アイデア</a></li>
		<li><a data-topic-type="prise" data-topic-use-title="false">感謝</a></li>
	</ul>
	<?= $form->create('Topic', array('action'=>'add', 'class'=>'topic-add')); ?>
		<?= $form->hidden('topic_type', array('id'=>'topic_type', 'value'=>'question')); ?>
		<div class="topic-input title">
			<?= $form->text('title', array('placeholder'=>'タイトル')); ?>
		</div>
		<div class="topic-input body">
			<?= $form->textarea('body', array('placeholder'=>'内容')); ?>
		</div>
		<div>
			<?= $form->submit(__('送信', true), array('class'=>'btn primary'));?>
		</div>
	<?= $form->end(); ?>
</div>