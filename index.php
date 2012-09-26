<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

 get_header(); ?>
<?php $temp_query = $wp_query; ?>
<div id="blue_bar_container">
	<div id="jcaho">
		<h4>First Free-standing ER System in the U.S.</h4>
		<h3>JCAHO ACCREDITATION</h3>
	</div>
	<div id="social_icons">
		<ul class="middle">
			<li style="text-align: center;">
				<a href="http://www.facebook.com/firstchoiceer" target="_blank"><img src="<?php bloginfo("template_directory")?>/images/icons/facebook.png" border="0"/></a>
				<a href="http://www.twitter.com/firstchoiceer" target="_blank"><img src="<?php bloginfo("template_directory")?>/images/icons/twitter.png" border="0"/></a>
				<a href="http://www.linkedin.com/company/100906?trk=tyah" target="_blank"><img src="<?php bloginfo("template_directory")?>/images/icons/linkedin.png" border="0"/></a>
				<a href="http://pinterest.com/firstchoiceer/" target="_blank"><img src="<?php bloginfo("template_directory")?>/images/icons/pinterest.png" border="0"/></a>
				<a href="http://www.youtube.com/firstchoiceer" target="_blank"><img src="<?php bloginfo("template_directory")?>/images/icons/youtube.png" border="0"/></a>
				<a href="http://www.googleplus.com/firstchoiceer" target="_blank"><img src="<?php bloginfo("template_directory")?>/images/icons/googleplus.png" border="0"/></a>
			</li>
		</ul>
	</div>
</div>
	
<div id="column1a" style="display:none;">
			<!--NEWS AND EVENTS-->		
				<h2 class="col_hdr"><a href="/about-us/latest-news">News &amp; Events</a></h2>
				<div class="clear"></div>
				<?php $new_query = new WP_Query('cat=3,23&order=DESC&showposts=3'); ?>
				<?php  while ($new_query->have_posts()) : $new_query->the_post(); ?>
					<div class="newsicon">
						<h6 class="month"><?php the_time("M")?></h6>
						<h6 class="day"><?php the_time("d")?></h6>
					</div>
					<div class="news">
						<p><?php the_title();?> <a href="<?php the_permalink();?>"> Read More »</a></p>
					</div>
					<div class="clear"></div>
				<?php endwhile; ?>
				<?php wp_reset_query();  // Restore global post data ?>
				
				
		
	
	</div>
	
	<div id="column2" style="display:none;">
		<h2 class="col_hdr"><a href="#">What People Are Saying</a></h2>
						<div class="hreview" id="hreview-Thank-You!">
							<h4 class="summary">Thank You!</h4>
							<abbr title="5" class="rating"><img src="<?php bloginfo("template_directory")?>/images/star-5.gif" border="0" align="absmiddle" style="decoration:none;"></abbr> 
							<abbr class="dtreviewed" title="2012-04-12T10:32-06:00">Apr 12, 2012</abbr>
							<div class="item vcard"></div>
							<blockquote class="description">
								<p>
									"It's comforting to know that you are close by, especially with two rambunctious boys."
								</p>
							</blockquote>
							<span class="reviewer vcard"><span class="fn">Stefanie, The Woodlands</span></span>
							<span class="type" style="display: none; ">business</span>
							<span class="version" style="display: none; ">0.3</span>
						</div>
						<div class="clear"></div>
						<div class="hreview" id="hreview-First-Choice-is-Unique">
						<h4 class="summary">First Choice is Unique</h4>
						<abbr title="5" class="rating"><img src="<?php bloginfo("template_directory")?>/images/star-5.gif" border="0" align="absmiddle" style="decoration:none;"></abbr> 
						<abbr class="dtreviewed" title="2012-04-18T11:04-06:00">Apr 18, 2012</abbr>
						<div class="item vcard"></div>
						<blockquote class="description">
							<p>
								"No wait times, quick service, and caring attentiveness to families in 
								 emergency situations!" 
							</p>
						</blockquote>
						<span class="reviewer vcard"><span class="fn">Colette, Flower Mound, TX</span></span>
						<span class="type" style="display: none; ">business</span>
						
						<span class="version" style="display: none; ">0.3</span>
					</div>
						<div class="clear"></div>
						<div class="hreview" id="hreview-Awesome!">
						<h4 class="summary">Awesome!</h4>
						<abbr title="5" class="rating"><img src="<?php bloginfo("template_directory")?>/images/star-5.gif" border="0" align="absmiddle" style="decoration:none;"></abbr> 
						<abbr class="dtreviewed" title="2012-04-20T12:17-06:00">Apr 20, 2012</abbr>
						<div class="item vcard"></div>
						<blockquote class="description">
							<p>
								"I think First Choice ER is awesome!!!"
							</p>
						</blockquote>
						<span class="reviewer vcard">
							<span class="fn">Lori, Keller, TX</span>
						</span>
						<span class="type" style="display: none; ">business</span>
						<span class="version" style="display: none; ">0.3</span>
					</div>
			<div id="aggregate-reviews">
				<div class="hreview-aggregate">
					<h3 class="item">
						<span class="fn">First Choice Emergency Room</span>
					</h3>
					<span class="summary">First Choice Emergency Room is a free-standing, fully equipped emergency room.</span>
					<span><span class="rating">5.0</span> out of 5 
					based on <span class="count">3</span> reviews</span>
				</div>
			</div>	


	</div>

<div id="column12">
<h5>Real ER. Real Fast.</h5>
<?php query_posts( 'post_type=location&p='.get_field("location_id") ); ?>
			<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
				<p><?php the_field("description")?></p>
				<?php if(get_field("quick_tour_url")!=""){?>
				<h5>Quick Tour</h5>
				<p>
				<iframe width="560" height="345" src="<?php the_field("quick_tour_url")?>" frameborder="0" allowfullscreen></iframe>
				</p>
				<?php } ?>
				<h5><?php the_field("facility_medical_director_title")?></h5>
				<p><?php the_field("facility_medical_director")?></p>
					<?php if(has_google_rating()):?>
			
				<?php endif;?>
				<?php if(get_field("state_license_url")!="") { ?>
				<p><a class="license" href="<?php the_field("state_license_url")?>" onclick="javascript:_gaq.push(['_trackEvent','download','<?php the_field("state_license_url")?>']);"><?php the_field("state_license_title")?></a></p>
				<?php } ?>
<?php endwhile; endif; ?>

</div>
		
	<div id="column3">

		<p><A href="#"><img src="<?php bloginfo('template_directory'); ?>/images/patient_stories.jpg" border="0"/></a></p>
		<p>
			<a href="http://mymedicalbill.connectiq.net/FCER"><img src="<?php bloginfo('template_directory'); ?>/images/pay_your_bill.jpg" border="0"/></a>
		</p>
		
			<ul>	
				<li><a href="/about-us">Our Mission</a></li>
				<li><a href="/care/patient-satisfaction/">Patient Satisfaction</a></li>
				<li><a  href="/contact/career-opportunities/">Career Opportunities</a></li>
				
			</ul>
	
<div style="padding: 0 5px;">	
	<h2 class="col_hdr"><a href="#">What People Are Saying</a></h2>
						<div class="hreview" id="hreview-Thank-You!">
							<h4 class="summary">Thank You!</h4>
							<abbr title="5" class="rating"><img src="<?php bloginfo("template_directory")?>/images/star-5.gif" border="0" align="absmiddle" style="decoration:none;"></abbr> 
							<abbr class="dtreviewed" title="2012-04-12T10:32-06:00">Apr 12, 2012</abbr>
							<div class="item vcard"></div>
							<blockquote class="description">
								<p>
									"It's comforting to know that you are close by, especially with two rambunctious boys."
								</p>
							</blockquote>
							<span class="reviewer vcard"><span class="fn">Stefanie, The Woodlands</span></span>
							<span class="type" style="display: none; ">business</span>
							<span class="version" style="display: none; ">0.3</span>
						</div>
						<div class="clear"></div>
						<div class="hreview" id="hreview-First-Choice-is-Unique">
						<h4 class="summary">First Choice is Unique</h4>
						<abbr title="5" class="rating"><img src="<?php bloginfo("template_directory")?>/images/star-5.gif" border="0" align="absmiddle" style="decoration:none;"></abbr> 
						<abbr class="dtreviewed" title="2012-04-18T11:04-06:00">Apr 18, 2012</abbr>
						<div class="item vcard"></div>
						<blockquote class="description">
							<p>
								"No wait times, quick service, and caring attentiveness to families in 
								 emergency situations!" 
							</p>
						</blockquote>
						<span class="reviewer vcard"><span class="fn">Colette, Flower Mound, TX</span></span>
						<span class="type" style="display: none; ">business</span>
						
						<span class="version" style="display: none; ">0.3</span>
					</div>
						<div class="clear"></div>
						<div class="hreview" id="hreview-Awesome!">
						<h4 class="summary">Awesome!</h4>
						<abbr title="5" class="rating"><img src="<?php bloginfo("template_directory")?>/images/star-5.gif" border="0" align="absmiddle" style="decoration:none;"></abbr> 
						<abbr class="dtreviewed" title="2012-04-20T12:17-06:00">Apr 20, 2012</abbr>
						<div class="item vcard"></div>
						<blockquote class="description">
							<p>
								"I think First Choice ER is awesome!!!"
							</p>
						</blockquote>
						<span class="reviewer vcard">
							<span class="fn">Lori, Keller, TX</span>
						</span>
						<span class="type" style="display: none; ">business</span>
						<span class="version" style="display: none; ">0.3</span>
					</div>
			<div id="aggregate-reviews">
				<div class="hreview-aggregate">
					<h3 class="item">
						<span class="fn">First Choice Emergency Room</span>
					</h3>
					<span class="summary">First Choice Emergency Room is a free-standing, fully equipped emergency room.</span>
					<span><span class="rating">5.0</span> out of 5 
					based on <span class="count">3</span> reviews</span>
				</div>
			</div>
</div>
	
		
	</div>
	<div class="clear"></div>
<?php $wp_query = $temp_query; ?>
<?php get_footer(); ?>