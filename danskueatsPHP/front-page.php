
<?php get_header(); ?>
    
    <div id="banner">
        <h1>Dansku Eats</h1>
        <h3>Ruokavalokuvaaja ja Stailisti</h3>
    </div>
    <main>
        <a href="<?php echo site_url('/blog'); ?>">
            <h2 class="section-heading">Ravintola Arvostelut</h2>
        </a>
        <section>

        <?php  
        
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,

        );

        $blogposts = new WP_Query($args);

        while ($blogposts->have_posts()) {
            $blogposts->the_post();
        
        
        
        ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" 
                        alt="Card Image">
                    </a>
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink() ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Lue lisää</a>
                </div>
            </div>

        <?php }
            wp_reset_query(); 
            ?>

          
        </section>

        <h2 class="section-heading">#danskucooks</h2>

        <section>
        <?php  
        
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => 2,

        );

        $projects = new WP_Query($args);

        while ($projects->have_posts()) {
            $projects->the_post();
        
        
        
        ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" 
                        alt="Card Image">
                    </a>
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink() ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Lue lisää</a>
                </div>
            </div>

        <?php }
            wp_reset_query(); 
            ?>
            </section>

            <h2 class="section-heading">reseptejä</h2>

            <section id="section-source">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae non dolores quia alias. Reiciendis enim dolor dicta. Aspernatur quia tempora fugit cumque illum odio, expedita consequatur nam officiis at obcaecati?
                </p>
                <a href="#" class="btn-readmore">GitHub Profile</a>

            </section>

<?php get_footer(); ?>