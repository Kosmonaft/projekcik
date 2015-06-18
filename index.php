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
<section id="index">
</section>
<section id="quotation">
	    <?php
    $queryArray = array(
        'cat' => 6,
        'showposts' => 1
    );
    query_posts($queryArray);
    if (have_posts()) {
        while (have_posts()) : the_post();

            get_template_part('tp_cytaty');

        endwhile;
    }else {
        ?>
        <p>brak</p>
    <?php }
    ?>
</section>
<section>
    <?php echo do_shortcode('[ajax_load_more button_label="test"]'); ?>
</section>
<section id="trips" class="trips container">
    <h3>Wyjazdy</h3>
    <?php
    $today = date('Ym');

    $queryArray = array(
        'cat' => 2,
        'showposts' => 10,
        'post_type' => 'post',
        'meta_key' => 'data_wyprawy_datepicker', // name of custom field
        'orderby' => 'meta_value_num',
        'meta_query' => array(
            'key' => 'data_wyprawy_datepicker',
            'compare' => '>=',
            'value' => $today
        ),
        'order' => 'ASC'
    );
    query_posts($queryArray);
    $count = 0;
    if (have_posts()) {
        while (have_posts()) : the_post();
            get_template_part('tp_wyjazdy');
            $count++;
                
        endwhile;
        if($count < 3){
            get_template_part('template part/tp_wyjazdy_missing');
        }
    } else {
        ?>
        <p>brak</p>
    <?php }
    ?>
</section>
<section id="news" class="news container">
    <h3>Aktualnosci</h3>
    <?php
    $queryArray = array(
        'cat' => 3,
        'showposts' => 3
    );
    query_posts($queryArray);
    if (have_posts()) {
        while (have_posts()) : the_post();

            get_template_part('tp_aktualnosci');

        endwhile;
    }else {
        ?>
        <p>brak</p>
    <?php }
    ?>
</section>

<section id="trainings" class="trainings container">
    <h3>Szkolenia</h3>
    <?php
    query_posts('cat=4&showposts=3');
    if (have_posts()) {
        while (have_posts()) : the_post();

            get_template_part('tp_szkolenia');

        endwhile;
    }else {
        ?>
        <p>brak</p>
    <?php }
    ?>
</section>
<section id="info" class="info container">
    <h3>O nas</h3>
</section>
<section id="contact" class="contact container">
    <h3>Kontakt</h3>

    <div id="map-container" style="height:500px; width:100%;"></div>

</section>
<?php
    wp_footer();
get_footer();
?>
