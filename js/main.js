//used at start and with scroling
function scrolling() {
    scrollTop = $(document).scrollTop(); //scroll position
    $('.bg-1').css('top', scrollTop * 0.8); //scrolling
    if (scrollTop > 350) { //hide and show bar title when scrolling
        $('.nav-box__title a').fadeIn();
    } else {
        $('.nav-box__title a').fadeOut();
    }
}

//menu highlighting and contact banner show and hide
var aChildren = $(".nav li").children(); // find the a children of the list items
var aArray = []; // create the empty aArray
for (var i = 0; i < aChildren.length; i++) {
    var aChild = aChildren[i];
    var ahref = $(aChild).attr('href');
    aArray.push(ahref);
} // this for loop fills the aArray with attribute href values

function highlighting() {
    var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
    var windowHeight = $(window).height(); // get the height of the window
    var docHeight = $(document).height();

    for (var i = 0; i < aArray.length; i++) {
        var theID = aArray[i];
        var divPos = $(theID).offset().top; // get the offset of the div from the top of page
        var divHeight = $(theID).height(); // get the height of the div in question
        if (windowPos >= divPos - 50 && windowPos < (divPos + divHeight) - 50) {
            $("a[href='" + theID + "']").addClass("nav-active");
            if (theID == '#kontakt' || theID == '#napistemi') {
                $('.banner').css({'visibility': 'hidden'});
            } //hide and show contact banner
            else {
                $('.banner').css({'visibility': 'visible'});
            }
        } else {
            $("a[href='" + theID + "']").removeClass("nav-active");
        }
    }

    if (windowPos + windowHeight == docHeight) {
        if (!$(".nav li:last-child a").hasClass("nav-active")) {
            var navActiveCurrent = $(".nav-active").attr("href");
            $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
            $(".nav li:last-child a").addClass("nav-active");
        }
    }
}

$(document).ready(function () {
    $('.banner').css({'visibility': 'visible'});
    scrolling();
    highlighting();
    $(window).scroll(function () {
        scrolling();
        highlighting();
    });

    $('.nav-box').css('position', 'fixed'); //change bar "position" when JS is loaded

    $('a.button').on('click', function (e) { //scroll effect in menu
        var odkaz = $(this).attr('href'),
            menu = $('#nav'),
            rychlost = 2 * 1000,
            efekt = "easeOutExpo";

        $("html, body").stop().animate(
            {scrollTop: $(odkaz).offset().top - menu.height()},
            rychlost, efekt);

        e.preventDefault();
        if ($('.nav-box__ham').css('display') == 'block') {
            $('.nav-box__nav').slideUp(300); //hde menu in mobile
        }
    });


    $('.nav-box__ham').click(function () { //mobile menu slide effect
        $('.nav-box__nav').slideToggle(500)
    });

    $('.bg-6__grey').on('click', function () { //remove layer when is clicked ond map
        $(this).stop().fadeOut();
        $('.bg-6 iframe').removeClass('bg-6--grey');
    });

    $('.banner__show').click(function () { //open and close and change color in contact banner
        if (parseInt($(this).parent().css('right'), 10) < 0) {
            $('.banner__body').animate({'border-color': '#2b4500', 'right': '0'}, 500, 'easeOutExpo');
            $('.banner').animate({'right': '0'}, 500, 'easeOutExpo');
            $(this).animate({'background-color': '#2b4500'}, 500, 'easeOutExpo');
        } else {
            $(this).animate({'background-color': 'rgba(43, 69, 0, 0.8)'}, 500, 'easeOutExpo');
            $('.banner__body').animate({'border-color': 'rgba(43, 69, 0, 0.8)', 'right': '-380px'}, 500, 'easeOutExpo');
            $('.banner').animate({'right': '-365px'}, 500, 'easeOutExpo');
        }
    }).mouseenter(function () { //hover effect
        if (parseInt($('.banner').css('right'), 10) == -365) {
            $(this).stop().animate({'background-color': '#2b4500'}, 500, 'easeOutExpo')
        }
    }).mouseleave(function () { //hover effect
        if (parseInt($('.banner').css('right'), 10) == -365) {
            $(this).stop().animate({'background-color': 'rgba(43, 69, 0, 0.8)'}, 500, 'easeOutExpo')
        }
    });

    jQuery.extend(jQuery.validator.messages, {required: ""}); //form validation
    $("#form1").validate();
    $('#form1').ajaxForm({'target': '.response1'}); //response when form is send
    $("#form2").validate();
    $('#form2').ajaxForm({'target': '.response2'}); //response when form is send

});

