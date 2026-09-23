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
        $errors['name'] = lang('err_name_required');
    } elseif (mb_strlen($name) < 3) {
        $errors['name'] = lang('err_name_short');
    } elseif (mb_strlen($name) > 80) {
        $errors['name'] = lang('err_name_long');
    }

    if ($email === '') {
        $errors['email'] = lang('err_email_required');
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = lang('err_email_invalid');
    }

    if ($message === '') {
        $errors['message'] = lang('err_message_required');
    } elseif (mb_strlen($message) < 10) {
        $errors['message'] = lang('err_message_short');
    } elseif (mb_strlen($message) > 5000) {
        $errors['message'] = lang('err_message_long');
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

/* ------------------------------------------------------------------
 * ارسال ایمیل
 * ------------------------------------------------------------------ */

/**
 * تنظیمات ایمیل را از فایل ایمیل‌کانفیگ می‌خواند (اگر وجود داشته باشد).
 * فایل includes/mail-config.php را از روی mail-config.sample.php بسازید.
 */
function mail_config()
{
    static $config = null;

    if ($config !== null) {
        return $config;
    }

    $file = __DIR__ . '/mail-config.php';

    if (is_file($file)) {
        $loaded = require $file;
        if (is_array($loaded)) {
            return $config = $loaded;
        }
    }

    return $config = [];
}

/**
 * ساخت متن خام ایمیل برای پیام‌های فرم تماس.
 */
function build_message_mail(array $row)
{
    $config = mail_config();
    $to = $config['to'] ?? 'mmdj3004@gmail.com';

    $from = $config['from'] ?? ('no-reply@' . ($_SERVER['HTTP_HOST'] ?? 'localhost'));
    $fromName = $config['from_name'] ?? 'Portfolio contact form';

    $subject = 'پیام جدید از سایت'
        . (!empty($row['subject']) ? ': ' . $row['subject'] : '');

    $lines = [
        'پیام جدید از فرم تماس سایت',
        str_repeat('=', 40),
        'نام: ' . ($row['name'] ?? '-'),
        'ایمیل: ' . ($row['email'] ?? '-'),
        'موضوع: ' . ($row['subject'] ?? '-'),
        'تاریخ: ' . ($row['date'] ?? date('Y-m-d H:i:s')),
        'IP: ' . ($row['ip'] ?? '-'),
        str_repeat('-', 40),
        (string) ($row['message'] ?? ''),
    ];

    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . sprintf('%s <%s>', $fromName, $from),
        'Reply-To: ' . ($row['email'] ?? $from),
        'X-Mailer: PHP/' . PHP_VERSION,
    ];

    return [
        'to' => $to,
        'subject' => $subject,
        'body' => implode(PHP_EOL, $lines),
        'headers' => $headers,
    ];
}

/**
 * ارسال پیام فرم تماس به ایمیل شما.
 *
 * اگر SMTP در mail-config.php تنظیم شده باشد از آن استفاده می‌کند،
 * وگرنه به تابع mail() خود PHP برمی‌گردد.
 */
function send_message_email(array $row)
{
    $config = mail_config();
    $mail = build_message_mail($row);

    if (!empty($config['smtp_host'])) {
        return send_via_smtp($config, $mail, $row);
    }

    $headers = implode(PHP_EOL, $mail['headers']);

    return @mail(
        $mail['to'],
        '=?UTF-8?B?' . base64_encode($mail['subject']) . '?=',
        $mail['body'],
        $headers
    );
}

/**
 * ارسال از طریق سرور SMTP (بدون نیاز به کتابخانه بیرونی).
 */
function send_via_smtp(array $config, array $mail, array $row)
{
    $host = $config['smtp_host'];
    $port = (int) ($config['smtp_port'] ?? 587);
    $user = $config['smtp_user'] ?? '';
    $pass = $config['smtp_pass'] ?? '';
    $secure = strtolower($config['smtp_secure'] ?? 'tls');

    $from = $config['from'] ?? $user;
    $fromName = $config['from_name'] ?? 'Portfolio contact form';

    $remote = ($secure === 'ssl' ? 'ssl://' : '') . $host . ':' . $port;
    $context = stream_context_create([
        'ssl' => ['verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true],
    ]);

    $socket = @stream_socket_client($remote, $errno, $errstr, 15, STREAM_CLIENT_CONNECT, $context);

    if (!$socket) {
        return false;
    }

    stream_set_timeout($socket, 15);

    /** خواندن پاسخ سرور و بررسی کد وضعیت */
    $expect = function (array $codes) use ($socket) {
        $response = '';
        while (($line = fgets($socket, 515)) !== false) {
            $response .= $line;
            if (isset($line[3]) && $line[3] === ' ') {
                break;
            }
        }
        return in_array((int) substr($response, 0, 3), $codes, true);
    };

    $send = function ($command) use ($socket) {
        fwrite($socket, $command . "\r\n");
    };

    $ok = $expect([220]);

    if ($ok && $secure === 'tls') {
        $send('EHLO ' . ($_SERVER['HTTP_HOST'] ?? 'localhost'));
        $ok = $expect([250]);
        if ($ok) {
            $send('STARTTLS');
            $ok = $expect([220]) && @stream_socket_enable_crypto(
                $socket,
                true,
                STREAM_CRYPTO_METHOD_TLS_CLIENT
            );
        }
    }

    if ($ok) {
        $send('EHLO ' . ($_SERVER['HTTP_HOST'] ?? 'localhost'));
        $ok = $expect([250]);
    }

    if ($ok && $user !== '') {
        $send('AUTH LOGIN');
        $ok = $expect([334]);
        if ($ok) {
            $send(base64_encode($user));
            $ok = $expect([334]);
        }
        if ($ok) {
            $send(base64_encode($pass));
            $ok = $expect([235]);
        }
    }

    if ($ok) {
        $send('MAIL FROM:<' . $from . '>');
        $ok = $expect([250]);
    }

    if ($ok) {
        $send('RCPT TO:<' . $mail['to'] . '>');
        $ok = $expect([250, 251]);
    }

    if ($ok) {
        $send('DATA');
        $ok = $expect([354]);
    }

    if ($ok) {
        $body = str_replace(["\r\n", "\n"], "\r\n", $mail['body']);
        $body = str_replace('..', '. .', $body);

        $data = 'From: ' . sprintf('%s <%s>', $fromName, $from) . "\r\n"
            . 'To: <' . $mail['to'] . ">\r\n"
            . 'Subject: =?UTF-8?B?' . base64_encode($mail['subject']) . "?=\r\n"
            . implode("\r\n", $mail['headers']) . "\r\n"
            . "Content-Transfer-Encoding: 8bit\r\n"
            . $body . "\r\n.";

        $send($data);
        $ok = $expect([250]);
    }

    $send('QUIT');
    fclose($socket);

    return $ok;
}
