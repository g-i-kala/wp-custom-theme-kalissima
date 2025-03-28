<?php
/**
 * The template for displaying comments
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<div class="comments-wrapper">
        <?php if ( have_comments() ) : ?>
            <h2 class="comments-title">
                <?php
                printf(
                    _nx(
                        'One thought on "%2$s"',
                        '%1$s thoughts on "%2$s"',
                        get_comments_number(),
                        'comments title',
                        'kalissima'
                    ),
                    number_format_i18n( get_comments_number() ),
                    '<span>' . get_the_title() . '</span>'
                );
                ?>
            </h2>
            <ol class="comment-list">
                <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                ) );
                ?>
            </ol><!-- .comment-list -->
            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
                <nav class="navigation comment-navigation" role="navigation">
                    <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'kalissima' ); ?></h1>
                    <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'kalissima' ) ); ?></div>
                    <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'kalissima' ) ); ?></div>
                </nav><!-- .comment-navigation -->
            <?php endif; // Check for comment navigation ?>
            <?php if ( ! comments_open() && get_comments_number() ) : ?>
                <p class="no-comments"><?php _e( 'Comments are closed.', 'kalissima' ); ?></p>
            <?php endif; ?>
        <?php endif; // have_comments() ?>
    </div>

	<?php comment_form(); ?>

</div><!-- #comments -->