<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div class="grid_container">
        <div class="grid_item header">
            <?php get_header(); ?>
        </div>
        <div class="grid_item content">
            <?php get_template_part('pages/home'); ?>
        </div>
        <div class="grid_item footer">
            <?php get_footer(); ?>
        </div>
    </div>