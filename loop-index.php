<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<div id="pattern">
    <h4><?php the_category(' '); ?> <span class="sep">&rarr;</span> <?php the_title(); ?></h4>
</div>

<div id="pattern-wrap" class="group">
    <?php $key="html"; echo get_post_meta($post->ID, $key, true); ?>
</div>

<row>

    <div id="markup">
        <textarea cols="10">
            <?php $key="html"; echo get_post_meta($post->ID, $key, true); ?>
        </textarea>
    </div>

    <?php if($post->post_content != "") {?>
    <div id="pattern-notes" class="mod">
        <h3 class="label">Notes</h3>
        <?php the_content(); ?>
    </div>
    <?php } ?>

</row>
