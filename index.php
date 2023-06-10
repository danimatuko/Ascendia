<?php get_header() ?>

<div class="container">

    <div class="columns is-centered">
        <section class="column <?php echo (is_active_sidebar('primary-sidebar')) ? "is-half" : "is-full"  ?>">
            <?php get_template_part('template-parts/loop') ?>
        </section>
        <?php if (is_active_sidebar('primary-sidebar')) : ?>
            <div>
                <?php get_sidebar() ?>
            </div>
        <?php endif ?>
    </div>
</div>
<?php get_footer() ?>