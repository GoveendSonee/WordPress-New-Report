
  <!-- Fifth Section  -->
  <section id="fifth">
    <div class="container">
      <div class="category_heading_video">
        <?php
            $category_slug = 'प्रदेश'; 
            $category_link = get_category_link(get_category_by_slug($category_slug)->term_id);
        ?>
        <h1 class="heading"><a href="<?php echo esc_url($category_link); ?>"><?php echo $category_slug; ?></a></h1>
      </div>
      <div class="row">
        <div class="slider_swiper">
          <div class="swiper OnemySwiper">
            <div class="swiper-wrapper">
              <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 10,
                    'order'          => 'DESC',
                    'orderby'        => 'date',
                    'category_name'  => 'प्रदेश',
                );

                $query = new WP_Query($args);
                if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
              ?>
              <div class="swiper-slide">
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
              <?php
                endwhile;
                wp_reset_postdata();
                endif;
              ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Fifth Section  -->