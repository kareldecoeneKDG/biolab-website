        <footer class="footer">
            <a class="footer__logo" href="<?= $site->url() ?>">LOGO</a>

            <div class="footer__section">
                <h2 class="footer__section__title">SITEMAP</h2>
                <div class="footer__section__list">
                    <?php snippet('pages-list') ?>
                </div>
            </div>

            <div class="footer__section">
                <h2 class="footer__section__title">SOCIAL MEDIA</h2>
                <div class="footer__section__list">
                    <?php snippet('socials') ?>
                </div>
            </div>
        </footer>
    </body>
</html>