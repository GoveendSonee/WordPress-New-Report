<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Birgunj_Report
 */
$options = get_option( '_prefix_my_options' ); 
?>

 <!-- Footer  -->
 <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card">
            <?php
              $custom_logo_id = get_theme_mod('custom_logo');
              if ($custom_logo_id) {
                $logo_image = wp_get_attachment_image_src($custom_logo_id, 'full');
                $home_url = esc_url(home_url('/')); // Get the home URL
                echo '<a href="' . $home_url . '"><img src="' . esc_url($logo_image[0]) . '" class="card-img-top" alt="Custom Logo"></a>';
              }
            ?>
            <div class="card-body">
              <h3 class="card-title">
                <a href="<?php echo esc_url($home_url); ?>">
                <?php echo esc_html("वीरगन्ज रिपोर्ट"); ?>
                </a>
              </h3>
              <h5 class="card-title">
                <a>
                  <?php if ($options['footer_name_heading']) { ?>
                      <?php echo $options['footer_name_heading']; ?>
                  <?php } ?>
                </a>
              </h5>
              <div class="card-text paragraph1 rd">
                <?php if ($options['footer_name_one']) { ?>
                  <li class="redd">
                    <?php echo $options['footer_name_one']; ?>
                  </li>
                <?php } ?>
                <?php if ($options['footer_name_two']) { ?>
                  <li class="redd">
                    <?php echo $options['footer_name_two']; ?>
                  </li>
                <?php } ?>
                <?php if ($options['footer_name_three']) { ?>
                  <li class="redd">
                    <?php echo $options['footer_name_three']; ?>
                  </li>
                <?php } ?>
                <br>
              </div>
              <div class="social_icon">

                <?php if ($options['social_media_fields_facebook']) { ?>
                  <a target="_blank" href="<?php echo $options['social_media_fields_facebook']; ?>"><i class="fa-brands fa-facebook-f"></i> </a>
                <?php } ?>
                <?php if ($options['social_media_fields_instagram']) { ?>
                  <a target="_blank" href="<?php echo $options['social_media_fields_instagram']; ?>"><i class="fa-brands fa-instagram"></i> </a>
                <?php } ?>
                <?php if ($options['social_media_fields_twitter']) { ?>
                  <a target="_blank" href="<?php echo $options['social_media_fields_twitter']; ?>"><i class="fa-brands fa-twitter"></i> </a>
                <?php } ?>
                <?php if ($options['social_media_fields_youtube']) { ?>
                  <a target="_blank" href="<?php echo $options['social_media_fields_youtube']; ?>"><i class="fa-brands fa-youtube"></i> </a>
                <?php } ?>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card-body">
            <h4 class="card-title">
              <a>
                <?php echo esc_html("सम्पर्क"); ?>
              </a>
            </h4>
            <div class="card-text paragraph1">

              <?php if ($options['footer_two_olumn_address']) { ?>
                <h6 class="card-title">
                  <a>
                    <?php echo $options['footer_two_olumn_address']; ?>
                  </a>
                </h6>
              <?php } ?>

              <?php if ($options['footer_two_olumn_phonenumber']) { ?>
                <li class="redd">
                  <?php echo $options['footer_two_olumn_phonenumber']; ?>
                </li>
              <?php } ?>
              <?php if ($options['footer_two_olumn_email_one']) { ?>
                <li class="redd"><?php echo $options['footer_two_olumn_email_one']; ?></li>
              <?php } ?>
               <?php if ($options['footer_two_olumn_email_two']) { ?>
                <li class="redd"><?php echo $options['footer_two_olumn_email_two']; ?></li>
              <?php } ?>
              <?php if ($options['footer_two_olumn_dartanumber_']) { ?>
                <li class="redd"><?php echo esc_html("सूचना विभाग दर्ता नं.:-"); ?> <?php echo $options['footer_two_olumn_dartanumber_']; ?></li>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card-body">
            <h4 class="card-title">
              <a>
                <?php echo esc_html("फेसबुक पेज"); ?>
              </a>
            </h4>
            <br>
            <div class="category">
              <div class="row">
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100084344262449%26mibextid%3DZbWKwL&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="footer_last">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="copyright_text">&copy;
            <script>document.write(new Date().getFullYear());</script> <span class="footer_highlight_color"><?php echo esc_html("Birgunj Report"); ?></span><?php echo esc_html(" | Powered by "); ?><a href="https://mithilacodecreation.com.np" class="footer_highlight_color"
              target="_blank"><?php echo esc_html("Mithila Code Creation Pvt. Ltd."); ?></a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Footer  -->
<?php wp_footer(); ?>

</body>
</html>
