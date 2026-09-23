<?php
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/i18n.php';
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
        $errors['form'] = lang('err_csrf');
    } elseif ($honeypot !== '') {
        $errors['form'] = lang('err_send');
    } elseif ($started && (time() - $started) < 3) {
        $errors['form'] = lang('err_too_fast');
    } else {
        $old = array_map('trim', array_intersect_key($_POST, $old));
        $errors = validate_contact($old);
    }

    if (empty($errors)) {
        save_message($old);

        // ارسال ایمیل؛ اگر ناموفق باشد پیام خطا نشان می‌دهیم
        $row = array_merge($old, [
            'date' => date('Y-m-d H:i:s'),
            'ip' => $_SERVER['REMOTE_ADDR'] ?? '-',
        ]);

        if (!send_message_email($row)) {
            $errors['form'] = lang('err_send');
        } else {
            $sent = true;
            $old = ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];
        }
    }
}

$page_title = lang('contact_meta_title');
$page_desc = lang('contact_meta_desc', ['name' => $me['name']]);
include __DIR__ . '/includes/header.php';
?>

<section class="page-head">
    <div class="wrap">
        <p class="eyebrow"><?= e(lang('contact_eyebrow')) ?></p>
        <h1><?= e(lang('contact_heading')) ?></h1>
        <p class="lead">
            <?= e(lang('contact_lead')) ?>
        </p>
    </div>
</section>

<section class="section">
    <div class="wrap two-col">
        <div>
            <?php if ($sent): ?>
                <div class="alert alert-ok">
                    <?= e(lang('contact_sent')) ?>
                </div>
            <?php elseif (!empty($errors['form'])): ?>
                <div class="alert alert-err"><?= e($errors['form']) ?></div>
            <?php endif; ?>

            <form class="form" method="post" action="<?= e(lang_url('contact.php')) ?>">
            <input type="hidden" name="csrf_token" value="<?= e(csrf_token()) ?>">
            <input type="hidden" name="started_at" value="<?= time() ?>">
                <!-- تله ضد اسپم؛ برای کاربر نامرئی است -->
                <div class="hp">
                    <label for="website"><?= e(lang('contact_honeypot')) ?></label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="form-row">
                    <div class="field">
                        <label for="name"><?= e(lang('contact_field_name')) ?></label>
                        <input type="text" id="name" name="name" value="<?= e($old['name']) ?>"
                            class="<?= isset($errors['name']) ? 'has-error' : '' ?>">
                        <?php if (isset($errors['name'])): ?>
                            <small class="field-error"><?= e($errors['name']) ?></small>
                        <?php endif; ?>
                    </div>

                    <div class="field">
                        <label for="email"><?= e(lang('contact_field_email')) ?></label>
                        <input type="email" id="email" name="email" dir="ltr" value="<?= e($old['email']) ?>"
                            class="<?= isset($errors['email']) ? 'has-error' : '' ?>">
                        <?php if (isset($errors['email'])): ?>
                            <small class="field-error"><?= e($errors['email']) ?></small>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="field">
                    <label for="subject"><?= e(lang('contact_field_subject')) ?> <span class="opt"><?= e(lang('contact_optional')) ?></span></label>
                    <input type="text" id="subject" name="subject" value="<?= e($old['subject']) ?>">
                </div>

                <div class="field">
                    <label for="message"><?= e(lang('contact_field_message')) ?></label>
                    <textarea id="message" name="message" rows="6"
                        class="<?= isset($errors['message']) ? 'has-error' : '' ?>"><?= e($old['message']) ?></textarea>
                    <small class="field-hint"><span id="charCount">۰</span> <?= e(lang('contact_char_hint', ['count' => ''])) ?></small>
                    <?php if (isset($errors['message'])): ?>
                        <small class="field-error"><?= e($errors['message']) ?></small>
                    <?php endif; ?>
                </div>

                <button class="btn btn-primary" type="submit"><?= e(lang('contact_submit')) ?></button>
            </form>
        </div>

        <aside class="side-box">
            <p class="eyebrow"><?= e(lang('contact_side_eyebrow')) ?></p>
            <h3><?= e(lang('contact_side_heading')) ?></h3>
            <ul class="contact-list">
                <li>
                    <span><?= e(lang('contact_side_email')) ?></span>
                    <a href="mailto:<?= e($me['email']) ?>"><?= e($me['email']) ?></a>
                </li>
                <li>
                    <span><?= e(lang('contact_side_github')) ?></span>
                    <a href="<?= e($me['github']) ?>" target="_blank" rel="noopener noreferrer">github.com/akyoweb</a>
                </li>
                <li>
                    <span><?= e(lang('contact_side_telegram')) ?></span>
                    <a href="<?= e($me['telegram']) ?>" target="_blank" rel="noopener noreferrer">@AKYO_O</a>
                </li>
                <li>
                    <span><?= e(lang('contact_side_location')) ?></span>
                    <?= e($me['location']) ?>
                </li>
            </ul>
            <p class="side-note">
                <?= e(lang('contact_side_note')) ?>
            </p>
        </aside>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>