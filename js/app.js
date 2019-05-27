$(document).ready(function(){
  $('.favorites').click(function(){
    $(this).toggleClass('is-active')
    $('.message1').delay(500).fadeIn().delay(2000).fadeOut();
  })
  $('.cart').click(function(){
    $(this).toggleClass('is-active')
    $('.message2').delay(500).fadeIn().delay(2000).fadeOut();
  })
  $('.products-dropdown').hover(function(){
    $('.p-dropdown').toggleClass('is-open');
    $('.s-dropdown').removeClass('is-open');
    $('.u-dropdown').removeClass('is-open');
  })
  $('.services-dropdown').hover(function(){
    $('.s-dropdown').toggleClass('is-open');
    $('.p-dropdown').removeClass('is-open');
    $('.u-dropdown').removeClass('is-open');
  })
  $('.ubicanos-dropdown').hover(function(){
    $('.u-dropdown').toggleClass('is-open');
    $('.p-dropdown').removeClass('is-open');
    $('.s-dropdown').removeClass('is-open');
  })
    // Slider
    $('.slider-content').bxSlider({
      auto: true,
      autoControls: false,
      stopAutoOnClick: true,
      speed: 1000,
      pager: false,
    });
    // Menu
    $('.menu-toggle').click(function(){
        $('.menu').toggleClass('is-open')
    })
    //Zoom
    // $('div.glass-zoomBig').zoom({magnify: 1});
    // Rating
    $(".rating").rate();

    //or for example
    var options = {
      max_value: 4,
      step_size: 0.5,
      initial_value: 0,
    }

    $(".rating").rate(options);
    //Select
    $('.select').on('click','.placeholder',function(){
        var parent = $(this).closest('.select');
        if ( ! parent.hasClass('is-open')){
          parent.addClass('is-open');
          $('.select.is-open').not(parent).removeClass('is-open');
        }else{
          parent.removeClass('is-open');
        }
      }).on('click','ul>li',function(){
        var parent = $(this).closest('.select');
        parent.removeClass('is-open').find('.placeholder').text( $(this).text() );
        parent.find('input[type=hidden]').attr('value', $(this).attr('data-value') );
    });

    // Drag glass
    $( ".glass-move img" ).draggable();

    $('#try').click(function(){
      $('#users').addClass('is-active');
      $('#photo').addClass('is-disable');
      $('#try').hide();
      $('#notTry').show();
    });

    $('#notTry').click(function(){
      $('#users').removeClass('is-active');
      $('#photo').removeClass('is-disable');
      $('#try').show();
      $('#notTry').hide();
    });

    // Change User
    $('#user-1').click(function(){
      $(this).addClass('is-active');
      $('#user-2').removeClass('is-active');
      $('#user-3').removeClass('is-active');
      $("#userImg").attr('src',"img/user-2.png");
      return false;
    });
    $('#user-2').click(function(){
      $(this).addClass('is-active');
      $('#user-1').removeClass('is-active');
      $('#user-3').removeClass('is-active');
      $("#userImg").attr('src',"img/user-1.png");
      return false;
    });
    $('#user-3').click(function(){
      $(this).addClass('is-active');
      $('#user-1').removeClass('is-active');
      $('#user-2').removeClass('is-active');
      $("#userImg").attr('src',"img/user-3.png");
      return false;
    });
    // Uplaod Imagen
    $("#inputGroupFile01").change(function(event) {  
      RecurFadeIn();
      readURL(this);    
    });
    $("#inputGroupFile01").on('click',function(event){
      RecurFadeIn();
    });
    function readURL(input) {    
      if (input.files && input.files[0]) {   
        var reader = new FileReader();
        var filename = $("#inputGroupFile01").val();
        filename = filename.substring(filename.lastIndexOf('\\')+1);
        reader.onload = function(e) {
          debugger;      
          $('#userImg').attr('src', e.target.result);
          $('#userImg').hide();
          $('#userImg').fadeIn(500);      
          $('.custom-file-label').text(filename);             
        }
        reader.readAsDataURL(input.files[0]);    
      } 
      $(".alert").removeClass("loading").hide();
    }
    function RecurFadeIn(){ 
      console.log('ran');
      FadeInAlert("Wait for it...");  
    }
    function FadeInAlert(text){
      $(".alert").show();
      $(".alert").text(text).addClass("loading");  
    }

    //scrolltop
    $(document).ready(function(){
      $(window).bind('scroll', function() {
      var navHeight = 70;
        if ($(window).scrollTop() > navHeight) {
          $('.navbar').addClass('fixed');
        }
        else {
          $('.navbar').removeClass('fixed');
        }
     });
   });


   
});


var slider = document.getElementById('sliderAncho1');

noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    tooltips: true,
    range: {
        'min': 0,
        'max': 100
    }
});

var slider = document.getElementById('sliderAncho2');

noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    tooltips: true,
    range: {
        'min': 0,
        'max': 100
    }
});

var slider = document.getElementById('sliderAltura1');

noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    tooltips: true,
    range: {
        'min': 0,
        'max': 100
    }
});

var slider = document.getElementById('sliderAltura2');

noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    tooltips: true,
    range: {
        'min': 0,
        'max': 100
    }
});

var slider = document.getElementById('sliderPuente1');

noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    tooltips: true,
    range: {
        'min': 0,
        'max': 100
    }
});

var slider = document.getElementById('sliderPuente2');

noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    tooltips: true,
    range: {
      'min': 0,
      'max': 100
    }
});

$('.glass-color-1').click(function(){
  $("#glass-color-1 img").attr('src', "img/glass-1.png");
});

$('.glass-color-2').click(function(){
  $("#glass-color-1 img").attr('src', "img/glass-1-alt.png");
});

$('.glass-color-3').click(function(){
  $("#glass-color-2 img").attr('src', "img/glass-2.png");
});

$('.glass-color-4').click(function(){
  $("#glass-color-2 img").attr('src', "img/glass-2-alt.png");
});

$('.glass-color-5').click(function(){
  $("#glass-color-3 img").attr('src', "img/glass-3.png");
});

$('.glass-color-6').click(function(){
  $("#glass-color-3 img").attr('src', "img/glass-3-alt.png");
});

$('.glass-color-7').click(function(){
  $("#glass-color-4 img").attr('src', "img/glass-4.png");
});

$('.glass-color-8').click(function(){
  $("#glass-color-4 img").attr('src', "img/glass-4-alt.png");
});
