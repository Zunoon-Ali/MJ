// this js is for gallery animation
const images = document.querySelectorAll(".gallery-image");
let current = 0;
const total = images.length;

function showNextImage() {
    // Hide all images
    images.forEach((img, i) => {
        img.style.opacity = 1;
        img.style.zIndex = 1;
    });

    // Show current image with rotation
    const activeImage = images[current];
    activeImage.style.opacity = 1;
    activeImage.style.zIndex = 3;
    activeImage.style.animation = "rotatePop 1s ease-in-out";

    // Remove animation after done to allow replay next time
    setTimeout(() => {
        activeImage.style.animation = "";
    }, 5000);

    // Move to next
    current = (current + 1) % total;
}

// Start the loop
setInterval(showNextImage, 2000); // every 2 seconds
// this js is for gallery animation


// this js is for aos animation
function handleAOS() {
    if (typeof AOS !== 'undefined') {
        if (window.innerWidth > 768) {
            AOS.init();
        } else {
            const aosElements = document.querySelectorAll('[data-aos]');
            aosElements.forEach(el => {
                el.removeAttribute('data-aos');
                el.style.opacity = 1;
                el.style.transform = 'none';
            });
        }
    } else {
        console.warn("AOS is not loaded.");
    }
}

document.addEventListener('DOMContentLoaded', () => {
    handleAOS();

    window.addEventListener('resize', () => {
        handleAOS();
    });
});
// this js is for aos animation 


// this js is for loader 
window.addEventListener('load', () => {
    setTimeout(() => {
        const loader = document.getElementById('loader');
        if (loader) {
            loader.classList.add('hide');
        }
    }, 3000);
});

// this js is for loader 




// sell_slider end
$(document).ready(function () {
    $('.sell_slider').slick({
        dots: false,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    // Custom buttons for navigation
    $('.prev-slide1').click(function () {
        $('.sell_slider').slick('slickPrev'); // Go to previous slide
    });

    $('.next-slide1').click(function () {
        $('.sell_slider').slick('slickNext'); // Go to next slide
    });
});

// sell_slider end



// Testi slider start
$(".testi_slider").slick({
    dots: false,
    arrows: true,
    infinite: true,
    autoPlay: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1200,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            autoPlay: true,
            infinite: true,
            dots: false,
        },
    },
    {
        breakpoint: 992,
        settings: {
            slidesToShow: 2,
            autoPlay: true,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            autoPlay: true,
            slidesToScroll: 1,
            dots: false,
        },
    },
    ],
});

// Testi slider end


// product slider  start
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    centerPadding: '100px',
    focusOnSelect: true
});
// product slider  end

// simple slick slider start
$(".tab_slider").slick({
    dots: true,
    infinite: true,
    speed: 300,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1
});
// simple slick slider end

// wow animation js
$(function () {
    new WOW().init();
});
// wow animation js

// Cart Plus minus
document.addEventListener('DOMContentLoaded', function () {
    const minusButton = document.getElementById('minus');
    const plusButton = document.getElementById('plus');
    const numberDisplay = document.getElementById('number');

    if (minusButton && plusButton && numberDisplay) {
        minusButton.addEventListener('click', function () {
            let currentValue = parseInt(numberDisplay.textContent);
            if (currentValue > 0) {
                numberDisplay.textContent = currentValue - 1;
            }
        });

        plusButton.addEventListener('click', function () {
            let currentValue = parseInt(numberDisplay.textContent);
            numberDisplay.textContent = currentValue + 1;
        });
    }
});
// Cart Plus minus


// Responsive Menu  
$(function () {
    $('#menu').slicknav();
});
// Responsive Menu  

// Header And Footer Layout 
$(document).ready(function () {
    // Load header
    $("#Header").load("layout/header.html", function () {
        // Initialize responsive menu
        $('#menu').slicknav({
            prependTo: ".header",
            label: ''
        });

        // Highlight active menu
        highlightActiveMenu();
    });

    // Load footer
    $("#Footer").load("layout/footer.html");
});
// Header And Footer Layout

// this js is for Active Menu
function highlightActiveMenu() {
    // Get current page filename
    let currentPage = window.location.pathname.split("/").pop().toLowerCase();

    if (currentPage === "" || currentPage === "index" || currentPage === "index.html") {
        currentPage = "index.html";
    }

    // Loop through each nav link
    $("#menu li a").each(function () {
        let linkPage = $(this).attr("href").toLowerCase();

        if (linkPage === currentPage) {
            $(this).addClass("active");
        } else {
            $(this).removeClass("active");
        }
    });
}
// this js is for Active Menu

// Password Hide Start 
function togglePasswordVisibility(toggleButton) {
    $(toggleButton).toggleClass("fa-eye fa-eye-slash");
    var input = $($(toggleButton).attr("toggle"));
    if (input.attr("type") === "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
}
// Attach event listener
$(document).on("click", ".toggle-password", function () {
    togglePasswordVisibility(this);
});
// Password Hide End