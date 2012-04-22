<?php if (!empty($replies)) : ?>
	<?php foreach($replies as $reply) : ?>
		<div class="reply">
			<a href="http://www.facebook.com/profile?id=<?= $reply['Reply']['uid']; ?>"><?= h($reply['Reply']['name']); ?></a> <span><?= nl2br(h($reply['Reply']['body'])); ?></span>
		</div>
	<?php endforeach; ?>
<?php endif; ?>