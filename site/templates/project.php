<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>

<div class="container">
    <div class="breadcrumb" itemprop="breadcrumb">
        <?php snippet('general/breadcrumb-content') ?>
    </div>



    <section class="content-article content-project">
        <h1 class="content-article__title h1"><?= $page->title() ?></h1>



        <?php if ($pdf = $page->pdf()->toFile()) : ?>
            <a class="content-article__document" href="<?= $pdf->url() ?>" target="_blank"><i class="fa fa-file-text" aria-hidden="true" download></i> Download PDF</a>
        <?php endif; ?>

        <?php if ($scription = $page->scription()->toFile()) : ?>
            <a class="content-article__document" href="<?= $scription->url() ?>" target="_blank"><i class="fa fa-file-text" aria-hidden="true" download></i> Download Scriptie</a>
        <?php endif; ?>



        <div class="flex-row-desktop">
            <p class="content-article__text-wrapper__p p"><?= $page->firstParagraphProject() ?></p>

            <div>
                <?php if ($firstImage = $page->firstImageProject()->toFile()) : ?>
                    <img class="content-article__image img" src="<?= $firstImage->url() ?>" alt="<?= $firstImage->alt() ?>">
                    <p class="p"><?= $firstImage->alt() ?></p>
                <?php endif; ?>
            </div>
        </div>



        <div class="flex-row-desktop-reverse">
            <p class="content-article__text-wrapper__p p"><?= $page->secondParagraphProject() ?></p>

            <div>
                <?php if ($secondImage = $page->secondImageProject()->toFile()) : ?>
                    <img class="content-article__image img" src="<?= $secondImage->url() ?>" alt="<?= $secondImage->alt() ?>">
                    <p class="p"><?= $secondImage->alt() ?></p>
                <?php endif; ?>
            </div>
        </div>



        <div class="lightbox">
            <a href="../../assets/images/image1.jpg" data-lightbox="roadtrip" data-title="My caption1"><img src="../../assets/images/image1.jpg"></a>
            <a href="../../assets/images/image2.jpg" data-lightbox="roadtrip" data-title="My caption2"><img src="../../assets/images/image2.jpg"></a>
            <a href="../../assets/images/image3.jpg" data-lightbox="roadtrip" data-title="My caption3"><img src="../../assets/images/image3.jpg"></a>
            <a href="../../assets/images/image4.jpg" data-lightbox="roadtrip" data-title="My caption4"><img src="../../assets/images/image4.jpg"></a>
        </div>
    </section>
</div>


<?php snippet('general/footer') ?>

<?= js('build/js/general/lightbox-plus-jquery.min.js') ?>