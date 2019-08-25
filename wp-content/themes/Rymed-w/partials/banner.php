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
<!-- 
    <div class="item-banner">
      <div class="img-banner">
        <img
          src="https://images.unsplash.com/photo-1527613426441-4da17471b66d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=735&q=80"
          alt="">
      </div>
      <div class="mask-banner">
        <div class="text-banner">
          <h2 class="title-banner wow animated fadeIn" , style="visibility: visible; animation-delay: .4s;">
            Somos ​ RYMED Soluciones Médicas </h2>
          <h3 class="subtitle-banner">una empresa con años de experiencia en el
            mercado de la
            salud y la belleza.</h3>
        </div>
      </div>
    </div>
    <div class="item-banner">
      <div class="img-banner">
        <img
          src="https://images.unsplash.com/photo-1527613426441-4da17471b66d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=735&q=80"
          alt="">
      </div>
      <div class="mask-banner">
        <div class="text-banner">
          <h2 class="title-banner wow animated fadeIn" , style="visibility: visible; animation-delay: .4s;">
            Representamos ​a laboratorios </h2>
          <h3 class="subtitle-banner">y fabricantes de equipamiento médico y estético de renombre
            mundial.</h3>
        </div>
      </div>
    </div> -->
	</section>
	<style>
.subtitle-banner div{
color:#fff;
}
</style>