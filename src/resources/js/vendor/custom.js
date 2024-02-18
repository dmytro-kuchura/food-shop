$(function () {
    "use strict";
    $(document).on("ready", function () {
        $(window).on("load", function () {
            $(".se-pre-con").fadeOut("slow");
        });

        $('.cate-inner span.opener').on("click", function () {
            if ($(this).hasClass("plus")) {
                $(this).parent().find('.mega-sub-menu').slideDown();
                $(this).removeClass('plus');
                $(this).addClass('minus');
            } else {
                $(this).parent().find('.mega-sub-menu').slideUp();
                $(this).removeClass('minus');
                $(this).addClass('plus');
            }
        });

        $("#menu span.opener, #menu-main span.opener").on("click", function () {
            var menuopener = $(this);
            if (menuopener.hasClass("plus")) {
                menuopener.parent().find('.mobile-sub-menu').slideDown();
                menuopener.removeClass('plus');
                menuopener.addClass('minus');
            } else {
                menuopener.parent().find('.mobile-sub-menu').slideUp();
                menuopener.removeClass('minus');
                menuopener.addClass('plus');
            }
        });

        $(".mobilemenu").on("click", function () {
            jQuery(".mobilemenu-content").slideToggle();
            if ($(this).hasClass("openmenu")) {
                $(this).removeClass('openmenu');
                $(this).addClass('closemenu');
            } else {
                $(this).removeClass('closemenu');
                $(this).addClass('openmenu');
            }
        });

        $('.sidebar-box span.opener').on("click", function () {
            if ($(this).hasClass("plus")) {
                $(this).parent().find('.sidebar-contant').slideDown();
                $(this).removeClass('plus');
                $(this).addClass('minus');
            } else {
                $(this).parent().find('.sidebar-contant').slideUp();
                $(this).removeClass('minus');
                $(this).addClass('plus');
            }
        });

        $('.footer-static-block span.opener').on("click", function () {
            if ($(this).hasClass("plus")) {
                $(this).parent().find('.footer-block-contant').slideDown();
                $(this).removeClass('plus');
                $(this).addClass('minus');
            } else {
                $(this).parent().find('.footer-block-contant').slideUp();
                $(this).removeClass('minus');
                $(this).addClass('plus');
            }
        });

        $('.navbar-toggle').on("click", function () {
            var menu_id = $('#menu');
            var nav_icon = $('.navbar-toggle i');
            if (menu_id.hasClass('menu-open')) {
                menu_id.removeClass('menu-open');
                nav_icon.removeClass('fa-close');
                nav_icon.addClass('fa-bar');
            } else {
                menu_id.addClass('menu-open');
                nav_icon.addClass('fa-close');
                nav_icon.removeClass('fa-bar');
            }
        });

        $('.btn-sidebar-menu-dropdown').on("click", function () {
            $('.cat-dropdown').slideToggle();
            if ($(".sidebar-block").hasClass("open1")) {
                $(".sidebar-block").addClass("close1").removeClass("open1");
            } else {
                $(".sidebar-block").addClass("open1").removeClass("close1");
            }
        });

        $('.content-link').on("click", function () {
            $('.content-dropdown').toggle();
        });

        $("#menu span.opener, #menu-main span.opener").on("click", function () {
            var menuopener = $(this);
            if (menuopener.hasClass("plus")) {
                menuopener.parent().find('.mobile-sub-menu').slideDown();
                menuopener.removeClass('plus');
                menuopener.addClass('minus');
            } else {
                menuopener.parent().find('.mobile-sub-menu').slideUp();
                menuopener.removeClass('minus');
                menuopener.addClass('plus');
            }
        });

        $(".mobilemenu").on("click", function () {
            jQuery(".mobilemenu-content").slideToggle();
            if ($(this).hasClass("openmenu")) {
                $(this).removeClass('openmenu');
                $(this).addClass('closemenu');
            } else {
                $(this).removeClass('closemenu');
                $(this).addClass('openmenu');
            }
        });

        $('.sidebar-box span.opener').on("click", function () {

            if ($(this).hasClass("plus")) {
                $(this).parent().find('.sidebar-contant').slideDown();
                $(this).removeClass('plus');
                $(this).addClass('minus');
            } else {
                $(this).parent().find('.sidebar-contant').slideUp();
                $(this).removeClass('minus');
                $(this).addClass('plus');
            }
        });

        $('.footer-static-block span.opener').on("click", function () {

            if ($(this).hasClass("plus")) {
                $(this).parent().find('.footer-block-contant').slideDown();
                $(this).removeClass('plus');
                $(this).addClass('minus');
            } else {
                $(this).parent().find('.footer-block-contant').slideUp();
                $(this).removeClass('minus');
                $(this).addClass('plus');
            }
        });

        $('.navbar-toggle').on("click", function () {
            if ($('#menu').hasClass('menu-open')) {
                $('#menu').removeClass('menu-open');
                $('.navbar-toggle i').removeClass('fa-close');
                $('.navbar-toggle i').addClass('fa-bar');
            } else {
                $('#menu').addClass('menu-open');
                $('.navbar-toggle i').addClass('fa-close');
                $('.navbar-toggle i').removeClass('fa-bar');
            }
        });

        $('.btn-sidebar-menu-dropdown').on("click", function () {
            $('.cat-dropdown').slideToggle();
            if ($(".sidebar-block").hasClass("open1")) {
                $(".sidebar-block").addClass("close1").removeClass("open1");
            } else {
                $(".sidebar-block").addClass("open1").removeClass("close1");
            }
        });

        $('.content-link').on("click", function () {
            $('.content-dropdown').toggle();
        });

        $('.pro-cat-slider').owlCarousel({
            items: 4,
            navigation: true,
            pagination: false,
            itemsDesktop: [1769, 4],
            itemsDesktopSmall: [1199, 3],
            itemsTablet: [768, 2],
            itemsTabletSmall: false,
            itemsMobile: [479, 2]
        });

        $('.sub_menu_slider').owlCarousel({
            items: 1,
            navigation: true,
            pagination: false,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [991, 1],
            itemsTablet: [768, 1],
            itemsTabletSmall: false,
            itemsMobile: [479, 1]
        });

        $('.tab_slider').owlCarousel({
            items: 4,
            navigation: true,
            pagination: false,
            itemsDesktop: [1769, 4],
            itemsDesktopSmall: [1199, 3],
            itemsTablet: [768, 2],
            itemsTabletSmall: false,
            itemsMobile: [479, 2]
        });

        $('.best-seller-pro').owlCarousel({
            items: 4,
            navigation: true,
            pagination: false,
            itemsDesktop: [1769, 3],
            itemsDesktopSmall: [991, 2],
            itemsTablet: [767, 1],
            itemsTabletSmall: false,
            itemsMobile: [500, 1]
        });

        $('#blog').owlCarousel({
            items: 2,
            navigation: true,
            pagination: false,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [991, 1],
            itemsTablet: [768, 1],
            itemsTabletSmall: false,
            itemsMobile: [479, 1]
        });

        $(".main-banner, #sidebar-product, #client").owlCarousel({
            //navigation : true,  Show next and prev buttons
            slideSpeed: 300, paginationSpeed: 400, autoPlay: false, pagination: true, singleItem: true, navigation: true
        });

        $(window).scroll(function () {
            if ($(this).scrollTop() > 0) {
                $('.scrollup').fadeIn(300);
            } else {
                $('.scrollup').fadeOut(300);
            }
            if ($(this).scrollTop() > 130) {
                $('header').addClass("header-fixed");
            } else {
                $('header').removeClass("header-fixed");
            }
            if ($(this).scrollTop() > 0) {
                $('.main').addClass("main-fixed");
            } else {
                $('.main').removeClass("main-fixed");
            }
        });

        $('.scrollup').on("click", function () {
            $("html, body").animate({scrollTop: 0}, 1000);
            return false;
        });

        $('.account-tab-stap').on('click', 'li', function () {
            $('.account-tab-stap li').removeClass('active');
            $(this).addClass('active');

            $(".account-content").fadeOut();
            var currentLiID = $(this).attr('id');
            $("#data-" + currentLiID).fadeIn();
            return false;
        });

        $("#tabs li a").on("click", function (e) {
            var title = $(e.currentTarget).attr("title");
            $("#tabs li a , .tab_content li div").removeClass("selected");
            $(".tab-" + title + ", .items-" + title).addClass("selected");
            $("#items").attr("class", "tab-" + title);

            return false;
        });

        $('li.search-box').on('click', function () {
            $('.sidebar-search-wrap').addClass('open').siblings().removeClass('open');
            return false;
        });

        $('.search-closer').on('click', function () {
            var sidebar = $('.sidebar-navigation');
            var nav_icon = $('.navbar-toggle i');
            if (sidebar.hasClass('open')) {
                //sidebar.removeClass('open');
            } else {
                sidebar.addClass('open');
                nav_icon.addClass('fa-search-close');
                nav_icon.removeClass('fa-search-bars');
            }

            $('.sidebar-search-wrap').removeClass('open');
            return false;
        });

        $('.shorting .view').on('click', '.list-types', function () {
            if ($(this).hasClass("list")) {
                $(this).addClass("active");
                $(".shorting .view .list-types.grid").removeClass("active");
                $(".product-listing").removeClass("grid-type").addClass("list-type");
                $(".product-listing .img-col").removeClass("col-12").addClass("col-4");
                $(".product-listing .detail-col").removeClass("col-12").addClass("col-8");
            }
            if ($(this).hasClass("grid")) {
                $(this).addClass("active");
                $(".shorting .view .list-types.list").removeClass("active");
                $(".product-listing").removeClass("list-type").addClass("grid-type");
                $(".product-listing .img-col").removeClass("col-4").addClass("col-12");
                $(".product-listing .detail-col").removeClass("col-8").addClass("col-12");
            }
        });

        $(".latest-pro").slice(0, 8).show();
        $("#loadMore-latest").on('click', function (e) {
            e.preventDefault();
            $(".latest-pro:hidden").slice(0, 4).slideDown();
            if ($(".latest-pro:hidden").length == 0) {
                $("#load").fadeOut('slow');
            }
        });

        $(".featured-pro").slice(0, 8).show();
        $("#loadMore-featured").on('click', function (e) {
            e.preventDefault();
            $(".featured-pro:hidden").slice(0, 4).slideDown();
            if ($(".featured-pro:hidden").length == 0) {
                $("#load").fadeOut('slow');
            }
        });

        $(".most-viewed-pro").slice(0, 8).show();
        $("#loadMore-most").on('click', function (e) {
            e.preventDefault();
            $(".most-viewed-pro:hidden").slice(0, 4).slideDown();
            if ($(".most-viewed-pro:hidden").length == 0) {
                $("#load").fadeOut('slow');
            }
        });

        $('.slidebar-open').on("click", function () {
            var menu_id = $('.shop-list');
            var nav_icon = $('.slidebar-open');
            if (menu_id.hasClass('menu-open')) {
                menu_id.removeClass('menu-open');
                nav_icon.removeClass('fa-closed');
                nav_icon.addClass('fa-bar');
            } else {
                menu_id.addClass('menu-open');
                nav_icon.addClass('fa-closed');
                nav_icon.removeClass('fa-bar');
            }
        });

        $('.cate-inner span.opener').on("click", function () {
            if ($(this).hasClass("plus")) {
                $(this).parent().find('.mega-sub-menu').slideDown();
                $(this).removeClass('plus');
                $(this).addClass('minus');
            } else {
                $(this).parent().find('.mega-sub-menu').slideUp();
                $(this).removeClass('minus');
                $(this).addClass('plus');
            }
        });
    });
});
