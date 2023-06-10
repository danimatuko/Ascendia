<?php get_header() ?>

<div class="container">
    <div class="columns is-centered">
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