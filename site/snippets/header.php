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
  
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/amplitudejs@v5.0.3/dist/amplitude.js"></script>

</head>

<body>
