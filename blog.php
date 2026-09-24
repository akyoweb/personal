<?php
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/i18n.php';
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/seo.php';

$page_title = lang('blog_meta_title');
$page_desc = lang('blog_meta_desc', ['name' => $me['name']]);
$page_keywords = 'برنامه‌نویسی, محمد جهانی, akyoweb, PHP, JavaScript, یادگیری برنامه‌نویسی, programming blog';
$extra_schema = [schema_blog($posts)];

include __DIR__ . '/includes/header.php';

$latest = $posts[0]['date'] ?? date('Y-m-d');
?>

<section class="page-head">
    <div class="wrap">
        <p class="eyebrow"><?= e(lang('blog_eyebrow')) ?></p>
        <h1><?= e(lang('blog_heading')) ?></h1>
        <p class="lead"><?= e(lang('blog_lead')) ?></p>
        <p class="blog-updated"><?= e(lang('blog_updated')) ?>: <time
                datetime="<?= e($latest) ?>"><?= e($latest) ?></time></p>
    </div>
</section>

<section class="section">
    <div class="wrap">
        <?php if (empty($posts)): ?>
            <p class="empty"><?= e(lang('blog_empty')) ?></p>
        <?php else: ?>
            <div class="post-grid">
                <?php foreach ($posts as $post): ?>
                    <article class="post-card reveal">
                        <a class="post-card-link" href="<?= e(lang_url('blog-post.php?slug=' . urlencode($post['slug']))) ?>">
                            <header class="post-card-head">
                                <time class="post-date" datetime="<?= e($post['date']) ?>"><?= e($post['date']) ?></time>
                                <span
                                    class="post-read"><?= e(lang('blog_read_time', ['minutes' => $post['reading_minutes']])) ?></span>
                            </header>
                            <h2><?= e(t($post['title'])) ?></h2>
                            <p><?= e(t($post['excerpt'])) ?></p>
                            <ul class="tags">
                                <?php foreach ($post['tags'] as $tag): ?>
                                    <li><?= e($tag) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <span class="link-more"><?= e(lang('blog_read_more')) ?> ←</span>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>