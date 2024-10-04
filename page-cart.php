<?php 
get_header();
get_template_part('templates/content', 'header');
?>

<div id="primary" class="content-area">
    <div class="custom_breadcrumb"><?php generate_breadcrumb(); ?></div>  
<?php 
while(have_posts()) {
    the_post(); ?>
    <div class="title-container">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
    <?php 
    the_content();
} 
?>

</div>

<?php
get_template_part('templates/content', 'footer');
get_footer(); 
?>