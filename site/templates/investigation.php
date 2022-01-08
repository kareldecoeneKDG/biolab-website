<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>



<div class="container">
    <div class="breadcrumb" itemprop="breadcrumb">
        <?php snippet('general/breadcrumb-content') ?>
    </div>



    <div class="blog-wrapper">
        <?php
        $projects = $page->children()->listed();
        foreach ($projects as $project) : ?>
            <project class="blog-wrapper__blog-overview">
                <a href="<?= $project->url() ?>">
                    <div>
                        <?php if ($img = $project->image()) : ?>
                            <img class="blog-wrapper__blog-overview__img img" src="<?= $img->url() ?>" alt="<?= $img->alt() ?>">
                        <?php endif; ?>

                        <div class="blog-wrapper__blog-overview__text-wrapper">
                            <h2 class="blog-wrapper__blog-overview__text-wrapper__title h2"><?= $project->title()->html() ?></h2>
                            <p class="blog-wrapper__blog-overview__text-wrapper__p p"><?= $project->paragraph()->excerpt(90) ?></p>

                            <a class="blog-wrapper__blog-overview__text-wrapper__link button-small" href="<?= $project->url() ?>">Lees onderzoek</a>
                        </div>
                    </div>
                </a>
            </project>
        <?php endforeach ?>
    </div>



    <div class="blog-wrapper-desktop">
        <?php
        $projects = $page->children()->listed();
        foreach ($projects as $project) : ?>
            <project class="blog-wrapper__blog-overview">
                <a href="<?= $project->url() ?>">
                    <div>
                        <?php if ($img = $project->image()) : ?>
                            <img class="blog-wrapper__blog-overview__img img" src="<?= $img->url() ?>" alt="<?= $img->alt() ?>">
                        <?php endif; ?>

                        <div class="blog-wrapper__blog-overview__text-wrapper">
                            <h2 class="blog-wrapper__blog-overview__text-wrapper__title h2"><?= $project->title()->html() ?></h2>
                            <p class="blog-wrapper__blog-overview__text-wrapper__p p"><?= $project->paragraph()->excerpt(90) ?></p>
                        </div>
                    </div>

                    <div>
                        <a class="blog-wrapper__blog-overview__text-wrapper__link button-small" href="<?= $project->url() ?>">Lees onderzoek</a>
                    </div>
                </a>
            </project>
        <?php endforeach ?>
    </div>
</div>



<?php snippet('general/footer') ?>