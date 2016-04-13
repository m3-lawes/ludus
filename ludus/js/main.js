$(window).bind("load", function() {
  /* --- Page transition in --- */
		var content_container = $('.phone-container__inner');
		content_container.addClass('phone-container__inner--in');

});

(function( $ ) {

	


	/* --- View Source / Notes --- */

	var view_sn_button = $('.demo-buttons .button'),
 			view_sn_buttons = $('.demo-buttons'),
			sn = $('.notes, .source');


	view_sn_button.click(function() {
		var sn_button_type = $(this).attr('data-sn-type');
		console.log(sn_button_type);
		view_sn_button.removeClass('button--active');
		$(this).addClass('button--active');
		// view_sn_buttons.addClass('demo-buttons--bottom');

		sn.hide(function(){

			$('.'+sn_button_type).slideDown();

		});


	});

	/* --- Page transition out --- */

		var content_container = $('.phone-container__inner');
		var links = $('a');

		links.click(function( event ) {
  		event.preventDefault();
  			dir = $(this).attr('data-dir');
			content_container.addClass('phone-container__inner--out');
			var href = $(this).attr('href');
			setTimeout( function(){
				location.href = href;
		  }  , 200 );
				//Do animation


		});


	/* --- Slider --- */

	var slider_btn = $('.slider-button');
	var slider = $('.slider');

	slider_btn.click(function(){
		var slide_to = $(this).attr('data-slider-no');
		slide(slide_to);
	});

	function auto_slider() {

		var slides = slider_count();


		setInterval(function(){

			cur_slide = parseInt($('.slider').attr("data-matt"));
			if (cur_slide == slides) {
				next_slide = 1;
			} else {
				next_slide = cur_slide + 1;
			}

			slide(next_slide);

		}, 3000);

	}

	auto_slider();




	function slider_count() {

		return $('.slider .single-slide').length;

	}


	function slide(slide_to){

		if (slide_to == 1) {
			slider.animate({
		    marginLeft: '-0px'
			}, 500);
		}

		if (slide_to == 2) {
			slider.animate({
		    marginLeft: '-151px'
			}, 500);

		}

		if (slide_to == 3) {
			slider.animate({
		    marginLeft: '-302px'
			}, 500);
		}

		$('.slider').attr("data-matt", slide_to);


	}


	/* --- Toggle buttons --- */

	var toggle_btn = $('.toggle-button');

	toggle_btn.click(function(){
		$(this).toggleClass('button--active');
	});

	/* --- Sub Dropdown --- */

	var profile_dropdown_btn = $('.dropdown-btn'),
			profile_dropdown = $('.dropdown-menu');

		profile_dropdown_btn.click(function() {
			profile_dropdown.slideToggle();
		});

	/* --- Tabs --- */

	var slider_tabs = $('.profile-slider__tab'),
	 		single_tab = $('.profile-slider__slide');

	 		slider_tabs.click(function(){
	 			var goto_tab = $(this).attr('data-tab');
	 			slider_tabs.removeClass('profile-slider__tab--active');
	 			$('.profile-slider__tab[data-tab="'+goto_tab+'"]').addClass('profile-slider__tab--active');
	 			single_tab.hide();
	 			$('.profile-slider__slide[data-tab-no="'+goto_tab+'"]').show();
	 		});




	/* --- Fake Search  --- */

	if(typeof(search_page) != "undefined" && search_page !== null) {

		setTimeout( function(){
				location.href = '?page=found';
		  }  , 6000 );

	}


	/* --- Slide out menu  --- */

	var menu_btn = $('.menu-btn'),
			phone_menu = $('.phone-nav');

	menu_btn.click(function() {
		phone_menu.toggleClass('phone-nav--open');
	});


	/* --- Fake message  --- */

	var messages = $('.messages'),
			message_input = $('.message__new'),
			message_send = $('.message__new-btn');

	message_input.bind("enterKey",function(e){
		do_message();
	});
	message_input.keyup(function(e){
	    if(e.keyCode == 13)
	    {
	        $(this).trigger("enterKey");
	    }
	});
	message_send.click(function() {

		do_message();


	});


	function do_message() {
		if (message_input.val() != ''){
			messages.append( message_build(message_input.val()) );
			message_input.val('');
			scroll_bottom();
			add_pending();

			setTimeout( function(){
				remove_pending();
				messages.append( return_message() );
				scroll_bottom();
		  }  , 3000 );

		}
	}

	function scroll_bottom() {
		  var height = messages[0].scrollHeight;
		  messages.scrollTop(height);
	}

	function return_message() {

		var return_text = '';

		return_text += '<div class="message__item message__item--even clearfix">';
		return_text += '<div class="message__text clearfix">';
		return_text += 'Lorem ipsum dolor sit amet, consectetur adipisicing elit!';
		return_text += '</div>';
		return_text += '<div class="message__profile">';
		return_text += '<img src="img/will.jpg" alt="">';
		return_text += '</div>';
		return_text += '</div>';

		return return_text;
	}

	function message_build(text) {

		var return_text = '';

		return_text += '<div class="message__item message__item--odd clearfix">';
		return_text += '<div class="message__text clearfix">';
		return_text += text;
		return_text += '</div>';
		return_text += '</div>';

		return return_text;
	}


	function add_pending() {

		messages.append( '<div class="message_pending">&bull; &bull; &bull;</div>' );

	}

	function remove_pending() {
		$('.message_pending').remove();
	}


})( jQuery );
