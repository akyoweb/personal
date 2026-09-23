<?php
/**
 * نمونه تنظیمات ایمیل.
 *
 * این فایل را کپی کنید به نام mail-config.php و مقادیر را پر کنید.
 * فایل mail-config.php در .gitignore است و روی گیت‌هاب نمی‌رود.
 *
 * اگر این فایل را نسازید، سایت به mail() خود PHP برمی‌گردد
 * (که روی لوکال بدون سرور ایمیل کار نمی‌کند).
 */

return [
    // ایمیل شما که پیام‌ها به آن می‌رسد
    'to' => 'mmdj3004@gmail.com',

    // فرستنده؛ بهتر است دامنه‌ی سایت خودتان باشد
    'from' => 'no-reply@example.com',
    'from_name' => 'Portfolio contact form',

    // --- تنظیمات SMTP (اختیاری اما پیشنهاد می‌شود) ---
    // نمونه برای جیمیل:
    //   smtp_host   => 'smtp.gmail.com'
    //   smtp_port   => 587
    //   smtp_secure => 'tls'
    //   smtp_user   => 'mmdj3004@gmail.com'
    //   smtp_pass   => 'رمز-اپلیکیشن-جیمیل'   // App Password، نه رمز اصلی
    //
    // نمونه برای هاست ایرانی (مثلاً cPanel):
    //   smtp_host   => 'mail.example.com'
    //   smtp_port   => 465
    //   smtp_secure => 'ssl'
    'smtp_host' => '',
    'smtp_port' => 587,
    'smtp_secure' => 'tls',
    'smtp_user' => '',
    'smtp_pass' => '',
];
