<?php
require_once __DIR__ . '/seo.php';

// متغیرهای صفحه پیش از include تعریف می‌شوند.
$page_title = $page_title ?? $me['name'];
$page_desc = $page_desc ?? $me['intro'];
$page_robots = $page_robots ?? 'index, follow';
$og_type = $og_type ?? 'website';
$og_image = $og_image ?? '';
$page_date = $page_date ?? null;
$page_keywords = $page_keywords ?? '';
$extra_schema = $extra_schema ?? [];

$other_lang = $is_rtl ? 'en' : 'fa';
$full_title = $page_title . ' — ' . $me['name'] . ' (' . $me['brand'] . ')';
$canonical = canonical_url();
$canonical_fa = canonical_url_for_lang('fa');
$canonical_en = canonical_url_for_lang('en');
?>
<!DOCTYPE html>
<html lang="<?= e($lang) ?>" dir="<?= e($dir) ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($full_title) ?></title>
    <meta name="description" content="<?= e($page_desc) ?>">
    <meta name="robots" content="<?= e($page_robots) ?>">
    <meta name="author" content="<?= e($me['name']) ?>">
    <?php if ($page_keywords !== ''): ?>
        <meta name="keywords" content="<?= e($page_keywords) ?>">
    <?php endif; ?>
    <meta name="theme-color" content="#102a43">
    <meta name="color-scheme" content="light dark">

    <!-- Open Graph -->
    <meta property="og:site_name" content="<?= e($me['brand']) ?>">
    <meta property="og:title" content="<?= e($full_title) ?>">
    <meta property="og:description" content="<?= e($page_desc) ?>">
    <meta property="og:type" content="<?= e($og_type) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:locale" content="<?= $lang === 'fa' ? 'fa_IR' : 'en_US' ?>">
    <meta property="og:locale:alternate" content="<?= $lang === 'fa' ? 'en_US' : 'fa_IR' ?>">
    <?php if ($og_image !== ''): ?>
        <meta property="og:image" content="<?= e(absolute_url($og_image)) ?>">
    <?php endif; ?>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($full_title) ?>">
    <meta name="twitter:description" content="<?= e($page_desc) ?>">
    <?php if ($og_image !== ''): ?>
        <meta name="twitter:image" content="<?= e(absolute_url($og_image)) ?>">
    <?php endif; ?>

    <link rel="canonical" href="<?= e($canonical) ?>">
    <link rel="alternate" hreflang="fa" href="<?= e($canonical_fa) ?>">
    <link rel="alternate" hreflang="en" href="<?= e($canonical_en) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e($canonical_fa) ?>">
    <link rel="alternate" type="application/rss+xml" title="<?= e(lang('blog_rss')) ?>" href="feed.php">

    <?php if ($page_date !== null): ?>
        <meta property="article:published_time" content="<?= e($page_date) ?>">
    <?php endif; ?>

    <!-- داده ساخت‌یافته: شخص + وب‌سایت (محمد جهانی و akyoweb) -->
    <?= json_ld(schema_person()) ?>
    <?= json_ld(schema_website()) ?>
    <?php foreach ($extra_schema as $schema): ?>
        <?= json_ld($schema) ?>
    <?php endforeach; ?>

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
                <a href="<?= e(lang_url('blog.php')) ?>" class="<?= e(nav_class('blog.php')) ?><?= current_page() === 'blog-post.php' ? ' is-active' : '' ?>"><?= e(lang('nav_blog')) ?></a>
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