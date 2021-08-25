$(window).on('load resize', function () {
if (window.matchMedia('(min-width: 980px)').matches) {
$('.navbar .dropdown').hover(function() {
	$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
}, function() {
	$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
});
} else {$('.dropdown-menu').removeAttr("style"); $('.navbar .dropdown').unbind('mouseenter mouseleave');}
});

jQuery(document).ready(function() {
    
	var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
	});
	jQuery('.back-to-top').click(function(event) {
    	event.preventDefault();
    	jQuery('html, body').animate({scrollTop: 0}, duration);
    	return false;
	});
	
	$(document).on('click', '.dropdown-toggle', function(event) {
		event.preventDefault();
  		$(this).next('.dropdown-menu').slideToggle("fast");
	});
	$(document).on('click', function (e) {
    	if(!$(".dropdown-toggle").is(e.target) && !$(".atto_hasmenu").is(e.target) && !$(".dropdown-toggle").has(e.target).length){
        	$('.dropdown .dropdown-menu:not(.lambda-login)').slideUp("fast");
    	}                       
	});
	
});

var togglesidebar = function() {
  var sidebar_open = Y.one('body').hasClass('sidebar-open');
  if (sidebar_open) {
    Y.one('body').removeClass('sidebar-open');
    M.util.set_user_preference('theme_lambda_sidebar', 'sidebar-closed');
  } else {
    Y.one('body').addClass('sidebar-open');
    M.util.set_user_preference('theme_lambda_sidebar', 'sidebar-open');
  }
};

M.theme_lambda = M.theme_lambda || {};
M.theme_lambda.sidebar =  {
  init: function() {
    Y.one('body').delegate('click', togglesidebar, '#sidebar-btn');
  }
};