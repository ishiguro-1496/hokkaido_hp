jQuery(document).ready(function($){

  $(".openbtn1").click(function () {
    $(this).toggleClass('active');
      $("#g-nav").toggleClass('panelactive');
      $(".circle-bg").toggleClass('circleactive');
      
      if ($(this).hasClass("active")) {  
      $("html").addClass("is-fixed");  
      } else {                              
      $("html").removeClass("is-fixed");    
      }
  });

  $(".openbtn1").click(function () {      
      if ($(this).hasClass("active")) {  
      $("html").addClass("is-fixed");  
      } else {                              
      $("html").removeClass("is-fixed");    
      }
  });


  $("#g-nav a").click(function () {
      $(".openbtn1").removeClass('active');
      $("#g-nav").removeClass('panelactive');
      $(".circle-bg").removeClass('circleactive');
  });
  
});

$(function() {
  var height=$(".top_fv").height();
  $("body").css("margin-top", height);
});

// $(function() {
//   var header_height=$("header").height();
//   $("body").css("margin-top", header_height);
// });
