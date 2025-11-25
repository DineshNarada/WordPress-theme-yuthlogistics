<?php get_header(); ?>

<main id="main" class="site-main">
    <?php
    if ( have_posts() ) :

        /* If this is the blog index / archive / search: show a list of posts */
        if ( is_home() || is_archive() || is_search() ) :
            while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a class="post-thumbnail" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'thumbnail' ); ?>
                        </a>
                    <?php endif; ?>

                    <header class="entry-header">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header>

                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile;

            // Pagination
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __('« Prev', 'yuthlogistics-theme'),
                'next_text' => __('Next »', 'yuthlogistics-theme'),
            ) );

        /* Otherwise (e.g. a static Page used for the blog), show full content */
        else :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;

    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>