jQuery( document ).ready( function() {

	initPreloaders();

	initCmgTools();

	initListeners();

	initDatePickers();

	initSidebar();
	initSidebarTabs();

	initWindowResize();
	
	initDropDownButton();

	initWindowScroll();
	
	initVerifyOtp();
	
	initLoginRegister();
	
	initlandigscroll();
	
	initbuttondisabled();
	
	initaosanimations();
	
	initCardToggle();
	
	initAppend();
	
});

// == Pre Loaders =========================

function initPreloaders() {

	jQuery( '.container-main' ).imagesLoaded( { background: true }, function() {

		jQuery( '#pre-loader-main .spinner' ).addClass( 'animate animate-zoom-out' );
		jQuery( '#pre-loader-main' ).fadeOut( 'slow' );
	});
	
}

function initAppend() {

	
	jQuery( '.eventDelete' ).click( function() {

		var target = jQuery( this ).attr( 'target' );

		var popup = jQuery( this ).attr( 'popup' );

		var action = jQuery( '#'+ popup ).find( 'form' ).attr( 'action' );

		action = action + target;

		jQuery( '#'+ popup ).find( 'form' ).attr( 'action', action );
		
	});
}

function initCardToggle() {
	
	
	jQuery( '.fa-ellipsis-v' ).click( function() {
		
		var parent = jQuery( this ).closest( '.card-header' );
		
		parent.find( '.actions' ).slideToggle();
			
	});
}

function initlandigscroll(){
	
	jQuery(window).on("scroll", function() {
		
		if(jQuery(window).scrollTop() > 700) {
			jQuery("#scroll-bkg").addClass("active-header-bkg");
		}
		else 
		{
			
		   jQuery("#scroll-bkg").removeClass("active-header-bkg");
		}
	});
}

function initbuttondisabled() {
	
	jQuery('#disableds').click(function() {
		
		jQuery(".disableds-color").css("background-color","gray");
	
	});
		
}
//
//function initaosanimations() {
//	
//	AOS.init();
//	
//	AOS.init({
//		once: true,
//	});
//}


function initLoginRegister() {

	// Login/Register
	jQuery( '.btn-login' ).click( function( event ) {

		event.preventDefault();

		//showLoginBox();
		showPopup( '#popup-login' );
		closePopup( '.box-forgot' );
		closePopup( '#popup-register' );
		closePopup( '#popup-forgot-password' );
	});
	
	jQuery( '.btn-forgot-password' ).click( function( event ) {

		event.preventDefault();
		jQuery( '.box-forgot' ).show();
		showPopup( '#popup-forgot-password' );
		closePopup( '#popup-register' );
		closePopup( '#popup-login' );
		
	});

	jQuery( '.btn-register' ).click( function( event ) {

		event.preventDefault();
		showPopup( '.box-signup' );
		showPopup( '#popup-register' );
		closePopup( '#popup-login' );
		closePopup( '#popup-forgot-password' );
		
	});

    jQuery( '#popup-close' ).click( function() {

    	jQuery( '#popup-register .error, #popup-register .warning' ).hide();
    	jQuery( '#popup-register .frm-pre' ).show();
    });
}

// == CMT JS ==============================

function initCmgTools() {

	// Perspective Header
	jQuery( '.cmt-header-perspective' ).cmtHeader( { scrollDistance: 280 } );
	
	// Blocks
	jQuery( '.cmt-block, .page' ).cmtBlock({
		// Generic
		halfHeight: true,
		heightAuto: true,
		// Block Specific - Ignores generic
		blocks: {
			'block-auto': { autoHeight: true, heightAuto: true },
			'block-half': { halfHeight: true },
			'block-qtf': { qtfHeight: true },
			'block-full': { fullHeight: true },
			'block-half-auto': { halfHeight: true, heightAuto: true },
			'block-qtf-auto': { qtfHeight: true, heightAuto: true },
			'block-full-auto': { fullHeight: true, heightAuto: true },
			'block-half-mauto': { halfHeight: true, heightAutoMobile: true, heightAutoMobileWidth: 1024 },
			'block-qtf-mauto': { qtfHeight: true, heightAutoMobile: true, heightAutoMobileWidth: 1024 },
			'block-full-mauto': { fullHeight: true, heightAutoMobile: true, heightAutoMobileWidth: 1024 }
		}
	});

	// Smooth Scroll
	jQuery( '.cmt-smooth-scroll' ).cmtSmoothScroll();

	// Box Forms
	jQuery( '.cmt-box-form' ).cmtFormInfo();

	// Ratings
	jQuery( '.cmt-rating' ).cmtRate();

	jQuery( '.cmt-rating-emoticons' ).cmtRate({
		same: [ 'cmti cmti-2x cmti-emoticons-sad', 'cmti cmti-2x cmti-emoticons-sulk', 'cmti cmti-2x cmti-emoticons-intense', 'cmti cmti-2x cmti-emoticons-hopeful', 'cmti cmti-2x cmti-emoticons-happy' ],
		emptyColor: '#7F7F7F'
	});

	// Select
	jQuery( '.cmt-select' ).cmtSelect( { iconHtml: '<span class="fa fab fa-caret-down"></span>' } );
	jQuery( '.cmt-select-c' ).cmtSelect( { iconHtml: '<span class="fa fab fa-caret-down"></span>', copyOptionClass: true } );
	jQuery( '.cmt-select-s' ).cmtSelect( { iconHtml: '<span class="fa fab fa-caret-down"></span>', wrapperClass: 'element-small' } );

	// Checkboxes
	jQuery( '.cmt-checkbox' ).cmtCheckbox();

	// Field Groups
	jQuery( '.cmt-field-group' ).cmtFieldGroup();

	// File Uploader
	jQuery( '.cmt-file-uploader' ).cmtFileUploader();

	// Popups
	jQuery( '.cmt-popup' ).cmtPopup();

	// Popouts
	jQuery( '.cmt-popout-group' ).cmtPopoutGroup();

	// Auto Fillers
	jQuery( '.cmt-auto-fill' ).cmtAutoFill();

	// Tabs
	jQuery( '.cmt-tabs' ).cmtTabs();

	// Accordians
	jQuery( '.cmt-accordian' ).cmtAccordian();

	// Grid
	jQuery( '.cmt-grid-data' ).cmtGrid();
	jQuery( '.cmt-grid' ).cmtGrid();

	// Collapsible Menu
	jQuery( '#sidebar-main' ).cmtCollapsibleMenu();

	// Actions
	jQuery( '.cmt-actions' ).cmtActions();

	// Auto Hide
	jQuery( '.cmt-auto-hide' ).cmtAutoHide();

	// Icon Picker
	jQuery( '.cmt-icon-picker, .cmt-texture-picker' ).cmtIconPicker();

	// Time Picker
	jQuery( '.cmt-timepicker' ).cmtTimePicker();

	// Login & Register
	jQuery( '#popup-login' ).cmtLoginRegister();

	// Intl Tel Input
	cmt.utils.intltel.initIntlTelInput( 'us' );
	
	
	// Login & Register
	jQuery( '#popup-login' ).cmtLoginRegister();
	
	
	jQuery( '.cmt-slider' ).cmtSlider({
		lControlContent: '<i class=\"cmti cmti-2x cmti-chevron-left  valign-center\"></i>',
		rControlContent: '<i class=\"cmti cmti-2x cmti-chevron-right  valign-center\"></i>',
		height: 1500,
		width: 1500,
		autoScroll: true,
		lightbox: true
	});
	
	jQuery( "#btn-menu-mobiles" ).click(function() {
	
		jQuery( "#menu-main-mobile" ).slideToggle("slow");
               
        });
}

// == JS Listeners ========================

function initListeners() {

	// Main Menu
	jQuery( '#btn-menu-mobile' ).click( function() {

		jQuery( '#menu-main-mobile' ).slideToggle();
	});

	// Login & Register
	jQuery( '#btn-login' ).click( function( e ) {

		e.preventDefault();

		showPopup( '#popup-login' );
	});

	// Custom scroller
	jQuery( '.cscroller' ).mCustomScrollbar( { autoHideScrollbar: true } );

	// Auto save checkbox action
	jQuery( '.checkbox-autosave input' ).on( 'input', function() {

		jQuery( this ).parent().find( '.cmt-click' ).click();
	});
}

// == Datepickers =========================

function initDatePickers() {

	// jQuery Datepicker
	var datepickers = jQuery( '.datepicker' );

	datepickers.each( function() {

		var datepicker = jQuery( this );

		var start	= datepicker.attr( 'ldata-start' );
		var end		= datepicker.attr( 'ldata-end' );

		if( null != start && null != end ) {

			datepicker.datepicker({
				dateFormat: 'yy-mm-dd',
				minDate: start,
				maxDate: end
			});
		}
		else if( null != start ) {

			datepicker.datepicker({
				dateFormat: 'yy-mm-dd',
				minDate: start
			});
		}
		else if( null != end ) {

			datepicker.datepicker({
				dateFormat: 'yy-mm-dd',
				maxDate: end
			});
		}
		else {

			datepicker.datepicker({
				dateFormat: 'yy-mm-dd'
			});
		}
	});

	// Datetimepicker
	if( jQuery().datetimepicker ) {

		jQuery( '.datetimepicker' ).datetimepicker( { format: 'Y-m-d H:i:00', step: 5 } );

		jQuery( '.dt-date-picker' ).datetimepicker( { timepicker: false, format: 'Y-m-d' } );

		jQuery( '.dt-dob-picker' ).datetimepicker( { timepicker: false, format: 'Y-m-d', yearStart: 1950, yearEnd: 2010, defaultDate: '2000-01-01' } );

		jQuery( '.dt-time-picker' ).datetimepicker( { datepicker: false, format: 'H:i:00', step: 5 } );
	}
}

// == Sidebars ============================

function initSidebar() {

	jQuery( '#btn-sidebar-main' ).click( function() {

		if( jQuery( '#sidebar-main' ).hasClass( 'sidebar-main-micro' ) ) {

			setUserConfig( 'microSidebar', 0 );
		}
		else {

			setUserConfig( 'microSidebar', 1 );
		}

		jQuery( '#sidebar-main' ).toggleClass( 'sidebar-main-micro' );

		initSidebarTabs();
	});

	jQuery( '#btn-sidebar-mobile' ).click( function() {

		jQuery( '#sidebar-main' ).fadeIn( 'slow' );
	});

	jQuery( '#btn-sidebar-close' ).click( function() {

		jQuery( '#sidebar-main' ).fadeOut( 'fast' );
	});
}

function initSidebarTabs() {

	if( jQuery( '#sidebar-main' ).hasClass( 'sidebar-main-micro' ) ) {

		jQuery( '.sidebar-main-filler' ).addClass( 'sidebar-filler-micro' );
		jQuery( '.container-main' ).addClass( 'container-main-micro' );
		jQuery( '.content-main-wrap' ).addClass( 'content-main-wrap-micro' );

		jQuery( '#sidebar-main .collapsible-tab .tab-header' ).addClass( 'tab-content-trigger' );
		jQuery( '#sidebar-main .tab-content' ).removeClass( 'visible' );

		jQuery( '#sidebar-main .tab-content-trigger' ).click( function() {

			var parent = jQuery( this ).closest( '.collapsible-tab' );

			if( parent.hasClass( 'has-children' ) ) {

				var tab = parent.find( '.tab-content' );

				if( tab.is( ':visible' ) ) {

					tab.hide( 'fast' );
				}
				else {

					jQuery( '#sidebar-main .tab-content' ).hide( 'fast' );

					tab.fadeIn( 'slow' );
				}
			}
		});

		jQuery( '#btn-sidebar-main .sidebar-trigger-expanded' ).hide();
		jQuery( '#btn-sidebar-main .sidebar-trigger-collapsed' ).show();
	}
	else {

		jQuery( '.sidebar-main-filler' ).removeClass( 'sidebar-filler-micro' );
		jQuery( '.container-main' ).removeClass( 'container-main-micro' );
		jQuery( '.content-main-wrap' ).removeClass( 'content-main-wrap-micro' );

		jQuery( '#sidebar-main .collapsible-tab .tab-header' ).unbind( 'click' );
		jQuery( '#sidebar-main .collapsible-tab .tab-header' ).removeClass( 'tab-content-trigger' );
		jQuery( '#sidebar-main .collapsible-tab.has-children.active .tab-content' ).addClass( 'visible' );

		jQuery( '#btn-sidebar-main .sidebar-trigger-expanded' ).show();
		jQuery( '#btn-sidebar-main .sidebar-trigger-collapsed' ).hide();
	}
}

// == Window Resize, Scroll ===============

function initWindowResize() {

	//resizeElements();

	jQuery( window ).resize( function () {

		//resizeElements();
	});
}

function initDropDownButton() {

	jQuery( "#shows" ).hide();
	jQuery( "#down" ).click(function() {

		jQuery( "#shows" ).slideToggle("slow");
		jQuery("#iconcolor").toggleClass("iconcolor");

	});

	jQuery( "#new1" ).click(function() {

		jQuery( "#down" ).attr( "value"," New" );
		jQuery( "#shows" ).slideUp( "slow" );
		jQuery( "#new1" ).addClass( "tcolor" );
		jQuery( "#active1" ).removeClass( "tcolor" );
		jQuery( "#disable1" ).removeClass( "tcolor" );
	});

	jQuery( "#active1" ).click(function() {

		jQuery( "#down" ).attr( "value"," Active" );
		jQuery( "#shows" ).slideUp ("slow" );
		jQuery( "#active1" ).addClass( "tcolor" );
		jQuery( "#new1" ).removeClass( "tcolor" );
		jQuery( "#disable1" ).removeClass( "tcolor" );
	});

	jQuery( "#disable1" ).click(function() {

		jQuery( "#down" ).attr( "value"," Disable" );
		jQuery( "#shows" ).slideUp( "slow" );
		jQuery( "#disable1" ).addClass( "tcolor" );
		jQuery( "#new1" ).removeClass( "tcolor" );
		jQuery( "#active1" ).removeClass( "tcolor" );
	});
}

function initWindowScroll() {

	jQuery( window ).scroll( function() {

		var scrolledY = jQuery( window ).scrollTop();

		configScrollAt( scrolledY );
	});
}

function resizeElements() {

	// Resize elements on window resize
}

function configScrollAt() {

	// Show hidden elements with animation effects
}

function initVerifyOtp() {
	
	var obj = jQuery( '#seprate' );
	
	if( obj.lenth > 0 ){ 
	
		obj.addEventListener('keydown', stopCarret); 
		obj.addEventListener('keyup', stopCarret); 

		function stopCarret() {
			if (obj.value.length > 5){
				setCaretPosition(obj, 5);
			}
		}
	}
	
	function setCaretPosition(elem, caretPos) {
		if(elem != null) {
			if(elem.createTextRange) {
				var range = elem.createTextRange();
				range.move('character', caretPos);
				range.select();
			}
			else {
				if(elem.selectionStart) {
					elem.focus();
					elem.setSelectionRange(caretPos, caretPos);
				}
				else
					elem.focus();
			}
		}
	}
}
//jQuery( document ).ready( function() {
//
//	initPreloaders();
//
//   // initVelocity();
//
//	initSidebar();
//	initSidebarTabs();
//
//	initDatepicker();
//
//	initRangeSlider1();
//	initRangeSlider2();
//
//	initProgressBar();
//
//	initDropDownButton();
//
//	initWindowResize();
//
//	initWindowScroll();
//	
//	initVerifyOtp();
//	
//	initbuttondisabled();
//	
//	//initsliderheight();
//	
//});
//
////function initsliderheight(){
//	
//	
//	//var sliderwidth = jQuery('#cmt-block-banner').width();
//	//alert(sliderwidth);
//	//if( sliderwidth < 600 ){
//		
//		//var imgheight = jQuery('#cmt-block-banner').find( img ).height();
//		//alert(imgheight);
//		
//		//jQuery('#cmt-block-banner').height(imgheight);
//		
//	//}
////}
//
//// == Pre Loaders =========================
//
//function initPreloaders() {
//
//	// Hide global pre-loader spinner
//	jQuery( '.container-main' ).imagesLoaded( { background: true }, function() {
//
//		jQuery( '#pre-loader-main .spinner' ).addClass( 'animate animate-zoom-out' );
//		jQuery( '#pre-loader-main' ).fadeOut( 'slow' );
//	});
//}
//
//// == Velocity ============================
//
//function initVelocity() {
//
//	// Perspective Header
//	jQuery( '.cmt-header-perspective' ).cmtHeader( { scrollDistance: 280 } );
//
//	// Blocks
//	jQuery( '.cmt-block, .page' ).cmtBlock({
//		// Generic
//		halfHeight: true,
//		heightAuto: true,
//		// Block Specific - Ignores generic
//		blocks: {
//			'block-auto': { autoHeight: true, heightAuto: true },
//			'block-half': { halfHeight: true },
//			'block-qtf': { qtfHeight: true },
//			'block-full': { fullHeight: true },
//			'block-half-auto': { halfHeight: true, heightAuto: true },
//			'block-qtf-auto': { qtfHeight: true, heightAuto: true },
//			'block-full-auto': { fullHeight: true, heightAuto: true },
//			'block-half-mauto': { halfHeight: true, heightAutoMobile: true, heightAutoMobileWidth: 1024 },
//			'block-qtf-mauto': { qtfHeight: true, heightAutoMobile: true, heightAutoMobileWidth: 1024 },
//			'block-full-mauto': { fullHeight: true, heightAutoMobile: true, heightAutoMobileWidth: 1024 }
//		}
//	});
//
	// Smooth Scroll
	jQuery( '.cmt-smooth-scroll' ).cmtSmoothScroll();

	// Box Forms
	jQuery( '.cmt-box-form' ).cmtFormInfo();

	// Ratings
	jQuery( '.cmt-rating' ).cmtRate();

	jQuery( '.cmt-rating-emoticons' ).cmtRate({
		same: [ 'cmti cmti-2x cmti-emoticons-sad', 'cmti cmti-2x cmti-emoticons-sulk', 'cmti cmti-2x cmti-emoticons-intense', 'cmti cmti-2x cmti-emoticons-hopeful', 'cmti cmti-2x cmti-emoticons-happy' ],
		emptyColor: '#7F7F7F'
	});
//
//	// Select
//	jQuery( '.cmt-select' ).cmtSelect( { iconHtml: '<span class="cmti cmti-triangle-down"></span>' } );
//	jQuery( '.cmt-select-c' ).cmtSelect( { iconHtml: '<span class="cmti cmti-triangle-down"></span>', copyOptionClass: true } );
//	jQuery( '.cmt-select-s' ).cmtSelect( { iconHtml: '<span class="cmti cmti-triangle-down"></span>', wrapperClass: 'element-small' } );
//
//	// Checkboxes
//	jQuery( '.cmt-checkbox' ).cmtCheckbox();
//	
//	// Field Groups
//	jQuery( '.cmt-field-group' ).cmtFieldGroup();
//
//	// File Uploader
//	jQuery( '.cmt-file-uploader' ).cmtFileUploader();
//
//	// Popups
//	jQuery( '.cmt-popup' ).cmtPopup();
//
//	// Popouts
//	jQuery( '.cmt-popout-group' ).cmtPopoutGroup();
//
//	// Auto Fillers
//	jQuery( '.cmt-auto-fill' ).cmtAutoFill();
//
//	// Tabs
//	jQuery( '.cmt-tabs' ).cmtTabs();
//
//	// Accordians
//	jQuery( '.cmt-accordian' ).cmtAccordian();
//
//	// Grid
//	jQuery( '.cmt-grid' ).cmtGrid();
//
//	// Actions
//	jQuery( '.cmt-actions' ).cmtActions();
//
//	// Auto Hide
//	jQuery( '.cmt-auto-hide' ).cmtAutoHide();
//
//	// Icon Picker
//	jQuery( '.cmt-icon-picker' ).cmtIconPicker();
//
//	// Time Picker
//	jQuery( '.cmt-timepicker' ).cmtTimePicker();
//	
//	jQuery( '.cmt-slider' ).cmtSlider({
//		lControlContent: '<i class=\"cmti cmti-2x cmti-chevron-left  valign-center\"></i>',
//		rControlContent: '<i class=\"cmti cmti-2x cmti-chevron-right  valign-center\"></i>',
//		height: 1500,
//		width: 1500,
//		autoScroll: true,
//		lightbox: true
//	});
//
//	// Login & Register
//	jQuery( '#popup-login' ).cmtLoginRegister();
//
//	// Widgets
//	//jQuery( '.cmt-circledp' ).cmtCircledp();
//	//jQuery( '.cmt-clock' ).cmtClock();
//	//jQuery( '.cmt-countdown-timer' ).cmtCountdownTimer();
//	//jQuery( '.cmt-counter' ).cmtCounter();
//
//	/*
//	// Intl Tel Input
//	cmt.utils.intltel.initIntlTelInput( 'in' );
//
//	if( jQuery( '.intl-tel-field-cc' ).length > 0 ) {
//
//		cmt.utils.intltel.initIntlTelField( jQuery( '.intl-tel-field-cc' ) );
//	}
//	 */
//        
//        jQuery( "#btn-menu-mobiles" ).click(function() {
//	
//		jQuery( "#menu-main-mobile" ).slideToggle("slow");
//               
//        });
//		
//	jQuery( '.fxs-slider-component' ).foxslider({
//		controls: true,
//		lControlContent: '<i class="cmti cmti-1-5x cmti-angle-left"></i>',
//		rControlContent: '<i class="cmti cmti-1-5x cmti-angle-right"></i>',
//		autoScrollDuration: 7000
//	});
//}
//
//// == Components ==========================
//
//// == Sidebars =============
//
//function initSidebar() {
//
//	jQuery( '#btn-sidebar-main' ).click( function() {
//
//		/*
//		if( jQuery( '#sidebar-main' ).hasClass( 'sidebar-main-micro' ) ) {
//
//			setUserConfig( 'microSidebar', 0 );
//		}
//		else {
//
//			setUserConfig( 'microSidebar', 1 );
//		}
//		*/
//
//		jQuery( '#sidebar-main' ).toggleClass( 'sidebar-main-micro' );
//
//		initSidebarTabs();
//	});
//
//	jQuery( '#btn-sidebar-mobile' ).click( function() {
//
//		jQuery( '#sidebar-main' ).fadeIn( 'slow' );
//	});
//
//	jQuery( '#btn-sidebar-close' ).click( function() {
//
//		jQuery( '#sidebar-main' ).fadeOut( 'fast' );
//	});
//}
//
//function initSidebarTabs() {
//
//	if( jQuery( '#sidebar-main' ).hasClass( 'sidebar-main-micro' ) ) {
//
//		jQuery( '.sidebar-main-filler' ).addClass( 'sidebar-filler-micro' );
//		jQuery( '.container-main' ).addClass( 'container-main-micro' );
//		jQuery( '.content-main-wrap' ).addClass( 'content-main-wrap-micro' );
//
//		jQuery( '#sidebar-main .collapsible-tab .tab-header' ).addClass( 'tab-content-trigger' );
//		jQuery( '#sidebar-main .tab-content' ).removeClass( 'visible' );
//
//		jQuery( '#sidebar-main .tab-content-trigger' ).click( function() {
//
//			var parent = jQuery( this ).closest( '.collapsible-tab' );
//
//			if( parent.hasClass( 'has-children' ) ) {
//
//				var tab = parent.find( '.tab-content' );
//
//				if( tab.is( ':visible' ) ) {
//
//					tab.hide( 'fast' );
//				}
//				else {
//
//					jQuery( '#sidebar-main .tab-content' ).hide( 'fast' );
//
//					tab.fadeIn( 'slow' );
//				}
//			}
//		});
//
//		jQuery( '#btn-sidebar-main .sidebar-trigger-expanded' ).hide();
//		jQuery( '#btn-sidebar-main .sidebar-trigger-collapsed' ).show();
//	}
//	else {
//
//		jQuery( '.sidebar-main-filler' ).removeClass( 'sidebar-filler-micro' );
//		jQuery( '.container-main' ).removeClass( 'container-main-micro' );
//		jQuery( '.content-main-wrap' ).removeClass( 'content-main-wrap-micro' );
//
//		jQuery( '#sidebar-main .collapsible-tab .tab-header' ).unbind( 'click' );
//		jQuery( '#sidebar-main .collapsible-tab .tab-header' ).removeClass( 'tab-content-trigger' );
//		jQuery( '#sidebar-main .collapsible-tab.has-children.active .tab-content' ).addClass( 'visible' );
//
//		jQuery( '#btn-sidebar-main .sidebar-trigger-expanded' ).show();
//		jQuery( '#btn-sidebar-main .sidebar-trigger-collapsed' ).hide();
//	}
//}
//
//// == Datepicker ===========
//
//function initDatepicker() {
//
//	// Datepicker
//	if( jQuery().datepicker ) {
//
//		var start = jQuery( '.datepicker' ).attr( 'start' );
//
//		if( null != start ) {
//
//			jQuery( '.datepicker' ).datepicker({
//				dateFormat: 'yy-mm-dd',
//				minDate: start
//			});
//
//			jQuery( '.datepicker' ).click( function() {
//
//				jQuery( '#ui-datepicker-div' ).css( 'z-index', '100000000000' );
//			})
//		}
//		else {
//
//			jQuery( '.datepicker' ).datepicker({
//				dateFormat: 'yy-mm-dd'
//			});
//
//			jQuery( '.datepicker' ).click( function() {
//
//				jQuery( '#ui-datepicker-div' ).css( 'z-index', '100000000000' );
//			})
//		}
//	}
//}
//
//// == Range Sliders =============
//
//function initRangeSlider1() {
//
//	var rangeSlider = jQuery( '#range-radius-1' );
//
//	if( rangeSlider.length > 0 ) {
//
//		var slider	= rangeSlider[ 0 ];
//		var minVal	=  0;
//		var maxVal	=  100;
//
//		jQuery( '#min-price-1' ).html( '<i class="fas fa-rupee-sign">' + minVal + '</i>' );
//		jQuery( '#max-price-1' ).html( '<i class="fas fa-rupee-sign">' + maxVal + '</i>' );
//
//		noUiSlider.create( slider, {
//			start: 0,
//			connect: [ true, false ],
//			range: {
//				min: 0,
//				max: 100
//			}
//		});
//
//		slider.noUiSlider.on( 'change', function ( values, handle ) {
//
//			var value	= values[ handle ];
//			var min		= parseInt( values[0] );
//			var max		= parseInt( values[1] );
//
//			jQuery( '#min-price-1' ).html( '<i class="fas fa-rupee-sign">' + min + '</i>' );
//			jQuery( '#max-price-1' ).html( '<i class="fas fa-rupee-sign">' + max + '</i>' );
//
//			if( minVal >= 0 ) {
//
//				var updatedUrl	= replaceQueryParam( "min", min, window.location.search );
//				updatedUrl		= replaceQueryParam( "max", max, updatedUrl );
//				window.location	= updatedUrl;
//			}
//			else {
//
//				var pageUrl	=  window.location+ "&min="+ min + "&max="+ max;
//				window.location	= pageUrl;
//			}
//		});
//	}
//}
//
//function initRangeSlider2() {
//
//	var rangeSlider = jQuery( '#range-radius-2' );
//
//	if( rangeSlider.length > 0 ) {
//
//		var slider	= rangeSlider[ 0 ];
//		var minVal	=  0;
//		var maxVal	=  100;
//
//		jQuery( '#min-price' ).html( "<i class='fas fa-rupee-sign'>" + minVal + "</i>" );
//		jQuery( '#max-price' ).html( "<i class='fas fa-rupee-sign'>" + maxVal + "</i>" );
//
//		noUiSlider.create( slider, {
//			start: [ minVal, maxVal ],
//			step: 1,
//			connect: true,
//			tooltips: false,
//			behaviour: 'tap',
//			format: {
//				to: function ( value ) {
//					return parseInt( value + '' );
//				},
//				from: function ( value ) {
//					return value.replace( '', '' );
//				}
//			},
//			range: {
//				'min': [ 0 ],
//				'max': [ 100 ]
//			}
//		});
//
//		slider.noUiSlider.on( 'change', function ( values, handle ) {
//
//			var value	= values[ handle ];
//			var min		= parseInt( values[0] );
//			var max		= parseInt( values[1] );
//
//			jQuery( '#min-price' ).html( "<i class='fas fa-rupee-sign'>" + min + "</i>" );
//			jQuery( '#max-price' ).html( "<i class='fas fa-rupee-sign'>" + max + "</i>" );
//
//			if( minVal >= 0  ) {
//				var updatedUrl	= replaceQueryParam( "min", min, window.location.search );
//				updatedUrl		= replaceQueryParam( "max", max, updatedUrl );
//				window.location	= updatedUrl;
//			}
//			else {
//				var pageUrl	=  window.location+ "&min="+ min + "&max="+ max;
//				window.location	= pageUrl;
//			}
//		});
//	}
//}
//
//// == Progress Bar ==============
//
//function initProgressBar() {
//
//	jQuery( "#clickme" ).click( function() {
//
//		var elem	= document.getElementById( "myBar" );
//		var width	= 0;
//
//		var id = setInterval( frame, 10 );
//
//		function frame() {
//
//			if( width >= 100 ) {
//
//				clearInterval( id );
//			}
//			else {
//
//				width++;
//
//				elem.style.width = width + '%';
//			}
//		}
//	});
//}
//
//// == DropDown Button ===========
//
//function initDropDownButton() {
//
//	jQuery( "#shows" ).hide();
//	jQuery( "#down" ).click(function() {
//
//		jQuery( "#shows" ).slideToggle("slow");
//		jQuery("#iconcolor").toggleClass("iconcolor");
//
//	});
//
//	jQuery( "#new1" ).click(function() {
//
//		jQuery( "#down" ).attr( "value"," New" );
//		jQuery( "#shows" ).slideUp( "slow" );
//		jQuery( "#new1" ).addClass( "tcolor" );
//		jQuery( "#active1" ).removeClass( "tcolor" );
//		jQuery( "#disable1" ).removeClass( "tcolor" );
//	});
//
//	jQuery( "#active1" ).click(function() {
//
//		jQuery( "#down" ).attr( "value"," Active" );
//		jQuery( "#shows" ).slideUp ("slow" );
//		jQuery( "#active1" ).addClass( "tcolor" );
//		jQuery( "#new1" ).removeClass( "tcolor" );
//		jQuery( "#disable1" ).removeClass( "tcolor" );
//	});
//
//	jQuery( "#disable1" ).click(function() {
//
//		jQuery( "#down" ).attr( "value"," Disable" );
//		jQuery( "#shows" ).slideUp( "slow" );
//		jQuery( "#disable1" ).addClass( "tcolor" );
//		jQuery( "#new1" ).removeClass( "tcolor" );
//		jQuery( "#active1" ).removeClass( "tcolor" );
//	});
//}
//
//// == Window Resize, Scroll ===============
//
//function initWindowResize() {
//
//	//resizeElements();
//
//	jQuery( window ).resize( function () {
//
//		//resizeElements();
//	});
//}
//
//function initWindowScroll() {
//
//	jQuery( window ).scroll( function() {
//
//		var scrolledY = jQuery( window ).scrollTop();
//
//		configScrollAt( scrolledY );
//	});
//}
//
//function resizeElements() {
//
//	// Resize elements on window resize
//}
//
//function configScrollAt() {
//
//	// Show hidden elements with animation effects
//}
//
//function initVerifyOtp() {
//	
//	var obj = jQuery( '#seprate' );
//	
//	if( obj.lenth > 0 ){ 
//	
//		obj.addEventListener('keydown', stopCarret); 
//		obj.addEventListener('keyup', stopCarret); 
//
//		function stopCarret() {
//			if (obj.value.length > 5){
//				setCaretPosition(obj, 5);
//			}
//		}
//	}
//	
//	function setCaretPosition(elem, caretPos) {
//		if(elem != null) {
//			if(elem.createTextRange) {
//				var range = elem.createTextRange();
//				range.move('character', caretPos);
//				range.select();
//			}
//			else {
//				if(elem.selectionStart) {
//					elem.focus();
//					elem.setSelectionRange(caretPos, caretPos);
//				}
//				else
//					elem.focus();
//			}
//		}
//	}
//}
//
//function initbuttondisabled() {
//	
//	jQuery('#disableds').click(function() {
//		
//		jQuery(".disableds-color").css("background-color","gray");
//	
//	});
//}