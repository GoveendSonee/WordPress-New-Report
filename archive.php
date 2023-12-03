<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Birgunj_Report
 */

get_header();
?>

	<!-- <main id="primary" class="site-main">
		<php if ( have_posts() ) : ?>
			<header class="page-header">
				<php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>
			<php
				while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
				endwhile;
				the_posts_navigation();
		endif;
		?>
	</main> -->
	
  <?php if ( have_posts() ) : ?>

  <div class="main_category_heading">
    <h1 class="heading"><a href="#"><?php the_archive_title(); ?></a></h1>
  </div>
  
  <section id="cat">
    <div class="container">
      <div class="row">
	  	<?php
			while ( have_posts() ) :
			the_post();
		?>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
            <?php
              if ( has_post_thumbnail() ) { 
                  the_post_thumbnail('large', array('class' => 'card-img-bottom'));
              }
              else {
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              ?>
                  <img class="card-img-bottom" src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>">
              <?php 
              }
            ?>
            <div class="card-body">
                <h4 class="card-title"><a href="<?php echo esc_url(get_permalink()) ?>"><?php the_title(); ?></a></h4>
                <div class="time_author">
                    <div class="time">
                        <i class="fa-solid fa-clock"></i>
						<?php 
							$post_time = get_the_time('U');
							$time_ago = human_time_diff($post_time, current_time('U')) . '';
							echo '<small class="text-mute">' . $time_ago . '</small>';
						?>
                    </div>
                    <div class="author">
                        <i class="fa-solid fa-user"></i>
                        <?php
							$writer_name = get_post_meta(get_the_ID(), 'writer_name', true);
							echo '<strong>'. (!empty($writer_name) ? $writer_name : get_the_author()) . '</strong>';
						?>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  
<?php
	endif;
	get_footer();
