<article <?php post_class("card mb-4 shadow border-dark"); ?>>
    <div class="card-body">
        <h2 class="card-title font-monospace">
            <a href="<?php the_permalink() ?>" class="" title="<?php the_title_attribute() ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <div>
            <?php ascendia_post_meta() ?>
        </div>
        <div class="card-text fs-5">
            <?php the_excerpt(); ?>
        </div>

        <?php ascendia_read_more_link() ?>
        <?php ascendia_delete_post() ?>
        <?php echo '<pre>', var_dump(get_post_meta(get_the_ID(), 'price', false)), '</pre>'; ?>
    </div>
</article>