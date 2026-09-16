<?php

/** خروجی امن برای چاپ در HTML */
function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/** آدرس فعال صفحه جاری، مثلاً index.php */
function current_page()
{
    return basename($_SERVER['PHP_SELF']);
}

/** ساخت کلاس active برای منو */
function nav_class($file, $extra = '')
{
    $classes = $extra;
    if (current_page() === $file) {
        $classes .= ' is-active';
    }
    return trim($classes);
}

/** تولید توکن CSRF برای فرم‌های حساس */
function csrf_token()
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf_token'];
}

/** بررسی توکن CSRF ارسالی */
function verify_csrf($token)
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    return is_string($token) && !empty($_SESSION['csrf_token'])
        && hash_equals($_SESSION['csrf_token'], $token);
}

/** کلاس فعال لینک فیلتر */
function active_class($condition)
{
    return $condition ? 'is-active' : '';
}

/**
 * اعتبارسنجی ساده فرم تماس.
 * خروجی: آرایه‌ای از پیام‌های خطا (خالی یعنی موفق)
 */
function validate_contact(array $input)
{
    $errors = [];

    $name = trim($input['name'] ?? '');
    $email = trim($input['email'] ?? '');
    $message = trim($input['message'] ?? '');

    if ($name === '') {
        $errors['name'] = 'نام را وارد کنید.';
    } elseif (mb_strlen($name) < 3) {
        $errors['name'] = 'نام باید حداقل ۳ حرف باشد.';
    } elseif (mb_strlen($name) > 80) {
        $errors['name'] = 'نام نمی‌تواند بیشتر از ۸۰ حرف باشد.';
    }

    if ($email === '') {
        $errors['email'] = 'ایمیل را وارد کنید.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'قالب ایمیل درست نیست.';
    }

    if ($message === '') {
        $errors['message'] = 'متن پیام خالی است.';
    } elseif (mb_strlen($message) < 10) {
        $errors['message'] = 'پیام باید حداقل ۱۰ حرف باشد.';
    } elseif (mb_strlen($message) > 5000) {
        $errors['message'] = 'پیام نمی‌تواند بیشتر از ۵۰۰۰ حرف باشد.';
    }

    return $errors;
}

/**
 * مسیر پوشه ذخیره‌سازی.
 *
 * پیام‌ها عمداً بیرون از پوشه وب نگه داشته می‌شوند تا حتی اگر
 * تنظیمات وب‌سرور تغییر کند، فایل لاگ از اینترنت قابل خواندن نباشد.
 * اگر آن مسیر قابل نوشتن نبود، به پوشه storage محلی برمی‌گردیم.
 */
function storage_dir()
{
    $outside = dirname(__DIR__, 2) . '/personal-storage';

    foreach ([$outside, __DIR__ . '/../storage'] as $candidate) {
        if (is_dir($candidate) || @mkdir($candidate, 0775, true)) {
            return $candidate;
        }
    }

    return sys_get_temp_dir();
}

/** ذخیره پیام‌ها در فایل برای بازبینی بعدی */
function save_message(array $input)
{
    $dir = storage_dir();

    $row = [
        'date' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'] ?? '-',
        'name' => trim($input['name'] ?? ''),
        'email' => trim($input['email'] ?? ''),
        'subject' => trim($input['subject'] ?? ''),
        'message' => trim($input['message'] ?? ''),
    ];

    $line = json_encode($row, JSON_UNESCAPED_UNICODE);
    return file_put_contents($dir . '/messages.log', $line . PHP_EOL, FILE_APPEND | LOCK_EX);
}

/** خواندن پیام‌های ذخیره‌شده (جدیدترین اول) */
function load_messages()
{
    $file = storage_dir() . '/messages.log';
    if (!is_file($file)) {
        return [];
    }

    $rows = [];
    foreach (file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $decoded = json_decode($line, true);
        if (is_array($decoded)) {
            $rows[] = $decoded;
        }
    }

    return array_reverse($rows);
}
