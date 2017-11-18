var viewport = $(window).width();

if (viewport > 1200) {
    portfolio = 500;
    services = 900;
} else if (viewport <= 1200 && viewport >= 901) {
    portfolio = 200;
    services = 550;
} else if (viewport <= 900 && viewport >= 801) {
    portfolio = 150;
    services = 450;
} else if (viewport <= 800 && viewport >= 701) {
    portfolio = 100;
    services = 350;
} else if (viewport <= 700 && viewport >= 561) {
    portfolio = 100;
    services = 1000;
} else if (viewport <= 560 && viewport >= 501) {
    portfolio = 70;
    services = 1000;
} else if (viewport <= 500 && viewport >= 401) {
    portfolio = 50;
    services = 800;
} else if (viewport <= 400 && viewport >= 301) {
    portfolio = 1;
    services = 600;
} 

$(window).scroll(function() {
    if ($(window).scrollTop() > portfolio ) {
        $('#portfolio').addClass('show');
    } else {
        $('#portfolio').removeClass('show');
    }
});

$(window).scroll(function() {
    if ($(window).scrollTop() > services ) {
        $('#services').addClass('show');
    } else {
        $('#services').removeClass('show');
    }
});


