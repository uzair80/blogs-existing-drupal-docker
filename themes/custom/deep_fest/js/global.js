/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.deep_fest = {
    attach: function (context, settings) {


      function Myclass() {

        // $('#block-deep-fest-main-menu ul li:last-child').addClass('last-li');
        var txt1 = $('#block-sitenav .content div a');
        $(".register-now").append(txt1);

        var txt2 = $('#block-sitenav img');
        $(".logo").append(txt2);

      }


      Myclass();


      // hover images

      function hoverimages() {

        var txt1 = $('.logo img:nth-child(3)');
        var txt2 = $('.logo img:nth-child(4)');
        var txt3 = $('.logo img:nth-child(5)');
        var txt4 = $('.logo img:nth-child(6)');


        // $("#block-deep-fest-main-menu ul li:nth-child(1)").mouseover(function () {
        // $("#block-deep-fest-main-menu .hover-image").append(txt1);
        // });

        $("#block-deep-fest-main-menu ul li:nth-child(1)").mouseover(function () {
          $("#block-deep-fest-main-menu .hover-image").append(txt1);
        });
        $("#block-deep-fest-main-menu ul li:nth-child(1)").mouseout(function () {
          $("#block-deep-fest-main-menu .hover-image").empty(txt1);
        });


        $("#block-deep-fest-main-menu ul li:nth-child(2)").mouseover(function () {
          $("#block-deep-fest-main-menu .hover-image").append(txt2);
        });
        $("#block-deep-fest-main-menu ul li:nth-child(2)").mouseout(function () {
          $("#block-deep-fest-main-menu .hover-image").empty(txt2);
        });


        $("#block-deep-fest-main-menu ul li:nth-child(3)").mouseover(function () {
          $("#block-deep-fest-main-menu .hover-image").append(txt3);
        });
        $("#block-deep-fest-main-menu ul li:nth-child(3)").mouseout(function () {
          $("#block-deep-fest-main-menu .hover-image").empty(txt3);
        });


        $("#block-deep-fest-main-menu ul li:nth-child(4)").mouseover(function () {
          $("#block-deep-fest-main-menu .hover-image").append(txt4);
        });
        $("#block-deep-fest-main-menu ul li:nth-child(4)").mouseout(function () {
          $("#block-deep-fest-main-menu .hover-image").empty(txt4);
        });


        $("#block-deep-fest-main-menu ul li:nth-child(5)").mouseover(function () {
          $("#block-deep-fest-main-menu .hover-image").append(txt1);
        });
        $("#block-deep-fest-main-menu ul li:nth-child(5)").mouseout(function () {
          $("#block-deep-fest-main-menu .hover-image").empty(txt1);
        });

        $("#block-deep-fest-main-menu ul li:nth-child(6)").mouseover(function () {
          $("#block-deep-fest-main-menu .hover-image").append(txt2);
        });
        $("#block-deep-fest-main-menu ul li:nth-child(6)").mouseout(function () {
          $("#block-deep-fest-main-menu .hover-image").empty(txt2);
        });
      }
      hoverimages();



// slick carousel
      $(document).ready(function(){
        (function ($) {
          // $('.single-item').slick();

          $('.single-item').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots:true,
            arrows:true,
            // centerMode:true,
           
          });
        })(jQuery);
      });


      // $(document).ready(function(){
      //   (function ($) {
      //     // $('.single-item').slick();

      //     $('.single-item').slick({
      //       infinite: true,
      //       slidesToShow: 3,
      //       slidesToScroll: 1,
      //       // dots:true,
      //       arrows:true,
      //       // centerMode:true,
      //       responsive: [
      //         {
      //           breakpoint: 835,
      //           settings: {
      //             slidesToShow: 1,
      //             slidesToScroll: 1,
      //             arrows:true,
      //           }
      //         },
             
          
      //         // You can unslick at a given breakpoint now by adding:
      //         // settings: "unslick"
      //         // instead of a settings object
      //       ]
      //     });




      //   })(jQuery);
      // });





// end slick carousel



// Scrolling

let editColor = document.getElementById("navbar-main");
let img = document.querySelector(".logo img:nth-child(1)");
let img2 = document.querySelector(".logo img:nth-child(2)");
//  editColor.style.backgroundColor = 'pink';

window.onscroll = function (event) {

  var scroll = window.pageYOffset;
  console.log(scroll);

  if (scroll < 299) {
    editColor.style.background = 'unset';
    img.style.display = "block";
    img2.style.display = "none";

  }
  else {

    // editColor.style.backgroundColor = 'white';
    editColor.setAttribute('style', 'background:white !important');
    img.style.display = "none";
    img2.style.display = "block";
  }

}











   

    }
  };

})(jQuery, Drupal);
