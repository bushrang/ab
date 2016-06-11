// Animate Logo

$(function(){

	var $slides = $(".logo2");			//slides 
	var currentSlide = 0;				//keep track on the current slide
	var stayTime = 3;				//time the slide stays
	var slideTime = 1.3;				//fade in / fade out time

	TweenLite.set($slides.filter(":gt(0)"), {autoAlpha:0});	//we hide all images after the first one
	TweenLite.delayedCall(stayTime, nextSlide);				//start the slideshow

	function nextSlide(){					
			TweenLite.to( $slides.eq(currentSlide), slideTime, {autoAlpha:0} );		//fade out the old slide
			currentSlide = ++currentSlide % $slides.length;							//find out which is the next slide			
			TweenLite.to( $slides.eq(currentSlide), slideTime, {autoAlpha:1} );		//fade in the next slide
			TweenLite.delayedCall(stayTime, nextSlide);								//wait a couple of seconds before next slide
	}

});






/* Animate Home */

var controller = new ScrollMagic.Controller();

var scene1 = new ScrollMagic.Scene({
triggerElement: '#trigger1'
}) .setTween('#animate1', 0.5, {scale: 1.2})
.addIndicators({name: "1 - no duration"})
.addTo(controller);


/* TweenMax.fromTo(".home1", 1, {scale:1.2}, {scale:1.0,delay:0.7, ease:Circ.easeOut } ); */


TweenMax.from(".chevronhome", 3, {y: -50, opacity:0, delay:2, ease:Power1.easeOut, force3D:false, repeat:500}, 0.2);

  // Init ScrollMagic Controller Change Heroimage on Home
/*  var scrollMagicController = new ScrollMagic();
  
  var scene1 = new ScrollMagic.Scene({
triggerElement: '#scale-trigger'
}) .setTween('#img2', 0.5, {opacity:0, scale:0.9, delay:0, ease:Power1.easeOut, force3D:false}, 0.2)
.addIndicators({name: "Backimg changer"})
.addTo(controller);
  
  */
  
  // Create Animation for 0.5s
/*
  var tween = TweenMax.to('.home1', 0.5, {
    backgroundImage: 'url(http://dev3.adbites.de/ressources/assets/adbites-team.jpg)',
    scale: 5,
    
  });
*/





/* TweenLite.set($(".home1"), {css:{backgroundImage:'url(http://dev3.adbites.de/ressources/assets/adbites-team.jpg)'}}); */


/* TweenMax.from(".caseovertitleani", 1, {y: 50, opacity:0, delay:1, ease:Power1.easeOut, force3D:false}, 0.2); */


/* Animate Case */



TweenMax.from(".homefatani1", 2, {y: 50, opacity:0, scale:1.5, delay:4.0, ease:Power1.easeOut, force3D:false}, 0.2);
TweenMax.from(".homefatani2", 2, {y: 50, opacity:0, scale:1.8, delay:4.0, ease:Power1.easeOut, force3D:false}, 0.2);
TweenMax.from(".homefatani3", 2, {y: 50, opacity:0, scale:0.8, delay:0.2, ease:Power1.easeOut, force3D:false}, 0.2);
TweenMax.from(".homefatani4", 2, {y: 50, opacity:0, scale:1.8, delay:4.0, ease:Power1.easeOut, force3D:false}, 0.2);



TweenMax.from(".homeleadani", 2, {y: 50, opacity:0, delay:2.2, ease:Power1.easeOut, force3D:false}, 0.2);


/* Animate Home 2 */

var controller = new ScrollMagic.Controller();

var scene4 = new ScrollMagic.Scene({
triggerElement: '#scale-trigger'
}) .setTween('#scale-animation', 0.3, {scale: 1})
.addIndicators({name: "1 - no duration"})
.addTo(controller); 

/* End Home animations */


var casescene1 = new ScrollMagic.Scene({
triggerElement: '#trigger1'
}) .setTween('#casechallengeh2_1', 0.5, {opacity: 0.1, y: 100})
/* .addIndicators({name: "1 - no duration"}) */
.addTo(controller);



TweenMax.from(".casetitleani", 1.5, {scale:1, opacity:0, delay:0.8, ease:Power1.easeOut, force3D:false, y:0}, 0.2);

TweenMax.from(".caseleadani", 1.5, {scale:1, opacity:0, delay:1, ease:Power1.easeOut, force3D:false, y:0}, 0.2);




TweenMax.staggerFrom(".projani", 1, {scale:0.5, opacity:0, delay:1.5, ease:Back.easeOut.config(1.7), force3D:true, y:100}, 0.2);

$(".btn").click(function(){
  TweenMax.staggerTo(".projani", 0.5, {opacity:0, y:-100, ease:Back.easeIn}, 0.1);
});


/* Animate Case Overview */


TweenMax.from(".caseovertitleani", 1, {y: 50, opacity:0, delay:1, ease:Power1.easeOut, force3D:false}, 0.2);

TweenMax.from(".caseoversep", 1, {y: 50, opacity:0, delay:1.5, ease:Power1.easeOut, force3D:false}, 0.2);

TweenMax.from(".caseovertextani", 1, {y: 50, opacity:0, delay:2, ease:Power1.easeOut, force3D:false}, 0.2);


TweenMax.staggerFrom(".caseoverani", 1, {y: 50, opacity:0, delay:2.5, ease:Power1.easeOut, force3D:false}, 0.2);

$(".btn").click(function(){
  TweenMax.staggerTo(".caseoverani", 0.5, {opacity:0, y:-100, ease:Back.easeIn}, 0.1);
});






/* TweenLite.to(".home1", 4, {backgroundSize:"105% 105%"}); */


/* TweenMax.to(".home1", 2.5, {'backgroundSize':'120%'}, 0.2); */

/* TweenMax.fromTo(".home1",3,{'backgroundSize':'100%'}); */



// cache element in variable
/*
var $img = $('.home1');
// set initial CSS autoAlpha to 0
// GSAP handles the cross browser vendor prefixes
TweenMax.set($img,{backgroundSize:"105% 105%"});
// animate CSS autoAlpha to 1
var freewayEaseTween = TweenMax.to($img, 2, {
  backgroundSize: "+=100% +=100%", 
});
freewayEaseTween.play(); 
*/

 
 
 //Create Timeline Animation
/*
var tl = new TimelineMax();
tl.to(".home1", 1, {autoAlpha:1})
  .from( 
  ".bkgdImg", 1,{ scale: 1.2, delay:2, x: 80, y:60}, "-=1");
*/




/* TweenMax.from(".chevronhome", 2.5, {y: -50, opacity:0, delay:2, ease:Power1.easeOut, force3D:false, repeat:500}, 0.2); */