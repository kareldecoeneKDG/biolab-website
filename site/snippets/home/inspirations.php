<?php
    $inspirations = $page->inspirations()->toStructure();
?>

<?php foreach ($inspirations as $inspiration) : ?>
    <div>
        <a href="<?= $inspiration->url(); ?>" rel="nofollow" target="_blank">
            <?php if ($inspiration->icon() == "recycle") : ?>
                <i class="fa fa-recycle" aria-hidden="true"></i><?= $inspiration->anchor() ?>
            <?php endif; ?>

            <?php if ($inspiration->icon() == "circular") : ?>
                <i class="fa fa-refresh" aria-hidden="true"></i><?= $inspiration->anchor() ?>
            <?php endif; ?>

            <?php if ($inspiration->icon() == "research") : ?>
                <i class="fa fa-search" aria-hidden="true"></i><?= $inspiration->anchor() ?>
            <?php endif; ?>

            <?php if ($inspiration->icon() == "event") : ?>
                <i class="fa fa-calendar" aria-hidden="true"></i><?= $inspiration->anchor() ?>
            <?php endif; ?>

            <?php if ($inspiration->icon() == "labo") : ?>
                <i class="fa fa-flask" aria-hidden="true"></i><?= $inspiration->anchor() ?>
            <?php endif; ?>

            <?php if ($inspiration->icon() == "ecological") : ?>
                <i class="fa fa-leaf" aria-hidden="true"></i><?= $inspiration->anchor() ?>
            <?php endif; ?>

            <?php if ($inspiration->icon() == "link") : ?>
                <i class="fa fa-anchor" aria-hidden="true"></i><?= $inspiration->anchor() ?>
            <?php endif; ?>
        </a>
    </div>
<?php endforeach; ?>