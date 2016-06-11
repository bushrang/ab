TweenMax.from(".casetitleani", 1, {scale:0.5, opacity:0, delay:0.5, ease:Back.easeOut.config(1.7), force3D:true, y:100}, 0.2);



TweenMax.staggerFrom(".projani", 1, {scale:0.5, opacity:0, delay:1, ease:Back.easeOut.config(1.7), force3D:true, y:100}, 0.2);

$(".btn").click(function(){
  TweenMax.staggerTo(".projani", 0.5, {opacity:0, y:-100, ease:Back.easeIn}, 0.1);
});











/*
TweenMax.from("#challengetitleani", 2,{
	opacity:0,	
	x: 500,
	ease:Back.easeOut,
	delay:2
	});





	

TweenMax.from("h2.chevronhome", 4,{
	y:-50,
	opacity:0,
	ease:Back.easeOut,
	delay:2,
	repeat:500,
	repeatDelay:1	
	});	
	
*/
	
	
	
	

