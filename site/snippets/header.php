<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php // echo html($page->parent()->uid()) ?><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('assets/js/jquery-ui-1.10.2.custom/css/blitzer/jquery-ui-1.10.2.custom.css') ?>
  <?php echo css('assets/styles/screen.css') ?>

</head>

<body>

  <header>
    <h1 class=".no-print"><a href="<?php echo url() ?>"><?= html($site->title()) ?></a>
      <sup class="no-print"><a href="/panel/<?php echo $_SERVER['REQUEST_URI'] ?>">[edit]</a></sup></BR>
      <sup ><a href="">ENSA-Nancy 2013</a></sup>
    </h1>
    
    <div class="menucont no-print">
      <?php snippet('menu') ?>
    </div>
  </header>
