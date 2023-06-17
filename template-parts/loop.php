<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<article <?php post_class("card mb-4 bg-third  border-0"); ?>>
    <div class="card-body">
        <h2 class="card-title">
            <a href="<?php the_permalink() ?>" class="text-third" title="<?php the_title_attribute() ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <div>
            <?php ascendia_post_meta() ?>
        </div>
        <div class="card-text">
            <?php the_excerpt(); ?>
        </div>

        <?php ascendia_read_more_link() ?>
    </div>
</article>

<?php endwhile; ?>

<?php the_posts_pagination() ?>

<?php else : ?>
<p>No posts found.</p>
<?php endif; ?>