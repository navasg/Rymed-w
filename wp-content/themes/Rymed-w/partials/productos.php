<section class="products">
  <div class="container padding-top-bottom">
    <h2 class="title-section ">Nuestros Productos
    </h2>  


    <div class="controls" id="equipos">
      <div class="controls-item">
        <?php $productos_cats = get_terms('productos_cat'); ?>
        <?php if (!empty($productos_cats) && !is_wp_error($productos_cats)) : ?>  
        <!-- <button class="filter" data-filter="*">Todo</button> -->
        <?php foreach ($productos_cats as $productos_cat) : ?>
          <button class="filter" data-filter=".<?php echo $productos_cat->slug ?>"><?php echo $productos_cat->name ?></button>
        <?php endforeach; ?>

      </div>
    </div>

  <?php endif; ?>

  <div id="Container-filter" class="container-filter row">

    <?php
    global $post;
    $args = array('posts_per_page' => -1, 'post_type' => ' productos', 'orderby' => 'menu_order', 'order' => 'ASC');
    $myposts = get_posts($args);
    foreach ($myposts as $post) : setup_postdata($post);
      ?>

      <?php
      $terms = get_the_terms($post->ID, 'productos_cat');
      ?>
      
      <?php
      $terms = get_the_terms($post->ID, 'productos_cat');
      if ($terms && !is_wp_error($terms)) :
        $productos_cat_slug = array();
        $productos_cat_name = array();
        foreach ($terms as $term) {
          $productos_cat_slug[] = $term->slug;
        }
        foreach ($terms as $term) {
          $productos_cat_name[] = $term->name;
        }
        $productos_cat_array = join(", ", $productos_cat_slug);
        $productos_class_array = join(" ", $productos_cat_slug);
        $productos_assigned_list = join(", ", $productos_cat_name);
      endif;
      ?>
<a href="<?php the_permalink(); ?>">

      <div class="col-lg-4">
        <div class="mix   <?php echo $productos_class_array; ?>">
          <div class="card-product">
           <img
           src="<?php echo get_the_post_thumbnail_url(); ?>"
           alt="" class="img-product">
           <div class="body-product">
            <h2 class="title-product"><?php the_title(); ?></h2>
            <div class="description-product">
            
               <?php the_content(); ?>
             
           </div>
           <span class="btn-product" href="<?php the_permalink(); ?>">Ver Más</span>
         </div>
       </div>
       </a>

     </div>
   

   </div>	
 <?php endforeach; ?>
</div>

</div>	

</section>
