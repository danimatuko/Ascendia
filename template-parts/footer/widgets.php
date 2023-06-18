    <?php
    $footer_layout = get_theme_mod('ascendia_footer_layout', '3,3,3,3');
    $footer_layout = preg_replace('/\s+/', '', $footer_layout);
    $columns = array_map('intval', explode(",", $footer_layout));
    //  $footer_bg = get_theme_mod('ascendia_footer_background', 'dark');


    ?>

    <div class="container">
        <div class="row">

            <?php foreach ($columns as $i => $column) : ?>

                <?php if (is_active_sidebar('footer-widget-' . $i + 1)) : ?>
                    <section id="sidebar" class="widget-area col">
                        <?php dynamic_sidebar('footer-widget-' . $i + 1); ?>
                    </section>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </div>