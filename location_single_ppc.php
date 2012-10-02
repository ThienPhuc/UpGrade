<?php query_posts( 'post_type=location&p='.get_field("location_id") ); ?>
<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
<div id="info-map">
<div class="map">
<p class="title_map"><?php the_title(); ?> Location</p>
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
</div>
</div>
<div class="map-right">
<h1>Real ER. Real Fast. <span>TM</span></h1>
<p><?php the_title(); ?></p>
<p><strong><?php the_field("hours")?></strong></p>
<div class="vcard">
		<strong class="fn org"><span class="geo" title="<?php the_field("lat")?>,<?php the_field("lng")?>"><?php the_field("vcard_title")?></span></strong><br>
		<span class="adr"><br>
		<span class="street-address"><?php the_field("address_1")?></span><br>
		<span class="locality"><?php the_field("city")?></span>, <span class="region"><?php the_field("state")?></span> <span class="postal-code"><?php the_field("zip")?></span><br>
		</span><!--/adr--><p></p>
		<div class="numbers">
		<span class="tel"><!--<abbr class="type" title="voice">Phone:</abbr>--> <span class="value footer-reservations"><?php the_field("phone")?></span></span><br>
	<?php if(get_field("fax")!=""){?>
			<!--<span class="tel"><abbr class="type" title="fax">Fax:</abbr> <span class="value footer-fax"><?php the_field("fax")?></span></span>-->
	<?php }?>
		</div>
		<p>&nbsp;</p>
</div>
<!--/vcard-->
<p></p>
<!--<p><a target="_blank" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','http://maps.google.com']);" href="<?php the_field("google_maps_url")?>">Map it / Get Directions »</a></p>-->
	<?php if(has_google_rating()):?>
	<div class="classification"><div class="cover"></div><div class="progress" style="width: <?php echo google_rating("pct");?>%;"></div> 
	<p class="google_rating">
	<?php echo google_rating();?> Stars	
	
		</p></div>
	<p></p>
	<?php endif;?>
	</div>
</div>
	<h5>Real ER. Real Fast.</h5>
	<p><?php the_field("description")?></p>
	<h5>Quick Tour</h5>
	<p>
	<iframe width="560" height="345" src="<?php the_field("quick_tour_url")?>" frameborder="0" allowfullscreen></iframe>
	</p>
	<h5><?php the_field("facility_medical_director_title")?></h5>
	<p><?php the_field("facility_medical_director")?></p>
	<?php if(get_field("state_license_url")!=""){?>
	<p><a class="license" href="<?php the_field("state_license_url")?>" onclick="javascript:_gaq.push(['_trackEvent','download','<?php the_field("state_license_url")?>']);"><?php the_field("state_license_title")?></a></p>
	<?php }?>
<?php endwhile; endif; ?>
<?php wp_reset_query();?>