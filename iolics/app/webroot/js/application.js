$(function() {
	$.timeago.settings.strings = {
		prefixAgo: null,
		prefixFromNow: null,
		suffixAgo: "前",
		suffixFromNow: "後",
		seconds: "数秒",
		minute: "1分",
		minutes: "%d分",
		hour: "1時間",
		hours: "%d時間",
		day: "1日",
		days: "%d日",
		month: "1ヶ月",
		months: "%dヶ月",
		year: "1年",
		years: "%d年",
		numbers: []
	};
});
// for facebook
function facebookReady() {
	FB.Canvas.setAutoResize();
	FB.Event.subscribe('auth.statusChange', function(response) {
		console.log(response);
		if (response.authResponse) {

		}
	});
}
