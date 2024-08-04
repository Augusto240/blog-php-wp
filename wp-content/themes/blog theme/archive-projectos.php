<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <h1>Projetos</h1>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                    </header>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Leia mais</a>
                    </div>
                </article>
                <?php
            endwhile;
            the_posts_navigation();
        else :
            echo '<p>No projects found</p>';
        endif;
        ?>
    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
