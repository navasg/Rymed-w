
<!-- TESTIMONIES -->
<section class="section-testimonies">
  <div class="mask-testimonies">
    <div class="container padding-top-bottom">
      <h2 class="title-section">Testimonios
      </h2>
      <?php $args = array( 'post_type' => 'testimonios','order' => 'ASC'); ?>   
		<?php $loop = new WP_Query( $args ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="testimonies">
        <div class="item-testimonie">
          <div class="avatar-testimonie">
            <img
            src="<?php echo get_the_post_thumbnail_url(); ?>"
            alt="" >
          </div>
          <div class="body-testimonie">
            <h2 class="name-testimonie"><?php the_title(); ?></h2>
       <div class="description-testimonie">
       <p ><?php the_content(); ?></p>
       </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    
    </div>

  </div>
</section>