<!-- Sixth Section  -->
<section id="sixth">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12 col-sm-12">
      
        <div class="category_heading_post">
          <?php
              $category_slug = 'शिक्षा'; 
              $category_link = get_category_link(get_category_by_slug($category_slug)->term_id);
          ?>
          <h5 class="heading"><a href="<?php echo esc_url($category_link); ?>"><?php echo $category_slug; ?></a></h5>
        </div>
        <div class="row">
          <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 7,
                'order'          => 'DESC',
                'orderby'        => 'date',
                'category_name'  => 'शिक्षा', 
            );

            $query = new WP_Query($args);
            if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
          ?>
          <div class="col-lg-12 col-md-6 col-sm-12">
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
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="hero_first">
          <div class="category_heading">
            <?php
              $category_slug = 'अन्तर्राष्ट्रिय'; 
              $category_link = get_category_link(get_category_by_slug($category_slug)->term_id);
            ?>
            <h1 class="heading"><a href="<?php echo esc_url($category_link); ?>"><?php echo $category_slug; ?></a></h1>
          </div>
          <div class="row">
            <div class="col-12">
              <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 4,
                    'order'          => 'DESC',
                    'orderby'        => 'date',
                    'category_name'  => 'अन्तर्राष्ट्रिय', 
                );

                $query = new WP_Query($args);
                if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
              ?>
              <div class="news">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                      <div class="card-body">
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
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title"><a href="<?php echo esc_url(get_permalink()) ?>"><?php the_title(); ?></a>
                        </h5>
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
                      <div class="card-body p">
                        <?php
                          echo '<p class="card-text">' . wp_trim_words(get_the_excerpt(), 15) . '</p>';
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
          </div>
        </div>
        <div class="hero_second">
          <div class="category_heading">
            <?php
              $category_slug = 'स्वास्थ्य'; 
              $category_link = get_category_link(get_category_by_slug($category_slug)->term_id);
            ?>
            <h1 class="heading"><a href="<?php echo esc_url($category_link); ?>"><?php echo $category_slug; ?></a></h1>
          </div>
          <div class="row">
            <?php
              $args = array(
                  'post_type'      => 'post',
                  'posts_per_page' => 1,
                  'order'          => 'DESC',
                  'orderby'        => 'date',
                  'category_name'  => 'स्वास्थ्य', 
              );

              $query = new WP_Query($args);
              if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="col-12">
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
                  <h3 class="card-title"><a href="<?php echo esc_url(get_permalink()) ?>"><?php the_title(); ?></a></h3>
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
            <?php
              $args = array(
                  'post_type'      => 'post',
                  'posts_per_page' => 4,
                  'order'          => 'DESC',
                  'orderby'        => 'date',
                  'category_name'  => 'स्वास्थ्य', 
                  'offset'         => 1,
              );

              $query = new WP_Query($args);
              if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="col-lg-6 col-md-6 col-sm-12">
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
        </div>
        <div class="hero_third">
          <div class="category_heading">
            <?php
              $category_slug = 'विचार'; 
              $category_link = get_category_link(get_category_by_slug($category_slug)->term_id);
            ?>
            <h1 class="heading"><a href="<?php echo esc_url($category_link); ?>"><?php echo $category_slug; ?></a></h1>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="news">
                <div class="row">
                  <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 5,
                        'order'          => 'DESC',
                        'orderby'        => 'date',
                        'category_name'  => 'विचार', 
                    );

                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                  ?>
                  <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title"><a href="<?php echo esc_url(get_permalink()) ?>"><?php the_title(); ?></a>
                        </h5>
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
                      <div class="card-body p">
                      <?php
                        echo '<p class="card-text">' . wp_trim_words(get_the_excerpt(), 45) . '</p>';
                      ?>
                      </div>
                    </div>
                  </div>
                  <?php
                    endwhile;
                    wp_reset_postdata();
                    endif;
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12">
        <div class="category_heading_social">
          <h5 class="heading">हामी सँग जोडिनुहोस</h5>
        </div>
        <div class="row">
          <div class="card social">
            <div class="td_social_type td-pb-margin-side td_social_facebook">
              <div class="td-social-box">
                <i class="fa-brands fa-facebook-square"></i>
                <a href="http://" target="_blank" rel="noopener noreferrer">Facebook</a>
              </div>
            </div>
            <div class="td_social_type td-pb-margin-side td_social_twitter">
              <div class="td-social-box">
                <i class="fa-brands fa-twitter-square"></i>
                <a href="http://" target="_blank" rel="noopener noreferrer">Twitter</a>
              </div>
            </div>
            <div class="td_social_type td-pb-margin-side td_social_youtube">
              <div class="td-social-box">
                <i class="fa-brands fa-youtube-square"></i>
                <a href="http://" target="_blank" rel="noopener noreferrer">Youtube</a>
              </div>
            </div>
          </div>
        </div>
        <div class="category_heading_post">
          <?php
              $category_slug = 'राष्ट्रिय'; 
              $category_link = get_category_link(get_category_by_slug($category_slug)->term_id);
          ?>
          <h5 class="heading"><a href="<?php echo esc_url($category_link); ?>"><?php echo $category_slug; ?></a></h5>
        </div>
        <div class="row">
          <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 6,
                'order'          => 'DESC',
                'orderby'        => 'date',
                'category_name'  => 'राष्ट्रिय',
            );

            $query = new WP_Query($args);
            if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
          ?>
          <div class="col-lg-12 col-md-6 col-sm-12">
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
      </div>
    </div>
  </div>
</section>
<!-- End Sixth Section  -->