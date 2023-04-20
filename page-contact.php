<?php
/*Template Name:  contact*/
get_header(); 
?> 

<main class="l_main">
   
    <div class="l_main_inner">
        <p class="top-message">
            イギリスでの暮らしや趣味、お仕事について投稿しています。<br>
            YMSビザやイギリス生活などのお役に立てればうれしいです。
        </p>

        <div class="l_main-page">
            <div class="l_main-page_inner">
                <!-- <div class="advertisement"></div> -->

                <h2 class="m_main-page_title">　お問い合わせ</h2>
                <div class="l_main-page_contents">
                    <div class="contact_block l_main_block">
                            <p class="contact_message">
                            お仕事の依頼や記事のご要望、お待ちしています。<br>
                            「Web制作をお願いしたい！」<br>
                            「こんな記事を書いてほしい！」<br>
                            「この記事について詳しく知りたい！」<br>
                            など、どうぞ気軽にお問い合わせください。
                            </p>

                        <!-- <form class="contact_form-box">
                            <div class="contact_form_group contact_name-form">
                                <label for="name" class="contact_label">お名前</label>
                                <input type="text" action="" class="contact_input">
                            </div>
                            <div class="contact_form_group contact_name-form">
                                <label for="email" class="contact_label">メールアドレス</label>
                                <input type="text" action="" class="contact_input">
                            </div>
                            <div class="contact_form_group contact_name-form">
                                <label for="name" class="contact_label">お問い合わせ内容</label>
                                <textarea name="content" class="contact_input" cols="30" rows="10"></textarea>
                            </div>
                            
                            <button class="m_button contact_button">送信する</button>
                            
                        </form> -->

                        <?php echo do_shortcode('[contact-form-7 id="31" title="お問い合わせ"]'); ?>
                        
                    </div>

                    <?php get_sidebar(); ?>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>

