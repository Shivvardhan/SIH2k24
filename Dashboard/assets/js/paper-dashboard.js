var fixedTop = false;
var transparent = true;
var navbar_initialized = false;
var mobile_menu_initialized = false;

$(document).ready(function() {
    window_width = $(window).width();
    if (window_width <= 991) {
        pd.initRightMenu();
    }
    $('[rel="tooltip"]').tooltip();
});

$(document).on('click', '.navbar-toggle', function() {
    $toggle = $(this);
    if (pd.misc.navbar_menu_visible == 1) {
        $('html').removeClass('nav-open');
        pd.misc.navbar_menu_visible = 0;
        $('#bodyClick').remove();
        setTimeout(function() {
            $toggle.removeClass('toggled');
        }, 400);
    } else {
        setTimeout(function() {
            $toggle.addClass('toggled');
        }, 430);
        div = '<div id="bodyClick"></div>';
        $(div).appendTo("body").click(function() {
            $('html').removeClass('nav-open');
            pd.misc.navbar_menu_visible = 0;
            $('#bodyClick').remove();
            setTimeout(function() {
                $toggle.removeClass('toggled');
            }, 400);
        });
        $('html').addClass('nav-open');
        pd.misc.navbar_menu_visible = 1;
    }
});

$(window).resize(function() {
    if ($(window).width() <= 991) {
        pd.initRightMenu();
    }
});

pd = {
    misc: {
        navbar_menu_visible: 0
    },
    checkScrollForTransparentNavbar: debounce(function() {
        if ($(document).scrollTop() > 381) {
            if (transparent) {
                transparent = false;
                $('.navbar-color-on-scroll').removeClass('navbar-transparent');
                $('.navbar-title').removeClass('hidden');
            }
        } else {
            if (!transparent) {
                transparent = true;
                $('.navbar-color-on-scroll').addClass('navbar-transparent');
                $('.navbar-title').addClass('hidden');
            }
        }
    }),
    initRightMenu: debounce(function() {
        var $sidebar_wrapper = $('.sidebar-wrapper');
        var $sidebar = $('.sidebar');
        if (!mobile_menu_initialized) {
            var $navbar = $('nav').find('.navbar-collapse').children('.navbar-nav');
            mobile_menu_content = '';
            nav_content = $navbar.html();
            nav_content = '<ul class="nav nav-mobile-menu">' + nav_content + '</ul>';
            $sidebar_nav = $sidebar_wrapper.find(' > .nav');
            $sidebar.addClass('off-canvas-sidebar');
            $nav_content = $(nav_content);
            $nav_content.insertBefore($sidebar_nav);
            $(".sidebar-wrapper .dropdown .dropdown-menu > li > a").click(function(event) {
                event.stopPropagation();
            });
            window.dispatchEvent(new Event('resize'));
            mobile_menu_initialized = true;
        } else {
            if ($(window).width() > 991) {
                $sidebar_wrapper.find('.nav-mobile-menu').remove();
                $sidebar.removeClass('off-canvas-sidebar');
                mobile_menu_initialized = false;
            }
        }
    }, 200)
}

function debounce(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this,
            args = arguments;
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        }, wait);
        if (immediate && !timeout) func.apply(context, args);
    };
}
