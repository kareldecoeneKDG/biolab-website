<section class="carousel">
    <?php if($page->photos()->isNotEmpty()): ?>
        <h2 class="carousel__title h2">Foto's</h2>

        <?php $photos = $page->photos()->toStructure(); ?>

        <div class="carousel__creations">
            <?php foreach($photos as $photo): ?>
                <?php $image = $photo->photo()->toFile(); ?>
                <div>
                    <a href="<?= $image->url() ?>" data-lightbox="creations" data-title="<?= $photo->photographer() ?>" data-alt="Creation"><img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>"></a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>