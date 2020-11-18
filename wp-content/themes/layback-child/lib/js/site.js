jQuery(document).ready(function ($){
	console.log("site.js");
	/* Mobile navigation
	------------------------------------------------------------------ */

	jQuery('#mobileicon').on('click', function () {
		jQuery('body').toggleClass('overflow');
		jQuery('body').toggleClass('open-mobilemenu');
	});

	jQuery('#mobilemenu nav ul li > span').on('click', function () {
		jQuery(this).toggleClass('open');
		jQuery(this).parent().find('.sub-menu').slideToggle(300);
	});

	jQuery('.current-menu-parent span').addClass('open');
	jQuery(".raisedbutton").click(function () {
		//1 second of animation time
		//html works for FFX but not Chrome
		//body works for Chrome but not FFX
		//This strange selector seems to work universally
		jQuery("html, body").animate({scrollTop: 0}, 1000);
	});
});

function is_touch_device() {
	var prefixes = ' -webkit- -moz- -o- -ms- '.split(' ');
	var mq = function (query) {
		return window.matchMedia(query).matches;
	}

	if (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) {
		return true;
	}

	// include the 'heartz' as a way to have a non matching MQ to help terminate the join
	// https://git.io/vznFH
	var query = ['(', prefixes.join('touch-enabled),('), 'heartz', ')'].join('');
	return mq(query);
}

