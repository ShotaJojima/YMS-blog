<?php get_header(); ?> 

<main class="l_main">
   
    <div class="l_main_inner">
        <p class="top-message">
            イギリスでの暮らしや趣味、お仕事について投稿しています。<br>
            YMSビザやイギリス生活などのお役に立てればうれしいです。
        </p>

        <div class="l_main-page">
            <div class="l_main-page_inner">
                <!-- <div class="advertisement"></div> -->

                <div class="l_main-page_contents ">
                    <div class="new-post_block l_main_block">
                        <?php if (have_posts()) : while(have_posts()) :the_post(); ?>

                        <article class="m_post m_single-post">        
                            <div class="m_post_text-box m_single_text-box">
                                <h3 class="m_post_title m_single_title"><?php the_title(); ?></h3>
                                <div class="m_small-contents">
                                    <span class="m_category"><?php the_category(',');?></span>
                                    <time class="m_post_date"><?php echo get_the_date('Y.m.d') ?></time>
                                </div>
                                
                                <p class="m_post_main-text"><?php the_content(); ?></p>
                                                                
                            </div>
                            
                        </article>
                        <?php endwhile; endif; ?>
                        
                    </div>


                    <?php get_sidebar(); ?>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>

