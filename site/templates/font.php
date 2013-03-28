<?php snippet('header') ?>
<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>
    <?php echo kirbytext($page->type()) ?>
    <?php echo kirbytext($page->by()) ?>
    <?php echo kirbytext($page->tags()) ?>
    <hr>
    
    <?php foreach($page->children() as $c): ?>
      <?php if($c->hasImages()): ?>
        <?php foreach($c->images() as $image): ?>
          <?php echo thumb($image, array('height' => 150));?>
        <?php endforeach ?>
      <?php endif ?>
    <?php endforeach ?>
    <hr>
    <p><?php echo fontize("J ai vu un punk afghan et deux clowns aux zygomatiques incroyables",$page->uid(),60,"in") ?></p>
    
  </article>
</section>

<?php snippet('footer') ?>