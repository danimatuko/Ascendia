<?php

$site_info = get_theme_mod('ascendia_site_info');

if (!$site_info) return;
?>


<p class="site-info text-light py-3 mt-5">
    <?php
    // data is secured by the customizer(ascendia_customize_register)
    echo ($site_info);
    ?>
</p>