<?php

$site_info = get_theme_mod('ascendia_site_info');
if (!$site_info) return;

?>
<p class="text-light py-3 mt-5">
    <?php echo esc_html($site_info); ?>
</p>