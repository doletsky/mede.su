<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
<!--	<link rel="shortcut icon" type="image/x-icon" href="--><?//=SITE_TEMPLATE_PATH?><!--/favicon.ico" />-->
<!--	<script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>-->
<!--	<link rel="stylesheet" type="text/css" href="--><?//=SITE_TEMPLATE_PATH?><!--/common.css" />-->
<!--	-->
	<?$APPLICATION->ShowHead();?>
<!---->
<!--		-->
<!--</head>-->


    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/normalize.css" type="text/css" media="screen">

    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/styles2.css" media="screen">
    <link rel="stylesheet" type="text/css" id="styles" href="<?=SITE_TEMPLATE_PATH?>/css/styles1.css" media="screen">

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/shortcodes.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/theme-changer.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/pretty/prettyPhoto.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/tipSwift/tipSwift.html" type="text/css" media="screen">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/nivo/nivo-slider.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/jFlickr/jflickr_css/style.css" type="text/css" media="screen">

    <noscript><link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/noscript.css" type="text/css" media="screen"></noscript>
    <!--[if IE 7]><link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/ie7.css" type="text/css" /><![endif]-->
</head>

<body>



<!-- HEADER -->

<div class="dark-line"></div>

<div id="wrapper">

    <!-- NAVIGATION MENU -->

    <?$APPLICATION->IncludeComponent("bitrix:menu","top_mede",Array(
            "ROOT_MENU_TYPE" => "top",
            "MAX_LEVEL" => "1",
            "CHILD_MENU_TYPE" => "top",
            "USE_EXT" => "Y",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "Y",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => ""
        )
    );?>

    <div class="inner clearfix">
        <div class="clearfix bottom-35">

            <!-- LOGO AND DESCRIPTION -->

            <a href="/" class="alignleft"><img src="images/content/logo.png" alt=""></a>

            <div class="description">
                <h1>Bringing elegance, style, etiquette and class back into vogue.</h1>

                <p>To attract good fortune, spend a new coin on an old friend, share an old pleasure with a new friend, and lift up the heart of a true friend by writing his name on the wings of a dragon.</p>
            </div>
        </div>