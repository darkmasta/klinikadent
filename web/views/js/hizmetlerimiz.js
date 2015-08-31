$(".sidepane li").on('click', function() {
	
	
  var ind = $(this).index();
  
  $(".hizmet-content-container").hide();
  
  var blockToShow = $(".hizmet-content-container").eq(ind);
  
  //blockToShow.css({"display": "block", "opacity": 1});
	
  
  blockToShow.show();
  
  blockToShow.find('h2').hide();
  blockToShow.find('.text').hide();
  	

	
  blockToShow.find('h2').fadeIn();
  
  blockToShow.find('h2').css({
	  marginLeft: -900
  });
  
  blockToShow.find('h2').animate({
      marginLeft: 0 
    },
    {
		  duration:400,
		  complete: function() {
			  blockToShow.find('.text').show();
			  blockToShow.find('.text').css({
				  marginTop:-500,
				  opacity:0
			  });
			  
			blockToShow.find('.text').animate({
				marginTop: 0,
				opacity:1
			});
		  }
	  });
  
  
   
   
  
  
 
  
  
	
});
