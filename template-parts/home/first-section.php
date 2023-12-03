
<?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 2,
    'order'          => 'DESC',
    'orderby'        => 'date',
);

$query = new WP_Query($args);
if ($query->have_posts()) :
  while ($query->have_posts()) : $query->the_post();
?>
  <section id="first">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h1 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
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
              <?php
                echo '<p class="card-text">' . wp_trim_words(get_the_excerpt(), 45) . '</p>';
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
endwhile;
wp_reset_postdata();
endif;
?>