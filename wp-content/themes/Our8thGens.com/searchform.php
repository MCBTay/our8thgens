<div id="navbar-searchbox-container" class="" role="search">
    <div id="navbar-searchbox">
        <form role="search" method="get" class="searchform search-form" action="<?php echo home_url( '/blog' ); ?>">
            <fieldset>
                <input type="search" class="search-field search anim-250" max-length="128" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                <input class="search-icon anim-250" title="Search" value="&#xf002;" type="submit" id="searchsubmit">
            </fieldset>
        </form>
    </div>
    <i class="icon fa fa-search lazyIcon"></i>
</div>