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
		<section id="ads">
			<div class="card">
				<img src="img/ads.png" class="card-img-top" alt="...">
			</div>
		</section>
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

						<!-- Ads  -->
						<section id="ads">
							<div class="card">
								<img src="img/ads.png" class="card-img-top" alt="...">
							</div>
						</section>
						<!-- End Ads  -->

						<!-- Ads  -->
						<section id="ads">
							<div class="card">
								<img src="img/ads.png" class="card-img-top" alt="...">
							</div>
						</section>
						<!-- End Ads  -->

						<!--Socail Plugins-->
						<div class="comments">
							<h2>प्रतिक्रिया</h2>
							<div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop"
								data-width="100%" data-href="https://www.meronews.com/2022/02/104518.html"
								data-numposts="7" fb-xfbml-state="rendered"
								fb-iframe-plugin-query="app_id=844459216167725&amp;container_width=777&amp;height=100&amp;href=https%3A%2F%2Fwww.meronews.com%2F2022%2F02%2F104518.html&amp;locale=en_US&amp;numposts=7&amp;sdk=joey&amp;version=v10.0&amp;width="
								style="width: 100%;"><span
									style="vertical-align: bottom; width: 100%; height: 287px;"><iframe
										name="fb7f135b887358" width="1000px" height="100px"
										data-testid="fb:comments Facebook Social Plugin"
										title="fb:comments Facebook Social Plugin" frameborder="0"
										allowtransparency="true" allowfullscreen="true" scrolling="no"
										allow="encrypted-media"
										src="https://www.facebook.com/v10.0/plugins/comments.php?app_id=844459216167725&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df18a28e6cd52b9%26domain%3Dwww.meronews.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.meronews.com%252Ff1a52ca84a95928%26relation%3Dparent.parent&amp;container_width=777&amp;height=100&amp;href=https%3A%2F%2Fwww.meronews.com%2F2022%2F02%2F104518.html&amp;locale=en_US&amp;numposts=7&amp;sdk=joey&amp;version=v10.0&amp;width="
										style="border: none; visibility: visible; width: 100%; height: 287px;"
										class=""></iframe></span></div>
						</div>
						<!--End Socail Plugins-->
						<br>


						<section id="relatedpost">
							<div class="category_heading sum">
								<h1 class="heading"><a href="#"><?php echo esc_html("सम्बन्धित"); ?></a></h1>
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
						<div class="col-lg-12 col-md-4">
							<!--1 Ads-->
							<div class="border card">
								<div class="full-banner">
									<img src="image/adssquare.jpg" class="card-img-bottom"
										alt="">
								</div>
							</div>
							<!--End ads-->
						</div>
						<div class="col-lg-12 col-md-4">
							<!--1 Ads-->
							<div class="border card">
								<div class="full-banner">
									<img src="image/adssquare.jpg" class="card-img-bottom"
										alt="">
								</div>
							</div>
							<!--End ads-->
						</div>
						<div class="col-lg-12 col-md-4">
							<!--1 Ads-->
							<div class="border card">
								<div class="full-banner">
									<img src="image/adssquare.jpg" class="card-img-bottom"
										alt="">
								</div>
							</div>
							<!--End ads-->
						</div>
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
