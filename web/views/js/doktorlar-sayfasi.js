$('.doctor-box').click(function() {

  var doctor_box = $(this);
	
  if (!doctor_box.hasClass("on")) {
    doctor_box.addClass("on");
    doctor_box.children('.doctor-information').css({
      top: 0
    });
   	doctor_box.children('.doctor-information').fadeIn();
   
  }
  else {
  	doctor_box.removeClass("on");
    doctor_box.children('.doctor-information').fadeOut();
  }

  /*
  return false;

  if (!doctor_box.hasClass("on")) {
    doctor_box.addClass("on");
    doctor_box.children('.doctor-name').css("top", 0); 
    setTimeout( function() { 
      doctor_box.children('.doctor-information').slideDown("slow"); }, 200);
  } else {
    doctor_box.removeClass("on");
    doctor_box.children('.doctor-information').slideUp("slow");
    setTimeout( function() { 
      doctor_box.children('.doctor-name').css({"bottom": 0, "top": ""}); }, 600);
    }
  */
  
});
