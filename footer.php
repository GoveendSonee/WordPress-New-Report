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

?>

 <!-- Footer  -->
 <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card">
            <img src="img/footer logo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title">
                <a href="http://">
                  वीरगन्ज रिपोर्ट
                </a>
              </h3>
              <h5 class="card-title">
                <a href="http://">
                  प्रकाशक तथा संम्पादक
                </a>
              </h5>
              <div class="card-text paragraph1 rd">
                <li class="redd">
                  गोविन्द सोनी
                </li>
                <li class="redd">
                  गोविन्द सोनी
                </li>
                <li class="redd">
                  गोविन्द सोनी
                </li>
                <br>
              </div>
              <div class="social_icon">
                <a href=""><i class="fa-brands fa-facebook-f"></i> </a>
                <a href=""><i class="fa-brands fa-twitter"></i> </a>
                <a href=""><i class="fa-brands fa-instagram"></i> </a>
                <a href=""><i class="fa-brands fa-youtube"></i> </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card-body">
            <h4 class="card-title">
              <a href="http://">
                सम्पर्क
              </a>
            </h4>
            <div class="card-text paragraph1">
              <h6 class="card-title">
                <a href="http://">
                  वीरगन्ज रिपोर्ट प्रा.लि., प्रदेश-२ , वीरगन्ज , नेपाल
                </a>
              </h6>
              <li class="redd">
                ९८xxxxxxxx, ९८xxxxxxxx
              </li>
              <li class="redd">news@mithilacodecreation.com </li>
              <li class="redd">mithilacodecreation@gmail.com</li>
              <li class="redd">सूचना विभाग दर्ता नं.:- xxx-xxx/xx</li>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card-body">
            <h4 class="card-title">
              <a href="http://">
                फेसबुक पेज
              </a>
            </h4>
            <br>
            <div class="category">
              <div class="row">
                <iframe
                  src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fferiikinumnala%2F&tabs=timeline&width=340&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=438827321627080"
                  width="340" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                  allowfullscreen="true"
                  allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
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
            <script>document.write(new Date().getFullYear());</script> <span class="footer_highlight_color">Birgunj
              Report</span> | Powered by <a href="https://mithilacodecreation.com.np" class="footer_highlight_color"
              target="_blank">Mithila Code Creation Pvt. Ltd.</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Footer  -->

	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<php echo esc_url( __( 'https://wordpress.org/', 'birgunj-report' ) ); ?>">
				<php
				printf( esc_html__( 'Proudly powered by %s', 'birgunj-report' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<php
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'birgunj-report' ), 'birgunj-report', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div> 
	</footer>
</div> -->

<?php wp_footer(); ?>

</body>
</html>
