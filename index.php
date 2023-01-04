<?php get_header();?>

<?php 
  $blog_page = get_option('page_for_posts');
  $image = get_post_thumbnail_id( $blog_page );
  $image = wp_get_attachment_image_src($image, 'full');
?>



<div class="hero" style="background-image:url(<?php echo $image[0];?>)">
    <div class="hero-content">
        <div class="hero-text">
            <h2><?php echo get_the_title($blog_page); ?></h2>
        </div>
    </div>
</div>

<div class="main-content container">
    <div class="container-grid">
        <main class="content-text columns2-3">
            <?php while (have_posts()): the_post(); ?>
            <article class="entry">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('specialties');?>
                </a>
                <header class="entry-header clear">
                    <div class="date">
                        <time>
                            <?php the_time('d');?>
                            <span><?php the_time('M');?></span>
                        </time>
                    </div>
                    <div class="entry-title">
                        <h3><?php the_title();?></h3>
                        <p class="author">
                            <i class="fa fa-user" aria-hidden="true"></i><span><?php the_author();?></span>
                        </p>
                    </div>
                </header>
                <div class="entry-content">
                    <p><?php the_excerpt();?></p>
                    <a href="<?php the_permalink();?>" class="button primary">Read More</a>
                </div>
            </article>
            <?php endwhile; ?>
        </main>

        <?php get_sidebar();?>
    </div>
</div>




<?php get_footer(); ?>