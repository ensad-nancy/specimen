<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('assets/styles/screen.css') ?>
  <?php echo css('assets/js/jquery-ui-1.10.2.custom/css/ui-darkness/jquery-ui-1.10.2.custom.css') ?>

</head>

<body>

  <header>
    <h1><a href="<?php echo url() ?>"><?= html($site->title()) ?></a><sup><a href="/panel/<?php echo $_SERVER['REQUEST_URI'] ?>">[edit]</a></sup></h1>
    
    <div class="menucont">
      <?php snippet('menu') ?>
    </div>
  </header>
