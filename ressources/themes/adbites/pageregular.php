 <?php 
 
 /* Template name: pageregular */
 
 get_header(); ?> 
 
        <!-- Page Content -->
<div class="container-fluid pagehead">
 <div class="row">
 <div class="col-lg-12 text-center">
 	<h1><?php echo get_post_meta($post->ID, 'pagetitle', true); ?></h1>
 	<p class="lead" style="color:#ffffff"><?php echo get_post_meta($post->ID, 'pagetitle_subline', true); ?></p></div>
 </div>
 </div>
</div>
<div class="navcolchange"></div>

<section class="about2">
<div class="container">
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6 text-center" style="padding-top: 80px"><h2>Was wir machen</h2>
  <hr class="post-header-regular" style="margin-top: 25px; margin-bottom: 25px">
<p>Unsere Arbeit macht uns jeden Tag verdammt stolz. Wir machen unseren Job zwar schon eine ganze Weile, aber noch immer lieben wir es zu sehen, wie Menschen und Marken mit unseren Designs, unseren Ideen und unserem Code interagieren. Dies sind einige unserer Services.</p></div>
<div class="col-md-3"></div>
  </div>

<div class="row" style="padding-top:50px">
   <div class="col-md-3"><h3>Design</h3><p>Herausragendes Design. Sieht lecker aus, passt zur Marke und macht Spaß in der Interaktion.</p></div>
  <div class="col-md-3"><h3>Entwicklung</h3><p>Fundamente für Kampagnen und Sites, die uns noch nie im Stich gelassen haben.</p></div>
  <div class="col-md-3"><h3>Strategie</h3><p>Wir richten ein und aus. Und zwar so, dass der User Lust auf Markeninteraktion hat. Nicht mehr und nicht weniger.</p></div>
  <div class="col-md-3"><h3>Story Telling</h3><p>Selbst mit Waschmittel kann man coole Geschichten erzählen, auf die der User Lust hat. Wir kennen uns da sehr gut aus.</p></div>
</div> 

<div class="row" style="padding-top:50px">
   <div class="col-md-3"><h3>Social Campaigns</h3><p>Wir planen große Kampagnen in Social Networks, setzen sie um und feiern sie. Die Kunden unserer Kunden finden, dass wir darin ziemlich gut sind.</p></div>
  <div class="col-md-3"><h3>3D/Animation</h3><p>Unsere 3D Artworks lassen Produkte leuchten und Welten entstehen, die Realitität und Design miteinander verschmelzen.</p></div>
  <div class="col-md-3"><h3>Content</h3><p>Unsere Inhalte holen in Social Networks die besten Interaktionsraten. Wenn der User mit seiner Interaktion abstimmt, muss es wohl gut sein.</p></div>
  <div class="col-md-3"><h3>Community Management</h3><p>Unsere Unit spricht täglich 12 Stunden mit den Kunden unserer Marken. Und das sind aktuell ca. 250.000 Menschen.</p></div>
</div>  
 
</div>
</div>
</section>
<div class="spacer"></div>
<div class="container-fluid aboutusoffice">
<div class="container">
 <div class="row">
 <div class="col-lg-12">
 	<h2>Unsere Geschichte</h1>
 	 <hr class="post-header-regularwt" style="margin: 0 0 17px;">
 	</div>
 </div>
 <div class="row">
<div class="col-lg-6">
 	<p>Adbites wurde 2007 mit starkem Fokus auf Social Media Marketing gegründet, bringt aber alles mit, was zu einer voll ausgestatteten Digital-Agentur gehört. Wir bringen UX-Designer, Screen-Designer, Programmierer und Konzeptioner mit, die ihr Handwerk verstehen und seit vielen Jahren erfolgreich tätig sind.

In den letzten Jahren haben wir uns mit außergewöhnlichen und innovativen Social Media Kampagnen, Brand-Websites und digitalen Assets einen Namen gemacht.</p></div>
<div class="col-lg-6">
 	<p>Adbites arbeitet sowohl direkt für einige der beliebtesten Marken Deutschlands, als auch für Agenturen, die die Unterstützung eines professionellen Digital-Teams schätzen.

Wir sind immer bereit, in Projekte einzusteigen, lieben es aber, von Anfang an dabei zu sein.</p><a href="http://#" class="btn btn-default aboutusbut">Hier wird's noch interessanter</a></div>
 </div>
 </div>
</div>

<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hallo adbites!</h4>
      </div>
      <div class="modal-body">
<?php gravity_form( 1, false, false, false, '', false );   ?>   </div>
      <div class="modal-footer">
             </div>
    </div>
  </div>
</div>


    <div class="container marketing">
      
      
 			
			
				  


 <?php get_footer(); ?> 

