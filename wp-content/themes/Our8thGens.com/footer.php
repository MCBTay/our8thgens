<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

//include('/home/mcbtay/public_html/includes/functions.php');
?>

</div> <!-- /#page-body -->

<?php
    $img_path = "../../../forum/styles/Mobbern3.1/theme/images/ads";

    $paths = array(
        $img_path . '/trs',
        $img_path . '/rv6',
    );

    $sites = array(
        'http://www.theretrofitsource.com',
        'http://www.rv6-p.com',
    );
    $key = array_rand($paths);
    $random_ad_path = $paths[$key];
    $random_ad_url = $sites[$key];
?>
<div class="inpage-adspace adspace" style="margin: 30px 0 70px !important;">
    <!-- Large Leaderboard (970x90) -->
    <div class="adblock ad-large-leaderboard">
        <a href="<?php echo $random_ad_url; ?>" target="_blank">
            <img src="<?php echo $random_ad_path; ?>/970x90.png">
        </a>
    </div>

    <!-- Leaderboard Size (728x90) -->
    <div class="adblock ad-leaderboard">
        <a href="<?php echo $random_ad_url; ?>" target="_blank">
            <img src="<?php echo $random_ad_path; ?>/728x90.png">
        </a>
    </div>
    <!-- Banner Size (468x60) -->
    <div class="adblock ad-banner">
        <a href="<?php echo $random_ad_url; ?>" target="_blank">
            <img src="<?php echo $random_ad_path; ?>/468x60.png">
        </a>
    </div>
    <!-- Mobile Leaderboard Size (320x50) -->
    <div class="adblock ad-mobile-leaderboard">
        <a href="<?php echo $random_ad_url; ?>" target="_blank">
            <img src="<?php echo $random_ad_path; ?>/320x50.png">
        </a>
    </div>
</div>


<div id="page-footer">
    <footer class="footer-body" id="mobbern-footer-0">
        <div class="page-width container">

            <div id="scroll-top">
                <a id="scroll-top-button" class="scroll-link anim-250" href="#wrap"  title="TOP"><i class="fa fa-angle-up lazyIcon"></i></a>
            </div>

            <div class="row">
                <div id="footer-about" class="footer-panel col-md-6 col-sm-6">
                    <h3><span class="header-icon"><i class="fa fa-question lazyIcon"></i></span> About Us</h3>
                    <div class="footer-panel-body">
                        <p>Our8thGens is a <strong>community</strong> for 2008 - 2012 Honda Accord owners and enthusiasts.  A regrouping and reinvention of things that once were.  The word 'our' was chosen in order to promote a more community driven environment.</p>
                        <p>Here at Our8thGens you'll find mountains of knowledge around the 8th generation Honda Accord.  Everything from maintaining the stock vehicle to complete air suspension installs and custom bumpers, you'll find here.  This forum thrives off of priceless user experience, time, and expertise of the platform.</p>
                    </div>
                </div> <!-- /#footer-about -->

                <div id="footer-contact" class="footer-panel col-md-3 col-sm-3" style="text-align=right;">
                </div><!-- /#footer-contact -->

                <div id="footer-contact" class="footer-panel col-md-3 col-sm-3" style="text-align=right;">
                    <h3><span class="header-icon"><i class="fa fa-envelope-o lazyIcon"></i></span> Contact</h3>
                    <div class="footer-panel-body footer-contact-options">
                        <ul class="list-unstyled anim-150-container">
                            <li><a href="mailto:contactus@our8thgens.com" target="_top"><i class="icon fa fa-envelope lazyIcon"></i><p>contactus@our8thgens.com</p></a></li>
                            <li><a href="http://www.facebook.com/groups/Our8thGens" target="_blank"><i class="icon fa fa-facebook-square lazyIcon"></i><p>Our8thGens</p></a></li>
                            <li><a href="http://www.instagram.com/our8thgens" target="_blank"><i class="icon fa fa-instagram lazyIcon"></i><p>@our8thgens</p></a></li>
                        </ul>
                    </div>
                </div><!-- /#footer-contact -->
            </div>

            <div class="copyright">
                <div class="row">
                    <div class="col-md-4"></div>

                    <div class="col-md-4 footer-contact-social">
                    </div>

                    <div class="col-md-4 author-link">
                        <i class="icon fa fa-caret-right lazyIcon"></i>
                        Copyright &copy; 2014 Our8thGens.com
                    </div>
                </div>
            </div>
        </div><!-- /.page-width.container -->

    </footer><!-- /#mobbern-footer-0 -->
</div><!-- /#page-footer -->


</div><!-- /#wrap -->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56712118-1', 'auto');
    ga('send', 'pageview');

</script>

<!-- Remove <br> tags from galleries in posts to aid in responsive design -->
<script>jQuery('.gallery').find('br').remove();</script>
<?php wp_footer(); ?>
</body>
</html>