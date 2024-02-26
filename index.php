<?php get_header(); ?>
    <main>
        <section class="about" id="about" style="background: url(<?= CFS()->get('background_light') ?>) center 101% repeat-x, url(<?= CFS()->get('background_dark') ?>) center 101%  repeat-x, #1d1d1d;">
            <div class="container">
                <div class="about_inner">
                    <?php //in container of the cards.
                        $loop = CFS()->get('card'); //creating a variable where we put the value of our loop with the specified indexer "card". Variable $loop will store what we added in this loop. Все карточки будут внутри
                        foreach ($loop as $row) { //each element in the iteration of the loop will be called $row.
                        ?>
                            <div class="about_item">
                                <div class="about_year"><?= $row['card_year'] ?></div>
                                <div class="about_text"><?= $row['card_text'] ?></div>
                            </div>
                        <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        <section class="team" id="team">
            <div class="container">
                <div class="block_header">
                    <h2 class="block_title"><?= CFS()->get('team_title') ?></h2>
                    <p class="block_text"><?= CFS()->get('team_subtitle') ?></p>
                </div>
                <div class="team_inner">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php 
                                $loop = CFS()->get('team_card');
                                foreach ($loop as $row) {
                                ?>
                                <div class="swiper-slide">
                                    <div class="team_item">
                                        <img class="team_item-img" src="<?= $row['team_photo'] ?>" alt="photo">
                                        <h3 class="team_item-title"><?= $row['team_name'] ?></h3>
                                        <p class="team_item-text"><?= $row['team_position'] ?></p>
                                        <div class="team_icon-box">
                                            <a <?php if(empty($row['team_twitter']['url'])) echo ' style="display:none;" '; ?> href="<?= $row['team_twitter']['url'] ?>" target="<?= $row['team_twitter']['target'] ?>"><i class="icon-twitter"></i></a>
                                            <a <?php if(empty($row['team_instagram']['url'])) echo ' style="display:none;" '; ?> href="<?= $row['team_instagram']['url'] ?>" target="<?= $row['team_instagram']['target'] ?>"><i class="icon-instagram"></i></a>
                                            <a <?php if(empty($row['team_facebook']['url'])) echo ' style="display:none;" '; ?> href="<?= $row['team_facebook']['url'] ?>" target="<?= $row['team_facebook']['target'] ?>"><i class="icon-facebook-squared"></i></a>
                                            <a <?php if(empty($row['team_youtube']['url'])) echo ' style="display:none;" '; ?> href="<?= $row['team_youtube']['url'] ?>" target="<?= $row['team_youtube']['target'] ?>"><i class="icon-youtube-squared"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                            ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="provide" id="provide">
            <div class="container">
                <div class="block_header dark">
                    <h2 class="block_title"><?= CFS()->get('service_title') ?></h2>
                    <p class="block_text"><?= CFS()->get('service_subtitle') ?></p>
                </div>
                <div class="provide_inner">
                    <?php 
                        $loop = CFS()->get('service_card');
                        foreach ($loop as $row) {
                        ?>
                            <div class="provide_item">
                                <img src="<?= $row['service_icon'] ?>" alt="service-icon"></img>
                                <h3 class="provide_item-title"><?= $row['service_name'] ?></h3>
                                <p class="provide_item-text"><?= $row['service_description'] ?></p>
                            </div>
                        <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <div class="container">
                <div class="block_header">
                    <h2 class="block_title"><?= CFS()->get('contact_title') ?></h2>
                    <p class="block_text"><?= CFS()->get('contact_subtitle') ?></p>
                </div>
                <div class="contact_inner">
                    <div class="contact_icon-box">
                        <div class="contact_item">
                            <i class="icon-phone"></i>
                            <div class="contact_text"><a href="tel:<?= CFS()->get('contact_phone') ?>"><?= CFS()->get('contact_phone') ?></a></div>
                        </div>
                        <div class="contact_item">
                            <i class="icon-location-inv"></i>
                            <div class="contact_text">
                            <?php 
                                if(!empty(CFS()->get('contact_address')['url'])) {
                                    ?>
                                        <a href="<?= CFS()->get('contact_address')['url'] ?>" target="<?= CFS()->get('contact_address')['target'] ?>"><?= CFS()->get('contact_address')['text'] ?></a>
                                    <?php
                                }
                            ?>
                            </div>
                        </div>
                        <div class="contact_item">
                            <i class="icon-mail"></i>
                            <div class="contact_text"><a href="mailto:<?= CFS()->get('contact_email') ?>"><?= CFS()->get('contact_email') ?></a></div>
                        </div>
                    </div>
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>