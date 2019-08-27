<section class="products">
  <div class="container padding-top-bottom">
    <h2 class="title-section ">Nuestros Productos
    </h2>  


    <div class="controls">
      <div class="controls-item">
        <?php $portfolio_cats = get_terms('cluster_portfolio_cat'); ?>
        <?php if (!empty($portfolio_cats) && !is_wp_error($portfolio_cats)) : ?>  
        <button class="filter" data-filter="*">Todo</button>
        <?php foreach ($portfolio_cats as $portfolio_cat) : ?>
          <button class="filter" data-filter=".<?php echo $portfolio_cat->slug ?>"><?php echo $portfolio_cat->name ?></button>
        <?php endforeach; ?>

      </div>
    </div>

  <?php endif; ?>

  <div id="Container-filter" class="container-filter row">

    <?php
    global $post;
    $args = array('posts_per_page' => -1, 'post_type' => 'cluster-portfolio', 'orderby' => 'menu_order', 'order' => 'ASC');
    $myposts = get_posts($args);
    foreach ($myposts as $post) : setup_postdata($post);
      ?>

      <?php
      $terms = get_the_terms($post->ID, 'cluster_portfolio_cat');
      ?>
      
      <?php
      $terms = get_the_terms($post->ID, 'cluster_portfolio_cat');
      if ($terms && !is_wp_error($terms)) :
        $portfolio_cat_slug = array();
        $portfolio_cat_name = array();
        foreach ($terms as $term) {
          $portfolio_cat_slug[] = $term->slug;
        }
        foreach ($terms as $term) {
          $portfolio_cat_name[] = $term->name;
        }
        $portfolio_cat_array = join(", ", $portfolio_cat_slug);
        $portfolio_class_array = join(" ", $portfolio_cat_slug);
        $portfolio_assigned_list = join(", ", $portfolio_cat_name);
      endif;
      ?>
      <div class="col-lg-4">
        <div class="mix   <?php echo $portfolio_class_array; ?>">
          <div class="card-product">
           <img
           src="<?php echo get_the_post_thumbnail_url(); ?>"
           alt="" class="img-product">
           <div class="body-product">
            <h2 class="title-product"><?php the_title(); ?></h2>
            <div class="description-product">
              <p>
               <?php the_content(); ?>
             </p>
           </div>
         </div>




       </div>

     </div>

   </div>	
 <?php endforeach; ?>
</div>

</div>	

</section>