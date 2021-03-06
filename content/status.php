<article <?php hybrid_attr( 'post' ); ?>>

	<?php if ( is_singular( get_post_type() ) ) : // If viewing a single post. ?>

		<?php if ( get_option( 'show_avatars' ) ) : // If avatars are enabled. ?>

			<header class="entry-header">
				<?php echo get_avatar( get_the_author_meta( 'email' ) ); ?>
			</header>

		<?php endif; // End avatars check. ?>

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div>

		<footer class="entry-footer">
			<?php hybrid_post_format_link(); ?>
			<span <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></span>
			<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
			<?php edit_post_link(); ?>
			<?php hybrid_post_terms( array( 'taxonomy' => 'category', 'text' => __( 'Posted in %s', 'infusion' ) ) ); ?>
			<?php hybrid_post_terms( array( 'taxonomy' => 'post_tag', 'text' => __( 'Tagged %s', 'infusion' ), 'before' => '<br />' ) ); ?>
		</footer>

	<?php else : // If not viewing a single post. ?>

		<?php if ( get_option( 'show_avatars' ) ) : // If avatars are enabled. ?>

			<header class="entry-header">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_avatar( get_the_author_meta( 'email' ) ); ?></a>
			</header>

		<?php endif; // End avatars check. ?>

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php the_content(); ?>
		</div>

		<?php if ( !get_option( 'show_avatars' ) ) : // If avatars are not enabled. ?>

			<footer class="entry-footer">
				<?php hybrid_post_format_link(); ?>
				<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
				<a class="entry-permalink" href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url"><?php _e( 'Permalink', 'infusion' ); ?></a>
				<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', '' ); ?>
				<?php edit_post_link(); ?>
			</footer>

		<?php endif; // End avatars check. ?>

	<?php endif; // End single post check. ?>

</article>