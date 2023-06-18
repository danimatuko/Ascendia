<?php

$site_info = get_theme_mod('ascendia_site_info');
$footer_bg = get_theme_mod('ascendia_footer_background', 'dark');

$text_color = $footer_bg == 'dark' ? 'light' : 'dark';

if (!$site_info) return;

?>


<p class="site-info text-<?php echo $text_color ?> py-3 mt-5">
    <?php
    // data is secured by the customizer(ascendia_customize_register)
    echo ($site_info);
    ?>
</p>