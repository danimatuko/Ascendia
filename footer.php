<?php

$footer_bg = get_theme_mod('ascendia_footer_background', 'dark');
?>



</main>

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