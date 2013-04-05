<?php snippet('header') ?>
<section class="content">
  <?php foreach($page->children()->visible() AS $p): ?>
  <li>
    <a href="<?php echo $p->url() ?>">
    <?php echo fontize($p->title(),randFont(),100,1,"in") ?></a>
  </li>
  <?php endforeach ?>
</section>
<?php snippet('footer') ?>