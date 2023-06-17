<?php if (is_active_sidebar('primary-sidebar')) : ?>
<aside id="sidebar" class="card  border-0">
    <div class="card-body py-4 bg-light rounded">
        <?php dynamic_sidebar('primary-sidebar'); ?>
    </div>
</aside>
<?php endif; ?>