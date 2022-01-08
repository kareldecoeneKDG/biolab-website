<header class="header">
    <nav class="header__menu nav-fade">

        <?php if ($logo = $site->biolabLogo()->toFile()): ?>
            <a class="header__logo logo" href="<?=$site->url()?>"><img class="header__logo__img" src="<?=$logo->url()?>" alt="Logo Biolab"></a>
        <?php endif;?>
        
        <?php snippet('menu/pages-list') ?>

        <a class="header__languagebutton" href="#">
            <span class="header__languagebutton__span">NL</span>
        </a>
    </nav>
</header>