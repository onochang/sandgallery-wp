<?php get_header(); ?>
<!-- メインコンテンツ -->
    <main>

        <!-- ヒーローエリア -->
        <section class="hero">
            <div class="site-title">
                <h1>Sand Gallery</h1>
                <p>新しい価値が見つかる美術館</p>
            </div>
        </section>

        <!-- コンセプトセクション -->
        <section id="concept" class="concept">
            <div class="section-container">
                <div class="concept-content">
                    <div class="concept-text slide-left">
                        <h2 class="section-head">Concept</h2>
                        <p>Sand Galleryは、アートを通じて人々の心に感動を与え、新しい価値観、視点、感性を育むことを目指しています。<br>古典から、現代、実験的なアートまで幅広いジャンルの作品を展示し、アートの多様性と可能性を探求します。<br>また、アーティストと鑑賞者をつなぐ場として、ワークショップやトークイベントなども定期的に開催しています。</p>
                    </div>
                    <img class="concept-image slide-right" src="<?php echo get_template_directory_uri(); ?>/images/asset2.jpg" alt="コンセプトイメージ">
                </div>
            </div>
        </section>

        <!-- ニュースセクション -->
        <section id="news" class="news">
            <div class="section-container">
                <h2 class="section-head">News</h2>
                <div class="news-posts">
                    <article class="news-post slide-bottom">
                        <a href="#">
                            <img class="news-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/asset3.jpg" alt="ニュース画像1">
                            <p class="news-date">2025.03.10</p>
                            <h3 class="news-title">ホームページリニューアルのお知らせ</h3>
                        </a>
                    </article>
                    <article class="news-post slide-bottom">
                        <a href="#">
                            <img class="news-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/asset4.jpg" alt="ニュース画像1">
                            <p class="news-date">2025.03.10</p>
                            <h3 class="news-title">ホームページリニューアルのお知らせ</h3>
                        </a>
                    </article>
                    <article class="news-post slide-bottom">
                        <a href="#">
                            <img class="news-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/asset5.jpg" alt="ニュース画像1">
                            <p class="news-date">2025.03.10</p>
                            <h3 class="news-title">ホームページリニューアルのお知らせ</h3>
                        </a>
                    </article>

                </div>
            </div>
        </section>

        <!-- アーティストセクション -->
        <section id="artist" class="artist">
            <div class="section-container">
                <div class="artist-content">
                    <img class="artist-image" src="<?php echo get_template_directory_uri(); ?>/images/asset6.jpg" alt="アーティスト">
                    <div class="artist-text">
                        <h2 class="section-head">Artist</h2>
                        <p>独自の感性と最先端の技術を融合させたデジタルアーティスト。幻想的な色彩と繊細なディテールで、見る者を物語の世界へと誘う。<br><br>

                            イラスト、3Dアート、ジェネラティブアートなど多彩な表現を手がけ、SNSやギャラリーで作品を発表。最新技術を駆使しつつも、温か
                            みのある作風が特徴。<br><br>
                            
                            国内外のアートプロジェクトにも参加し、常に新しい表現に挑戦し続けている。</p>
                        <a href="#" class="more-link">作品を見る</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- インフォメーションセクション -->
        <section id="info" class="info">
            <div class="section-container">
                <div class="info-content">
                    <div class="info-details">
                        <h2 class="section-head">Information</h2>
                        <div class="hours">
                            <h3 class="info-head">開館時間</h3>
                            <p>平日：10:00 - 18:00　土日祝：10:00 - 17:00<br>休館：日曜日</p>
                        </div>
                        <div class="fee">
                            <h3 class="info-head">入場料</h3>
                            <div class="fee-menu">
                                <p>大人（高校生以上）</p>
                                <p>¥1,000</p>
                            </div>
                            <div class="fee-menu">
                                <p>小・中学生</p>
                                <p>¥800</p>
                            </div>
                            <div class="fee-menu">
                                <p>小学生未満</p>
                                <p>無料</p>
                            </div>
                        </div>
                    </div>
                    <img class="info-image" src="<?php echo get_template_directory_uri(); ?>/images/asset7.jpg" alt="美術館が賑わっている様子">
                </div>
            </div>
        </section>

        <!-- アクセスセクション -->
        <section id="access" class="access">
            <div class="section-container">
                <div class="access-content">
                    <h2 class="section-head">Access</h2>
                    <div class="access-text">
                        <p class="space">Sandbox Gallery</p>
                        <p class="address">〒069-0852 北海道江別市大麻東町13-6</p>
                    </div>
                    <div class="access-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.210686058831!2d141.49511157618997!3d43.079065771135184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2d919b3a2203%3A0x618c15dbcf2c9d73!2sSUNABACO%20EBETSU!5e0!3m2!1sja!2sjp!4v1741710613887!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php get_footer();