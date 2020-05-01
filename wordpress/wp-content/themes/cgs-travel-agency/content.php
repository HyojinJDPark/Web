<?php if(is_home()){ ?>
<div class="col-xl-12">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="post-meta"><?php esc_html_e( 'by', 'cgs-travel-agency' ); ?> <span class="author vcard"><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ))); ?>" title="<?php esc_attr_e('Posts by admin','cgs-travel-agency') ?>" rel="author"><?php the_author(); ?></a></span>  |  <span class="published"><?php the_time(); ?></span></p>
		<div class="row">
		<?php if(has_post_thumbnail()){ ?>
		<div class="col-xl-3"><div class="featured-img"><?php the_post_thumbnail('img_348_201'); ?></div></div>
		<div class="col-xl-9">
		<div class="post-content"><?php the_excerpt(); ?></div>
		</div>
		<?php } else { ?>
		<div class="col-xl-12">
        <div class="post-content"><?php the_excerpt(); ?></div>
		</div>
		<?php } ?>
		</div>
		<div class="cgs-readmore"><a href="<?php the_permalink(); ?>">Read More</a></div>
	</div>
</div>
<?php } ?>
<?php if(is_single()){ ?>
    <div class="col-xl-12">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <p class="post-meta"><?php esc_html_e( 'by', 'cgs-travel-agency' ); ?> <span class="author vcard"><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ))); ?>" title="<?php esc_attr_e('Posts by admin','cgs-travel-agency'); ?>" rel="author"><?php the_author(); ?></a></span>  |  <span class="published"><?php the_time(); ?></span></p>
            <div class="post-content"><?php the_content(); ?></div>
        </div>
    </div>
<?php } ?>
<?php if(is_page()){ ?>
    <div class="col-xl-12">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="post-content"><?php the_content(); ?></div>
        </div>
    </div>
<?php } ?>