
$(window).scroll(function() {
    if ($(this).scrollTop() > 1) {
        $('header').addClass("dark-grey-bg");
        $('#batch-tab').addClass("fixed-tab");
        $('#batch-tab').addClass("come-out");
        $('.number-section1').addClass("come-in");
    } else {
        $('header').removeClass("dark-grey-bg");
        $('.number-section1').removeClass("come-in");
        $('#batch-tab').removeClass("fixed-tab");        
        $('#batch-tab').removeClass("come-out");        
    }
    if ($(window).scrollTop() >= 300) {
        $('.goto-top').slideDown();
    } else {
        $('.goto-top').slideUp();
    }    
});
$('.menu-toggle').click(function() {
    $('.step-one-menu').toggleClass('swipe');
    $(".body-color-overlay").toggleClass('d-block');
    $('body').toggleClass('noscroll');
    $('.logo').toggleClass('d-none');
    $('.upper-menu ul').addClass('d-none');
    $('.footer-fixed-bar').addClass('d-none');

    $("body").bind("mousewheel", function() {
        return false;
    });

    //target the entire page, and listen for touch events
    $('html, body').on('touchstart touchmove', function(e) {
        //prevent native touch activity like scrolling
        e.preventDefault();
    });

});
$('ul[class*="step-one-menu"] li').click(function() {
    $('ul[class*="step-one-menu"] li').removeClass('active');
    if ($(this).attr('class').indexOf('active') > -1) {
        $(this).removeClass('active');
    }    
    else {
        $(this).addClass('active');
    }
    var _index = $(this).index();
    _index = _index * 20;
    $(".step-one-menu").animate({ scrollTop: _index.toString() }, 600);
});
$('.body-color-overlay').click(function() {
    //$(".searchbar").removeClass('show');
    $('.step-one-menu').removeClass('swipe');
    $(this).removeClass('d-block');
    $("body").removeClass('noscroll');
    $('.logo').removeClass('d-none');
    $('.upper-menu ul').removeClass('d-none');
    $('.footer-fixed-bar').removeClass('d-none');
    $("body").unbind("mousewheel");
});
$(".bell-icon").click(function() {
    $(".notifi-listing").toggleClass('close-swipe');
});
$('.goto-top').click(function() {
    $("html, body").animate({ scrollTop: '0' }, 600);
});
$("#batch-tab .nav-link").click( function() {
    $(window).scrollTop(0);
});
$(".feature-box").hover(function() {
    $('.feature-row').find('.feature-box').removeClass('active');
    $(this).toggleClass('active');
});
$(document).ready(function(){
    
$( ".breadcrumb-style li").last().text($( ".breadcrumb-style li").last().text().replace('.php',''));
    
$('.review-slider').slick({
    infinite: true,
    dots: true,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
        {
          breakpoint: 2000,
          settings: "unslick"
        },        
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 2,
            centerMode: true,
            centerPadding: '30px',              
            slidesToScroll: 2
          }
        },        
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }        
    ]   
});

$('.acp-stories-slider').not('.slick-initialized').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 3,
    slidesToScroll: 1,
    pauseOnHover: true,
    nextArrow: '<div class="fa fa-angle-right slick-next"></div>',
    prevArrow: '<div class="fa fa-angle-left slick-prev"></div>',
    responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
		{
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    
$('.p-logo-carasoul').slick({
    infinite: true,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 4,
    slidesToScroll: 2,
    responsive: [      
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 4,             
            slidesToScroll: 1
          }
        },        
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }        
    ]    
});
    
$('.news-slider').slick({
    infinite: true,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [              
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }        
    ]    
});



$('.elummni-section__slider').slick({
    infinite: true,
    dots: true,
    arrows: false,
    autoplay: true,
	centerMode: true,
    autoplaySpeed: 2000,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [      
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,             
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



$('.elummni-section__slider2').slick({
    infinite: true,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [      
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,             
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


$('.rankingsBlock__slider').slick({
    infinite: true,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
  customPaging: function(slick,index) {
                    var targetImage = slick.$slides.eq(index).find('img.slide-logo').attr('src');
                    return '<img src=" ' + targetImage + ' "/>';
                },    
    responsive: [              
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }        
    ]    
});
    
$('.lab-slider').slick({
    infinite: true,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
          breakpoint: 700,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },        
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }        
    ]    
});    
    

$('.notificationSlider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
});


$('.note-slider').slick({
    infinite: true,
    dots: false,
    arrows: false,
    autoplay: true,
    vertical:true,
    verticalSwiping:true,
    autoplaySpeed: 2000,
    slidesToShow: 2,
    slidesToScroll: 1    
}); 
	
	
$('#box1').slick({
    infinite: true,
    dots: false,
    arrows: false,
    autoplay: true,
    vertical:true,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    slidesToScroll: 1    
}); 
	
	$('#box2').slick({
    infinite: true,
    dots: false,
    arrows: false,
    autoplay: true,
    vertical:true,
    autoplaySpeed: 3500,
    slidesToShow: 1,
    slidesToScroll: 1    
});
	
	$('#box3').slick({
    infinite: true,
    dots: false,
    arrows: false,
    autoplay: true,
    vertical:true,
    autoplaySpeed: 4000,
    slidesToShow: 1,
    slidesToScroll: 1    
});
	
});



/*$(document).ready(function() {                      //run when the DOM is ready
  $(".darkMode").click(function() {  //use a class, since your ID gets mangled
	$('body').toggleClass("darkModeActive");      //add the class to the clicked element
  });
});*/

// Select the button
/*const btn = document.querySelector(".darkMode");
// Select the theme preference from localStorage
const currentTheme = localStorage.getItem("theme");
// If the current theme in localStorage is "dark"...
if (currentTheme == "dark") {
  // ...then use the .dark-theme class
  document.body.classList.add("darkModeActive");
}
// Listen for a click on the button 
btn.addEventListener("click", function() {
  // Toggle the .dark-theme class on each click
  document.body.classList.toggle("darkModeActive");
  
  // Let's say the theme is equal to light
  let theme = "light";
  // If the body contains the .dark-theme class...
  if (document.body.classList.contains("darkModeActive")) {
    // ...then let's make the theme dark
    theme = "dark";
  }
  // Then save the choice in localStorage
  localStorage.setItem("theme", theme);
});*/



// Select the button
//const btn = document.querySelector(".darkMode");
//// Listen for a click on the button 
//btn.addEventListener("click", function() {
//  // Toggle the .dark-theme class on the body
//  document.body.classList.toggle("darkModeActive");
//    
//  if (document.body.classList.contains("darkModeActive")) {
//    document.cookie = "theme=dark; path=/";    
//  }
//  else {
//    document.cookie = "theme=light; path=/";          
//  }
//  // Then save the choice in a cookie
//});

/*const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

if (prefersDarkScheme.matches) {
  document.body.classList.add("darkModeActive");
} else {
  document.body.classList.remove("darkModeActive");
}*/

$(document).ready(function() {

    setInterval(function(){
        $(".side-call").toggleClass("contact-transform");         
    }, 5000);
    
    $('#search-page-mob').click(function () {
        setTimeout(function(){
            $(".searchbar-input").focus();          
        }, 500);                    
    });    

    function iOSversion() {
        if (/iP(hone|od|ad)/.test(navigator.platform)) {
            var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
            return [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];
        }
    }

    if (/iP(hone|od|ad)/.test(navigator.platform)) {    
        ver = iOSversion();

        if (ver[0] < 14) {                                    

            $('img').each(function () {
                if($(this).hasClass('ptrans')){
                    $(this).attr('src', $(this).attr('src').replace(/.webp/g, '.png'));
                }
                else if($(this).hasClass('jpdiv')){
                    $(this).attr('src', $(this).attr('src').replace(/.webp/g, '.jpg'));
                } 
                else {}
            });

            $('div').each(function () {
                if($(this).hasClass('jpdiv')){
                    $(this).attr('style', $(this).attr('style').replace(/.webp/g, '.jpg'));
                }
            })        
        }
    }
});


