$(function() {
	$('.topic-input-area-show a')
		.click(function() {
			$(this).hide();
			$('.topic-input-area').fadeIn(300);
		});
	$('#topic_type_tab li a')
		.click(function() {
			$(this).parent().parent().find('.active').removeClass('active');
			$(this).parent().addClass("active");
			$('#topic_type').val($(this).attr('data-topic-type'));
			if ($(this).attr('data-use-topic-title') == 'false') {
				$('.topic-input.title').fadeOut();
			}
			else {
				$('.topic-input.title').fadeIn();
			}
		});
	$('.topic-add').form({
		dataType: 'html',
		timeout : 5000,
		success : function() {
			$('.topic-input input').val('');
			$('.topic-input textarea').val('');
			$('#topics').trigger('search');
		},
		error : function() {
		}
	});
	$('#topic_tab li a')
		.click(function() {
			$(this).parent().parent().find('.active').removeClass('active');
			$(this).parent().addClass('active');
			$('#topics')
				.attr('data-topic-type', $(this).attr('data-topic-type'))
				.trigger('search');
		});

	$('#topics')
		.bind('search', function() {
			$(this).html('<div class="preloader"></img>');
			$.get(
				'api/topics/' + $(this).attr('data-topic-type'),
				function (html) {
					$('#topics').hide().html(html).fadeIn(300).trigger('topicsRefresh');
				}
			);
		})
		.bind('topicsRefresh', function() {
			$('.reply-input').parent().hide();
			$('.topic-created').trigger('refresh');
		})
		.trigger('search');
	$('.show-reply-input')
		.live('click', function() {
			$(this).parent().parent().find('.reply-input').trigger('show');
		});
	$('.reply-input')
		.live('show', function() {
			$(this).parent().show();
			$(this).focus();
		})
		.live('keypress', function(event) {
			if (event.which !== 13) return;
			event.preventDefault();
			var replyBody = $(this).val();
			if (!replyBody) {
				return;
			}
			var topicId = $(this).parent().parent().find('.topic_id').val();
			var replyContainer = $(this).parent().parent().find('.replies');
			var replyInput = $(this);
			$.post(
				'api/topics/' + topicId + '/replies/add',
				{
					'data[Reply][body]' : replyBody
				},
				function(html) {
					replyContainer.append(html);
					replyInput.val('');
				}
			);
		})
		.parent().hide();

	$('.show-reply')
		.live('click', function(event) {
			var topicId = $(this).parent().parent().find('.topic_id').val();
			var replyContainer = $(this).parent().parent().find('.replies');
			var showReplyArea = $(this).parent();
			$.get('api/topics/' + topicId + '/replies', function(html) {
					showReplyArea.hide();
					replyContainer.hide().html(html).fadeIn(300);
			});
		});
	$('.add-like')
		.live('click', function() {
			var target = $(this);
			var topicId = getTopicId($(this));
			$.get('api/topics/' + topicId + '/like', function(html) {
				var count = $(html).find('.count');
				if (count.size()) {
					target.hide().parent().parent().find('.likes').hide().html(count).fadeIn(300);
				}
			});
		});
	$('.topic-created')
		.live('refresh', function() {
			$(this).text($.timeago($(this).attr('data-created')));
		});
	var nowLoading = false;
	$('a.next')
		.live('next', function() {
			if (nowLoading) {
				return;
			}
			$(this).html('<div class="preloader"></div>');
			var parent = $(this).parent();
			nowLoading = true;
			$.get($(this).attr('href'), function(html) {
				parent.remove();
				$('#topics').append(html).trigger('topicsRefresh');
				nowLoading = false;
			});
		})
		.live('click', function(event) {
			$(this).trigger('next');
			event.preventDefault();
		});
});
function getTopicId(e) {
	return e.parent().parent().find('.topic_id').val();
}
