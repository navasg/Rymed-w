<?php get_header(); ?>

<div class="productos-detalle">
<h2 class="title-section"><?php the_title(); ?>
</h2>
<div class="container">
    <section id="vertical_tab_nav">
      <ul class="tabs">
      <?php  $args = array(
        'orderby'    => 'slug',
        'order'      => 'ASC'
        );
        $productos = get_terms( 'productos_cat', $args );
        $count = count($productos);
          ?>
        <li>
          <a rel="tab1" href="index.html"
            ><?php the_field( 'nombre_de_servicio' ); ?> <i class="fa fa-fw fa-chevron-right float-right"></i
          ></a>	
        </li>
        <li>
          <a rel="tab1" href="index.html"
            ><?php the_field( 'nombre_de_servicio2' ); ?> <i class="fa fa-fw fa-chevron-right float-right"></i
          ></a>	
        </li>
        <li>
          <a rel="tab1" href="index.html"
            ><?php the_field( 'nombre_de_servicio3' ); ?> <i class="fa fa-fw fa-chevron-right float-right"></i
          ></a>	
        </li>
        <?php ?>
        <!-- <li>
          <a rel="tab2" href="index.html"
            >Study week <i class="fa fa-fw fa-chevron-right float-right"></i
          ></a>
        </li>
        <li>
          <a rel="tab3" href="index.html"
            >Week 2 <i class="fa fa-fw fa-chevron-right float-right"></i
          ></a>
        </li>
        <li>
          <a rel="tab4" href="index.html"
            >Assess <i class="fa fa-fw fa-chevron-right float-right"></i
          ></a>
        </li> -->
      </ul>
<div class="tab_container">
<h3 class="tab_heading active" rel="tab1">
<?php the_field( 'nombre_de_servicio' ); ?> 
  <i class="fa fa-fw fa-chevron-down float-right"></i>
  <i class="fa fa-fw fa-chevron-right float-right"></i>
</h3>
<article id="tab1">
  <div class="row">
    <div class="col-sm-12 col-md-12">
    <img
           src="<?php echo get_the_post_thumbnail_url(); ?>"
           alt="" class="img-product" style="    object-position: top;    height: 200px;">
      <p>
      <?php the_field( 'contenido_del_servicio' ); ?>
      </p>
    </div>
 
  </div>
</article>
<h3 class="tab_heading" rel="tab2">
<?php the_field( 'nombre_de_servicio2' ); ?> 
  <i class="fa fa-fw fa-chevron-down float-right"></i>
  <i class="fa fa-fw fa-chevron-right float-right"></i>
</h3>
<article id="tab2">
  <p>
  <?php the_field( 'contenido_del_servicio_2' ); ?>
  </p>
  <div class="embed-responsive embed-responsive-16by9">
   
  </div>
</article>
<h3 class="tab_heading" rel="tab3">
<?php the_field( 'nombre_de_servicio3' ); ?> 
  <i class="fa fa-fw fa-chevron-down float-right"></i>
  <i class="fa fa-fw fa-chevron-right float-right"></i>
</h3>
<article id="tab3">
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <p>
      <?php the_field( 'contenido_del_servicio_3' ); ?>
      </p>
    </div>
  </div>
</article>
<!-- <h3 class="tab_heading" rel="tab4">
  <i class="fa fa-fw fa-chevron-down float-right"></i>
  <i class="fa fa-fw fa-chevron-right float-right"></i>Assessment
</h3>
<article id="tab4">
  <h2><strong>Assessment</strong></h2>
  <p>
    For your assessment you will… Lorem ipsum dolor sit amet,
    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
    labore et dolore magna aliqua. Ut enim ad minim veniam, quis
    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate
    velit esse cillum dolore eu fugiat nulla pariatur.
  </p>

  <p>
    <a href="">Go to your assessment area for more guidance</a>
  </p>
</article> -->
</div>
    </section>
  </div>

</div>

<?php get_footer(); ?>
