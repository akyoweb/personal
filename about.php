<?php
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/i18n.php';
require_once __DIR__ . '/includes/data.php';

$page_title = lang('about_meta_title');
$page_desc = lang('about_meta_desc', ['name' => $me['name']]);
$page_keywords = 'محمد جهانی, Mohammad Jahanii, akyoweb, درباره من, توسعه‌دهنده وب, طراح رابط کاربری, PHP developer, web designer';
include __DIR__ . '/includes/header.php';
?>

<section class="page-head">
    <div class="wrap">
        <p class="eyebrow"><?= e(lang('about_eyebrow')) ?></p>
        <h1><?= e(lang('about_heading')) ?></h1>
        <p class="lead">
            <?= e(lang('about_lead')) ?>
        </p>
    </div>
</section>

<section class="section">
    <div class="wrap two-col">
        <div class="prose">
            <p class="eyebrow"><?= e(lang('about_story_eyebrow')) ?></p>
            <h2><?= e(lang('about_story_heading')) ?></h2>
            <p>
                <?= e(t_prose('about_p1')) ?>
            </p>
            <p>
                <?= e(t_prose('about_p2')) ?>
            </p>

            <p class="eyebrow about-eyebrow"><?= e(t_str('about_method_eyebrow')) ?></p>
            <h2><?= e(t_str('about_method_heading')) ?></h2>
            <ol class="steps">
                <li>
                    <strong><?= e(t_str('about_step1_title')) ?></strong>
                    <?= e(t_str('about_step1_text')) ?>
                </li>
                <li>
                    <strong><?= e(t_str('about_step2_title')) ?></strong>
                    <?= e(t_str('about_step2_text')) ?>
                </li>
                <li>
                    <strong><?= e(t_str('about_step3_title')) ?></strong>
                    <?= e(t_str('about_step3_text')) ?>
                </li>
                <li>
                    <strong><?= e(t_str('about_step4_title')) ?></strong>
                    <?= e(t_str('about_step4_text')) ?>
                </li>
            </ol>
        </div>

        <aside class="side-box">
            <p class="eyebrow"><?= e(lang('about_profile_eyebrow')) ?></p>
            <h3><?= e(lang('about_profile_heading')) ?></h3>
            <dl class="facts">
                <div>
                    <dt><?= e(lang('about_fact_name')) ?></dt>
                    <dd><?= e($me['name']) ?></dd>
                </div>
                <div>
                    <dt><?= e(lang('about_fact_role')) ?></dt>
                    <dd><?= e($me['role']) ?></dd>
                </div>
                <div>
                    <dt><?= e(lang('about_fact_location')) ?></dt>
                    <dd><?= e($me['location']) ?></dd>
                </div>
                <div>
                    <dt><?= e(lang('about_fact_email')) ?></dt>
                    <dd><a href="mailto:<?= e($me['email']) ?>"><?= e($me['email']) ?></a></dd>
                </div>
            </dl>
            <a class="btn btn-primary btn-block" href="<?= e($me['resume']) ?>" download><?= e(lang('about_resume')) ?> <span aria-hidden="true">↓</span></a>
            <a class="btn btn-ghost btn-block" href="<?= e(lang_url('contact.php')) ?>"><?= e(lang('about_contact')) ?></a>
        </aside>
    </div>
</section>

<section class="section section-alt">
    <div class="wrap">
        <header class="section-head">
            <p class="eyebrow"><?= e(lang('about_journey_eyebrow')) ?></p>
            <h2><?= e(lang('about_journey_heading')) ?></h2>
            <p><?= e(lang('about_journey_lead')) ?></p>
        </header>

        <ul class="timeline">
            <?php foreach ($experience as $job): ?>
                <li>
                    <span class="timeline-period"><?= e(t($job['period'])) ?></span>
                    <div class="timeline-body">
                        <h3><?= e(t($job['role'])) ?> <small>— <?= e(t($job['org'])) ?></small></h3>
                        <p><?= e(t($job['note'])) ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>