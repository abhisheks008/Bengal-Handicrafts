const breakpoint = [{
        breakpoint: 1280,
        settings: {
            slidesToShow: 4
        }
    },
    {
        breakpoint: 1009,
        settings: {
            slidesToShow: 3
        }
    },
    {
        breakpoint: 720,
        settings: {
            slidesToShow: 2
        }
    },
    {
        breakpoint: 460,
        settings: {
            slidesToShow: 1
        }
    }
];

/**  First Slider */
$(".slider-one")
    .not(".slick-intialized")
    .slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        prevArrow: ".site-slider .slider-btn .prev",
        nextArrow: ".site-slider .slider-btn .next"
    });

/**  Second  Slider */
$(".slider-two")
    .not(".slick-intialized")
    .slick({
        prevArrow: ".site-slider-two .prev",
        nextArrow: ".site-slider-two .next",
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        responsive: breakpoint
    });

/**  Third  Slider */
$(".slider-three")
    .not(".slick-intialized")
    .slick({
        prevArrow: ".site-slider-three .prev",
        nextArrow: ".site-slider-three .next",
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        infinite: false,
        responsive: breakpoint
    });

/**  Four  Slider */
$(".slider-four")
    .not(".slick-intialized")
    .slick({
        prevArrow: ".site-slider-four .prev",
        nextArrow: ".site-slider-four .next",
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        infinite: false,
        responsive: breakpoint
    });

/**  Five Slider */
$(".slider-five")
    .not(".slick-intialized")
    .slick({
        prevArrow: ".slider-brand .prev",
        nextArrow: ".slider-brand .next",
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        infinite: true,
        responsive: breakpoint
    });

/**  Six Slider */
$(".slider-six")
    .not(".slick-intialized")
    .slick({
        prevArrow: "",
        nextArrow: "",
        autoplaySpeed: 3000,
        infinite: true,
        autoplay: true,
        dots: true
    });

function validateForm() {
    var name = document.getElementById('name').value;
    if (name == "") {
        document.querySelector('.status').innerHTML = "Name cannot be empty";
        return false;
    }
    var email = document.getElementById('email').value;
    if (email == "") {
        document.querySelector('.status').innerHTML = "Email cannot be empty";
        return false;
    } else {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(email)) {
            document.querySelector('.status').innerHTML = "Email format invalid";
            return false;
        }
    }
    var subject = document.getElementById('subject').value;
    if (subject == "") {
        document.querySelector('.status').innerHTML = "Subject cannot be empty";
        return false;
    }
    var message = document.getElementById('message').value;
    if (message == "") {
        document.querySelector('.status').innerHTML = "Message cannot be empty";
        return false;
    }
    document.querySelector('.status').innerHTML = "Sending...";
}