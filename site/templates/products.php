<?php snippet('header') ?>


<section class="content">
  <article>
    <h1><?= html($page->title()) ?></h1>
  </article>
  
  <?php foreach($page->children()->visible() AS $p): ?>
  <li>
    <a href="<?php echo $p->url() ?>">
    <?php echo fontize($p->title(),randFont(),60,"in") ?></a>
  </li>
  <?php endforeach ?>
</section>

<?php snippet('footer') ?>