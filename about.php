<?php
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/data.php';

$page_title = 'درباره من';
$page_desc = 'درباره ' . $profile['name'] . ' — سابقه کاری و روش کار.';
include __DIR__ . '/includes/header.php';
?>

<section class="page-head">
    <div class="wrap">
        <p class="eyebrow">درباره من</p>
        <h1>چطور به اینجا رسیدم</h1>
        <p class="lead">
            مسیر من با یادگیری مداوم و ساخت پروژه‌های تمرینی شروع شد؛ امروز تمرکزم ساخت تجربه‌های وب ساده، سریع و قابل اتکاست.
        </p>
    </div>
</section>

<section class="section">
    <div class="wrap two-col">
        <div class="prose">
            <p class="eyebrow">داستان من</p>
            <h2>کمی درباره خودم</h2>
            <p>
                اسمم <?= e($profile['name']) ?> است و در <?= e($profile['location']) ?> زندگی می‌کنم.
                بیشتر وقتم صرف یادگیری و نوشتن کد سمت سرور می‌شود، اما از کار روی رابط کاربری هم دور نشده‌ام؛
                به نظرم یک توسعه‌دهنده وب بهتر است هر دو طرف را بفهمد.
            </p>
            <p>
                چیزهایی که برایم مهم‌اند: کد خوانا، تصمیم‌های ساده به‌جای راه‌حل‌های پیچیده،
                و گفت‌وگوی مستقیم با کسی که پروژه مال اوست. دوست ندارم وسط کار غافلگیری پیش بیاید،
                پس ترجیح می‌دهم از اول درباره محدودیت‌ها صریح حرف بزنم.
            </p>

            <p class="eyebrow about-eyebrow">همکاری حرفه‌ای</p>
            <h2>روش کار</h2>
            <ol class="steps">
                <li>
                    <strong>گفت‌وگوی اول</strong>
                    درباره هدف پروژه، زمان و بودجه حرف می‌زنیم تا ببینیم به هم می‌خوریم یا نه.
                </li>
                <li>
                    <strong>طرح و برآورد</strong>
                    ساختار پروژه و مراحل تحویل را می‌نویسم؛ بدون تعهد به چیزهایی که ممکن نیست.
                </li>
                <li>
                    <strong>ساخت مرحله‌ای</strong>
                    بعد از هر مرحله چیزی قابل دیدن تحویل می‌دهم تا مسیر زودتر اصلاح شود.
                </li>
                <li>
                    <strong>تحویل و پشتیبانی</strong>
                    کد و مستندات را تحویل می‌دهم و تا مدتی بعد از تحویل همراه پروژه هستم.
                </li>
            </ol>
        </div>

        <aside class="side-box">
            <p class="eyebrow">پروفایل</p>
            <h3>در یک نگاه</h3>
            <dl class="facts">
                <div>
                    <dt>نام</dt>
                    <dd><?= e($profile['name']) ?></dd>
                </div>
                <div>
                    <dt>حرفه</dt>
                    <dd><?= e($profile['role']) ?></dd>
                </div>
                <div>
                    <dt>موقعیت</dt>
                    <dd><?= e($profile['location']) ?></dd>
                </div>
                <div>
                    <dt>ایمیل</dt>
                    <dd><a href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a></dd>
                </div>
            </dl>
            <a class="btn btn-primary btn-block" href="<?= e($profile['resume']) ?>" download>دریافت رزومه <span aria-hidden="true">↓</span></a>
            <a class="btn btn-ghost btn-block" href="contact.php">ارتباط با من</a>
        </aside>
    </div>
</section>

<section class="section section-alt">
    <div class="wrap">
        <header class="section-head">
            <p class="eyebrow">مسیر یادگیری</p>
            <h2>تجربه و تمرکز فعلی</h2>
            <p>هر پروژه فرصتی برای بهتر شدن، مستندسازی و ساختن عادت‌های حرفه‌ای‌تر است.</p>
        </header>

        <ul class="timeline">
            <?php foreach ($experience as $job): ?>
                <li>
                    <span class="timeline-period"><?= e($job['period']) ?></span>
                    <div class="timeline-body">
                        <h3><?= e($job['role']) ?> <small>— <?= e($job['org']) ?></small></h3>
                        <p><?= e($job['note']) ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>