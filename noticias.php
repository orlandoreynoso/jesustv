<?php 

/*
Template Name: Noticias
 */

 get_header();


?>



<section id="content">  <!--- BEGING THE PRINCIPAL SECTION OF ALL CONTENT -->

  <div class="wrap-content zerogrid">

       <!-- INICIA DIV DE LOGO Y YOUTUBE  -->
      <div style="clear: both"></div>    
    <!--  INICIA DIV DE ICONOS -->

    <article class="iconos">
      <?php menu_mujer(); ?>        
    </article>
    <!-- FINALIZA DIV DE ICONOS -->





<section id="block02">
      <div style="clear: both"></div>
    <div class="col-2-3">
     <div class="mapeo">
          <!-- Breadcrumb -->
          <?php the_breadcrumb(); ?>
          <!-- Fin Breadcrumb -->
     </div> 

      <!-- div class="titulo-cartelera"><h2>Actualidad</h2></div -->
    
    <div class="contenido-reflexiones">
      
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

         <p><small class="meta"><?php the_time(get_option('date_format')); ?> &bull; &nbsp;<?php the_category(', '); ?></small></p>
         
         <?php  the_content(); ?> 
         
  
        <div class="clearing"></div>


    </div>


    </div>

     <div class="col-1-5">

              <aside  id="sidebar"> 
                  <div class="titulo-cartelera"><h2></h2></div>
                  <div class="lateral-interior">
                    <?php zemanta_related_posts(11);  ?>
              </aside>              


              <?php // get_sidebar(); ?>




      </div>     

      <div style="clear: both"></div>
              <?php //  if (is_page(242) or is_page(279)) {   dynamic_sidebar('ultimas-reflexiones');   }       ?>
      <div style="clear: both"></div>
</section>  <!-- ENDED THE PRINCIPAL SECTION OF THE CONTENT  -->




<div class="paginacion">

  <?php  
/*
$wp_query = new WP_Query(array('post_type' => 'libro',
                                 'paged' => $paged,
                                 'posts_per_page' => 30,
         'orderby' => 'title',
         'order' => 'ASC')
);*/

  ?>  

<!-- a href="<?php the_permalink(); ?>" class="readmore"><?php // _e('Seguir leyendo &rarr;','apk'); ?></a -->
                      <!-- div class="navigation"><?php // if(function_exists('pagenavi')) { pagenavi(); } ?></div -->

  
</div>

<?php   get_footer();  ?>