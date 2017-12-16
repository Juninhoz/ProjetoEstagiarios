$(document).ready(function(){
    
    /*-------------------------------------*/
    /* */
    /*-------------------------------------*/
       
    $("#dataContrato").datepicker({
        dateFormat: 'dd/mm/yy'
    });

    
    /*-------------------------------------*/
    /*               Growls                */
    /*-------------------------------------*/


    $('.error').click(function(event) {
      event.preventDefault();
      event.stopPropagation();
      return $.growl.error({
        message: "The kitten is attacking!"
         });
    });

});
