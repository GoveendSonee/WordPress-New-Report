<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Birgunj_Report
 */

	get_header();
	while ( have_posts() ) :
	the_post();
?>

<section class="post-page-area">
	<div class="container">
		<!-- Ads  -->
		<?php
          get_template_part( 'template-parts/ads/ads1' , '' ); 
        ?>
		<!-- End Ads  -->
		<!--single page-->
		<div class="main-title post">
			<div class="content">
				<h2 class="title">
					<?php the_title(); ?>
				</h2>
			</div>
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="card">
						<?php
							if ( has_post_thumbnail() ) { 
								the_post_thumbnail('large', array('class' => 'card-img-top'));
							}
							else {
								$custom_logo_id = get_theme_mod( 'custom_logo' );
								$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							?>
								<img class="card-img-top" src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>">
							<?php 
							}
						?>
						<div class="card-body">
							<h3 class="sub-title">
								<strong><?php echo esc_html("श्रेणी : "); ?></strong> 
								<?php
									$categories = get_the_category();
									if (!empty($categories)) {
										$category_link = get_category_link($categories[0]->term_id);
										echo '<a href="' . esc_url($category_link) . '">' . esc_html($categories[0]->name) . '</a>';
									}
								?>
							</h3>
							<div class="time_authors">
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
							
							<?php
								echo '<p class="card-text">' . the_content() . '</p>';
							?>
						</div>

						<?php
							get_template_part( 'template-parts/ads/ads2' , '' ); 
							get_template_part( 'template-parts/ads/ads3' , '' ); 
						?>

						<!--Socail Plugins-->
						<div class="comments">
							<h2><?php echo esc_html("प्रतिक्रिया"); ?></h2>
							<?php
								if (comments_open() || get_comments_number()) :
									comments_template();
								endif;
							?>

						</div>
						<!--End Socail Plugins-->
						<br>


						<section id="relatedpost">
							<div class="category_heading sum">
								<h1 class="heading"><a><?php echo esc_html("सम्बन्धित"); ?></a></h1>
							</div>
							<div class="row">
								<?php
									$current_post_id = get_the_ID();

									// Get the categories of the current post
									$categories = get_the_category($current_post_id);

									if ($categories) {
										$category_ids = wp_list_pluck($categories, 'term_id');

									// Query related posts
									$related_args = array(
										'post_type'      => 'post',
										'posts_per_page' => 6, 
										'post__not_in'   => array($current_post_id),
										'category__in'   => $category_ids,
										'orderby'        => 'rand', 
									);

									$related_query = new WP_Query($related_args);

									if ($related_query->have_posts()) :
									while ($related_query->have_posts()) : $related_query->the_post();
								?>
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="card">
									<?php
										$default_image_url = get_template_directory_uri() . '/assets/img/footer logo.png';

										if (has_post_thumbnail()) {
											$featured_image_path = get_attached_file(get_post_thumbnail_id());
											if (file_exists($featured_image_path)) {
												the_post_thumbnail('full', array('class' => 'card-img-bottom', 'alt' => get_the_title()));
											} else {
												echo '<img src="' . esc_url($default_image_url) . '" class="card-img-bottom" alt="Default Image">';
											}
										} else {
											echo '<img src="' . esc_url($default_image_url) . '" class="card-img-bottom" alt="Default Image">';
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
								<?php
									endwhile;
									wp_reset_postdata();
									endif;
									}
								?>
							</div>
						</section>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">

					<section id="third">
						<div class="category_heading">
							<h1 class="heading"><a href="#"><?php echo esc_html("श्लोकप्रिय न्युज"); ?></a></h1>
						</div>
						<div class="row">
							<?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 8,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                );

                                $latest_posts_query = new WP_Query($args);

                                if ($latest_posts_query->have_posts()) {
                                    while ($latest_posts_query->have_posts()) {
                                        $latest_posts_query->the_post();
                            ?>
							<div class="col-lg-12 col-md-4 col-sm-6">
								<div class="card">
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
							<?php
                                }
                                    wp_reset_postdata();
                                }
                            ?>
						</div>
					</section>
					
					<!--Ads-->
					<div class="row">
						<?php
							get_template_part( 'template-parts/ads/ads5' , '' ); 
						?>
					</div>

				</div>
			</div>
		</div>
		<!--end single page-->
	</div>
</section>		

<?php
	endwhile; 
	get_footer();
?>