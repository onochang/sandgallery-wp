    <!-- フッター -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-nav-left">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu', // フッター用メニュー
                'container'      => false,
                'menu_class'     => false,
            ));
            ?>
            </div>
            <div class="footer-nav-right">
                <a href="<?php echo home_url('/'); ?>" class="footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_white.svg" alt="Sand Gallery"></a>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <p class="copyright">© Sand Gallery All rights reserved.</p>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>