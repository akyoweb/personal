<?php
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/data.php';

$errors = [];
$sent = false;
$old = ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];
csrf_token();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ضد اسپم ساده: هانی‌پات + فاصله زمانی
    $honeypot = trim($_POST['website'] ?? '');
    $started = (int) ($_POST['started_at'] ?? 0);

    if (!verify_csrf($_POST['csrf_token'] ?? '')) {
        $errors['form'] = 'نشست فرم منقضی شده است؛ صفحه را تازه‌سازی و دوباره تلاش کنید.';
    } elseif ($honeypot !== '') {
        $errors['form'] = 'ارسال ناموفق بود.';
    } elseif ($started && (time() - $started) < 3) {
        $errors['form'] = 'کمی آرام‌تر پر کن و دوباره بفرست.';
    } else {
        $old = array_map('trim', array_intersect_key($_POST, $old));
        $errors = validate_contact($old);
    }

    if (empty($errors)) {
        save_message($old);
        $sent = true;
        $old = ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];
    }
}

$page_title = 'تماس';
$page_desc = 'راه‌های تماس با ' . $profile['name'];
include __DIR__ . '/includes/header.php';
?>

<section class="page-head">
    <div class="wrap">
        <p class="eyebrow">تماس</p>
        <h1>بیا حرف بزنیم</h1>
        <p class="lead">
            فرم را پر کن یا مستقیم ایمیل بزن. معمولاً در همان روز کاری جواب می‌دهم.
        </p>
    </div>
</section>

<section class="section">
    <div class="wrap two-col">
        <div>
            <?php if ($sent): ?>
                <div class="alert alert-ok">
                    پیامت رسید. ممنون — به‌زودی جواب می‌دهم.
                </div>
            <?php elseif (!empty($errors['form'])): ?>
                <div class="alert alert-err"><?= e($errors['form']) ?></div>
            <?php endif; ?>

            <form class="form" method="post" action="contact.php">
            <input type="hidden" name="csrf_token" value="<?= e(csrf_token()) ?>">
            <input type="hidden" name="started_at" value="<?= time() ?>">
                <!-- تله ضد اسپم؛ برای کاربر نامرئی است -->
                <div class="hp">
                    <label for="website">وبسایت</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="form-row">
                    <div class="field">
                        <label for="name">نام</label>
                        <input type="text" id="name" name="name" value="<?= e($old['name']) ?>"
                            class="<?= isset($errors['name']) ? 'has-error' : '' ?>">
                        <?php if (isset($errors['name'])): ?>
                            <small class="field-error"><?= e($errors['name']) ?></small>
                        <?php endif; ?>
                    </div>

                    <div class="field">
                        <label for="email">ایمیل</label>
                        <input type="email" id="email" name="email" dir="ltr" value="<?= e($old['email']) ?>"
                            class="<?= isset($errors['email']) ? 'has-error' : '' ?>">
                        <?php if (isset($errors['email'])): ?>
                            <small class="field-error"><?= e($errors['email']) ?></small>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="field">
                    <label for="subject">موضوع <span class="opt">(اختیاری)</span></label>
                    <input type="text" id="subject" name="subject" value="<?= e($old['subject']) ?>">
                </div>

                <div class="field">
                    <label for="message">متن پیام</label>
                    <textarea id="message" name="message" rows="6"
                        class="<?= isset($errors['message']) ? 'has-error' : '' ?>"><?= e($old['message']) ?></textarea>
                    <small class="field-hint"><span id="charCount">۰</span> حرف نوشته شده است.</small>
                    <?php if (isset($errors['message'])): ?>
                        <small class="field-error"><?= e($errors['message']) ?></small>
                    <?php endif; ?>
                </div>

                <button class="btn btn-primary" type="submit">ارسال پیام</button>
            </form>
        </div>

        <aside class="side-box">
            <p class="eyebrow">در تماس باشیم</p>
            <h3>راه‌های دیگر</h3>
            <ul class="contact-list">
                <li>
                    <span>ایمیل</span>
                    <a href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a>
                </li>
                <li>
                    <span>GitHub</span>
                    <a href="<?= e($profile['github']) ?>" target="_blank" rel="noopener noreferrer">github.com/akyoweb</a>
                </li>
                <li>
                    <span>تلگرام</span>
                    <a href="<?= e($profile['telegram']) ?>" target="_blank" rel="noopener noreferrer">@AKYO_O</a>
                </li>
                <li>
                    <span>موقعیت</span>
                    <?= e($profile['location']) ?>
                </li>
            </ul>
            <p class="side-note">
                اگر موضوع محرمانه است، در پیام اول فقط کلیات را بنویس.
            </p>
        </aside>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>