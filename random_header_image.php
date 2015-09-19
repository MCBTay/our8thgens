<?php
    $random_header_id = mt_rand(1, 57);
    $theme_path = "/forum/styles/Mobbern3.1/theme";
?>
<div id="featured_images_carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
            <div class="item active">
            <a href="http://www.our8thgens.com">
                <img src="<?php echo $theme_path; ?>/images/header/header-<?php echo $random_header_id; ?>.jpg" />
            </a>
        </div>
      </div>
</div>