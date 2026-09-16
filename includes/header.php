<?php
// متغیرهای صفحه پیش از include تعریف می‌شوند.
$page_title = $page_title ?? $profile['name'];
$page_desc = $page_desc ?? $profile['intro'];
$canonical = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($page_title) ?> — <?= e($profile['name']) ?></title>
    <meta name="description" content="<?= e($page_desc) ?>">
    <meta name="theme-color" content="#102a43">
    <meta name="color-scheme" content="light dark">
    <meta property="og:title" content="<?= e($page_title) ?> — <?= e($profile['name']) ?>">
    <meta property="og:description" content="<?= e($page_desc) ?>">
    <meta property="og:type" content="website">
    <link rel="canonical" href="<?= e($canonical) ?>">

    <!-- فونت وزیرمتن به‌صورت محلی بارگذاری می‌شود؛ هیچ درخواستی به سرور بیرونی نمی‌رود -->
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="data:,">
</head>

<body>

    <header class="site-header">
        <div class="wrap header-inner">
            <a class="brand" href="index.php">
                <span class="brand-mark"><?= e(mb_substr($profile['name'], 0, 1)) ?></span>
                <span class="brand-text"><?= e($profile['name']) ?></span>
            </a>

            <button class="nav-toggle" type="button" aria-label="باز و بستن منو" aria-controls="siteNav" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>

            <nav class="site-nav" id="siteNav">
                <a href="index.php" class="<?= e(nav_class('index.php')) ?>">خانه</a>
                <a href="about.php" class="<?= e(nav_class('about.php')) ?>">درباره من</a>
                <a href="work.php" class="<?= e(nav_class('work.php')) ?>">نمونه‌کارها</a>
                <a href="contact.php" class="<?= e(nav_class('contact.php')) ?>">تماس</a>
            </nav>

            <button class="theme-toggle" type="button" aria-label="تغییر پوسته" title="تغییر پوسته">☼</button>
        </div>
    </header>

    <main>