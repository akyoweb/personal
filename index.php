<?php
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/i18n.php';
require_once __DIR__ . '/includes/data.php';

$page_title = lang('home_meta_title');
$page_desc = lang('home_meta_desc', ['name' => $me['name'], 'role' => $me['role']]);
include __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <div class="wrap hero-grid">
        <div class="hero-copy">
            <p class="eyebrow"><span class="status-dot"></span><?= e($me['availability']) ?></p>
            <h1>
                <?= e($me['name']) ?>
                <span class="hero-sub"><?= e($me['role']) ?></span>
            </h1>
            <p class="lead"><?= e($me['intro']) ?></p>
            <div class="hero-meta">
                <span>● <?= e(lang('hero_meta_1')) ?></span>
                <span>● <?= e(lang('hero_meta_2')) ?></span>
                <span>● <?= e(lang('hero_meta_3')) ?></span>
            </div>

            <div class="hero-actions">
                <a class="btn btn-primary" href="<?= e(lang_url('work.php')) ?>"><?= e(lang('hero_cta_work')) ?></a>
                <a class="btn btn-ghost" href="<?= e(lang_url('contact.php')) ?>"><?= e(lang('hero_cta_contact')) ?></a>
            </div>

            <ul class="quick-facts">
                <li><span><?= e(lang('quick_location')) ?></span><?= e($me['location']) ?></li>
                <li><span><?= e(lang('quick_status')) ?></span><?= e(lang('quick_status_value')) ?></li>
                <li><span><?= e(lang('quick_focus')) ?></span><?= e(lang('quick_focus_value')) ?></li>
            </ul>
        </div>

        <div class="hero-card">
            <div class="avatar" aria-hidden="true">
                <?= e(mb_substr($me['name'], 0, 1)) ?>
            </div>
            <p class="card-label"><?= e(lang('hero_card_label')) ?></p>
            <p class="card-text">
                <?= e(t_str('hero_card_text')) ?>
            </p>
            <ul class="card-list">
                <li><?= e(lang('hero_card_list_1')) ?></li>
                <li><?= e(lang('hero_card_list_2')) ?></li>
                <li><?= e(lang('hero_card_list_3')) ?></li>
            </ul>
        </div>
    </div>
</section>

<section class="section">
    <div class="wrap">
        <header class="section-head">
            <h2><?= e(lang('services_heading')) ?></h2>
            <p><?= e(lang('services_lead')) ?></p>
        </header>

        <div class="grid grid-3">
            <?php foreach ($services as $index => $service): ?>
                <article class="tile reveal">
                    <span class="tile-number">0<?= $index + 1 ?></span>
                    <h3><?= e(t($service['title'])) ?></h3>
                    <p><?= e(t($service['desc'])) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="wrap">
        <header class="section-head section-head-row">
            <div>
                <p class="eyebrow"><?= e(lang('skills_eyebrow')) ?></p>
                <h2><?= e(lang('skills_heading')) ?></h2>
                <p><?= e(lang('skills_lead')) ?></p>
            </div>
            <a class="text-link" href="<?= e(lang_url('about.php')) ?>"><?= e(lang('skills_more')) ?> ←</a>
        </header>

        <ul class="skills">
            <?php foreach ($skills as $key => $level): ?>
                <li class="skill" data-level="<?= (int) $level ?>">
                    <div class="skill-top">
                        <span class="skill-name"><?= e(skill_label($key)) ?></span>
                        <span class="skill-value"><?= (int) $level ?>٪</span>
                    </div>
                    <div class="skill-bar" role="img"
                         aria-label="<?= e(lang('skills_aria', ['label' => skill_label($key), 'level' => (int) $level])) ?>">
                        <span style="width: <?= (int) $level ?>%"></span>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="section">
    <div class="wrap cta">
        <div>
            <p class="eyebrow"><?= e(lang('cta_eyebrow')) ?></p>
            <h2><?= e(lang('cta_heading')) ?></h2>
            <p><?= e(lang('cta_lead')) ?></p>
        </div>
        <a class="btn btn-primary" href="<?= e(lang_url('contact.php')) ?>"><?= e(lang('cta_button')) ?> <span aria-hidden="true">←</span></a>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>