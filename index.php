<?php get_header() ?>

<div class="container py-5">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-secondary bg-opacity-25">
        <div class="col-xl-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
        </div>
    </div>
    <div class="row justify-content-between">
        <section class="col-lg-6 <?php echo (is_active_sidebar('primary-sidebar')) ? "is-7" : "is-full"  ?>">
            <?php get_template_part('template-parts/loop') ?>
        </section>
        <?php if (is_active_sidebar('primary-sidebar')) : ?>
            <div class="col-3">
                <?php get_sidebar() ?>
            </div>
        <?php endif ?>
    </div>
</div>

<?php get_footer() ?>