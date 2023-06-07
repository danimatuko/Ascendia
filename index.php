<?php get_header() ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h2>
                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <div>
                Posted on
                <time class="post-date"><?php the_date(); ?></time>
                by
                <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")) ?>">
                    <?php echo get_the_author() ?>
                </a>
            </div>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <a href="<?php echo get_the_permalink() ?>" title="<?php the_title_attribute() ?>">
                Read More <span class="u-screen-reader-text">about <?php the_title() ?></span>
            </a>
        </article>
    <?php endwhile; ?>

    <?php the_posts_pagination() ?>

<?php else : ?>
    <p>No posts found.</p>
<?php endif; ?>

<?php get_footer() ?>