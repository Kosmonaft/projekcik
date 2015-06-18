<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
get_header();
?>
<header>
    <section class="header">
        <section class="logo">
            <a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""/></a>
        </section>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </nav>
    </section>
</header>
<section id="wyjazdy template">
    <article>
        <!--p>Dodano <time>  <?php the_time('d-m-Y') ?></time-->
        <div id="top-container">
            <section class="post-details wyprawa image">
                <?php
                $image = get_field('zdjęcie_głowne');

                if (!empty($image)):
                    ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>

                <?php
                the_field('post_images');

                ?>
                    
            </section>


            <section class="post-details wyprawa details">
                <section class="post-details wyprawa location region">
                    <span><?php the_field('region'); ?></span>
                </section>            
                <h2><?php the_title() ?></h2>
                <section class="post-details wyprawa type typ">
                    <span><?php the_field('typ_wyprawy'); ?></span>
                </section>
                <section class="post-details wyprawa date">
                    <span><?php the_field('data_wyprawy'); ?></span>
                </section>
                <section class="post-details wyprawa koszt">
                    <div>Cena: <span><?php the_field('koszt'); ?> PLN</span></div>
                    <a href="#" class="rezerwuj">Rezerwuj</a>
                </section>
                <div class="krotki opis"><?php the_field('krotki_opis'); ?></div>
                <a href="#" class="more">Więcej szczegółów</a>
            </section>
        </div>
        <div id="left-column">
            <section class="post-details wyprawa description">
                <h4>Opis wyprawy, region</h4>
                <?php the_field('opis_wyprawy'); ?>
            </section>
            <section class="post-details wyprawa program">
                <h4>Program</h4>
                <?php the_field('program'); ?>
            </section>

        </div>
        <div id="right-column">
            <section class="post-details wyprawa additional info">
                <h4>Dodatkowe informacje</h4>
                <?php the_field('dodatkowe_informacje'); ?>
            </section>
        </div>
    </article>
    <section>
        <h3>Najbliższy wyjazd</h3>
        <?php get_template_part('html partial/wyjazdy', 'closest'); ?>
    </section>
    <section class="tabs">

        <a href="#" data-tab="1" class="tab active">Tab 1</a>
        <a href="#" data-tab="2" class="tab">Tab 2</a>
        <a href="#" data-tab="3" class="tab">Tab 3</a>

        <section data-content="1" class="content active">Tab 1 Content</section>
        <section data-content="2" class="content">Tab 2 Content</section>
        <section data-content="3" class="content">Tab 3 Content</section>   
    </section>
</section>

<?php get_footer(); ?>
