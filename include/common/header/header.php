<!DOCTYPE html>
<html>

<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5VSK37W');
    </script>
    <!-- End Google Tag Manager -->

    <?php
  $current_url = 'https://press.houselabo-n.co.jp/lp/reform';
  $title          = "1級建築士が創る将来も安心なリフォーム｜ハウスラボ【見積・現地調査無料】";
  $keyword        = "";
  $description    = "本当に営業担当の見積だけで安心ですか？ハウスラボなら1級建築士が図面作成・現地調査を元に、根拠ある正確な見積書をご提出。面倒な補助金申請も丸ごとサポート！「狭い・古い」お住まいを永く安心快適に。まずは無料相談へ。";
  $thumbs         = "img/og.png";
  $metaThumbs     = "img/thumbs.png";
  $favicon        = "img/favicon.png";
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="keywords" content="<?php echo htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">

    <link rel="icon" href="<?php echo $favicon; ?>" sizes="32x32">
    <link rel="icon" href="<?php echo $favicon; ?>" sizes="192x192">
    <link rel="apple-touch-icon" href="<?php echo $favicon; ?>">
    <meta name="msapplication-TileImage" content="<?php echo $favicon; ?>">

    <link rel="canonical" href="<?php echo $current_url; ?>">
    <!--
  <PageMap>
    <DataObject type="thumbnail">
      <Attribute name="src" value="<?php echo $metaThumbs; ?>"/>
      <Attribute name="width" value="100"/>
      <Attribute name="height" value="100"/>
    </DataObject>
  </PageMap>
-->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?php echo $current_url; ?>">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo $thumbs; ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo $thumbs; ?>">
    <!-- Critical CSS -->
    <style>
    body {
        margin: 0;
        font-family: 'Noto Sans JP', sans-serif;
    }
    </style>

    <!-- メインCSS（重要） -->
    <link rel="preload" href="css/common.css?ver=5" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="css/common.css?ver=5">
    </noscript>

    <!-- Swiper（後回し） -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body id="body" class="body">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VSK37W" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->