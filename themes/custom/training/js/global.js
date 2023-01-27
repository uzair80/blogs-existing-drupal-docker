/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.training = {
    attach: function (context, settings) {


  
      // $(document).ready(function(){

      //   $('#edit-checkout').css("display", "none");
      //   $('#check-btn').append('#edit-checkout');



      // });

     function fun(){
   
       // var txt2 = $('#edit-checkout');
       // var txt3 = $('#edit-submit');
       var txt1 = $('.total-payment');
       var txt2 = $('#edit-actions');
         
          $('#check-btn').append(txt1,txt2);
          // $('#edit-checkout, #edit-submit').css('text-align', 'right');

   

     }

     fun();


     





      $(document).ready(function(){
        
        // $('.total-payment').remove();


      });
  


   





    }
  };

})(jQuery, Drupal);
