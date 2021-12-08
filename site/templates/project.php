<?php snippet('general/header') ?>

<?php snippet('menu/menu-white') ?>

<div class="container">
    <h1><?= $page->title() ?></h1>
    <p><?= $page->paragraph() ?></p>

    <img src="<?= $page->image()->url()?>"/>

</div>


<?php snippet('general/footer')?>