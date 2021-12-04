<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>



<div class="container">
    <section class="introductionNoLab">
        <?php if($page->introductionTitle()->isNotEmpty()): ?>
            <h1 class="introductionNoLab__title h1"><?= $page->introductionTitle() ?></h1>
        <?php endif; ?>

        <div class="flex-row-desktop">
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

        <div class="flex-row-desktop">
            <img class="img" src="#" alt="bla">

            <div>
                <h3>Test title</h3>
                <p class="p">
                    Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale 
                    verdeling van letters bestaat, in tegenstelling tot "Hier uw tekst, hier uw tekst" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web.
                </p>
                <a class="button-small" href="#">Test</a>
            </div>
        </div>

        <div class="flex-row-desktop">
            <img class="img" src="#" alt="bla">

            <div>
                <h3>Test title</h3>
                <p class="p">
                    Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale 
                    verdeling van letters bestaat, in tegenstelling tot "Hier uw tekst, hier uw tekst" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web.
                </p>
                <a class="button-small" href="#">Test</a>
            </div>
        </div>
    </section>
</div>



<?php snippet('general/footer')?>