<?php
// متغیرهای صفحه پیش از include تعریف می‌شوند.
$page_title = $page_title ?? $me['name'];
$page_desc = $page_desc ?? $me['intro'];
$canonical = basename($_SERVER['PHP_SELF']);
$other_lang = $is_rtl ? 'en' : 'fa';
?>
<!DOCTYPE html>
<html lang="<?= e($lang) ?>" dir="<?= e($dir) ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($page_title) ?> — <?= e($me['name']) ?></title>
    <meta name="description" content="<?= e($page_desc) ?>">
    <meta name="theme-color" content="#102a43">
    <meta name="color-scheme" content="light dark">
    <meta property="og:title" content="<?= e($page_title) ?> — <?= e($me['name']) ?>">
    <meta property="og:description" content="<?= e($page_desc) ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?= $lang === 'fa' ? 'fa_IR' : 'en_US' ?>">
    <link rel="canonical" href="<?= e($canonical) ?>">
    <link rel="alternate" hreflang="fa" href="<?= e($canonical . '?lang=fa') ?>">
    <link rel="alternate" hreflang="en" href="<?= e($canonical . '?lang=en') ?>">

    <!-- فونت وزیرمتن به‌صورت محلی بارگذاری می‌شود؛ هیچ درخواستی به سرور بیرونی نمی‌رود -->
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="data:,">
</head>

<body>

    <a class="skip-link" href="#main"><?= e(lang('skip_to_content')) ?></a>

    <header class="site-header">
        <div class="wrap header-inner">
            <a class="brand" href="<?= e(lang_url('index.php')) ?>">
                <span class="brand-mark"><?= e(mb_substr($me['name'], 0, 1)) ?></span>
                <span class="brand-text"><?= e($me['name']) ?></span>
            </a>

            <nav class="site-nav" id="siteNav" aria-label="<?= e(lang('nav_label')) ?>">
                <a href="<?= e(lang_url('index.php')) ?>" class="<?= e(nav_class('index.php')) ?>"><?= e(lang('nav_home')) ?></a>
                <a href="<?= e(lang_url('about.php')) ?>" class="<?= e(nav_class('about.php')) ?>"><?= e(lang('nav_about')) ?></a>
                <a href="<?= e(lang_url('work.php')) ?>" class="<?= e(nav_class('work.php')) ?>"><?= e(lang('nav_work')) ?></a>
                <a href="<?= e(lang_url('contact.php')) ?>" class="<?= e(nav_class('contact.php')) ?>"><?= e(lang('nav_contact')) ?></a>
            </nav>

            <div class="header-tools">
                <a class="lang-toggle" href="<?= e(lang_url_for('', $other_lang)) ?>" data-lang="<?= e($other_lang) ?>"
                    hreflang="<?= e($other_lang) ?>" title="<?= e(lang('lang_switch_title')) ?>"
                    aria-label="<?= e(lang('lang_switch_title')) ?>">
                    <span aria-hidden="true"><?= $is_rtl ? 'EN' : 'فا' ?></span>
                    <span class="lang-toggle-text"><?= e(lang('lang_switch_label')) ?></span>
                </a>

                <button class="theme-toggle" type="button" aria-label="<?= e(lang('theme_toggle')) ?>" title="<?= e(lang('theme_toggle')) ?>">☼</button>

                <button class="nav-toggle" type="button" aria-label="<?= e(lang('toggle_menu')) ?>" aria-controls="siteNav" aria-expanded="false">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>

    <main id="main">