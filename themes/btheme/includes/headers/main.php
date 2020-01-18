<meta charset="UTF-8">
<!-- Use minimum-scale=1.0, maximum-scale=1.0, user-scalable=no for mobile applications -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Page -->
<meta name="description" content="<?= $metas[ 'desc' ] ?>">
<meta name="keywords" content="<?= $metas[ 'keywords' ] ?>">
<meta name="robots" content="<?= $metas[ 'robots' ] ?>">

<!-- Social -->
<meta property="og:title" content="<?= $metas[ 'ogTitle' ] ?>">
<meta property="og:site_name" content="<?= $metas[ 'ogSite' ] ?>">
<meta property="og:url" content="<?= $metas[ 'ogUrl' ] ?>">
<meta property="og:description" content="<?= $metas[ 'ogDesc' ] ?>">
<meta property="og:locale" content="<?= $metas[ 'ogLocale' ] ?>">
<meta property="og:type" content="<?= $metas[ 'ogType' ] ?>">
<meta property="og:image" content="<?= $metas[ 'ogImage' ] ?>">
<meta property="og:image:width" content="<?= $metas[ 'ogImageWidth' ] ?>">
<meta property="og:image:height" content="<?= $metas[ 'ogImageHeight' ] ?>">
<meta property="og:image:type" content="<?= $metas[ 'ogImageType' ] ?>">
<meta name="twitter:card" content="<?= $metas[ 'twCardType' ] ?>">
<link rel="canonical" href="<?= $metas[ 'canonical' ] ?>">

<!-- Title -->
<title><?= $metas[ 'title' ] ?></title>

<!-- IE fix for console -->
<script type="text/javascript"> if ( !window.console ) console = { log: function() {} }; </script>

<!-- App Icons -->
<link href="<?= $resourceUrl ?>/images/icons/favicon.ico" rel="shortcut icon">
<link href="<?= $resourceUrl ?>/images/icons/apple-icon-precomposed.png" rel="apple-touch-icon-precomposed">
