<ul id="<?php _e( $atts['id'] );?>" data-target="<?php _e('li.orbit-article-db');?>" data-url="<?php _e( $atts['url'] );?>" class="articles-outreach-grid orbit-list-db">
	<?php while( $this->query->have_posts() ) : $this->query->the_post();?>
		<li class='orbit-article-db'>
			<?php get_template_part( 'partials/orbit/outreach-item' );?>
		</li>
	<?php endwhile;?>
</ul>
