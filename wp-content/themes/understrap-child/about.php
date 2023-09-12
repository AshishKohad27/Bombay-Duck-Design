<?php /* Template Name: AboutPage */?>
<?php get_header(); ?>
<!-- About Section -->
<?php 
    while ( have_posts() ) {
        the_post();
?>
        <section class="abosec-outer">
            <div class="abosec-inner">
                <div class="adosec-img">
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                    <img src="<?php echo $image[0]; ?>" alt="About">
                </div>
                <div class="abosec-desc">
                   <?php the_content();?>
                </div>
            </div>
        </section>
<?php
    }
?>