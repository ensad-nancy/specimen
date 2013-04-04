<?php snippet('header') ?>
<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    
    <?php foreach($page->children()->visible() AS $p): ?>
    <li>
      <a href="<?php echo $p->url() ?>">
      <?php echo fontize($p->title(),$p->uid(),100,1,"in") ?></a>
    </li>
    <?php endforeach ?>
    


  </article>
</section>

<?php snippet('footer') ?>