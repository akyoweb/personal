<?php
/**
 * نقشه سایت (sitemap) به‌صورت XML.
 *
 * همه صفحات سایت به همراه نسخه فارسی و انگلیسی و لینک‌های
 * hreflang در اینجا لیست می‌شوند تا گوگل همه آن‌ها را ایندکس کند.
 *
 * آدرس: sitemap.php  (برای نقشه سایت روی هاست به sitemap.xml تغییر نام بدهید)
 */
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/i18n.php';
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/seo.php';

header('Content-Type: application/xml; charset=UTF-8');

/** صفحات ثابت سایت */
$staticPages = [
    ['index.php', '1.0', 'weekly'],
    ['about.php', '0.9', 'monthly'],
    ['work.php', '0.9', 'monthly'],
    ['blog.php', '0.8', 'weekly'],
    ['contact.php', '0.7', 'yearly'],
];

$urls = [];

$addLangVariants = static function ($loc) use (&$urls) {
    foreach (['fa', 'en'] as $code) {
        $urls[] = [
            'loc' => $loc . (strpos($loc, '?') === false ? '?' : '&') . 'lang=' . $code,
        ];
    }
};

foreach ($staticPages as [$file, $priority, $freq]) {
    $urls[] = ['loc' => absolute_url($file), 'priority' => $priority, 'changefreq' => $freq];
    $addLangVariants(absolute_url($file));
}

// نوشته‌های بلاگ
foreach ($posts as $post) {
    $url = absolute_url('blog-post.php?slug=' . urlencode($post['slug']));
    $urls[] = [
        'loc' => $url,
        'priority' => '0.6',
        'changefreq' => 'monthly',
        'lastmod' => $post['date'],
    ];
    $addLangVariants($url);
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    <?php foreach ($urls as $entry): ?>
        <url>
            <loc><?= e($entry['loc']) ?></loc>
            <?php if (!empty($entry['lastmod'])): ?>
                <lastmod><?= e($entry['lastmod']) ?></lastmod>
            <?php endif; ?>
            <?php if (!empty($entry['changefreq'])): ?>
                <changefreq><?= e($entry['changefreq']) ?></changefreq>
            <?php endif; ?>
            <?php if (!empty($entry['priority'])): ?>
                <priority><?= e($entry['priority']) ?></priority>
            <?php endif; ?>
            <?php if (strpos($entry['loc'], 'blog-post.php') === false && strpos($entry['loc'], 'lang=') === false): ?>
                <xhtml:link rel="alternate" hreflang="fa"
                    href="<?= e($entry['loc'] . (strpos($entry['loc'], '?') === false ? '?' : '&') . 'lang=fa') ?>" />
                <xhtml:link rel="alternate" hreflang="en"
                    href="<?= e($entry['loc'] . (strpos($entry['loc'], '?') === false ? '?' : '&') . 'lang=en') ?>" />
            <?php endif; ?>
        </url>
    <?php endforeach; ?>
</urlset>