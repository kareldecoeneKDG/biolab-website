<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>



<div class="container">
    <section class="introductionNoLab">
        <?php if($page->introductionTitle()->isNotEmpty()): ?>
            <h1 class="introductionNoLab__title h1"><?= $page->introductionTitle() ?></h1>
        <?php endif; ?>

        <div class="flex-row-desktop-reverse">
            <?php if($image = $page->introductionImage()->toFile()): ?>
                <img class="introductionNoLab__img img" src="<?= $image->url() ?>" alt="bla">
            <?php endif; ?>

            <?php if($page->introductionParagraph()->isNotEmpty()): ?>
                <p class="introductionNoLab__p p"><?= $page->introductionParagraph() ?></p>
            <?php endif; ?>
        </div>
    </section>



    <section class="investigations-overview">
        <?php if($page->investigationsBiolabTitle()->isNotEmpty()): ?>
            <h2 class="investigations-overview__title h2"><?= $page->investigationsBiolabTitle() ?></h2>
        <?php endif; ?>

        <?php $investigations = $page->investigations()->toStructure(); ?>
        <?php foreach($investigations as $investigation): ?>

            <div class="investigation-item flex-row-desktop">
                <?php if($image = $investigation->image()->toFile()): ?>
                    <img class="investigation-item__img img" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                <?php endif; ?>

                <div>
                    <h3 class="investigation-item__title h3"><?= $investigation->title() ?></h3>
                    <p class="investigation-item__paragraph p"><?= $investigation->paragraph() ?></p>
                    <a class="investigation-item__button button-small" href="#">Meer over dit onderzoek</a>
                </div>
            </div>

        <?php endforeach; ?>
    </section>
</div>



<?php snippet('general/footer')?>