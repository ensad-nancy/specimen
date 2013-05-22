<?php snippet('header') ?>
<section class="content">

  <article>
    <h1><?php echo fontize($page->title(),$page->uid(),120,1,"in");?></h1>
    <?php echo str_replace(","," - ",$page->by()) ?>
    <hr>
    
    <div>
      <?php foreach($page->children() as $c): ?>
        <?php if($c->hasImages()): ?>
          <?php foreach($c->images() as $image): ?>
            <?php echo thumb($image, array('height' => 30));?>
          <?php endforeach ?>
        <?php endif ?>
      <?php endforeach ?>
    </div>
    <hr>
    <?php echo fontize($page->pangramme(),$page->uid(),50,2,"in") ?>
    
    <hr>
    <p class="motsclef">
       <?php echo fontize(str_replace(","," - ",$page->tags()),$page->uid(),110,2,"in") ?>
    
    <div class="gris">
      <?php echo fontize($page->text(),$page->uid(),18,1,"in") ?>
      
    </div>

    </p>
  </article>
</section>

<?php snippet('footer') ?>