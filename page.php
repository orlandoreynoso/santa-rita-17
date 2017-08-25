<?php 

/*
Template Name: Interiores
 */

 get_header();


?>




<section>

<div class="zerogrid" id="contenido_general">
<div id="der">

  <div id="titulo">
    <div class="mapeo"><?php the_breadcrumb(); ?></div>
  </div>    

  <div id="interiores">
    <?php  // echo  'estoy en page';      ?>    

<div class="descripcion_categoria">
    <div id="name_cat">
      <!-- span>&nbsp;</span -->
      <!-- a class="cat"><?php the_category (); ?></a -->
    </div>    
    <div id="fecha">
      <span class="icon">&raquo;</span>    
      <span class="date"><?php the_time('j F, Y'); ?></span>  
    </div>
</div>


        <!-- h1><?php // the_title(); ?></h1 -->
         <?php
          while ( have_posts() ) : the_post();
//          get_template_part( 'content', 'page' );
          the_content();           
          endwhile;
 
?>
<?php // comments_template(); ?>
<!-- address>Por <?php the_author_posts_link() ?></address -->
  

  </div>


</div>
<!-- **************************************** -->        
    <div id="iz">
        <div id="entradas">
          <div id="titulo_entradas">
            <h3>Entradas recientes</h3>
          </div>

          <div id="recientes">
            <?php get_sidebar(); ?>
          </div>  
        </div>
    </div>
    
       
  </div>
  
</section>



<!-- *********************************************** -->





<?php get_footer();  ?>