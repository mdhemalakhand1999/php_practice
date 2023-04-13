(function ($) {
	"use strict";

	// meanmenu
	$('#main-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "991"
	});

	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 200) {
			$(".header-sticky").removeClass("sticky");
		} else {
			$(".header-sticky").addClass("sticky");
		}
	});

	//mobile side menu
	$('.side-toggle').on('click', function () {
		$('.side-info').addClass('info-open');
		$('.offcanvas-overlay').addClass('overlay-open');
	})

	$('.side-info-close,.offcanvas-overlay').on('click', function () {
		$('.side-info').removeClass('info-open');
		$('.offcanvas-overlay').removeClass('overlay-open');
	})

	function sliderActive() {
		/*------------------------------------
		Slider
		--------------------------------------*/
		if (jQuery(".karx-slider-active").length > 0) {
			let sliderActive1 = '.karx-slider-active';
			let sliderInit1 = new Swiper(sliderActive1, {
				// Optional parameters
				slidesPerView: 1,
				rtl: false,
				slidesPerColumn: 1,
				paginationClickable: true,
				loop: true,
				effect: 'fade',

				autoplay: {
					delay: 5000,
				},

				// If we need pagination
				pagination: {
					el: ".karx-slider-dots",
					clickable: true,
				},

				// Navigation arrows
				navigation: {
					nextEl: '.slider-button-next',
					prevEl: '.slider-button-prev',
				},

				a11y: false
			});

			function animated_swiper(selector, init) {
				let animated = function animated() {
					$(selector + ' [data-animation]').each(function () {
						let anim = $(this).data('animation');
						let delay = $(this).data('delay');
						let duration = $(this).data('duration');

						$(this).removeClass('anim' + anim)
							.addClass(anim + ' animated')
							.css({
								webkitAnimationDelay: delay,
								animationDelay: delay,
								webkitAnimationDuration: duration,
								animationDuration: duration
							})
							.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
								$(this).removeClass(anim + ' animated');
							});
					});
				};
				animated();
				// Make animated when slide change
				init.on('slideChange', function () {
					$(sliderActive1 + ' [data-animation]').removeClass('animated');
				});
				init.on('slideChange', animated);
			}

			animated_swiper(sliderActive1, sliderInit1);
		}
	}
	sliderActive();
	// Recent project slider
	if (jQuery(".recent-project-active-1").length > 0) {
		let swiperrecent = new Swiper('.recent-project-active-1', {
			slidesPerView: 3,
			spaceBetween: 10,
			loop: true,
			centeredSlides: true,
			rtl: false,
			infinite: false,
			grabCursor: true,


			// If we need pagination
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},

			// And if we need scrollbar
			scrollbar: {
				el: '.recent-scrollbar',
				dynamicBullets: true,
			},
			breakpoints: {
				0: {
					slidesPerView: 1,
				},
				576: {
					slidesPerView: 1,
				},
				768: {
					slidesPerView: 1,
				},
				992: {
					slidesPerView: 2,
				},
				1199: {
					slidesPerView: 2,
				},
			}

		});
	}


	// karx Testimonial
	if (jQuery(".testimonial-slider-active").length > 0) {
		let karxfooterbrand = new Swiper('.testimonial-slider-active', {
			slidesPerView: 3,
			loop: true,
			rtl: false,
			infinite: true,
			spaceBetween: 30,
			autoplay: true,

			// If we need pagination
			pagination: {
				el: ".testimonial-pagination",
				clickable: true,
			},

			breakpoints: {
				0: {
					slidesPerView: 1,
				},
				480: {
					slidesPerView: 1,
				},
				576: {
					slidesPerView: 1,
				},
				768: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 2,
				},
				1200: {
					slidesPerView: 3,
				},
			}

		});
	}

	let slider_thumb = new Swiper('.karx_testimonial_thumbs_active', {
		loop: true,
		spaceBetween: 0,
		slidesPerView: 3,
		rtl: false,
		centeredSlides: true,
		watchSlidesProgress: true,
		breakpoints: {
			320: {
				slidesPerView: 1,
			},
			576: {
				slidesPerView: 1,

			},
			768: {
				slidesPerView: 1,

			},
			993: {
				slidesPerView: 3,
			},
		}
	});
	
	let slider3 = new Swiper('.karx_testimonial_message_active', {
		loop: true,
		spaceBetween: 0,
		rtl: false,
		slidesPerView: 1,
		effect: 'fade',
		fadeEffect: {
			crossFade: true
		},
		navigation: {
			nextEl: ".karx-testimonial-2-slide-next",
			prevEl: ".karx-testimonial-2-slide-prev",
		},
		thumbs: {
			swiper: slider_thumb,
		},
	});

	// shop details active 
	var singleShopDetailsActive = new Swiper(".karx-single-shop-details-active", {
		loop: true,
		spaceBetween: 0,
		slidesPerView: 1,
		freeMode: true,
		autoplay: false,
		watchSlidesProgress: true,
	});
	var singleShopDetailsControl = new Swiper(".karx-single-shop-details-control-active", {
		loop: true,
		spaceBetween: 15,
		slidesPerView: 3,
		freeMode: true,
		autoplay: false,
		watchSlidesProgress: true,
		slideToClickedSlide: true,
		thumbs: {
			swiper: singleShopDetailsActive,
		},
		breakpoints: {
			0: {
				slidesPerView: 3,
				spaceBetween: 10,
			},
			576: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
			768: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
			992: {
				slidesPerView: 3,
			},
			1199: {
				slidesPerView: 3
			}
		}
	});

	// karx footer brand
	if (jQuery(".karx-footer-brandactive").length > 0) {
		let karxfooterbrand = new Swiper('.karx-footer-brandactive', {
			slidesPerView: 4,
			loop: true,
			rtl: false,
			infinite: true,

			breakpoints: {
				0: {
					slidesPerView: 1,
				},
				480: {
					slidesPerView: 2,
				},
				576: {
					slidesPerView: 2,
				},
				768: {
					slidesPerView: 3,
				},
				992: {
					slidesPerView: 3,
				},
				1200: {
					slidesPerView: 4,
				},
			}

		});
	}

	// karx popular slider area
	if (jQuery(".popular-slider-body-area").length > 0) {
		let karxfooterbrand = new Swiper('.popular-slider-body-area', {
			slidesPerView: 3,
			loop: true,
			rtl: false,
			infinite: true,
			grabCursor: true,
			spaceBetween: 30,
			navigation: {
				nextEl: ".popular-slider-body-next",
				prevEl: ".popular-slider-body-prev",
				clickable: true,
			},
			pagination: {
				el: ".popular-slider-service-pagination",
				type: "fraction",
			},

			breakpoints: {
				0: {
					slidesPerView: 1,
				},
				480: {
					slidesPerView: 1,

				},
				576: {
					slidesPerView: 1,

				},
				768: {
					slidesPerView: 2,

				},
				992: {
					slidesPerView: 3,

				},
				1200: {
					slidesPerView: 3,

				},
				1400: {
					slidesPerView: 3,
				},
				1600: {
					slidesPerView: 3,
				}
			}

		});
	}
	if (jQuery(".karx-blog-box-gallery").length > 0) {
		// blog box gallery active
		let blog_box_gallery = new Swiper('.karx-blog-box-gallery', {
			loop: true,
			spaceBetween: 0,
			slidesPerView: 1,
			rtl: false,
			centeredSlides: false,
			watchSlidesProgress: true,
			navigation: {
				nextEl: ".karx-blog-slider-arrow-next",
				prevEl: ".karx-blog-slider-arrow-prev",
				clickable: true,
			},
		});
	}
	// isotop
	if (jQuery(".karx-gallery-items-area").length > 0) {
		$('.karx-gallery-items-area .filter-grid').imagesLoaded(function () {
			let $grid = $('.karx-gallery-items-area .filter-grid').isotope({
				itemSelector: '.grid-item',
				percentPosition: false,
				layout: 'masonry',
				masonry: {
					columnWidth: '.grid-item'
				}
			});

			// filter items on button click
			$('.filter-nav').on('click', 'button', function () {
				let filterValue = $(this).attr('data-filter');
				$grid.isotope({ filter: filterValue });
			});

		});
	}

	//for menu active class
	$('.filter-nav button').on('click', function (event) {
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
	});

	// Active Odometer Counter 
	jQuery('.odometer').appear(function (e) {
		var odo = jQuery(".odometer");
		odo.each(function () {
			var countNumber = jQuery(this).attr("data-count");
			jQuery(this).html(countNumber);
		});
	});


	/* magnificPopup img view */
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});
	/* hero video view */
	$('.popup-video, .hero-popup-video').magnificPopup({
		type: 'iframe'
	});

	$('.karx-shop-details-content-bottom-wrap table.variations select, .wp-block-categories-dropdown.wp-block-categories select, .karx-lan select, .karx-top-lan-wrapper select, .karx-has-select, .karx-blog-sidebar select, .product-shorting-inner select, section.karx-blog-sidebar.widget_archive select, .tp-toolkit-footer-widget select,.wp-block-archives-dropdown select').niceSelect();
	// data background
	$("[data-background]").each(function () {
		$(this).css("background-image", "url(" + $(this).attr("data-background") + ") ")
	})
	// data width
	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"))
	})
	// data space
	$("[data-top-space]").each(function () {
		$(this).css("padding-top", $(this).attr("data-top-space"))
	})
	$("[data-bottom-space]").each(function () {
		$(this).css("padding-bottom", $(this).attr("data-bottom-space"))
	})
	// data background color
	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"))
	})
	//for menu active class
	$('.portfolio_nav button').on('click', function (event) {
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
	});


	// scrollToTop
	$.scrollUp({
		scrollName: 'scrollUp', // Element ID
		topDistance: '300', // Distance from top before showing element (px)
		topSpeed: 300, // Speed back to top (ms)
		animation: 'fade', // Fade, slide, none
		animationInSpeed: 200, // Animation in speed (ms)
		animationOutSpeed: 200, // Animation out speed (ms)
		scrollText: '<i class="icofont icofont-long-arrow-up"></i>', // Text for element
		activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	});

	// Jquery Appear raidal
	if (typeof ($.fn.knob) != 'undefined') {
		$('.knob').each(function () {
			var $this = $(this),
				knobVal = $this.attr('data-rel');

			$this.knob({
				'draw': function () {
					$(this.i).val(this.cv + '%')
				}
			});

			$this.appear(function () {
				$({
					value: 0
				}).animate({
					value: knobVal
				}, {
					duration: 2000,
					easing: 'swing',
					step: function () {
						$this.val(Math.ceil(this.value)).trigger('change');
					}
				});
			}, {
				accX: 0,
				accY: -150
			});
		});
	}

	// product quantity
	var productQuantity = 1;

	// quantity form 
	$('.karx-shop-details-content-quantity-box .plus').on('click', function () {
		var selectedInput = $(this).closest('.karx-shop-details-content-quantity-box').find('input');
		productQuantity += 1;
		selectedInput.attr('value', productQuantity);
	});
	$('.karx-shop-details-content-quantity-box .minus').on('click', function () {
		var selectedInput = $(this).closest('.karx-shop-details-content-quantity-box').find('input');
		productQuantity -= 1;
		if (productQuantity < 1) {
			productQuantity = 1;
		}
		selectedInput.attr('value', productQuantity);
	});
	// yith support
	$('.woocommerce.product.compare-button a').prepend('<i class="far fa-exchange"></i>');
	// WOW active
	new WOW().init();
// menu-last class
$('.karx-main-menu > nav > ul > li').slice(-3).addClass('menu-last');

})(jQuery);