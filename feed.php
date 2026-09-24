<?php
/**
 * خوراک RSS وبلاگ.
 *
 * آدرس مطلق استفاده می‌شود چون خوراک بیرون از سایت خوانده می‌شود.
 */
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/i18n.php';
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/seo.php';

header('Content-Type: application/rss+xml; charset=UTF-8');

$site = site_base();
$langCode = $lang === 'fa' ? 'fa' : 'en';

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title><?= e(lang('blog_heading') . ' — ' . $me['name']) ?></title>
        <link><?= e($site . '/blog.php') ?></link>
        <description><?= e(lang('blog_meta_desc', ['name' => $me['name']])) ?></description>
        <language><?= e($langCode) ?></language>
        <atom:link href="<?= e($site . '/feed.php') ?>" rel="self" type="application/rss+xml" />
        <?php foreach ($posts as $post): ?>
            <item>
                <title><?= e(t($post['title'])) ?></title>
                <link><?= e($site . '/blog-post.php?slug=' . urlencode($post['slug'])) ?></link>
                <guid isPermaLink="true"><?= e($site . '/blog-post.php?slug=' . urlencode($post['slug'])) ?></guid>
                <pubDate><?= e(date(DATE_RSS, strtotime($post['date']))) ?></pubDate>
                <description><?= e(t($post['excerpt'])) ?></description>
            </item>
        <?php endforeach; ?>
    </channel>
</rss>