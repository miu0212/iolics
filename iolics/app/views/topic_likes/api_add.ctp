<div class="result">
	<?php if ($result == true) :?>
		<div class="count">
			<?php if ($count > 1):?>
				<div class="reply">あなたと<span class="like-count"><?= $count - 1; ?> </span>人が「いいね！」と言っています。</div>
			<?php else :?>
				<div class="reply">あなたが「いいね！」と言っています。</div>
			<?php endif;?>
		</div>
	<?php endif;?>
</div>
