<?php
    $img_path = "/forum/styles/Mobbern3.1/theme/images/ads";

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