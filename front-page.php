<?php 

get_header();

$title = get_field('page_title');
$description = get_field('page_description');
$link = get_field('page_link');
$imageArray = get_field('page_image');
$image = $imageArray['sizes']['large'];
?>
<section id="hero">
    <div class="container">
        <div class="d-flex flex-row-reverse justify-content-center p-4">
            <div class="row d-flex flew-row-reverse">
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?php echo $image; ?>">
                </div>
                <div class="col-lg-6 text-light d-flex flex-column justify-content-center align-items-center">
                    <h1 class="display-1"><?php echo $title; ?></h1>
                    <?php echo $description; ?>
                    <button type="button" class="btn btn-outline-light">
                        <a style="text-decoration:none; color:white;" href="<?php echo $link['url']; ?>">
                            <?php echo $link['title']; ?>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();