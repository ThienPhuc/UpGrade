<div id="topnav">
	<ul class="topnav">
		<li class="<?php if(is_home()) echo "current_page_item" ?>"><a href="<?php  echo home_url(); ?>">Home</a></li>
		<?php if ( is_single() ): ?>
				<?php wp_list_pages('sort_column=menu_order&title_li=&depth=3&on_item=37&exclude=701,746,817,1228,1477,1505,505,1545,1541,1571'); ?>
		<?php else: ?>
			<?php wp_list_pages('sort_column=menu_order&title_li=&depth=3&exclude=701,746,817,1228,1477,1505,505,1545,1541,1571'); ?>
		<?php endif;?>
	</ul>
</div>