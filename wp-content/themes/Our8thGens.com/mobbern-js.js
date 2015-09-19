/**
 * Mobbern Theme JS
 * Changelog: 
 ** 1.2 Fix AutoScroll Effect for header-preset-minimal & header-preset-ads
 ** 1.1 Initial Build
 */

// Fixed Navbar on Top
var navbar_position;
var navbar_element;

function updateVariationsScrollFX() {
  switch(true) {
    case ( jQuery('#mobbern-header-0').is(":visible") ):
        navbar_position = jQuery("#page-header").height()-jQuery("#mobbern-header-0 #main-navbar").height();
        navbar_element = "#mobbern-header-0 #main-navbar";
        jQuery('#wrap').removeClass( function() { return jQuery(this).attr( "class" ).replace("customizer-open", ""); } ).addClass( "header-0" );
        break;
    case ( jQuery('#mobbern-header-1').is(":visible") ):
        navbar_position = jQuery("#page-header").height()-jQuery("#mobbern-header-1 #main-navbar").height();
        navbar_element = "#mobbern-header-1 #main-navbar";
        jQuery('#wrap').removeClass( function() { return jQuery(this).attr( "class" ).replace("customizer-open", ""); } ).addClass( "header-1" );
        break;
    case ( jQuery('#mobbern-header-2').is(":visible") ):
        navbar_position = jQuery("#page-header").height()-jQuery("#mobbern-header-2 #main-navbar").height();
        navbar_element = "#mobbern-header-2 #main-navbar";
        jQuery('#wrap').removeClass( function() { return jQuery(this).attr( "class" ).replace("customizer-open", ""); } ).addClass( "header-2" );
        break;
    case ( jQuery('#mobbern-header-3').is(":visible") ):
        navbar_position = jQuery("#page-header").height()-jQuery("#mobbern-header-3 #main-navbar").height();
        navbar_element = "#mobbern-header-3 #main-navbar";
        jQuery('#wrap').removeClass( function() { return jQuery(this).attr( "class" ).replace("customizer-open", ""); } ).addClass( "header-3" );
        break;
    case ( jQuery('#mobbern-header-4').is(":visible") ):
        navbar_position = jQuery("#mobbern-header-4 #main-navbar").height()/2;
        navbar_element = "#mobbern-header-4 #main-navbar";
        jQuery('#wrap').removeClass( function() { return jQuery(this).attr( "class" ).replace("customizer-open", ""); } ).addClass( "header-4" );
        break;
  }
}

jQuery(document).on("scroll", function() {

  
  
  if ( navbar_element == "#mobbern-header-4 #main-navbar") {
      jQuery(navbar_element).parent().toggleClass( "navbar-transparent" , jQuery(document).scrollTop() < navbar_position*3);
      jQuery(navbar_element).toggleClass( "navbar-fixed" , jQuery(document).scrollTop() > navbar_position*3-1);
  } else {
      jQuery(navbar_element).toggleClass( "navbar-fixed" , jQuery(document).scrollTop() > navbar_position);
  }

  jQuery(".header-0 #page-body").toggleClass("body-scrolled", jQuery(document).scrollTop() >= navbar_position);
  jQuery(".header-1 #page-body").toggleClass("body-scrolled", jQuery(document).scrollTop() >= navbar_position);
  jQuery(".header-2 #page-body").toggleClass("body-scrolled", jQuery(document).scrollTop() >= navbar_position);
  jQuery(".header-3 #page-body").toggleClass("body-scrolled", jQuery(document).scrollTop() >= navbar_position);
  jQuery(".header-4 #page-body").toggleClass("body-scrolled", jQuery(document).scrollTop() >= jQuery("#page-header").height()-60 );
});


// Scripting:
jQuery(document).ready(function(){

  //Init Scroll Effects
  updateVariationsScrollFX();

  //Tooltips
  jQuery("div.footer-contact-social a, .scroll-link, .profile-icons a").tooltip();
  jQuery(".collapse-button").tooltip({placement : "left"});
  jQuery(".icon-ucp a").tooltip({placement : "bottom"});

  // BEGIN: drop-down effect
  jQuery('#main-navbar .dropdown').on('show.bs.dropdown', function(e){
      var $dropdown = jQuery(this).find('.dropdown-menu');
      var orig_margin_top = parseInt($dropdown.css('margin-top'));
      var orig_height = parseInt($dropdown.css('height'));
      $dropdown.css({'height': '0', opacity: 0}).animate({'height': orig_height + 'px', opacity: 1}, 300, function(){
         jQuery(this).css({'height':''});
      });
   });

  // Add slidedown & fadeout animation to dropdown
  jQuery('#main-navbar .dropdown').on('hide.bs.dropdown', function(e){
      var $dropdown = jQuery(this).find('.dropdown-menu');
      var orig_margin_top = parseInt($dropdown.css('margin-top'));
      $dropdown.css({'margin-top': orig_margin_top + 'px', opacity: 1, display: 'block'}).animate({'margin-top': (orig_margin_top + 10) + 'px', opacity: 0}, 300, function(){
         jQuery(this).css({'margin-top':'', display:''});
      });
  });
  // END: drop-down effect



  // Display search button
  jQuery( "input#keywords" ).on({

    focus: function() {
      jQuery( "input.search-icon" ).addClass( "active" );
      jQuery( "#main-navbar>.container>.nav-content>.float-right" ).addClass( "active" );
    },
    
    blur: function() {
      jQuery( "input.search-icon" ).removeClass( "active" );
      jQuery( "#main-navbar>.container>.nav-content>.float-right" ).removeClass( "active" );
      jQuery( "#navbar-searchbox-container" ).css({width:"auto"});
    }
  });

  jQuery( "#navbar-searchbox-container" ).on({

    click: function() {
      jQuery( this ).parent().parent().parent().addClass( "active" );
      jQuery("#keywords").focus();
      jQuery( this ).animate({width:"100%"});
    }

  });



  // Smooth Scroll for In-Page Links
   jQuery('a.scroll-link').bind('click', function(e) {
    e.preventDefault();
       
    var target = jQuery(this).attr("href");
            
    jQuery('html, body').stop().animate({ scrollTop: jQuery(target).offset().top }, 1000, function() {
         location.hash = target;
    });
            
    return false;
   });


  // BEGIN: Collapsable Panes 
    // Collapse Button
    jQuery(".collapse-button").each(function () {

      var target_id = jQuery( this ).data('target').substr(1) + "_shown";
      
      if ( $.cookie( target_id ) === "false" ) {
        jQuery(this).toggleClass ("collapsed");
      }

    });

    // Collapse Target
    var c = document.cookie;
    jQuery(".collapse").each(function () {
      if (this.id) {
        var pos = c.indexOf(this.id + "_shown=");
        if (pos > -1) {
          c.substr(pos).split('=')[1].indexOf('false') ? jQuery(this).addClass('in') : jQuery(this).removeClass('in');
        }
      }
    }).on('hidden.bs.collapse shown.bs.collapse', function () {
      if (this.id) {
        $.cookie( this.id + "_shown", jQuery(this).hasClass('in'));
      }
    });
  // END: Collapsable Panes 

  // Lazy Icons
  jQuery(".fa").addClass("lazyIcon");
  jQuery(".footer-links-list li .fa").removeClass("lazyIcon");
});