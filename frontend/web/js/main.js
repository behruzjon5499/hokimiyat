jQuery(function($){
$('button.search').click(function(){
  $('.search_box').toggleClass('active');
  $(this).toggleClass('active');
});
$('.dropbtn').click(function(){
  $('.navbar_drop').addClass('show');
  
});
$('.dropbtnclose').click(function(){
  $('.navbar_drop').removeClass('show');
  
});
$('button.btnmenu').click(function(){
  $(this).toggleClass('active');
  $('.navbar ul').toggleClass('active');
});
    $('a.nav-link').click(function(){
        $('.navbar ul.drop').toggleClass('active');
    });
	//  $('.slide_gal').slick({
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     arrows: true,
  //     fade: true,
  //     asNavFor: '.slide_nav'
  //   });
  //   $('.slide_nav').slick({
  //     slidesToShow: 5,
  //     slidesToScroll: 1,
  //     asNavFor: '.slide_gal',
  //     dots: false,
  //     nav:false,
  //     arrows:false,
  //     centerMode: true,
  //     focusOnSelect: true,
  //   });	
    $('.slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows:false,
      dots:true,
      autoplay: true,
      autoplaySpeed: 2000,
      
    });     
    $('.statis_list').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows:false,
      dots:true,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
        }
      },
      
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
    }); 
  
    $('#nav-home').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false,
      dots:true,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow:2,
            slidesToScroll:1,
          }
        },
        {
          breakpoint:600,
          settings: {
            slidesToShow:1,
            slidesToScroll:1,
          }
        }
      ]
    });
    $('.diler_list').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
    });
    $('.doma_list').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
    });
    $('.mag_list').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
    });
});
$(window).on('scroll', function (event) {
    var scrollValue = $(window).scrollTop();
    if (scrollValue > 90) {
        $('nav.navbar').addClass('affix');
    } else{
        $('nav.navbar').removeClass('affix');
    }
});