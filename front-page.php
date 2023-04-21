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

                <h2 class="m_main-page_title">　新着記事</h2>
                <div class="l_main-page_contents ">
                    
                    <div class="new-post_block l_main_block">
                        <!-- 投稿を新着順に取得＆表示 ↓ -->
                        <?php if (have_posts()) : while(have_posts()) :the_post(); ?>

                        <article class="m_post">
                            <div class="m_post_img-box">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="m_post_img">
                            </div>
                            <div class="m_post_text-box">
                                <h3 class="m_post_title"><?php the_title(); ?></h3>
                                <p class="m_post_main-text">
                                    <?php 
                                    echo mb_substr( get_the_content(), 0, 80). '...' ; ?>
                                </p>
                                <div class="m_small-contents">
                                    <span class="m_category"><?php the_category(',') ?></span>
                                    <time class="m_post_date"><?php echo get_the_date('Y.m.d') ?></time>
                                </div>
                                <a href="<?php echo esc_url(the_permalink()); ?>" class="m_post_origin-link">
                                    <span class="m_post_origin-link__text">続きを見る</span>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/right-icon.png'); ?>" alt="→" class="m_post_origin-link__img">
                                </a>
                            </div>
                            
                        </article>

                        <?php endwhile; endif; ?>

                        <div class="m_pagenation">
                            <a href="" class="m_pagenation_link">
                                <p class="m_pagenation_text"><</p>
                            </a>
                            <a href="" class="m_pagenation_link">
                                <p class="m_pagenation_text">1</p>
                            </a>
                            <a href="" class="m_pagenation_link">
                                <p class="m_pagenation_text">2</p>
                            </a>
                            <a href="" class="m_pagenation_link">
                                <p class="m_pagenation_text">3</p>
                            </a>
                            <a href="" class="m_pagenation_link">
                                <p class="m_pagenation_text">...</p>
                            </a>
                            <a href="" class="m_pagenation_link">
                                <p class="m_pagenation_text">></p>
                            </a>
                        </div>
                    </div>

                    <?php get_sidebar(); ?>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>

