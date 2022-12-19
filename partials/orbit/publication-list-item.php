<?php
  $img_path      = get_stylesheet_directory_uri().'/assets/images/';
  $author_name   = get_post_meta( get_the_ID(), 'author_name', true );
  $external_url  = get_post_meta( get_the_ID(), 'external_url', true );
?>
<div class="op-content">
  <?php if( $author_name ): ?><strong><?php _e( $author_name );?></strong><?php endif; ?>
  <?php the_title();?>
  <?php if( $external_url ): ?>
    <div class="op-read-more">
      <a href="<?php _e( $external_url );?>" target="_blank" rel="noopener">
        Read Here <img alt="External Link Icon" aria-hidden="true" src="<?php _e( $img_path."external-link.png" );?>">
      </a>
    </div>
  <?php endif; ?>
</div>
