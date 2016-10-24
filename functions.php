<?php
require_once('!module-constants.php');

define("THEME_DIR_URI", get_template_directory_uri());
define("THEME_DIR", get_template_directory());
define("IMAGES", THEME_DIR_URI."/images");
define("CUSTOM_FIELDS", THEME_DIR."/custom-fields");
define("AUCTION_CUSTOM_FIELDS", THEME_DIR."/custom-fields/auction");
define("CSS", THEME_DIR."/css");
define("PATTERNS", THEME_DIR."/patterns");
define("ATOMS", THEME_DIR."/patterns/00-atoms");
define("MOLECULES", THEME_DIR."/patterns/01-molecules");
define("ORGANISMS", THEME_DIR."/patterns/02-organisms");
define("TEMPLATES", THEME_DIR."/patterns/03-templates");
define("GROGAN_ORGANISMS", THEME_DIR."/patterns-grogan/02-organisms");

/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

/*--- BOOTSTRAP NAVIGATION ---*/
add_theme_support('nav-menus');
if(function_exists("register_nav_menus")){
	register_nav_menus (array('primary' => 'primary'));	
}


function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js", array( 'jquery' ));
	wp_register_script('jquery.royalslider.custom.min.js', THEME_DIR_URI . '/js/royal-slider/jquery.royalslider.custom.min.js', array( 'jquery' ));
	wp_register_script('grogan.js', THEME_DIR_URI . '/js/grogan/grogan.js', array( 'jquery' ));
	wp_register_script('bootstrap-gravity-forms.js', THEME_DIR_URI . '/js/bootstrap-gravity-forms.js', array( 'jquery' ));
	wp_register_script('back-to-top.js', THEME_DIR_URI . '/js/back-to-top.js', array( 'jquery' ));
	wp_register_script('to-proper-case.js', THEME_DIR_URI . '/js/to-proper-case.js', array( 'jquery' ));
	wp_register_script('jquery.matchHeight-min.js', THEME_DIR_URI . '/js/jquery-match-height-master/jquery.matchHeight-min.js', array( 'jquery' ));
    wp_enqueue_script('jquery.bootstrap.min');
	wp_enqueue_script('jquery.royalslider.custom.min.js');
	wp_enqueue_script('bootstrap-gravity-forms.js');
	//wp_enqueue_script('back-to-top.js');
	wp_enqueue_script('to-proper-case.js');
	wp_enqueue_script('jquery.matchHeight-min.js');
	wp_enqueue_script('grogan.js');
}
add_action( 'init', 'wpt_register_js' );

function wpt_register_css() {
	wp_register_style( 'google-fonts', "http://fonts.googleapis.com/css?family=Domine:400,700|Open+Sans:300,400,500,600");
	wp_register_style( 'font-awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css");
	wp_register_style( 'style.css', THEME_DIR_URI . '/style.css' );
	wp_register_style( 'royalslider.css', THEME_DIR_URI . '/js/royal-slider/royalslider.css' );
	wp_register_style( 'rs-default.css', THEME_DIR_URI . '/js/royal-slider/skins/default/rs-default.css' );
	wp_enqueue_style( 'google-fonts' );
	wp_enqueue_style( 'style.css' );
	wp_enqueue_style( 'royalslider.css' );
	wp_enqueue_style( 'rs-default.css' );
	wp_enqueue_style( 'font-awesome' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

function admin_styles() {
	wp_register_style( 'wp-meta.css', get_template_directory_uri() . '/wp-meta.css' );
	wp_enqueue_style( 'wp-meta.css' );
}
add_action('admin_head', 'admin_styles');

/*--- REGISTER CUSTOM NAVIGATION WALKER ---*/
require_once('wp_bootstrap_navwalker.php');

/*--- TEMPLATES ---*/
function function_get_output($fn)
{
  $args = func_get_args();unset($args[0]);
  ob_start();
  call_user_func_array($fn, $args);
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
}

function display($template, $fields = array(), $config = array(), $META_ID = null)
{
  extract($fields);
  extract($config);
  include $template;
}

function render($template, $fields = array(), $config = array(), $META_ID = null)
{
  return function_get_output('display', $template, $fields, $config, $META_ID);
}

/*--- PAGINATION ---*/

// Bootstrap pagination function

function wp_bs_pagination($pages = '', $range = 4){  
     $showitems = ($range * 2) + 1;  
     global $paged;

     if(empty($paged)) $paged = 1;

     if($pages == ''){
         global $wp_query; 
		 $pages = $wp_query->max_num_pages;
         if(!$pages){
             $pages = 1;
         }
     }   

     if(1 != $pages)

     {

        echo '<div class="text-center pagination--nav module">'; 
        echo '<nav><ul class="pagination">';

         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' aria-label='First'>&laquo;</a></li>";

         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."' aria-label='Previous'>&lsaquo;</a></li>";

 

         for ($i=1; $i <= $pages; $i++)

         {

             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))

             {

                 echo ($paged == $i)? "<li class=\"active\"><span>".$i." <span class=\"sr-only\">(current)</span></span>

    </li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";

             }

         }

 

         if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Next'>&rsaquo;</a></li>";  

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."' aria-label='Last'>&raquo;</a></li>";

         echo "</ul></nav>";
         echo "</div>";
     }

}


/*--- CUSTOM FIELDS ---*/
require_once(CUSTOM_FIELDS.'/field-modules-w-fix.php');
require_once(CUSTOM_FIELDS.'/fields.php');
require_once(CUSTOM_FIELDS.'/fields-content-single-column.php');
require_once(CUSTOM_FIELDS.'/fields-auction-header.php');
require_once(CUSTOM_FIELDS.'/fields-upcoming-auctions.php');
require_once(CUSTOM_FIELDS.'/fields-page.php');
require_once(CUSTOM_FIELDS.'/fields-cta-main.php');
require_once(CUSTOM_FIELDS.'/fields-home.php');
require_once(CUSTOM_FIELDS.'/fields-consignment.php');
require_once(CUSTOM_FIELDS.'/fields-consignment-process.php');
require_once(CUSTOM_FIELDS.'/fields-services.php');
require_once(CUSTOM_FIELDS.'/fields-estates.php');
require_once(CUSTOM_FIELDS.'/fields-buying.php');
require_once(CUSTOM_FIELDS.'/fields-post-auction.php');
require_once(CUSTOM_FIELDS.'/fields-specialties.php');
require_once(CUSTOM_FIELDS.'/fields-highlights.php');
require_once(CUSTOM_FIELDS.'/fields-about.php');
require_once(CUSTOM_FIELDS.'/fields-neighborhood.php');
require_once(CUSTOM_FIELDS.'/fields-team.php');
require_once(CUSTOM_FIELDS.'/fields-events.php');
require_once(CUSTOM_FIELDS.'/fields-press.php');
require_once(CUSTOM_FIELDS.'/fields-contact.php');
require_once(CUSTOM_FIELDS.'/fields-directions.php');

/*--- CUSTOM FIELDS FOR AUCTIONS ---*/
require_once(AUCTION_CUSTOM_FIELDS.'/fields-success.php');
require_once(AUCTION_CUSTOM_FIELDS.'/fields-create-account-success.php');
require_once(AUCTION_CUSTOM_FIELDS.'/fields-inquiry-success.php');
require_once(AUCTION_CUSTOM_FIELDS.'/fields-telephone-success.php');
require_once(AUCTION_CUSTOM_FIELDS.'/fields-absentee-success.php');
require_once(AUCTION_CUSTOM_FIELDS.'/fields-auction-info.php');
require_once(AUCTION_CUSTOM_FIELDS.'/fields-upcoming-auctions.php');
require_once(AUCTION_CUSTOM_FIELDS.'/fields-bid-page.php');
require_once(AUCTION_CUSTOM_FIELDS.'/fields-edit-telephone-bid-page.php');
require_once(AUCTION_CUSTOM_FIELDS.'/fields-cancel-bid-success.php');
require_once(AUCTION_CUSTOM_FIELDS.'/fields-edit-bid-success.php');
require_once(AUCTION_CUSTOM_FIELDS.'/fields-forgot-password.php');
require_once(AUCTION_CUSTOM_FIELDS.'/fields-sign-out.php');
require_once(AUCTION_CUSTOM_FIELDS.'/fields-account-no-results.php');
?>
