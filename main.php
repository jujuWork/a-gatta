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
        <div class="nav">
            <?php include get_template_directory() . '/pages/nav.php' ?>
        </div>
        <div class="header">
            <?php include get_template_directory() . '/header.php' ?>
        </div>
        <div class="content">
            <?php include get_template_directory() . '/pages/forum.php' ?>
        </div>
        <div class="footer">
            <?php include get_template_directory() . '/footer.php' ?>
        </div>
    </div>