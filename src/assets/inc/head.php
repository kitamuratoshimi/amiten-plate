<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="ja">

<head>
  <!-- base -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no, email=no, address=no">
  <base href="<?php echo $url ?>">

  <!-- title/description -->
  <title><?php $meta->title(); ?></title>
  <meta name="description" content="<?php $meta->desc() ?>">

  <!-- OGP -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $_SERVER['REQUEST_URI'] ?>">
  <meta property="og:site_name" content="<?php echo $meta->siteName ?>">
  <meta property="og:title" content="<?php $meta->title() ?>">
  <meta property="og:description" content="<?php $meta->desc() ?>">
  <?php if ($meta->ogpImg()) { ?>
  <meta property="og:image" content="<?php echo $url . 'assets/img/opg/' . $meta->ogpImg() ?>">
  <meta name="twitter:card" content="summary_large_image">
  <?php } ?>
  <!--
  <meta name="twitter:site" content="@Twitter" >
  <meta property="article:publisher" content="FacebookURL" >
  <meta property="fb:app_id" content="FacebookAppID" >
  -->

  <!-- font -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.3.1/dist/css/yakuhanmp.min.css" crossorigin="anonymous" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <!-- css -->
  <link href="assets/css/app.bundle.css" rel="stylesheet">

  <!-- icons -->
  <link href="img/icons/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="assets/img/icons/favicon-16.png" rel="icon" type="image/png" sizes="16x16">
  <link href="assets/img/icons/favicon-32.png" rel="icon" type="image/png" sizes="32x32">
  <link href="assets/img/icons/favicon-48.png" rel="icon" type="image/png" sizes="48x48">
  <link href="assets/img/icons/favicon-62.png" rel="icon" type="image/png" sizes="62x62">

  <!-- cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.3/ofi.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=es2015"></script>

</head>

<body class="<?php $bodyClass->output(); ?>">
  <div class="layout" id="app">
