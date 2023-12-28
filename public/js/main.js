/* -------------------------------------
		CUSTOM FUNCTION WRITE HERE
-------------------------------------- */
jQuery(document).on('ready', function () {
	"use strict";
	jQuery('.tg-themetabnav > li > a').hover(function () {
		jQuery(this).tab('show');
	});
	/*--------------------------------------
			SCROLL TO TOP
	--------------------------------------*/
	var _tg_btnscrolltop = jQuery("#tg-btnbacktotop");
	_tg_btnscrolltop.on('click', function () {
		var _scrollUp = jQuery('html, body');
		_scrollUp.animate({ scrollTop: 0 }, 'slow');
	})
	/* -------------------------------------
			COLLAPSE MENU SMALL DEVICES
	-------------------------------------- */
	function collapseMenu() {
		jQuery('.menu-item-has-children, .menu-item-has-mega-menu').prepend('<span class="tg-dropdowarrow"><i class="fa  fa-angle-right"></i></span>');
		jQuery('.menu-item-has-children span, .menu-item-has-mega-menu span').on('click', function () {
			jQuery(this).next().next().slideToggle(300);
			jQuery(this).parent('.menu-item-has-children, .menu-item-has-mega-menu').toggleClass('tg-open');
		});
	}
	collapseMenu();
	/*--------------------------------------
			HOME SLIDER
	--------------------------------------*/
	var _tg_homeslider = jQuery('#tg-homeslider');
	_tg_homeslider.owlCarousel({
		items: 1,
		nav: true,
		loop: true,
		dots: true,
		autoplay: false,
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>'
		],
		navClass: [
			'owl-prev tg-btnround tg-btnprev',
			'owl-next tg-btnround tg-btnnext'
		],
	});
	/*--------------------------------------
			BEST BOOK SLIDER
	--------------------------------------*/
	var _tg_bestsellingbooksslider = jQuery('#tg-bestsellingbooksslider');
	_tg_bestsellingbooksslider.owlCarousel({
		nav: true,
		loop: true,
		margin: 30,
		dots: true,
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>'
		],
		navClass: [
			'owl-prev tg-btnround tg-btnprev',
			'owl-next tg-btnround tg-btnnext'
		],
		responsive: {
			0: { items: 1 },
			480: { items: 2 },
			600: { items: 3 },
			1000: { items: 5 },
			1200: { items: 6 },
		}
	});
	/*--------------------------------------
			RELATED PRODUCT SLIDER
	--------------------------------------*/
	var _tg_relatedproductslider = jQuery('#tg-relatedproductslider');
	_tg_relatedproductslider.owlCarousel({
		nav: true,
		loop: true,
		margin: 30,
		dots: true,
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>'
		],
		navClass: [
			'owl-prev tg-btnround tg-btnprev',
			'owl-next tg-btnround tg-btnnext'
		],
		responsive: {
			0: { items: 1 },
			568: { items: 2 },
			768: { items: 2 },
			992: { items: 3 },
			1200: { items: 4 },
		}
	});
	/* -------------------------------------
			COLLECTION COUNTER
	-------------------------------------- */
	try {
		var _tg_collectioncounters = jQuery('#tg-collectioncounters');
		_tg_collectioncounters.appear(function () {

			var _tg_collectioncounter = jQuery('.tg-collectioncounter h3');
			_tg_collectioncounter.countTo({
				formatter: function (value, options) {
					return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
				}
			});
		});
	} catch (err) { }
	/*--------------------------------------
			PICKED BY AUTHOR SLIDER
	--------------------------------------*/
	var _tg_pickedbyauthorslider = jQuery('#tg-pickedbyauthorslider');
	_tg_pickedbyauthorslider.owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>'
		],
		navClass: [
			'owl-prev tg-btnround tg-btnprev',
			'owl-next tg-btnround tg-btnnext'
		],
		responsive: {
			0: { items: 1 },
			768: { items: 2 },
			992: { items: 3 },
		}
	});
	/*--------------------------------------
			TESTIMONIALS SLIDER
	--------------------------------------*/
	var _tg_testimonialsslider = jQuery('#tg-testimonialsslider');
	_tg_testimonialsslider.owlCarousel({
		items: 1,
		nav: true,
		loop: true,
		dots: true,
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>'
		],
		navClass: [
			'owl-prev tg-btnround tg-btnprev',
			'owl-next tg-btnround tg-btnnext'
		],
	});
	/*--------------------------------------
			PICKED BY AUTHOR SLIDER
	--------------------------------------*/
	var _tg_authorsslider = jQuery('#tg-authorsslider');
	_tg_authorsslider.owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>'
		],
		navClass: [
			'owl-prev tg-btnround tg-btnprev',
			'owl-next tg-btnround tg-btnnext'
		],
		responsive: {
			0: { items: 1 },
			600: { items: 4 },
			1000: { items: 5 },
			1200: { items: 6 },
		}
	});
	/*--------------------------------------
			TEAMS SLIDER
	--------------------------------------*/
	var _tg_teamsslider = jQuery('#tg-teamsslider');
	_tg_teamsslider.owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>'
		],
		navClass: [
			'owl-prev tg-btnround tg-btnprev',
			'owl-next tg-btnround tg-btnnext'
		],
		responsive: {
			0: { items: 1 },
			600: { items: 3 },
			1000: { items: 4 },
		}
	});
	/*--------------------------------------
			NEWS AND ARTICLE SLIDER
	--------------------------------------*/
	var _tg_postslider = jQuery('#tg-postslider');
	_tg_postslider.owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>'
		],
		navClass: [
			'owl-prev tg-btnround tg-btnprev',
			'owl-next tg-btnround tg-btnnext'
		],
		responsive: {
			0: { items: 1 },
			600: { items: 2 },
			992: { items: 3 },
			1200: { items: 4 },
		}
	});
	/*--------------------------------------
			HOME SLIDER
	--------------------------------------*/
	var _tg_successslider = jQuery('#tg-successslider');
	_tg_successslider.owlCarousel({
		items: 1,
		nav: true,
		loop: true,
		dots: true,
		autoplay: false,
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>'
		],
		navClass: [
			'owl-prev tg-btnround tg-btnprev',
			'owl-next tg-btnround tg-btnnext'
		],
	});
	/* -------------------------------------
			Google Map
	-------------------------------------- */
	jQuery("#tg-locationmap").gmap3({
		marker: {
			address: "1600 Elizabeth St, Melbourne, Victoria, Australia",
			options: {
				title: "Books Library",
			}
		},
		map: {
			options: {
				zoom: 16,
				scrollwheel: false,
				disableDoubleClickZoom: true,
			}
		}
	});
	/*------------------------------------------
			PRODUCT INCREASE
	------------------------------------------*/
	jQuery('em.minus').on('click', function () {
		jQuery('#quantity1').val(parseInt(jQuery('#quantity1').val(), 10) - 1);
	});
	jQuery('em.plus').on('click', function () {
		jQuery('#quantity1').val(parseInt(jQuery('#quantity1').val(), 10) + 1);
	});
});


document.getElementById('avatar').addEventListener('change', function (event) {
	var input = event.target;
	var reader = new FileReader();

	reader.onload = function () {
		var img = document.getElementById('avatar-preview');
		img.src = reader.result;
	}

	reader.readAsDataURL(input.files[0]);
});








const menuItems = document.querySelectorAll('.nav-item');

menuItems.forEach(item => {
	item.addEventListener('click', () => {
		menuItems.forEach(i => i.classList.remove('active'));
		item.classList.add('active');
	});
});


const paymentTypes = document.querySelectorAll('.type');
const paymentSections = {
	'credit-card': document.getElementById('credit-card-section'),
	'paypal': document.getElementById('paypal-section'),
	'amazon': document.getElementById('amazon-section'),
};

paymentTypes.forEach((type) => {
	type.addEventListener('click', () => {
		// Hide all payment sections
		for (const key in paymentSections) {
			if (paymentSections.hasOwnProperty(key)) {
				paymentSections[key].style.display = 'none';
			}
		}

		// Show the selected payment method's section
		const selectedPaymentMethod = type.getAttribute('data-payment-method');
		if (paymentSections[selectedPaymentMethod]) {
			paymentSections[selectedPaymentMethod].style.display = 'block';
		}
	});
});

$(document).ready(function () {
	$('.addToWishlist').click(function (e) {
		e.preventDefault();
		var product_id = $(this).data('product-id');
		$.ajax({
			url: '/add-to-wishlist/' + product_id,
			method: 'POST',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success: function (response) {
				alert(response.message);
			},
			error: function (response) {
				alert(response.responseJSON.message);
			}
		});
	});
});


const paymentButton = document.getElementById("paymentButton");
const checkoutLink = document.getElementById("checkoutLink");

paymentButton.addEventListener("click", function (e) {
	e.preventDefault(); // Ngăn chuyển hướng mặc định của nút "Thanh toán"

	const url = checkoutLink.getAttribute("href");
	window.location.href = url;
});

$(document).ready(function () {
	var commentItems = $('.comment-item');
	var viewAllButton = $('.view-all-comments');
	var showLessButton = $('.show-less-comments');

	// Initially hide comments after the first three
	commentItems.slice(3).hide();

	// Add click event listener to the "Xem tất cả" ("View All") button
	viewAllButton.click(function () {
		// Toggle visibility of comments after the first three
		commentItems.slice(3).toggle();

		// Toggle visibility of the "Xem tất cả" ("View All") button
		viewAllButton.toggle();

		// Show the "Ẩn bớt" ("Show Less") button
		showLessButton.toggle();
	});

	// Add click event listener to the "Ẩn bớt" ("Show Less") button
	showLessButton.click(function () {
		// Toggle visibility of comments after the first three
		commentItems.slice(3).toggle();

		// Toggle visibility of the "Xem tất cả" ("View All") button
		viewAllButton.toggle();

		// Hide the "Ẩn bớt" ("Show Less") button
		showLessButton.toggle();
	});
});