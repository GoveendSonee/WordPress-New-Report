
  <!-- Eight section  -->
  <section id="eight">
    <div class="container">
      <div class="category_heading">
      <?php
            $category_slug = 'सेयर-बजार'; 
            $category_link = get_category_link(get_category_by_slug($category_slug)->term_id);
        ?>
        <h1 class="heading"><a href="<?php echo esc_url($category_link); ?>"><?php echo $category_slug; ?></a></h1>
      </div>
      <div class="row">

        <?php
          $args = array(
              'post_type'      => 'post',
              'posts_per_page' => 3,
              'order'          => 'DESC',
              'orderby'        => 'date',
              'category_name'  => 'सेयर-बजार',
          );

          $query = new WP_Query($args);
          if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card bg-dark text-white">
            
            <?php
            $default_image_url = get_template_directory_uri() . '/assets/img/footer logo.png';

            if (has_post_thumbnail()) {
                $featured_image_path = get_attached_file(get_post_thumbnail_id());
                if (file_exists($featured_image_path)) {
                    the_post_thumbnail('full', array('class' => 'card-img', 'alt' => get_the_title()));
                } else {
                    echo '<img src="' . esc_url($default_image_url) . '" class="card-img" alt="Default Image">';
                }
            } else {
                echo '<img src="' . esc_url($default_image_url) . '" class="card-img" alt="Default Image">';
            }
            ?>
            <div class="card-img-overlay">
              <h5 class="card-title"><a href="<?php echo esc_url(get_permalink()) ?>"><?php the_title(); ?></a>
              </h5>
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
              'category_name'  => 'सेयर-बजार', 
              'offset'         => 3,
          );

          $query = new WP_Query($args);
          if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card bg-dark text-white">
            <?php
              $default_image_url = get_template_directory_uri() . '/assets/img/footer logo.png';

              if (has_post_thumbnail()) {
                  $featured_image_path = get_attached_file(get_post_thumbnail_id());
                  if (file_exists($featured_image_path)) {
                      the_post_thumbnail('full', array('class' => 'card-img', 'alt' => get_the_title()));
                  } else {
                      echo '<img src="' . esc_url($default_image_url) . '" class="card-img" alt="Default Image">';
                  }
              } else {
                  echo '<img src="' . esc_url($default_image_url) . '" class="card-img" alt="Default Image">';
              }
            ?>
            <div class="card-img-overlay">
              <h5 class="card-title"><a href="<?php echo esc_url(get_permalink()) ?>"><?php the_title(); ?></a>
              </h5>
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
  </section>
  <!-- End Eight section  -->
