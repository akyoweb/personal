<?php
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/i18n.php';
require_once __DIR__ . '/includes/data.php';

$page_title = lang('work_meta_title');
$page_desc = lang('work_meta_desc', ['name' => $me['name']]);
$page_keywords = 'محمد جهانی, akyoweb, نمونه‌کارها, portfolio, PHP, JavaScript, MySQL, پروژه‌های وب, web projects';
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
        <p class="eyebrow"><?= e(lang('work_eyebrow')) ?></p>
        <h1><?= e(lang('work_heading')) ?></h1>
        <p class="lead"></p>
    </div>
</section>

<section class="section">
    <div class="wrap">
        <div class="filters" aria-label="<?= e(lang('work_filter_aria')) ?>">
            <span class="filter-label"><?= e(lang('work_filter_label')) ?></span>
            <a class="chip <?= active_class($active === '') ?>" href="<?= e(lang_url('work.php')) ?>"><?= e(lang('work_all')) ?> <span>(<?= count($projects) ?>)</span></a>
            <?php foreach ($all_tags as $tag): ?>
                <a class="chip <?= $active === $tag ? 'is-active' : '' ?>"
                    href="<?= e(lang_url('work.php?tag=' . urlencode($tag))) ?>"><?= e($tag) ?></a>
            <?php endforeach; ?>
        </div>

        <?php if (empty($visible)): ?>
            <p class="empty"><?= e(lang('work_empty')) ?></p>
        <?php else: ?>
            <div class="grid grid-3">
                <?php foreach ($visible as $projectIndex => $project): ?>
                    <article class="project reveal">
                        <div class="project-thumb">
                            <?php if (!empty($project['image'])): ?>
                                <img src="<?= e($project['image']) ?>"
                                    alt="<?= e(lang('work_poster_alt', ['title' => t($project['title'])])) ?>"
                                    loading="lazy" decoding="async">
                            <?php else: ?>
                                <span aria-hidden="true"><?= e(mb_substr(t($project['title']), 0, 1)) ?></span>
                            <?php endif; ?>
                            <small><?= e(t($project['status'] ?? 'پروژه')) ?></small>
                        </div>
                        <div class="project-body">
                            <div class="project-title-row">
                                <h3><?= e(t($project['title'])) ?></h3>
                                <span class="project-index">#<?= str_pad((string) ($projectIndex + 1), 2, '0', STR_PAD_LEFT) ?></span>
                            </div>
                            <p><?= e(t($project['desc'])) ?></p>
                            <?php if (!empty($project['note'])): ?>
                                <div class="project-note">
                                    <span class="project-note-label"><?= e(lang('project_note_label')) ?></span>
                                    <p><?= e(t($project['note'])) ?></p>
                                </div>
                            <?php endif; ?>
                            <ul class="tags">
                                <?php foreach ($project['tags'] as $tag): ?>
                                    <li><?= e($tag) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if (!empty($project['link']) && $project['link'] !== '#'): ?>
                                <a class="link-more" href="<?= e($project['link']) ?>"><?= e(lang('work_more')) ?> ←</a>
                            <?php else: ?>
                                <span class="link-more is-muted" aria-disabled="true"><?= e(t($project['status'] ?? '')) ?></span>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>