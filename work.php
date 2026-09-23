<?php
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/data.php';

$page_title = 'نمونه‌کارها';
$page_desc = 'نمونه‌کارهای ' . $profile['name'];
include __DIR__ . '/includes/header.php';

// فیلتر ساده بر اساس برچسب
$all_tags = [];
foreach ($projects as $project) {
    foreach ($project['tags'] as $tag) {
        $all_tags[$tag] = true;
    }
}
$all_tags = array_keys($all_tags);

$active = trim((string) ($_GET['tag'] ?? ''));
$valid_tags = array_flip($all_tags);
if ($active !== '' && !isset($valid_tags[$active])) {
    $active = '';
}
$visible = array_filter($projects, function ($project) use ($active) {
    return $active === '' || in_array($active, $project['tags'], true);
});
?>

<section class="page-head">
    <div class="wrap">
        <p class="eyebrow">نمونه‌کارها</p>
        <h1>چند پروژه که ساخته‌ام</h1>
        <p class="lead"></p>
    </div>
</section>

<section class="section">
    <div class="wrap">
        <div class="filters" aria-label="فیلتر پروژه‌ها">
            <span class="filter-label">فیلتر بر اساس تکنولوژی:</span>
            <a class="chip <?= active_class($active === '') ?>" href="work.php">همه <span>(<?= count($projects) ?>)</span></a>
            <?php foreach ($all_tags as $tag): ?>
                <a class="chip <?= $active === $tag ? 'is-active' : '' ?>"
                    href="work.php?tag=<?= urlencode($tag) ?>"><?= e($tag) ?></a>
            <?php endforeach; ?>
        </div>

        <?php if (empty($visible)): ?>
            <p class="empty">با این برچسب پروژه‌ای پیدا نشد.</p>
        <?php else: ?>
            <div class="grid grid-3">
                <?php foreach ($visible as $projectIndex => $project): ?>
                    <article class="project reveal">
                        <div class="project-thumb">
                            <?php if (!empty($project['image'])): ?>
                                <img src="<?= e($project['image']) ?>"
                                    alt="پوستر پروژه <?= e($project['title']) ?>"
                                    loading="lazy" decoding="async">
                            <?php else: ?>
                                <span aria-hidden="true"><?= e(mb_substr($project['title'], 0, 1)) ?></span>
                            <?php endif; ?>
                            <small><?= e($project['status'] ?? 'پروژه') ?></small>
                        </div>
                        <div class="project-body">
                            <div class="project-title-row">
                                <h3><?= e($project['title']) ?></h3>
                                <span class="project-index">#<?= str_pad((string) ($projectIndex + 1), 2, '0', STR_PAD_LEFT) ?></span>
                            </div>
                            <p><?= e($project['desc']) ?></p>
                            <ul class="tags">
                                <?php foreach ($project['tags'] as $tag): ?>
                                    <li><?= e($tag) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a class="link-more" href="<?= e($project['']) ?>">جزئیات بیشتر ←</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>