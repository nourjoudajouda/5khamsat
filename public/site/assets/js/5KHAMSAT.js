// Code By Webdevtrick ( https://webdevtrick.com )
function timeLeft(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 150090) % 60);
    var minutes = Math.floor((t / 150090 / 60) % 60);
    var hours = Math.floor((t / (150090 * 60 * 60)) % 24);
    var days = Math.floor(t / (150090 * 60 * 60 * 24));
    return {
        total: t,
        days: days,
        hours: hours,
        minutes: minutes,
        seconds: seconds,
    };
}

$(document).ready(function () {
    var today = new Date();
    var deadline = "January 1 " + (today.getFullYear() + 1) + " 00:00:00";
    if (today.getMonth() == 0 && today.getDate() == 1) {
        deadline = "January 1 " + today.getFullYear() + " 00:00:00";
    }

    $("#header").hover(function () {
        $(this).toggleClass("bluelight");
    });

    $(".clock").hover(function () {
        $(this).toggleClass("bluelight");
    });

    var setClock = function (newyear) {
        var timeinterval = setInterval(function () {
            var t = timeLeft(newyear);
            $("#days").text(t.days);
            $("#hours").text(t.hours);
            $("#mins").text(("0" + t.minutes).slice(-2));
            $("#secs").text(("0" + t.seconds).slice(-2));
            if (t.total <= 0) {
                clearInterval(timeinterval);
                var now = new Date();
                var yearStr = now.getFullYear().toString();
                $("#header").text("Happy New Year!!!");
                $("#days").text(yearStr[0]);
                $("#days-text").text("Happy");
                $("#hours").text(yearStr[1]);
                $("#hours-text").text("New");
                $("#mins").text(yearStr[2]);
                $("#mins-text").text("Year");
                $("#secs").text(yearStr[3]);
                $("#secs-text").text("!!!");
                $("#info").text("Countdown starts again tomorrow!");
            }
        }, 150090);
    };

    setClock(deadline);
});
$(document).ready(function () {
    var trigger = $(".hamburger"),
        overlay = $(".overlay"),
        isClosed = false;

    trigger.click(function () {
        hamburger_cross();
    });

    function hamburger_cross() {
        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass("is-open");
            trigger.addClass("is-closed");
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass("is-closed");
            trigger.addClass("is-open");
            isClosed = true;
        }
    }

    $('[data-toggle="offcanvas"]').click(function () {
        $("#wrapper").toggleClass("toggled");
    });
});
$('#carousel1').owlCarousel({
    autoplay: false,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: true,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    margin: 5,
    padding: 5,
            rtl: true,

    stagePadding: 5,
    responsive: {
        0: {
            items: 1 ,
            dots: false
        },
        769: {
            items: 2
        },
        1150: {
            items: 3
        }
    }
})
$('#carousel2').owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: true,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    margin: 5,
    padding: 5,
    rtl: true,
    stagePadding: 5,
    responsive: {
        0: {
            items: 1 ,
            dots: false
        },
        769: {
            items: 2
        },
        1150: {
            items: 3
        }
    }
})
$('#carousel3').owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: true,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    margin: 5,
    rtl: true,
    padding: 5,
    stagePadding: 5,
    responsive: {
        0: {
            items: 1 ,
            dots: false
        },
        769: {
            items: 2
        },
        1150: {
            items: 3
        }
    }
})
$('#carousel4').owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: true,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    rtl: true,
    margin: 5,
    padding: 5,
    stagePadding: 5,
    responsive: {
        0: {
            items: 1 ,
            dots: false
        },
        769: {
            items: 2
        },
        1150: {
            items: 3
        }
    }
})
$('#carousel5').owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: true,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    margin: 5,
    padding: 5,
    rtl: true,
    stagePadding: 5,
    responsive: {
        0: {
            items: 1 ,
            dots: false
        },
        769: {
            items: 2
        },
        1150: {
            items: 3
        }
    }
})
$('#carousel6').owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: true,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    margin: 5,
    padding: 5,
    rtl: true,
    stagePadding: 5,
    responsive: {
        0: {
            items: 1 ,
            dots: false
        },
        769: {
            items: 2
        },
        1150: {
            items: 3
        }
    }
})
$('#free-shopping').owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: true,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    rtl: true,
    dots:false,
    margin: 5,
    // padding: 5,
    // stagePadding: 5,
    responsive: {
        0: {
            items: 1 
        },
        577:{
            items: 2
        },
        633:{
            items: 2
        },
        769: {
            items: 3
        },
        992: {
            items: 5
        }
    }
})
$('#featurers').owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: true,
    rtl: true,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    dots:false,
    margin: 5,
    // padding: 5,
    // stagePadding: 5,
    responsive: {
        0: {
            items: 1 
        },
        577:{
            items: 2
        },
        633:{
            items: 2
        },
        769: {
            items: 3
        },
        992: {
            items: 3
        }
    }
})
$('#accessories').owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: true,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    dots:false,
    rtl: true,
    margin: 5,
    // padding: 5,
    // stagePadding: 5,
    responsive: {
        0: {
            items: 1 
        },
        577:{
            items: 2
        },
        633:{
            items: 2
        },
        769: {
            items: 3
        },
        992: {
            items: 5
        }
    }
})
$('#pajamas').owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: true,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    dots:false,
    margin: 5,
    rtl: true,

    // padding: 5,
    // stagePadding: 5,
    responsive: {
        0: {
            items: 1 
        },
        577:{
            items: 2
        },
        633:{
            items: 2
        },
        769: {
            items: 3
        },
        992: {
            items: 5
        }
    }
})
$('#jewelry').owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: true,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    rtl: true,
    dots:false,
    margin: 5,
    // padding: 5,
    // stagePadding: 5,
    responsive: {
        0: {
            items: 1 
        },
        577:{
            items: 2
        },
        633:{
            items: 2
        },
        769: {
            items: 3
        },
        992: {
            items: 5
        }
    }
})

$('#tshirts').owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: true,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    dots:false,
    rtl: true,
    margin: 5,
    // padding: 5,
    // stagePadding: 5,
    responsive: {
        0: {
            items: 1 
        },
        577:{
            items: 2
        },
        633:{
            items: 2
        },
        769: {
            items: 3
        },
        992: {
            items: 5
        }
    }
})
$('#whatis').owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: false,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    margin: 5,
    rtl: true,
    padding: 5,
    stagePadding: 5,
    responsive: {
        0: {
            items: 1 ,
            dots: false
        },
        769: {
            items: 2
        },
        1150: {
            items: 3
        }
    }
})

$('#clients').owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 1000,
    nav: false,
    navText :["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"] ,
    loop: true,
    lazyLoad: true,
    margin: 5,
    rtl: true,

    padding: 5,
    stagePadding: 5,
    responsive: {
        0: {
            items: 1 ,
            dots: false
        },
        769: {
            items: 1
        },
        1150: {
            items: 1
        }
    }
})