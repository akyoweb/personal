<?php
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/i18n.php';
require_once __DIR__ . '/includes/data.php';

$page_title = lang('home_meta_title');
$page_desc = lang('home_meta_desc', ['name' => $me['name'], 'role' => $me['role']]);
$page_keywords = 'محمد جهانی, Mohammad Jahanii, akyoweb, توسعه‌دهنده وب, طراح رابط کاربری, PHP, JavaScript, MySQL, web developer';
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

        <ul class="path">
            <?php foreach ($skills as $index => $skill): ?>
                <li class="path-item level-<?= e($skill['level']) ?> reveal">
                    <span class="path-index"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <div class="path-body">
                        <div class="path-top">
                            <h3><?= e($skill['name']) ?></h3>
                            <span class="path-level"><?= e(lang('level_' . $skill['level'])) ?></span>
                        </div>
                        <p><?= e(t($skill['note'])) ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="section">
    <div class="wrap">
        <header class="section-head">
            <p class="eyebrow"><?= e(lang('decisions_eyebrow')) ?></p>
            <h2><?= e(lang('decisions_heading')) ?></h2>
            <p><?= e(lang('decisions_lead')) ?></p>
        </header>

        <div class="decisions">
            <?php foreach ($decisions as $index => $decision): ?>
                <article class="decision reveal">
                    <span class="decision-index"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3><?= e(t($decision['title'])) ?></h3>
                    <p><?= e(t($decision['body'])) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="wrap">
        <header class="section-head">
            <p class="eyebrow"><?= e(lang('mistakes_eyebrow')) ?></p>
            <h2><?= e(lang('mistakes_heading')) ?></h2>
            <p><?= e(lang('mistakes_lead')) ?></p>
        </header>

        <ol class="log">
            <?php foreach ($mistakes as $mistake): ?>
                <li class="log-item reveal">
                    <h3><?= e(t($mistake['title'])) ?></h3>
                    <p><?= e(t($mistake['body'])) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
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