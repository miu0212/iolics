window.fbAsyncInit = function() {
	FB.init({
	    appId : '100708890048966',
	    status : true,
	    cookie : true,
	    xfbml : true
	});

	FB.getLoginStatus(function(response) {
		alert(response);
	});
	FB.Event.subscribe('auth.logout', function(response) {
		alert(response);
	});
	FB.Event.subscribe('auth.login', function(response) {
		alert(response);
	});
};
(function() {
	var e = document.createElement('script');
	e.async = true;
	e.src = document.location.protocol + '//connect.facebook.net/ja_JP/all.js';
	document.getElementById('fb-root').appendChild(e);
}());
