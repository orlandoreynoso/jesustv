
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php include ( TEMPLATEPATH . '/breadcrumbs.php'); ?>
<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>


<?php 

/*
Template Name:Intro
 */

 get_header();

?>

<div  id="page-wrap" class="backgroundmsts">




<section class="container">
  <a href="home.php">
    <div class="zerogrid">
		<article class="item02">
			<a href="home/">
				<img src="<?php echo  IMAGES; ?>/logo-msts.jpg" alt="">
			</a>

      <a class="entrar" href="home/">ENTRAR</a>
		</article>
    <!-- div class="item04">
      
    </div -->    
		<div class="borrar"></div>
    </div>		
    </a>
</section>



<div style="clear: both; "></div>
</div>