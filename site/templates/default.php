<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $site->title() ?></title>
  </head>
  <body>

    <header>
      <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

      <nav class="menu">
        <?php foreach ($site->children() as $subpage): ?>
          <a href="><?= $subpage->url() ?>"<?= $subpage->title() ?></a>
        <?php endforeach ?>
      </nav>

    </header>

    <? snippet('header') ?>
    Hello World
        <h1><?= $page->title() ?></h1>
        <?= $page->text() ?>
        <?= $page->contact() ?>
    <? snippet('footer') ?>
  </body>
</html>
