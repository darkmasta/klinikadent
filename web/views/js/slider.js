var SLIDE_DURATION = 600;
var PROJECT_BOX_WIDTH = 297;
var PROJECT_CONTAINER_SMALL_WIDTH = 851;
var MAIN_SLIDER_INTERVAL = 4000;
var MAIN_SLIDE_DURATION = 400;

var currentSlideIndex = 0;

var inter;
var inter = setInterval(slider_auto, MAIN_SLIDER_INTERVAL);
var updateActiveMenuItemOffset = 50;
var mainSliderFlag = false;


var infoBoxPositionData = [
  {"right" : "240px", "left" : "",      "top" : "210px"},
  {"right" : "",      "left" : "240px", "top" : "190px"},
  {"right" : "290px", "left" : "",      "top" : "150px"}
];



// slider default active element
$(".slide:first").addClass("active start");
$(".slider-button:last").addClass("active start");

// slider pages click event
/*
$(".slider-button li").click(function(){
	
	if (mainSliderFlag) {
		return false;
	}
	
	var ind = $(this).index();
	
	showSlide(ind);
	hideSlide(currentSlideIndex);
	
});
*/

	
////////////////////////////////
//
// slider_auto
//
////////////////////////////////
function slider_auto() {

	if (mainSliderFlag) {
		return;
	}

	var cnt = $(".slide-img").size();
	var nextIndex = (currentSlideIndex + 1) % cnt;
  console.log("Slider index === ", nextIndex, "Current Slide Index === ", currentSlideIndex);
	
	showSlide(nextIndex);
	hideSlide(currentSlideIndex);

}

////////////////////////////////
//
// showSlide
//
////////////////////////////////
function showSlide(ind) {
	
	if (mainSliderFlag) {
		return;
	}
	mainSliderFlag = true;

  $(".info-box").css(infoBoxPositionData[ind]);
  
	
	$(".slide").eq(ind).animate({
		opacity: 1
	}, {
		duration: MAIN_SLIDE_DURATION
		,complete: function() {
			mainSliderFlag = false;
			currentSlideIndex = ind;
		}
	});
	

  console.log("Show slide index ==== ", ind);
	
	$(".slide").removeClass("active start");

  $(".slider-button").eq(-ind-1).addClass("active");
  $(".slider-button").eq(-ind).removeClass("active start");
	
	clearInterval(inter);
	inter = setInterval(slider_auto, MAIN_SLIDER_INTERVAL);
	
}

////////////////////////////////
//
// hideSlide
//
////////////////////////////////
function hideSlide(ind) {
	
	$(".slide").eq(ind).animate({
		opacity: 0
	}, MAIN_SLIDE_DURATION);
	
   
} 
