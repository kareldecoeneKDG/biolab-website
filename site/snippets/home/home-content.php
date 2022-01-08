<section class="introduction">
    <?php if ($page->whatIsFablabTitle()->isNotEmpty()) : ?>
        <h2 class="introduction__title h2-home h2"><?= $page->whatIsFablabTitle() ?></h2>
    <?php endif; ?>



    <div class="flex-row-desktop">
        <div class="introduction__content">
            <?php if ($page->whatIsFablabText()->isNotEmpty()) : ?>
                <p class="introduction__content__paragraph p p-home"><?= $page->whatIsFablabText() ?></p>
            <?php endif; ?>

            <?php if ($page->whatIsFablabButtonText()->isNotEmpty()) : ?>
                <a class="introduction__content__button button-small button-home" href="<?= $pages->find('wat-is-biolab')->url() ?>"><?= $page->whatIsFablabButtonText() ?></a>
            <?php endif; ?>
        </div>



        <div class="flex-column">
            <div class="introduction__openhours">
                <?php if ($page->openhoursKdGTitle()->isNotEmpty()) : ?>
                    <h3 class="introduction__openhours__title h3"><?= $page->openhoursKdGTitle() ?></h3>
                <?php endif; ?>

                <?php if ($page->openhoursKdGText()->isNotEmpty()) : ?>
                    <p class="introduction__openhours__paragraph p"><?= $page->openhoursKdGText() ?></p>
                <?php endif; ?>
            </div>

            <div class="introduction__openhours">
                <?php if ($page->openhoursExternTitle()->isNotEmpty()) : ?>
                    <h3 class="introduction__openhours__title h3"><?= $page->openhoursExternTitle() ?></h3>
                <?php endif; ?>

                <?php if ($page->openhoursExternText()->isNotEmpty()) : ?>
                    <p class="introduction__openhours__paragraph p"><?= $page->openhoursExternText() ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>



<?php //WORKING FABLAB ?>
<section class="info">
    <img class="info__image img" src="assets/images/biolab.png" alt="tekst">

    <h2 class="info__title h2-home h2"><?= $page->workingFablabTitle() ?></h2>



    <div class="flex-row-desktop">
        <div class="info__content">
            <?php if ($page->workingFablabText()->isNotEmpty()) : ?>
                <p class="info__content__paragraph p p-home"><?= $page->workingFablabText() ?></p>
            <?php endif; ?>

            <?php if ($page->workingFablabButtonText()->isNotEmpty()) : ?>
                <a class="info__content__button button-small button-home" href="<?= $pages->find('onderzoeken')->url() ?>"><?= $page->workingFablabButtonText() ?></a>
            <?php endif; ?>
        </div>



        <?php //IMAGE DESKTOP ?>
        <?php if ($img = $page->workingFablabImage()->toFile()) : ?>
            <div class="info__imagecontainer">
                <img class="info__imagecontainer__img home-img" src="<?= $img->url() ?>" alt="Picture of Mark in Fablab">
            </div>
        <?php endif; ?>
    </div>
</section>