<div id="comments" class="comments">
<?php if (post_password_required()) : ?>
<p>
<?php esc_html_e('Post is password protected. Enter the password to view any comments.'); ?>
</p>
</div>
<?php return; endif; ?>
<?php if(have_comments()): ?>
<h2><?php comments_number(); ?></h2>
<ul>
<?php wp_list_comments(); ?>
</ul>
<?php elseif (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>
<p><?php esc_html_e('Comments are closed here.', 'wp-blank'); ?></p>
<?php endif; ?>

<!-- Formulario de los commentarios -->
<?php comment_form(); ?>
