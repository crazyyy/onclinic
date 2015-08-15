function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};

$(document).ready(function(){
	// fixed menu position
	if($("#wpadminbar").length == 0){
		$("#fix-head").css('top', '0px');
	}
	
	$("body").click(function(){
		$(".mob-menu .main-menu-btn .main-menu-mob").slideUp('slow');
		$(".mob-menu .dep-menu-btn .menu-left").slideUp('slow');
		if($("#video-popup").length){
			$("#video-popup a.closeBtn").click();
		}
	});
	
	if($("div.head div.hor-menu").is(':visible')){
		$(window).scroll(function(){
			if($(this).scrollTop() > 136) {
				$('#fix-head').fadeIn();
			} else {
				$('#fix-head').fadeOut();
			}
		});
	}
	
	$(window).load(function(){
		// slider
		if($(".main-slider").length > 0){
			$(".main-slider ul").bxSlider({
				// GENERAL
				mode: 'horizontal',
				slideSelector: '',
				infiniteLoop: true,
				hideControlOnEnd: false,
				speed: 500,
				easing: null,
				slideMargin: 0,
				startSlide: 0,
				randomStart: false,
				captions: false,
				ticker: false,
				tickerHover: false,
				adaptiveHeight: false,
				adaptiveHeightSpeed: 500,
				video: false,
				useCSS: false,
				preloadImages: 'visible',
				responsive: true,
				slideZIndex: 50,
				wrapperClass: '',
		
				// TOUCH
				touchEnabled: true,
				swipeThreshold: 50,
				oneToOneTouch: true,
				preventDefaultSwipeX: true,
				preventDefaultSwipeY: false,
		
				// PAGER
				pager: true,
				pagerType: 'full',
				pagerShortSeparator: ' / ',
				pagerSelector: null,
				buildPager: null,
				pagerCustom: '#slider-controls',
		
				// CONTROLS
				controls: false,
		
				// AUTO
				auto: true,
				pause: 4000,
				autoStart: true,
				autoDirection: 'next',
				autoHover: false,
				autoDelay: 0,
				autoSlideForOnePage: true,
		
				// CAROUSEL
				minSlides: 1,
				maxSlides: 1,
				moveSlides: 1,
				slideWidth: 0
			});
		}
	});
	
	// search button
	$('form#searchform div.search-btn i').click(function(e){
		e.preventDefault();
		if($('#searchInput').val()){
			$('form#searchform').submit();
		}
	});
	$("#searchInput").keydown(function(e){
		var code = e.keyCode || e.which;
		if(code == 13) { //Enter keycode
			e.preventDefault();
			if($(this).val()){
				$('form#searchform').submit();
			}
		}
	});
	
	// top menu
	$(".hor-menu > ul > li > ul > li.active").parent().parent().addClass('active');
	$(".mob-menu .main-menu-btn").on('click', function(e){
		e.preventDefault();
		$(".main-menu-mob", this).slideToggle('slow');
		return false;
	});
	$(".mob-menu .main-menu-btn .main-menu-mob").click(function(e){
		e.stopPropagation();
	});
	
	// left menu
	$(".menu-left > ul > li.active > ul.level2").removeClass('dn');
	$(".menu-left > ul > li > ul.level2 > li.active").parent().removeClass('dn');
	$(".menu-left > ul > li > ul.level2 > li.active").parent().parent().addClass('active');
	$(".mob-menu .dep-menu-btn").on('click', function(e){
		e.preventDefault();
		$(".menu-left", this).slideToggle('slow');
		return false;
	});
	$(".mob-menu .dep-menu-btn .menu-left").click(function(e){
		e.stopPropagation();
	});
	
	// comments "show more" part on homepage
	$("div.rewiews-list > ul > li > a.dotted").click(function(e){
		e.preventDefault();
		$("span.text", $(this).parent()).text($("span.dn", $(this).parent()).text());
		$(this).addClass('dn');
		return false;
	});
	
	// doctors carousel on homepage
    var ul = $("div.doc-slider > div.doc-sl-items > ul");
    var li = $("li", ul);
    var liLength = li.length;
    var width = li.outerWidth(); // 227 on desktop, 210 on mobile
	if(width == 221 || width == 223) width = 227;
	var i = 0, j = 0;
	$("div.doc-slider div.doc-sl-control span.doc-sl-right").click(function(e) {
		if($(':animated').length) {
            return false;
        } 
        if( (i === liLength - 1) || (j === liLength + 1) ) {
            e.stopPropagation();
        } else {
            li.animate({"left": "-=" + width + "px"}, 500);
            if(i !== liLength - 1) {
                i++;
                j--;
            }
        }
    });
	$("div.doc-slider div.doc-sl-control span.doc-sl-left").click(function(e) {
		if($(':animated').length) {
			return false;
        }
        if( (j === liLength - 1) || (i === liLength + 1) || (i == 0))  {
            e.stopPropagation();
        } else {
            li.animate({"left": "+=" + width + "px"}, 500);
            if(j !== liLength - 1) {
                j++;
                i--;
            }
        }
    });
	
	// breadcrump classes removal
	$("div.brcr > ul > li").removeAttr('class');
	
	// tabs
	if(!!('ontouchstart' in window)){ //check for touch device
		$(document).on('click', 'div.otd-price div.tabs > span', function(e) {
			e.preventDefault();
			if($(this).hasClass('active')) {
				return false;
			}
			var span_elem = $(this);
			var active_tab_index = $("span.active", span_elem.parent()).index();
			var tab_index_to_activate = span_elem.index();
			$("div.otd-price div.tabs").nextAll().eq(active_tab_index).fadeOut('fast', function(){
				$("div.otd-price div.tabs").nextAll().eq(tab_index_to_activate).fadeIn('fast', function(){});
			});
			$("span.active", span_elem.parent()).removeClass('active');
			span_elem.addClass('active');
		});
		$(document).on('click', 'div.prices div.tabs > span', function(e) {
			e.preventDefault();
			if($(this).hasClass('active')) {
				return false;
			}
			var span_elem = $(this);
			var active_tab_index = $("span.active", span_elem.parent()).index();
			var tab_index_to_activate = span_elem.index();
			$("div.prices div.tabs-block").nextAll().eq(active_tab_index).fadeOut('fast', function(){
				$("div.prices div.tabs-block").nextAll().eq(tab_index_to_activate).fadeIn('fast', function(){});
			});
			$("span.active", span_elem.parent()).removeClass('active');
			span_elem.addClass('active');
		});
	}
	else{ //behaviour and events for pointing device like mouse
		var delay = 500, setTimeoutConst;
		$("div.otd-price div.tabs > span").hover(function() {
			if($(this).hasClass('active')) {
				return false;
			}
			var span_elem = $(this);
			setTimeoutConst = setTimeout(function(){
				var active_tab_index = $("span.active", span_elem.parent()).index();
				var tab_index_to_activate = span_elem.index();
				$("div.otd-price div.tabs").nextAll().eq(active_tab_index).fadeOut('fast', function(){
					$("div.otd-price div.tabs").nextAll().eq(tab_index_to_activate).fadeIn('fast', function(){});
				});
				$("span.active", span_elem.parent()).removeClass('active');
				span_elem.addClass('active');
			}, delay);
		}, function(){
			clearTimeout(setTimeoutConst);
		});
		$("div.prices div.tabs > span").hover(function() {
			if($(this).hasClass('active')) {
				return false;
			}
			var span_elem = $(this);
			setTimeoutConst = setTimeout(function(){
				var active_tab_index = $("span.active", span_elem.parent()).index();
				var tab_index_to_activate = span_elem.index();
				$("div.prices div.tabs-block").nextAll().eq(active_tab_index).fadeOut('fast', function(){
					$("div.prices div.tabs-block").nextAll().eq(tab_index_to_activate).fadeIn('fast', function(){});
				});
				$("span.active", span_elem.parent()).removeClass('active');
				span_elem.addClass('active');
			}, delay);
		}, function(){
			clearTimeout(setTimeoutConst);
		});
	}
	
	// videos modal view
	$("div.video-list > div.entry > a").click(function(e){
		e.preventDefault();
		$("#video-popup iframe").attr('src', $(this).data('href'));
		$("#video-popup div.title").text($(this).next().text());
		$("body").css('overflow', 'hidden');
		$("#video-popup").fadeIn();
		return false;
	});
	$("#video-popup a.closeBtn").click(function(e){
		e.preventDefault();
		$("body").css('overflow', '');
		$("#video-popup iframe").attr('src', '');
		$("#video-popup div.title").text('');
		$("#video-popup").fadeOut();
		return false;
	});
	$("#video-popup div.popupWindow").click(function(e){
		e.stopPropagation();
	});
	
	// licences fancybox
	if($(".licences-fancybox").length > 0){
		$(".licences-fancybox").fancybox();
	}
	
	// otzivi
	$("#department").change(function(e){
		var url = $(location).attr('href');
		var url_array1 = url.split("#");
		var url_array = url_array1[0].split("?");
		var department = document.getElementById("department").value;
		window.location.href = url_array[0] + "?department=" + department;
	});
	var comment_preventClick = false;
	if($("#add-rewiew-bottom").length > 0){
		$("div.otd-filter a").on("click",function(e){
			e.preventDefault();
			$('html, body').animate({ scrollTop : $("#add-rewiew-bottom").offset().top - 80 }, 500);
			return false;
		});
		$("#commentform a.button").on("click",function(e){
			e.preventDefault();
			
			// validation
			var valid = true;
			$("#commentform input#card_no,textarea").each(function(){
				if(!$(this).val()){
					$(this).focus();
					$(this).addClass("error");
					valid = false;
					return false;
				}
				else{
					if($(this).attr('id') == 'email'){
						if(!isValidEmailAddress($(this).val())){
							$(this).focus();
							$(this).addClass("error");
							valid = false;
							return false;
						}
						else{
							$(this).removeClass('error');
						}
					}
					else{
						$(this).removeClass('error');
					}
				}
			});
			
			// validation ends
			if(valid){
				$(this).addClass('clicked');
				if(!comment_preventClick) {
					comment_preventClick = true;
					$("form#commentform").submit();
				}
			}
			
			return false;
		});
	}
	
	// zapis na priyom
	var zapis_preventClick = false;
	$("#zapis-na-priem a.button").on("click",function(e){
		e.preventDefault();
		
		// validation
		var valid = true;
		$("#zapis-na-priem form input").each(function(){
			if(!$(this).val()){
				$(this).focus();
				$(this).addClass("error");
				valid = false;
				return false;
			}
			else{
				$(this).removeClass('error');
			}
		});
		// validation ends
		if(valid){
			$(this).addClass('clicked');
			if(!zapis_preventClick) {
				zapis_preventClick = true;
				$("#zapis-na-priem form").submit();
			}
		}
		
		return false;
	});
});