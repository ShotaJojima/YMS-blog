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

                <h2 class="m_main-page_title">　記事一覧</h2>
                <div class="l_main-page_contents">
                    <div class="display_block l_main_block">
                        <?php if (in_category('yms')) : ?>

                            <div class="display_category-group">
                                <div class="display_title-box">
                                    <h3 class="display_title">YMS</h3>
                                </div>
                                <div class="display_category-box">
                                    <div class="display_category_article-box">
                                        <?php 
                                            $args = array (
                                                'category_name' => 'yms',
                                                'posts_per_page' => '-1',
                                            );
                                            $query = new WP_Query($args);
                                            if($query -> have_posts()):
                                                while ($query -> have_posts()) :
                                                    $query -> the_post();      
                                        ?>

                                        <article class="m_post">
                                            <div class="m_post_img-box">
                                                <img 
                                                    src="<?php echo esc_url( get_template_directory_uri() . '/img/Britain.png' ); ?>" 
                                                    alt="" 
                                                    class="m_post_img"
                                                >
                                            </div>
                                            <div class="m_post_text-box">
                                                
                                                <h3 class="m_post_title"><?php echo get_the_title(); ?></h3>
                                                <p class="m_post_main-text">記事内容をここに書く。記事内容をここに書く。記事内容をここに書く。記事内容をここに書く。記事内容をここに書く。記事内容をここに書く。記事内容をここに書く。</p>
                                                <div class="m_small-contents">
                                                    <span class="m_category">カテゴリー１</span>
                                                    <time class="m_post_date">2200/00/00</time>
                                                </div>
                                                <a href="" class="m_post_origin-link">
                                                    <span class="m_post_origin-link__text">続きを見る</span>
                                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/right-icon.png'); ?>" alt="" class="m_post_origin-link__img">
                                                </a>
                                            </div>
                                            
                                        </article>

                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                        <?php endif; ?>


                                    </div>

                                    <button class="m_button display_button">
                                        <a href="<?php echo esc_url(home_url('/display'))?>" class="m_button_link">記事一覧へ</a>
                                    </button>
                                </div>

                            </div>

                        <?php elseif (in_category('web-ceate')): ?>

                            <div class="display_category-group">
                                <div class="display_title-box">
                                    <h3 class="display_title">YMS</h3>
                                </div>
                                <div class="display_category-box">                                
                                    <div class="display_category_article-box">
                                        <?php 
                                            $args = array (
                                                'category_name' => 'web-create',
                                                'posts_per_page' => '-1',
                                            );
                                            $query = new WP_Query($args);
                                            if($query -> have_posts()):
                                                while ($query -> have_posts()) :
                                                    $query -> the_post();      
                                        ?>

                                        <article class="m_post">
                                            <div class="m_post_img-box">
                                                <img 
                                                    src="<?php echo esc_url( get_template_directory_uri() . '/img/Britain.png' ); ?>" 
                                                    alt="" 
                                                    class="m_post_img"
                                                >
                                            </div>
                                            <div class="m_post_text-box">
                                                
                                                <h3 class="m_post_title"><?php echo get_the_title(); ?></h3>
                                                <p class="m_post_main-text">記事内容をここに書く。記事内容をここに書く。記事内容をここに書く。記事内容をここに書く。記事内容をここに書く。記事内容をここに書く。記事内容をここに書く。</p>
                                                <div class="m_small-contents">
                                                    <span class="m_category">カテゴリー１</span>
                                                    <time class="m_post_date">2200/00/00</time>
                                                </div>
                                                <a href="" class="m_post_origin-link">
                                                    <span class="m_post_origin-link__text">続きを見る</span>
                                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/right-icon.png'); ?>" alt="" class="m_post_origin-link__img">
                                                </a>
                                            </div>
                                            
                                        </article>

                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                        <?php endif; ?>
                                    </div>

                                    <button class="m_button display_button">
                                        <a href="<?php echo esc_url(home_url('/display'))?>" class="m_button_link">カテゴリー名一覧へ</a>
                                    </button>
                                </div>

                            </div>

                        <!-- その他のカテゴリーに属する投稿を表示するコードを記述 -->

                        <?php endif; ?>                        
                        
                    </div>

                    <?php get_sidebar(); ?>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>

