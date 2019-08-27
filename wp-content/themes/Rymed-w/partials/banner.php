<!-- BANNER  -->
<section class="banner-slick">
<?php $args = array( 'post_type' => 'banner','order' => 'ASC'); ?>   
		<?php $loop = new WP_Query( $args ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="item-banner">

      <div class="img-banner">
        <img
          src="<?php echo get_the_post_thumbnail_url(); ?>"
          alt="">
      </div>
      <div class="mask-banner">
        <div class="text-banner">
          <h2 class="title-banner wow animated fadeIn" , style="visibility: visible; animation-delay: .4s;">
					<?php the_title(); ?> </h2>
          <h3 class="subtitle-banner"><?php the_content(); ?></h3>
        </div>
			</div>

    </div>

		<?php endwhile; ?>

	</section>
	<style>
.subtitle-banner div{
color:#fff;
}
</style>