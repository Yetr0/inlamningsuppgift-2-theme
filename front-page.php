<?php 

get_header();

$title = get_field('page_title');
$description = get_field('page_description');
$link = get_field('page_link');
$image = get_field('page_image');
?>
<section id="hero">
    <div class="hero-img">
        <img src="<?php echo $image; ?>"/>
    </div>
    <div class="hero-text">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $description; ?></p>
        <button type="button">
            <a href="<?php echo $link['url']; ?>">
            <?php echo $link['title']; ?>
            </a>
        </button>
    </div>
</section>


<?php
get_footer();