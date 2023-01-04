<?php 
/*
*   Template Name: Contact Us
*/

get_header();?>

<?php while (have_posts()): the_post(); ?>

<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>)">
    <div class="hero-content">
        <div class="hero-text">
            <!-- <?php the_post_thumbnail(); ?> -->
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</div>

<div class="main-content reservation-form container">
    <main class=" content-text">
        <form class="reservation-form" method="post">
            <h2>Make a reservation</h2>
            <div class="field">
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="field">
                <input type="datetime-local" name="date" placeholder="Date" required>
            </div>
            <div class="field">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="field">
                <input type="tel" name="hone" placeholder="Phone Number" required>
            </div>
            <div class="field">
                <textarea name="message" placeholder="Message" required></textarea>
            </div>
            <input type="submit" name="submit" value="Submit" class="submit">
            <input type="hidden" name="hidden" value="1">
        </form>
    </main>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>