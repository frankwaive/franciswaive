jQuery(function($) {

    $("header .genesis-nav-menu, .nav-primary .genesis-nav-menu, .nav-secondary .genesis-nav-menu").addClass("responsive-menu").before('<div class="responsive-menu-icon"></div></div></nav>');
    $(".footer-widgets .widget-area").addClass("small-12 large-4 columns");
    $("ul#menu-francis").before('</div> </nav');

    $(".responsive-menu-icon").click(function() {
        $(this).next("header .genesis-nav-menu, .nav-primary .genesis-nav-menu, .nav-secondary .genesis-nav-menu").slideToggle();
    });

    $(window).resize(function() {
        if (window.innerWidth > 1440) {
            $("header .genesis-nav-menu, .nav-primary .genesis-nav-menu, .nav-secondary .genesis-nav-menu, nav .sub-menu").removeAttr("style");
            $(".responsive-menu > .menu-item").removeClass("menu-open");
        }
    });

    $(".responsive-menu > .menu-item").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find(".sub-menu:first").slideToggle(function() {
            $(this).parent().toggleClass("menu-open");
        });
    });

});