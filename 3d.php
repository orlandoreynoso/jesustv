<?php 

/*
Template Name: 3d
 */

 get_header();


?>



    <!--  INICIA DIV DE ICONOS -->

    <article class="iconos">
      <?php menu_mujer(); ?>        
    </article>
    <!-- FINALIZA DIV DE ICONOS -->



<section id="content">  <!--- BEGING THE PRINCIPAL SECTION OF ALL CONTENT -->


  <div class="wrap-content zerogrid">

       <!-- INICIA DIV DE LOGO Y YOUTUBE  -->
      <div style="clear: both"></div>  



<section id="block02">
      <div style="clear: both"></div>
    <div class="col-2-3">
     <div class="mapeo">
          <!-- Breadcrumb -->
          <?php the_breadcrumb(); ?>
          <!-- Fin Breadcrumb -->
     </div> 

      <!-- div class="titulo-cartelera"><h2>Actualidad</h2></div -->
    
    <div class="contenido-cartelera">
      
        <div id="compartir">    
        <p>Compartir  &raquo; </p>          
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style ">
        <a class="addthis_button_preferred_1"></a>
        <a class="addthis_button_preferred_2"></a>
        <a class="addthis_button_preferred_3"></a>
        <a class="addthis_button_preferred_4"></a>
        <a class="addthis_button_compact"></a>
        <a class="addthis_counter addthis_bubble_style"></a>
        </div>
        <script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4def925768ffe7cc"></script>
        <!-- AddThis Button END -->
        </div> 

        <div class="clearing"></div>

          <?php
          // Start the loop.
          while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;

          // End the loop.
          endwhile;
          ?>

         <?php  the_content(); ?> 

        <div class="clearing"></div>
         <div class="division-home"><p>&nbsp;</p></div>        
  

        <div class="clearing"></div>

    </div>


    </div>

     <div class="col-1-5">
              <div class="titulo-cartelera"><h2>Últimas actualizaciones</h2></div>
              <div class="lateral">
                <?php  if (is_page(38)) {   dynamic_sidebar('ultimas-actualizaciones');   }       ?>
              </div>  

                <div class="redes">
                <iframe scrolling="no" frameborder="0" class="face_cocos" src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/Jesustvcanal&amp;width=263&amp;colorscheme=light&amp;connections=0&amp;stream=true&amp;header=true&amp;height=380" allowtransparency="true"> </iframe>             
                </div>           

      </div>     


      <div style="clear: both"></div>
</section>  <!-- ENDED THE PRINCIPAL SECTION OF THE CONTENT  -->
  

<?php 

/*   if (is_page(7)) {*/
     get_footer();
/*   }*/

?>