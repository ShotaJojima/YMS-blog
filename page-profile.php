<?php
/*Template Name: profile */
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

                <h2 class="m_main-page_title">　プロフィール</h2>
                <div class="l_main-page_contents">
                    <div class="profile_block l_main_block">
                        <div class="profile_about-me">
                            <h3 class="profile_title">1.私について</h3>
                            <div class="profile_img-box">
                                <img 
                                    src="<?php echo esc_url( get_template_directory_uri() . '/img/profile_img.jpg' ); ?>" 
                                    alt="profile_img" 
                                    class="profile_img"
                                >
                            </div>
                            <div class="profile_text">
                                <p class="profile_name">定島昇汰 （25才）</p>
                                <ul class="profile_overview">
                                    <li class="profile_list">・小学校教員　＝＞　Web制作フリーランスへ転身</li>
                                    <li class="profile_list">・2023年5月にYMSビザでイギリスへ移住</li>
                                </ul>
                                <div class="profile_message-box">
                                    <p class="profile_message">当サイトを閲覧いただき、ありがとうございます。</p>
                                    
                                    <p class="profile_message"> 
                                        こんにちは！元小学校の先生、定島 昇汰（じょうじま しょうた）です。
                                        イギリスに移住し、Web制作にチャレンジしています。
                                        小学校での教育経験を生かして、クリエイティブな仕事に興味を持ち、
                                        Web制作の世界に飛び込みました。
                                        新しい環境での生活や仕事にも、楽しんで、前向きに取り組んでいます！
                                        趣味はSUPやキャンプなどのアウトドアと、ゲームや漫画です！
                                    </p>
                                    <p class="profile_message">
                                        当サイトではイギリスの生活や文化、Web制作に関するトピックスなどを発信しています。
                                        より良い情報を提供し、多くの方に役立てていただけるよう頑張ります！
                                        応援よろしくお願いします。
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="profile_history">
                            <h3 class="profile_title">2.私の歴史</h3>
                            <div class="profile_history-box">
                                <table class="profile_table">
                                    <tr class="profile_table-row profile_date-row">
                                        <td class="profile_table-data profile_date-data">一九九七</td>
                                        <td class="profile_table-data profile_date-data">二〇〇四</td>
                                        <td class="profile_table-data profile_date-data">二〇〇六</td>
                                        <td class="profile_table-data profile_date-data">二〇一〇</td>
                                        <td class="profile_table-data profile_date-data">二〇一〇</td>
                                        <td class="profile_table-data profile_date-data">二〇一三</td>
                                        <td class="profile_table-data profile_date-data">二〇一六</td>
                                        <td class="profile_table-data profile_date-data">二〇二〇</td>
                                        <td class="profile_table-data profile_date-data">二〇二一</td>
                                        <td class="profile_table-data profile_date-data">二〇二二</td>
                                        <td class="profile_table-data profile_date-data">二〇二二</td>
                                        <td class="profile_table-data profile_date-data">二〇二三</td>
                                    <tr class="profile_table-row profile_topic-row">
                                        <td class="profile_table-data profile_topic-data">定島昇汰、生誕</td>
                                        <td class="profile_table-data profile_topic-data">地元の小学校に入学</td>
                                        <td class="profile_table-data profile_topic-data">ピアノを習い始める<br>（以降大学生まで細々と続ける）</td>
                                        <td class="profile_table-data profile_topic-data">地元の中学校に入学</td>
                                        <td class="profile_table-data profile_topic-data">サッカー部に入部し、練習に励む<br>しかし怪我が絶えず補欠の日々</td>
                                        <td class="profile_table-data profile_topic-data">高校受験に大失敗!<br>滑り止めの私立高校へ</td>
                                        <td class="profile_table-data profile_topic-data">大学受験に合格！<br>先生になるべく奮闘</td>
                                        <td class="profile_table-data profile_topic-data">教員採用試験に大失敗！<br>仕方なく大学院へ進学</td>
                                        <td class="profile_table-data profile_topic-data">アウトドアに目覚める<br>キャンプとSUPを始める</td>
                                        <td class="profile_table-data profile_topic-data">教員採用試験に合格！<br>教員の道へ</td>
                                        <td class="profile_table-data profile_topic-data">プログラミング学習を始める</td>
                                        <td class="profile_table-data profile_topic-data">1年で早々に退職<br>イギリスへ飛び立つ</td>
                                    </tr>
                                </table>
                            </div> 
                            <p class="scroll-message">← scroll →</p>
                        </div>
                                                
                    </div>

                    <?php get_sidebar(); ?>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>

