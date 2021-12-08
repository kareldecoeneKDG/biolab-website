<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>



<div class="container">           

    <?php //ALL BLOGS DESKTOP ?>
    <div class="blog-wrapper-desktop">
        <?php  
        $projects = $page->children()->listed();
        foreach ($projects as $project): ?>
            <project class="blog-wrapper__blog-overview">
                <div>
                    <img class="blog-wrapper__blog-overview__img img" src="<?=$project->image()->url()?>" alt="<?=$project->image()->alt()?>">

                    <div class="blog-wrapper__blog-overview__text-wrapper">
                        <h2 class="blog-wrapper__blog-overview__text-wrapper__title h2"><?=$project->title()->html()?></h2>
                        <p class="blog-wrapper__blog-overview__text-wrapper__p p"><?=$project->paragraph()->excerpt(90)?></p>
                    </div>
                </div>

                <div>
                    <a class="blog-wrapper__blog-overview__text-wrapper__link button-small" href="<?=$project->url()?>">Lees artikel</a>
                </div>
            </project>
        <?php endforeach?>
    </div>
    
</div>



<?php snippet('general/footer')?>