<?php get_header() ?>

<div class="container">

    <div class="columns is-centered is-variable is-8">
        <section class="column <?php echo (is_active_sidebar('primary-sidebar')) ? "is-7" : "is-full"  ?>">
            <?php get_template_part('template-parts/loop') ?>
        </section>
        <?php if (is_active_sidebar('primary-sidebar')) : ?>
        <div class="column is-3-widescreen">
            <?php get_sidebar() ?>
        </div>
        <?php endif ?>
    </div>
</div>

<?php get_footer() ?>