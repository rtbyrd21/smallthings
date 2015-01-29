// JavaScript Document

$(document).ready(function(){
	$('#Demo').perfectScrollbar({

  minScrollbarLength: 20,
wheelSpeed: 20
})
$('#Demo').perfectScrollbar('update');
	if ($(window).width() > 450) {
	$('.my-sticky-element').waypoint('sticky');
	$.waypoints('refresh');}
	if ($(window).width() > 450){
	$('#navbar').onePageNav({
	currentClass: 'current',
    changeHash: false,
    scrollSpeed: 750,
    scrollThreshold: 0.5,
	filter: '',
    easing: 'swing',
    begin: function() {
        //I get fired when the animation is starting
    },
    end: function() {
        //I get fired when the animation is ending
    },
    scrollChange: function($currentListItem) {
        //I get fired when you enter a section and I pass the list item of the section
    }
});}
	

//SCROLL ON FIND OUT MORE CLICK
$(document).ready(function(){
  $('.btn-stroke-white').click(function(){
		
    $('html,body').animate({
        scrollTop: $(this).offset().top+300},
        'slow');
    console.log("yes");
	});
});
//SCROLL ON FIND OUT MORE CLICK

//FOOTER ANIM  
$(window).scroll(function() {
  
if ($(this).scrollTop() < 550) {

$("#footer").slideUp();

} else {

$("#footer").slideDown();

}

});
//FOOTER ANIM 
  
  
//MAIN IMAGE BLUE FADE
	if ($(window).width() > 600) {
		$(window).scroll(function () {
    $('[id^="box"]').each(function () {
        if (($(this).offset().top - $(window).scrollTop()) < 60) {
            $(this).stop().fadeTo('slow', 0);
        } else {
            $(this).stop().fadeTo('slow', 1);
        }
    });
});}
//MAIN IMAGE BLUE FADE




//MAIN IMAGE TEXT FADE
var fadeStart=100,fadeUntil=400;
$(document).ready(function(){
$(document).scroll(function(){
var offset=$(window).scrollTop()
if ($(window).width() > 550) {
if( offset<=fadeStart ){opacity=1;}
if( offset<=fadeUntil ){
var opacity=1-offset/fadeUntil;
$(".copy").css({opacity:opacity}); $(".copy").css("z-index", 500);}
else if(offset>fadeUntil) {$(".copy").css({opacity:0});$(".copy").css("z-index", 0);}}})
});
//MAIN IMAGE TEXT FADE

  
//PROGRESS BAR 
$(document).scroll(function(){
var hiddenHeight = $(".home-culture").height();
var theDistance =  $(window).scrollTop(),
      theHeight = $(document).height(),
  heightPercent = (theDistance/(theHeight-hiddenHeight)*100)*.7;

  if ($(window).width() > 648 && $(window).width()< 812) {
$(".ui-menu-bottom-line").css("width", (heightPercent*.89) + '%' );
  }else if($(window).width() > 980 && $(window).width()< 1080){
$(".ui-menu-bottom-line").css("width", (heightPercent*.96) + '%' );
}else if($(window).width() > 1 && $(window).width()< 420){
$(".ui-menu-bottom-line").css("width", (heightPercent*.70) + '%' );
}else{
$(".ui-menu-bottom-line").css("width", (heightPercent*1) + '%' );
}
});
//PROGRESS BAR 
  
  
//MOBILE NAV  
$(document).ready(function(){
$( ".fi-list" ).click(function(event) {
	event.preventDefault();
  $( ".mobileMenu" ).toggle();
  console.log('yes');
});
});
$(document).ready(function(){
$( ".mobileMenu" ).click(function() {
  $( ".mobileMenu" ).hide();
  console.log('yes');
});
});

});
//MOBILE NAV 


//PHOTO JSON
$(document).ready(function(){ 
var json = {"images" : [{
		"id" : "img/SOS_1.jpg",
		"small": true,
        "medium": false,
        "large": false
	}, {
		"id" : "img/sos1.jpg",
        "small": true,
        "medium": false,
        "large": false
	}, {
		"id" : "img/snowcone_vertical.jpg",
		"small": true,
        "medium": false,
        "large": false
	},{
		"id" : "img/large_3.jpg",
		"small": false,
        "medium": false,
        "large": true
	},{
		"id" : "img/SOS_2.jpg",
		"medium": true
	},{
		"id" : "img/IMG_2372.jpg",
		"small": true,
        "medium": false,
        "large": false
	},{
		"id" : "img/large_6.jpg",
		"small": false,
        "medium": false,
        "large": true
	},{
		"id" : "img/SOS_21.jpg",
		"small": false,
        "medium": true,
        "large": false
	},{
		"id" : "img/SOS_3.jpg",
		"medium": false
	}, {
		"id" : "img/SOS_4.jpg",
		"small": false,
        "medium": true,
        "large": false
	},{
		"id" : "img/SOS_5.jpg",
		"small": true,
        "medium": false,
        "large": false
	},{
		"id" : "img/SOS_6.jpg",
		"small": true,
        "medium": false,
        "large": false
	}, {
		"id" : "img/SOS_17.jpg",
		"small": false,
        "medium": true,
        "large": false
	},{
		"id" : "img/large_2.jpg",
		"small": false,
        "medium": false,
        "large": true
	},{
		"id" : "img/SOS_7.jpg",
		"small": true,
        "medium": false,
        "large": false
	},{
		"id" : "img/SOS_8.jpg",
		"small": true,
        "medium": false,
        "large": false
	},{
		"id" : "img/SOS9.jpg",
		"small": false,
        "medium": true,
        "large": false
	},{
		"id" : "img/large_4.jpg",
		"small": false,
        "medium": false,
        "large": true
	},{
		"id" : "img/SOS_10.jpg",
		"small": true,
        "medium": false,
        "large": false
	},{
		"id" : "img/SOS_11.jpg",
		"small": true,
        "medium": false,
        "large": false
	},{
		"id" : "img/SOS_12.jpg",
		"small": true,
        "medium": false,
        "large": false
	},{
		"id" : "img/large_1.jpg",
		"small": false,
        "medium": false,
        "large": true
	},{
		"id" : "img/SOS_13.jpg",
		"small": false,
        "medium": true,
        "large": false
	},{
		"id" : "img/SOS_14.jpg",
		"small": true,
        "medium": false,
        "large": false
	},{
		"id" : "img/SOS_15.jpg",
		"small": true,
        "medium": false,
        "large": false
	},{
		"id" : "img/SOS_16.jpg",
		"small": false,
        "medium": true,
        "large": false
	},{
		
		"id" : "img/SOS_18.jpg",
		"small": true,
        "medium": false,
        "large": false
	},{
		"id" : "img/large_5.jpg",
		"small": false,
        "medium": false,
        "large": true
	},{
		"id" : "img/SOS_19.jpg",
		"small": true,
        "medium": false,
        "large": false
	},{
		"id" : "img/SOS_20.jpg",
		"small": false,
        "medium": true,
        "large": false
	}]
};
var template = $("#itemTemplate").html();	
var result = Mustache.render(template, json); 
	$("#masonryContainer").html(result);
});	
//PHOTO JSON


$(document).ready(function(){
   $(".toggle").on('click',function(){
    $(this).children('.fi-x, .fi-list').toggleClass("fi-x fi-list");
});
})