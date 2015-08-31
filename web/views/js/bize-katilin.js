$(window).scroll(function() {
  

   /*
   var div = $(".contact-content");
   var bottom_of_object = div.offset().top + div.outerHeight();
   var bottom_of_window = $(window).scrollTop() + $(window).height();
   */
            
   /* If the object is completely visible in the window, fade it it */
   /*
   if( bottom_of_window > bottom_of_object ) {
     console.log("asdsl");
     div.css({'position': 'fixed'});
   } 
   
   if (div.offset().top < 380) {
    div.css("position", '');
   }
   */
   
   


});


$("#cv-button").click(function() {
  console.log("asd");
  $("#hidden-upload").click();
});
