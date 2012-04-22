<?php if (!empty($topics)) : ?>
	<ul class="unstyled topic">
	<?php foreach($topics as $topic):
		$isLiked = !empty($topic['TopicLike']['uid']);
		$likeCount = $topic['Topic']['topic_like_count'];
	?>
		<li>
			<div class="row topic-container">
				<div class="span1 topic-left">
					<?php if (!empty($topic['Topic']['uid'])): ?>
						<img class="topic-icon" src="https://graph.facebook.com/<?= $topic['Topic']['uid'] ?>/picture" />
					<?php else: ?>
						<img class="topic-icon" />
					<?php endif; ?>
				</div>
				<div class="offset1 topic-right">
					<input class="topic_id" type="hidden" value="<?= $topic['Topic']['id']; ?>" ></input>
					<div class="topic-view title"><?= h($topic['Topic']['title']); ?></div>
					<div class="topic-view body"><?= nl2br(h($topic['Topic']['body'])); ?></div>
					<div class="acts">
						<a href="http://www.facebook.com/profile.php?id=<?= $topic['Topic']['uid']; ?>"><?= h($topic['Topic']['name']); ?></a>
						<span class="topic-created" data-created="<?= $topic['Topic']['created']; ?>"></span>
						<?php if (!empty($user)) :?>
							<a class="show-reply-input">コメントする</a>
							<?php if (!$isLiked) :?>
								<a class="add-like" name="add_like">いいね！</a>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<?php if ($topic['Topic']['reply_count'] > 0) : ?>
						<div class="reply">
							<a class="show-reply"><?= $topic['Topic']['reply_count']; ?> 件のコメントがあります。</a>
						</div>
					<?php endif; ?>
					<div class="likes">
						<?php if ($likeCount > 0) : ?>
							<?php if ($isLiked) : ?>
								<?php if ($likeCount == 1) : ?>
									<div class="reply">あなたが「いいね！」と言っています。</div>
								<?php else : ?>
									<div class="reply">あなたと<span class="like-count"><?= $likeCount - 1 ?> </span>人が「いいね！」と言っています。</div>
								<?php endif; ?>
							<?php else : ?>
								<div class="reply"><span class="like-count"><?= $likeCount ?> </span>人が「いいね！」と言っています。</div>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<div class="replies"></div>
					<div class="reply">
						<input type="text" class="reply-input" placeholder="コメントする"></input>
					</div>
				</div>
			</div>
		</li>
	<?php endforeach; ?>
	</ul>
	<?php if ($paginator->hasNext()) :?>
		<?= $paginator->next(__('次の内容 ▼', true));?>
	<?php endif;?>
<?php endif; ?>
