<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment4</title>
    <?php wp_head(); ?>
</head>

<body>
    <?php
    if (is_front_page()) :
        $custom_classes = ['c13-home-class', 'my-class-c13'];
    else :
        $custom_classes = ['other-c13-class', 'c13-other-class'];
    endif;
    ?>
    <?php
    //     if(have_posts()):
    //         while(have_posts()): the_post();
    //             the_title();
    //             the_content();

    // endwhile;
    // endif;
    ?>

    <body <?php body_class($custom_classes) ?>>
    <?php wp_nav_menu(['theme_location'=>'primary']);?>


        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">