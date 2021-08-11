/*
    * responsiveMenu
    * responsiveMenuMega
    * searchButton
    * slider
    * slideProduct
    * slideCounter
    * slideMostViewer
    * slideMostViewer_s2
    * slideMostViewer_s3
    * slideMostViewer_s4
    * slideBrand
    * slideAccessories
    * slideTeam
    * slideBrand_s2
    * slideProduct_s2
    * slider_s2
    * slideProduct_s3
    * slideProduct_s4
    * slideProduct_s5
    * slideProduct_s6
    * slideTestimonial
    * CountDown
    * CountDown_s2
    * tabImagebox
    * tabImagebox_s2
    * tabProductDetail
    * tabElement
    * tabSortproduct
    * overlay
    * FilterPrice();
    * toggleWidget
    * toggleCatlist
    * toggleDropdown
    * toggleLocation
    * showSuggestions
    * showAllcat
    * accordionToggle
    * flexProduct
    * progressBar
    * detectViewport
    * progressCircle
    * BrandsIsotope
    * scrollbarCheckbox
    * scrollbarLocation
    * scrollbarTableCart
    * scrollbarWishlist
    * scrollbarCategories
    * scrollbarSearch
    * googleMap
    * googleMap_s2
    * goTop
    * zoomImage
    * popup
**/

;(function($) {

    'use strict'
         var isMobile = {
             Android: function() {
                 return navigator.userAgent.match(/Android/i);
             },
             BlackBerry: function() {
                 return navigator.userAgent.match(/BlackBerry/i);
             },
             iOS: function() {
                 return navigator.userAgent.match(/iPhone|iPad|iPod/i);
             },
             Opera: function() {
                 return navigator.userAgent.match(/Opera Mini/i);
             },
             Windows: function() {
                 return navigator.userAgent.match(/IEMobile/i);
             },
             any: function() {
                 return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
             }
         }; // is Mobile



         var responsiveMenuMega_S2 = function() {
             var menuType = 'desktop';

             $(window).on('load resize', function() {
                 var currMenuType = 'desktop';

                 if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
                     currMenuType = 'mobile';
                 }

                 if ( currMenuType !== menuType ) {
                     menuType = currMenuType;

                     if ( $('body').hasClass('grid') ) {
                         if (currMenuType === 'mobile') {
                             var $mobileMenuMegaV2 = $('#mega-menu').attr('id', 'mega-mobile').hide();
                             var ChildMenuMegaV2 = $('.header-bottom').find('.grid-right');
                             var ChildDropmenuV2 = $('.drop-menu').children('.one-third');

                             $('.btn-mega').hide();
                             $('#header').after($mobileMenuMegaV2);
                             ChildMenuMegaV2.append('<div class="btn-menu-mega"><span></span></div>');

                             $('.drop-menu').hide();
                             $mobileMenuMegaV2.find('.dropdown').append('<span class="btn-dropdown"></span>');

                             ChildDropmenuV2.children('ul').hide();
                             $('.drop-menu').find('.cat-title').append('<span class="btn-dropdown-child"></span>');

                         } else {
                             var $desktopMenuMegaV2 = $('#mega-mobile').attr('id', 'mega-menu').removeAttr('style');

                             $desktopMenuMegaV2.find('.drop-menu').removeAttr('style');
                             $('.header-bottom.style1').find('.grid-left').append($desktopMenuMegaV2);
                         }
                     };

                 };

             });


             $(document).on('click', '#mega-mobile ul.menu li a .btn-dropdown', function(e) {
                 $(this).toggleClass('active').closest('li').children('.drop-menu').slideToggle(400);
                 e.stopImmediatePropagation();
                 return false;
             });

             $(document).on('click', '#mega-mobile .btn-dropdown-child', function(e) {
                 $(this).toggleClass('active').closest('.one-third').children('ul').slideToggle(400);
                 e.stopImmediatePropagation();
                 return false;
             });

         }; // Responsive Menu Mega S2

         var responsiveMenuMega = function() {
             var menuType = 'desktop';

             $(window).on('load resize', function() {
                 var currMenuType = 'desktop';

                 if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
                     currMenuType = 'mobile';
                 }

                 if ( currMenuType !== menuType ) {
                     menuType = currMenuType;

                     if ( currMenuType === 'mobile' ) {
                         var $mobileMenuMega = $('#mega-menu').attr('id', 'mega-mobile').hide();
                         var ChildMenuMega = $('.header-bottom').find('.col-2');
                         var ChildDropmenu = $('.drop-menu').children('.one-third');

                         $('.btn-mega').hide();
                         $('#header').after($mobileMenuMega);
                         ChildMenuMega.append('<div class="btn-menu-mega"><span></span></div>');

                         $('.drop-menu').hide();
                         $mobileMenuMega.find('.dropdown').append('<span class="btn-dropdown"></span>');

                         ChildDropmenu.children('ul').hide();
                         $('.drop-menu').find('.cat-title').append('<span class="btn-dropdown-child"></span>');

                     } else {
                         var $desktopMenuMega = $('#mega-mobile').attr('id', 'mega-menu').removeAttr('style');

                         $('.btn-mega').show();
                         $desktopMenuMega.find('.drop-menu').removeAttr('style');
                         $('.header-bottom').find('.col-2').append($desktopMenuMega);
                         $('.btn-menu-mega').remove();
                         $('.btn-dropdown-child').remove();
                         $('.drop-menu').children('.one-third').children('ul').show();
                     }
                 }
             });

             $(document).on('click', '.btn-menu-mega', function() {
                 $('#mega-mobile').slideToggle(300);
                 $(this).toggleClass('active');
                 return false;
             });

             $(document).on('click', '#mega-mobile ul.menu li a .btn-dropdown', function(e) {
                 $(this).toggleClass('active').closest('li').children('.drop-menu').slideToggle(400);
                 e.stopImmediatePropagation();
                 return false;
             });

             $(document).on('click', '#mega-mobile .btn-dropdown-child', function(e) {
                 $(this).toggleClass('active').closest('.one-third').children('ul').slideToggle(400);
                 e.stopImmediatePropagation();
                 return false;
             });


         }; // Responsive Menu Mega

         var scrollbarCategories = function() {
             if ( $().mCustomScrollbar ) {
                $(".all-categories").mCustomScrollbar({
                 scrollInertia:400,
                 theme:"light-3",
                });
             }
         }; // Scrollbar Categories


         var toggleCatlist = function() {
             $('.cat-list.style1').each(function() {
                 $(this).children('li').children('ul.cat-child').hide();
                 // $(this).children('li').children('ul.cat-child').first().show()
                 $( ".cat-list.style1 li span" ).on('click', function() {
                     $(this).parent('li').toggleClass('active');
                     $(this).toggleClass('active');
                     $(this).parent('li').children('ul.cat-child').slideToggle(300);
                     // var liActive = $(this).index(),
                     // contentActive = $(this).parent('li').siblings().removeClass('active').children('ul-cat-child').eq(liActive);
                     // contentActive.addClass('active').parent('li').fadeIn("slow");
                     // contentActive.parent('li').siblings().removeClass('active');
                     // $(this).parent('li').addClass('active').children('.ul-cat-child').eq(liActive).siblings().hide();
                 });
             })
         }; // Toggle Cat List


         var showAllcat = function() {
             $('.cat-wrap').each(function() {
                 $(this).on('click', function() {
                     $(this).children('.all-categories').toggleClass('show');
                 });
             });
         };


     // Dom Ready
     $(function() {
         responsiveMenu();
         responsiveMenuMega_S2();
         responsiveMenuMega();
         toggleCatlist();
         toggleDropdown();
         showAllcat();
         scrollbarCategories();
         scrollbarSearch();
     });

 })(jQuery);
