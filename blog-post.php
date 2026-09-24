<?php
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/i18n.php';
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/seo.php';

$slug = trim((string) ($_GET['slug'] ?? ''));
$post = $slug !== '' ? find_post($slug) : null;

// اگر نوشته پیدا نشد، با کد ۴۰۴ پاسخ می‌دهیم (برای سئو مهم است)
if ($post === null) {
    http_response_code(404);
    $page_title = lang('blog_meta_title');
    $page_desc = lang('blog_meta_desc', ['name' => $me['name']]);
    $page_robots = 'noindex, follow';
    include __DIR__ . '/includes/header.php';
    ?>
    <section class="page-head">
        <div class="wrap">
            <p class="eyebrow">404</p>
            <h1><?= e(lang('blog_empty')) ?></h1>
            <p class="lead"><a class="text-link" href="<?= e(lang_url('blog.php')) ?>"><?= e(lang('blog_back')) ?> ←</a></p>
        </div>
    </section>
    <?php
    include __DIR__ . '/includes/footer.php';
    exit;
}

$page_title = t($post['title']);
$page_desc = mb_substr(strip_tags(t($post['excerpt'])), 0, 155);
$page_keywords = implode(', ', $post['tags']) . ', محمد جهانی, akyoweb, برنامه‌نویسی';
$og_type = 'article';
$page_date = $post['date'];
$extra_schema = [schema_blog_post($post)];

include __DIR__ . '/includes/header.php';

// نوشته‌های دیگر (بدون نوشته جاری) برای پیشنهاد
$related = array_values(array_filter($posts, static function ($item) use ($post) {
    return $item['slug'] !== $post['slug'];
}));
$related = array_slice($related, 0, 3);
?>

<article class="section post-view">
    <div class="wrap post-wrap">
        <p class="eyebrow"><?= e(lang('blog_eyebrow')) ?></p>
        <h1><?= e(t($post['title'])) ?></h1>
        <p class="post-meta">
            <time datetime="<?= e($post['date']) ?>"><?= e($post['date']) ?></time>
            · <?= e(lang('blog_read_time', ['minutes' => $post['reading_minutes']])) ?>
            · <?= e($me['name']) ?> (<?= e($me['brand']) ?>)
        </p>

        <div class="prose post-body">
            <?= render_post_body(t($post['body'])) ?>
        </div>

        <ul class="tags post-tags">
            <?php foreach ($post['tags'] as $tag): ?>
                <li><?= e($tag) ?></li>
            <?php endforeach; ?>
        </ul>

        <p class="post-back">
            <a class="text-link" href="<?= e(lang_url('blog.php')) ?>">← <?= e(lang('blog_back')) ?></a>
        </p>
    </div>
</article>

<?php if (!empty($related)): ?>
    <section class="section section-alt">
        <div class="wrap">
            <header class="section-head">
                <h2><?= e(lang('blog_related_heading')) ?></h2>
            </header>
            <div class="post-grid">
                <?php foreach ($related as $item): ?>
                    <article class="post-card reveal">
                        <a class="post-card-link" href="<?= e(lang_url('blog-post.php?slug=' . urlencode($item['slug']))) ?>">
                            <header class="post-card-head">
                                <time class="post-date" datetime="<?= e($item['date']) ?>"><?= e($item['date']) ?></time>
                                <span
                                    class="post-read"><?= e(lang('blog_read_time', ['minutes' => $item['reading_minutes']])) ?></span>
                            </header>
                            <h2><?= e(t($item['title'])) ?></h2>
                            <p><?= e(t($item['excerpt'])) ?></p>
                            <span class="link-more"><?= e(lang('blog_read_more')) ?> ←</span>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>