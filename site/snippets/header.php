<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <meta charset="utf-8">

  <!-- Primary Meta Tags -->
  <title><?= $site->title() ?></title>
  <meta name="title" content="<?= $site->title() ?>">
  <meta name="description" content="">

<!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $site->url() ?>">
  <meta property="og:title" content="<?= $site->title() ?>">
  <meta property="og:description" content="">
  <meta property="og:image" content="assets/img/meta.png">

<!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?= $site->url() ?>">
  <meta property="twitter:title" content="<?= $site->title() ?>">
  <meta property="twitter:description" content="">
  <meta property="twitter:image" content="assets/img/meta.png">

  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <?= css(['assets/css/reset.css','assets/css/style.css', '@auto']) ?>
  <?= js(['assets/js/amplitude.js', '@auto']) ?>

</head>

<body>

  <?=js([
fetch('/tracks.json')
    .then(function(response) {
      return response.json();
    })
    .then(function(track) {
      console.log(JSON.stringify(track));
  });
    ])?>

</body>
