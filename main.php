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
        <div class="grid-item nav">
            <?php include get_template_directory() . '/pages/nav.php' ?>
        </div>
        <div class="grid-item content">
            <?php include get_template_directory() . '/pages/home.php' ?>
        </div>
        <div class="grid-item footer">
            <?php get_footer(); ?>
        </div>
    </div>