<?php
  $img_path      = get_stylesheet_directory_uri().'/assets/images/';
  $post_id       = get_the_ID();
  $external_url  = get_post_meta( $post_id, 'external_url', true );
  $thumbnail     = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' )[0];
?>
<div class="orbit-thumbnail-bg" <?php if( $thumbnail ){ _e('style="background-image:url('.$thumbnail.');"'); } ?>></div>
<div class="orbit-post-content">
  <h3><?php the_title();?></h3>
  <div class="op-read-more">
    <?php if( $external_url ): ?>
      <div class="op-read-more">
        <a href="<?php _e( $external_url );?>" target="_blank" rel="noopener">
          View Article <img alt="External Link Icon" aria-hidden="true" src="<?php _e( $img_path."external-link.png" );?>" />
        </a>
      </div>
    <?php endif; ?>
  </div>
</div>
