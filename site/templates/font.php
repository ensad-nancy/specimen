<?php snippet('header') ?>
<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->by()) ?>
    <?php echo str_replace(","," ",$page->tags()) ?>
    <hr>
    
    <?php foreach($page->children() as $c): ?>
      <?php if($c->hasImages()): ?>
        <?php foreach($c->images() as $image): ?>
          <?php echo thumb($image, array('height' => 150));?>
        <?php endforeach ?>
      <?php endif ?>
    <?php endforeach ?>
    <hr>
    <p><?php echo fontize($page->pangramme(),$page->uid(),100,1,"in") ?></p>
    
    <hr>
    
    <p><?php echo fontize($page->text(),$page->uid(),40,1,"in") ?></p>
    
  </article>
</section>

<?php snippet('footer') ?>