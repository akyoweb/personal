<?php
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/data.php';

$page_title = 'خانه';
include __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <div class="wrap hero-grid">
        <div class="hero-copy">
            <p class="eyebrow"><span class="status-dot"></span><?= e($profile['availability']) ?></p>
            <h1>
                <?= e($profile['name']) ?>
                <span class="hero-sub"><?= e($profile['role']) ?></span>
            </h1>
            <p class="lead"><?= e($profile['intro']) ?></p>
            <div class="hero-meta">
                <span>● پاسخ‌گویی سریع</span>
                <span>● همکاری شفاف</span>
                <span>● کد قابل نگهداری</span>
            </div>

            <div class="hero-actions">
                <a class="btn btn-primary" href="work.php">دیدن نمونه‌کارها</a>
                <a class="btn btn-ghost" href="contact.php">شروع گفت‌وگو</a>
            </div>

            <ul class="quick-facts">
                <li><span>موقعیت</span><?= e($profile['location']) ?></li>
                <li><span>وضعیت</span>فعال و آماده یادگیری</li>
                <li><span>تمرکز</span>PHP، JavaScript، MySQL</li>
            </ul>
        </div>

        <div class="hero-card">
            <div class="avatar" aria-hidden="true">
                <?= e(mb_substr($profile['name'], 0, 1)) ?>
            </div>
            <p class="card-label">رویکرد من</p>
            <p class="card-text">
                ترجیح می‌دهم کارها را ساده نگه دارم؛ کدی که شش ماه بعد هم بشود راحت خواندش،
                از کدی که همین امروز فقط کار می‌کند ارزش بیشتری دارد.
            </p>
            <ul class="card-list">
                <li>کد تمیز و بدون وابستگی اضافه</li>
                <li>تحویل مرحله‌ای و شفاف</li>
                <li>پشتیبانی بعد از تحویل</li>
            </ul>
        </div>
    </div>
</section>

<section class="section">
    <div class="wrap">
        <header class="section-head">
            <h2>چند کاری که انجام می‌دهم</h2>
            <p>از طراحی دیتابیس تا آخرین پیکسل رابط کاربری.</p>
        </header>

        <div class="grid grid-3">
            <?php foreach ($services as $index => $service): ?>
                <article class="tile reveal">
                    <span class="tile-number">0<?= $index + 1 ?></span>
                    <h3><?= e($service['title']) ?></h3>
                    <p><?= e($service['desc']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="wrap">
        <header class="section-head section-head-row">
            <div>
                <p class="eyebrow">ابزارهای روزمره</p>
                <h2>مهارت‌ها</h2>
                <p>برآورد خودم از سطح فعلی — نه ادعای عدد دقیق.</p>
            </div>
            <a class="text-link" href="about.php">بیشتر درباره من ←</a>
        </header>

        <ul class="skills">
            <?php foreach ($skills as $label => $level): ?>
                <li class="skill" data-level="<?= (int) $level ?>">
                    <div class="skill-top">
                        <span class="skill-name"><?= e($label) ?></span>
                        <span class="skill-value"><?= (int) $level ?>٪</span>
                    </div>
                    <div class="skill-bar" role="img"
                         aria-label="<?= e($label) ?>: <?= (int) $level ?> درصد">
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
            <p class="eyebrow">شروع یک همکاری خوب</p>
            <h2>پروژه‌ای در ذهن داری؟</h2>
            <p>یک خط توضیح بفرست؛ با هم بررسی می‌کنیم بهترین قدم بعدی چیست.</p>
        </div>
        <a class="btn btn-primary" href="contact.php">شروع گفت‌وگو <span aria-hidden="true">←</span></a>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>