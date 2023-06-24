<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ascendia
 */



$footer_bg = get_theme_mod('ascendia_footer_background', 'dark');

?>




<footer>
    <?php get_template_part("template-parts/footer/widgets") ?>
    <div class="bg-<?php echo esc_attr($footer_bg) ?>">
        <div class="container">
            <?php get_template_part("template-parts/footer/info") ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>