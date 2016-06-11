<!--
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to bootstrapwp_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
// Return early no password has been entered for protected posts.
-->

<div class="container">
<div class="row">
             	<div class="col-lg-2">
             		
             	</div>
             	<div class="col-lg-8">
             	<hr>
             	<h4>Kommentare</h4>
             	<?php wp_list_comments(
    array(
      'callback' => 'better_comments'
      ));
?>
<hr> 
          <?php comment_form( $args, $post_id ); ?>
<p style="font-size:0.8rem; line-height: 1.2rem; padding-top: 30px">Tipp: Wähle einige Buchstaben aus und bring sie durch clevere Zusammenstellung in eine sinnvolle Reihenfolge. Mit etwas Glück und großem Knobelspaß entsteht daraus schon bald ein toller Kommentar.</p>
             	</div>
             	<div class="col-lg-2">
             		
             	</div>
             </div><!-- .row -->  

</div>



