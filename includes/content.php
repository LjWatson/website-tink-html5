<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/search.
 *
 * @package tink-2014
 */
?>

<article aria-labelledby="aria-article-<?php the_ID(); ?>" class="article<?php if ( is_sticky() ) : ?> article--sticky<?php endif; ?>" itemscope itemtype="http://http://schema.org/BlogPosting"  role="article">
    <header>
        <?php if ( is_single() ) : ?>
            <h1 class="article_title" id="aria-article-<?php the_ID(); ?>" itemprop="name"><?php the_title(); ?></h1>
        <?php else : ?>
            <h2 class="article_title" id="aria-article-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <?php endif; // is_single() ?>

        <?php get_template_part( 'includes/metadata' ); ?>
    </header>

    <?php if ( is_single() ) : ?>

        <?php the_content(); ?>

    <?php else : ?>

        <?php the_excerpt(); ?>

    <?php endif; // is_single() ?>
</article><!-- .article -->