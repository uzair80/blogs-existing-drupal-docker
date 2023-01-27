/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.task = {
    attach: function (context, settings) {

      
   let list =  document.querySelector('.nav-link nav-link--drupal- is-active');
   let my_val =  list.addEventListener("mouseover", myfunction);

   function myfunction(){

      my_val.style.color = "blue";


   }



    }
  };

})(jQuery, Drupal);
