<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="menu_desktop">
                <ul class="menu">
                    <li class="menu_item active"><a href="<?= get_home_url(); ?>">Home</a></li>
                    <li class="menu_item"><a href="#about">About Us</a></li>
                    <li class="menu_item"><a href="#team">Team</a></li>
                    <li class="menu_item"><?php the_custom_logo(); ?></li>
                    <li class="menu_item"><a href="#provide">Services</a></li>
                    <li class="menu_item"><a href="#">Blog</a></li>
                    <li class="menu_item"><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <nav class="menu_mobile">
                <div class="menu_inner">
                    <?php the_custom_logo(); ?>
                    <div class="menu_burger"><span>toggle menu</span></div>
                </div>
                <ul class="menu">
                    <li class="menu_item active"><a href="<?= get_home_url(); ?>">Home</a></li>
                    <li class="menu_item"><a href="#about">About Us</a></li>
                    <li class="menu_item"><a href="#team">Team</a></li>
                    <li class="menu_item"><a href="#provide">Services</a></li>
                    <li class="menu_item"><a href="#">Blog</a></li>
                    <li class="menu_item"><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <div class="header_content">
                <h1 class="header_title"><?= CFS()->get('header_title') ?></h1>
                <p class="header_text"><?= CFS()->get('header_slogan') ?></p>
                <a href="#about" class="header_button"><?= CFS()->get('header_button') ?></a>
            </div>
        </div>
    </header>