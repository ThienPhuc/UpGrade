<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="robots" CONTENT="noindex, nofollow">
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<script src="<?php bloginfo('template_directory'); ?>/js/activeContent.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ppc-css/style.css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-star_rating.css" />

<?php wp_head(); ?>
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('li.page-item-3635').addClass('current_page_item');
	});
</script>
<!--[if IE 7]>
<style type="text/css">
     #topnav{padding-left:0px;width:733px;}
     #topnav li ul{top:42px;}
     #header{z-index:12345}
</style>
<![endif]-->
<!--[if IE 6]>
<link rel='stylesheet' href='http://www.fcer.com/wp-content/themes/fcer/ie6.css' type='text/css' media='screen' />
<![endif]-->
</head>
<body>
<div id="top-mod">
  <div id="header">
          <div id="logo">
			<a href="<?php bloginfo('url'); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="<?php bloginfo('name'); ?>" width="220" />
			</a>
		</div>
          <?php get_template_part( 'nav' ); ?>
      </div><!-- #header -->
</div><!-- #top-mod -->