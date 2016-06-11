   <!-- FOOTER -->
   
</div> <!-- /.container -->
      
       <section>
       <hr class="footercut">
 <div class="container-fluid primary-footer">
     <div class="col-lg-6">
     	<?php dynamic_sidebar( 'footer_left' ); ?>
     </div>
      <div class="col-lg-6 pull-right">
      
<!-- Modal -->
<div class="text-right">
<a data-toggle="modal" href="#myModal"><i class="icon-plus btn ban-default"></i>Mail schreiben</a>
</div>

     	<div class="modal fade" id="myModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel" style="color:white">Contact Us!</h4>
</div>
<div class="modal-body" style="color: black; padding-top:-20px">
<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]'); ?>
</div>

</div>
</div>
</div>
     	
     <!-- Modal Ende -->
	
     	
     	
     </div>
 </div>
 </section>
 
      <div class="container-fluid copy-footer" style="padding-bottom:20px">
      	<footer>
      	<div class="container">
        <small class="pull-right"><a href="#" style="color:#ff6600">Impressum</a>&nbsp;&nbsp;&nbsp;<a href="#" style="color:#ff6600">Datenschutzbestimmungen</a>&nbsp;&nbsp;&nbsp;<a href="#" style="color:#ff6600">Cookie Policy</a></small>
        <small>&copy; 2016 Adbites GmbH &middot; <?php bloginfo('description'); ?></small>
      	</div>
      </footer>
      </div><!-- .container-fluid -->
      

    
    

	  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> -->   
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
     <script src="<?php bloginfo('template_url'); ?>/js/scroll-top.js"></script>
<!-- 	 <script src="<?php bloginfo('template_url'); ?>/js/headroom.min.js"></script> -->
	<script src="<?php bloginfo('template_url'); ?>/js/TweenMax.min.js"></script>
	 <script src="<?php bloginfo('template_url'); ?>/js/ScrollMagic.min.js"></script>
	 <script src="<?php bloginfo('template_url'); ?>/js/debug.addIndicators.js"></script>
	 <script src="<?php bloginfo('template_url'); ?>/js/animation.gsap.min.js"></script>
	 <script src="<?php bloginfo('template_url'); ?>/js/antimoderate.min.js"></script>

	 <script src="<?php bloginfo('template_url'); ?>/js/mainnew.js"></script> 
	 
	 
	 
	 
	

<!-- Scroll Top -->
<script type="text/javascript">
 
   $(document).ready(function(){
 
      $('.top').UItoTop();
 
   });
 
</script>

<!-- Change Menu Color -->

<!--
<script type="text/javascript">
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('.navcolchange');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar-inverse").css('background-color', '#000000');
       } else {
          $('.navbar-inverse').css('background-color', 'transparent');
       }
   });
    }
});

</script>
-->

          
             
     

<script type="text/javascript">

$(function() {
    // Init Controller
    var scrollMagicController = new ScrollMagic();
});

</script>

<!--
<script type="text/javascript">

 function isIE () {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
}

window.isIEOld = isIE() && isIE() < 9;
window.isiPad = navigator.userAgent.match(/iPad/i);

var img = $('.video').data('placeholder'),
    video = $('.video').data('video'),
    noVideo = $('.video').data('src'),
    el = '';

if($(window).width() > 599 && !isIEOld && !isiPad) {
    el +=   '<video autoplay loop poster="' + img + '">';
    el +=       '<source src="' + video + '" type="video/mp4">';
    el +=   '</video>';
} else {
    el = '<div class="video-element" style="background-image: url(' + noVideo + ')"></div>';
}

$('.video').prepend(el);
 </script>  
--> 
 
  <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
              

<!--
	<script type="text/javascript">
		jQuery(document).on("scroll",function(){
		    if(jQuery(document).scrollTop()>100){
		        jQuery("nav").removeClass("large").addClass("small");
		    } else{
		        jQuery("nav").removeClass("small").addClass("large");
		    }
		});
	</script>
-->


<script type="text/javascript">	
	
$(window).scroll(function() {
  if ($(document).scrollTop() > 550) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});	
 </script> 
 
 
 <!--
<script type="text/javascript">
 $(document).ready(function() {
 
    setTimeout(function(){
        $('body').addClass('loaded');
        $('h1').css('color','#222222');
    }, 3000);
 
});

 </script>
-->
 
<!--
<script type="text/javascript">	 
$('.home1').animate({
    backgroundSize: '100%'
}, 1500); 
 </script> 
-->
 

</body>
</html>

