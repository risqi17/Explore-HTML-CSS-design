jQuery(document).ready(function($){$(window).on('elementor/frontend/init',function(){$(".twae-horizontal.swiper-container").each(function(index){var slidestoshow=$(this).data("slidestoshow");var autoplay=$(this).data("autoplay");var swiper=new Swiper($(this),{spaceBetween:10,autoplay:autoplay,delay:5000,slidesPerView:slidestoshow,direction:'horizontal',pagination:{el:'.twae-pagination',type:'progressbar',},navigation:{nextEl:'.twae-button-next',prevEl:'.twae-button-prev',},breakpoints:{320:{slidesPerView:1,},480:{slidesPerView:2,},640:{slidesPerView:slidestoshow,}},});});});});