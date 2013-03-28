<?php snippet('header') ?>

<section class="content">
  <article>    
    <h1><?php echo fontize($page->title(),randFont(),90,"in") ?></h1>
    <?php echo fontize($page->text(),randFont(),120,"char") ?>
    
  </article>
</section>

<?php snippet('footer') ?>