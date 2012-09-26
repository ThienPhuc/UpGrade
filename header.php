<?php
if(is_mobile()){
	require_once(dirname(__FILE__).'/mobile_device_detect.php');
	if(mobile_device_detect(true,false,true,true,true,true,true,false,false)){
		header('Location: http://www.fcer.com/mobile');
	}
}
?>
<?php if(is_single()) :?>
	<?php $my_id = 37; $GLOBALS['home_post'] = get_post($my_id); ?>
<?php else : ?>
	<?php $GLOBALS['home_post'] = get_post(base_ID()); ?>
<?php endif;?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head <?php echo strpos($_SERVER['REQUEST_URI'], 'locations') === false ? 'profile="http://gmpg.org/xfn/11"' : 'profile="http://www.w3.org/2006/03/hcard"'; ?>>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	

		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/global.css" />
	<?php if(is_home()) : ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/homepage.css" />
	<?php endif;?>
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-star_rating.css" />
	<!--[if lte IE 8]>
		<link href="<?php bloginfo('template_directory'); ?>/css/lteie8.css" media="screen" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if lte IE 7]>
		<link href="<?php bloginfo('template_directory'); ?>/css/lteie7.css" media="screen" rel="stylesheet" type="text/css" />
	<![endif]-->	
	<!--[if IE 6]>
	<link href='<?php bloginfo('template_directory'); ?>/css/ie6.css' media='screen' rel='stylesheet' type='text/css'  />
	<![endif]-->
	
	
	<?php if( (bool) strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') ) : ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ipad.css" />
	<?php endif; ?>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery-ui-1.8.9.custom.css" />	
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/AC_RunActiveContent.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui-1.8.9.custom.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slides.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_directory")?>/js/application.js"></script>
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	<link rel="<?php bloginfo('template_directory'); ?>/images/google_plus.png" href="Link to square FCER logo " />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
	<?php echo get_canonical_url();?>
		
	
	
</head>
<body <?php body_class(); ?>>
	<div id="geo_loc_vars" style="display:none;">
	<?php 
	// prints Dallas, Austin, or Houston based on user's ip
	print_location_by_ip(); ?>
	</div>
	<div class="topbar">
		<div id="logo">
			<a href="<?php bloginfo('url'); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="<?php bloginfo('name'); ?>" width="220" />
			</a>
		</div>
		<?php get_template_part( 'nav' ); ?>
		
	</div>
	<div class="clear"></div>
	<?php if(is_home()): ?>	
		<div id="home_container">
			<div id="splash">
				<div id="map">
						<h2 style="visibility:hidden;">Find a Location Near You</h2>
						<div id="tabs">
							<ul>
								<li><a href="#tabs-1">MURPHY LOCATION</a></li>

							</ul>
							<div id="tabs-1">
										<?php query_posts( 'post_type=location&p='.get_field("location_id") ); ?>
										<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
											<div>
												
										
											<?php
											$args = array(
												"zoom"=>12,
												"width" => 470,
												"height" => 277,
												"center"=>array("lat"=>get_field("lat"),"lng"=>get_field("lng"))
											);
											$mymap = new Mappress_Map($args);
											
											$poi_array = array();
											
											$poi_args = array(
												"iconid" => "blue-dot", 
												"title" => get_the_title(), 
												"body"=>get_map_body(get_the_ID()),
												"point" => array("lat" => get_field("lat"), "lng" => get_field("lng"))
											);
											$item =  new Mappress_Poi($poi_args);
											
											$mymap->pois = array($item);

											echo $mymap->display(array("directions"=>"none"));
															
											?>
											<?php endwhile; endif; ?>
											</div>
							</div>
						</div>
				</div>
					<div id="right_content">
						<div id="box1">

								<h1>Real ER. Real Fast. <span>TM</span></h1>
								<h3>MURPHY</h3>
<p>Open 24 Hours - Daily<br/>First Choice Emergency Room</p>

						<p>211 E FM 544, Suite 401<br/>Murphy, TX 75094</p>
								
						
						</div>	
						<div id="box2">
							<img src="<?php bloginfo('template_directory'); ?>/images/contact_facility.png" alt="" />
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
<?php endif; ?>
<div class="clear"></div>
	<div id="page">
		<?php if(!is_home()):?>
			<?php if(is_single()): ?>
				<p id="breadcrumbs"><a href="/">Home</a> » <a href="/about-us/">About Us</a> » 
					<a href="/about-us/latest-news">Latest News</a> » <strong><?php echo get_the_time("F d, Y")?></strong> </p>
			<?php else: ?>
				<?php if ( function_exists('yoast_breadcrumb') ) { 	yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
			<?php endif; ?>
		<?php endif;?>