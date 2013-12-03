<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <?php
    //echo '<link rel="stylesheet" type="text/css" href="'. base_path().path_to_theme() .'/rs-plugin/css/responsive.css" media="screen" />';
    //echo '<link rel="stylesheet" type="text/css" href="'. base_path().path_to_theme() .'/rs-plugin/css/settings.css" media="screen" />';
?>
    <!-- Flex Slider CSS -->
    <?php //echo '<link rel="stylesheet" href="'. base_path().path_to_theme() .'/flexslider/flexslider.css" type="text/css">';?>

    <!-- Le styles -->
    <?php print $styles; ?>


    <link href="http://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C700italic%2C800italic%2C400%2C300%2C600%2C700%2C800&#038;subset=latin%2Ccyrillic-ext%2Cgreek-ext%2Cgreek%2Cvietnamese%2Clatin-ext%2Ccyrillic&#038;ver=3.4.2" id="gOpenSans-css" media="all" rel="stylesheet" type="text/css"/>
    <!-- Le fav and touch icons -->
    <link href="'. base_path().path_to_theme() .'/ico/favicon.ico" rel="shortcut icon">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <?php echo '<link rel="stylesheet" type="text/css" href="'. base_path().path_to_theme() .'/css/ie.css"/>';?>
    <![endif]-->
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
