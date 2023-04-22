<div class="l_aside_block">
    <aside class="l_aside-box m_aside_profile">
        <h4 class="m_aside_title">　プロフィール<h4>
        <div class="m_aside_contents">
            <div class="m_aside_profile_img-box">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/joji.jpg' ); ?>" alt="profile picture" class="m_aside_profile_img">
            </div>
            <p class="m_aside_profile_message">
                　小学校の先生を辞めた後、YMSビザを取得しました、
                定島 昇汰(じょうじましょうた)と申します。
                友達とイギリス生活を始めました。
                よろしくお願いします！
            </p>
            <div class="m_aside_sns-link-box">
                <a class="m_aside_sns_link">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/twitter.png' ); ?>" alt="" class="m_aside_sns-img">
                </a>
                <a class="m_aside_sns_link">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/instagram.png' ); ?>" alt="" class="m_aside_sns-img">
                </a>
                <a class="m_aside_sns_link">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/facebook.png' ); ?>" alt="" class="m_aside_sns-img">
                </a>
            </div>

            <p class="m_aside_comment">Web制作もやってます。<br>制作物はこちら↓</p>
        <a href="https://portfolio-school-dsn.com/" class="m_aside_portfolio-link">https://portfolio-school-dsn.com/</a>

        </div>
        
        
    </aside>
    <aside class="l_aside-box m_aside_blog">
        <h4 class="m_aside_title">　ブログリンク</h4>
        <div class="m_aside_blog_img-box">
            <img src="" alt="" class="m_aside_blog_img">
        </div>
    </aside>
    <aside class="l_aside-box aside_category">
        <h4 class="m_aside_title">　カテゴリー</h4>
        <ul class=" m_aside_list m_aside_category-list">
            <a  href="<?php $YMS = get_category_by_slug('yms'); echo esc_url(get_category_link($YMS));?>" 
                class="m_aside_link">
                <li class="m_aside_category_text">YMS手続き</li>
            </a>
            <a  href="<?php $web = get_category_by_slug('web-create'); echo esc_url(get_category_link($web));?>" 
                class="m_aside_link">
                <li class="m_aside_category_text">Web制作</li>
            </a>
            <a  href="<?php $outdoor = get_category_by_slug('outdoor'); echo esc_url(get_category_link($outdoor));?>" 
                class="m_aside_link">
                <li class="m_aside_category_text">アウトドア</li>
            </a>
            <a  href="<?php $usLife = get_category_by_slug('us-life'); echo esc_url(get_category_link($usLife));?>" 
                class="m_aside_link">
                <li class="m_aside_category_text">イギリス生活</li>
            </a>
            <a  href="<?php $work = get_category_by_slug('work'); echo esc_url(get_category_link($work));?>" 
                class="m_aside_link">
                <li class="m_aside_category_text">仕事</li>
            </a>
            <a  href="<?php $food = get_category_by_slug('food'); echo esc_url(get_category_link($food));?>" 
                class="m_aside_link">
                <li class="m_aside_category_text">食事</li>
            </a>
            
        </ul>
    </aside>
    <aside class="l_aside-box m_aside_archive">
        <h4 class="m_aside_title">　アーカイブ</h4>
        <ul class="m_aside_list m_aside_archive-list">
        <?php
            $args = array(
                'type'            => 'monthly',
                'limit'           => '',
                'format'          => 'html', 
                'before'          => '',
                'after'           => '',
                'show_post_count' => false,
                'echo'            => 1,
                'order'           => 'DESC',
                'post_type'     => 'post'
            );
            
            wp_get_archives( $args );
            ?>

        </ul>
    </aside>
                        
</div>