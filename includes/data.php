<?php
/**
 * تمام اطلاعات سایت از همین فایل تغذیه می‌شود.
 * برای تغییر محتوا فقط همین آرایه‌ها را ویرایش کنید.
 */

$profile = [
    'name' => 'محمد جهانی',
    'role' => 'توسعه‌دهنده وب و طراح رابط کاربری',
    'location' => 'تهران، ایران',
    'email' => 'mmdj3004@gmail.com',
    'github' => 'https://github.com/Akyoweb',
    'linkedin' => 'https://linkedin.com/in/akyoweb',
    'telegram' => 'https://t.me/AKYO_O',
    'resume' => 'assets/files/files.rar',
    'availability' => 'آماده همکاری روی پروژه‌های جدید',
    'intro' => 'به کسب‌وکارها کمک می‌کنم وب‌سایت‌هایی سریع، قابل‌اعتماد و ساده برای استفاده بسازند؛ از دیتابیس و بک‌اند تا آخرین جزئیات رابط کاربری.',
];

$skills = [
    'PHP' => 70,
    'JavaScript' => 65,
    'MySQL' => 70,
    'CSS / SCSS' => 80,
    'Bootstrap' => 60,
    'Git و GitHub' => 65,
];

$services = [
    [
        'title' => 'توسعه بک‌اند',
                    'desc' => 'طراحی ساختار دیتابیس، پیاده‌سازی PHP و ساخت APIهای قابل نگهداری.',
    ],
    [
        'title' => 'رابط کاربری',
                    'desc' => 'تبدیل ایده و طرح به رابط HTML و CSS تمیز، واکنش‌گرا و قابل دسترس.',
    ],
    [
        'title' => 'بهینه‌سازی و رفع اشکال',
                    'desc' => 'بررسی پروژه‌های موجود، رفع باگ، بهبود کوئری‌ها و مرتب‌سازی کدهای قدیمی.'
    ],
];

$projects = [
    [
        'title' => 'سامانه احراز هویت',
        'desc' => 'ثبت‌نام، ورود، بازیابی رمز عبور و پنل شخصی با مدیریت اطلاعات کاربر.',
        'tags' => ['PHP', 'MySQL', 'Bootstrap', 'JavaScript'],
        'image' => 'assets/images/projects/auth.jpg',
        'link' => '#',
        'status' => 'پروژه تمرینی',
    ],
    [
        'title' => 'بازارچه آگهی آنلاین',
        'desc' => 'ثبت و مدیریت آگهی، جست‌وجو، گفت‌وگو و ورود کاربران با شماره موبایل.',
        'tags' => ['PHP', 'JavaScript', 'MySQL', 'Bootstrap'],
        'image' => 'assets/images/projects/marketplace.jpg',
        'link' => '#',
        'status' => 'در حال توسعه',
    ],
    [
        'title' => 'داشبورد ردیابی خودرو',
        'desc' => 'داشبورد نمایش موقعیت و وضعیت خودرو با قابلیت اتصال به ردیاب‌های مختلف.',
        'tags' => ['PHP', 'JavaScript', 'MySQL'],
        'image' => 'assets/images/projects/tracker.jpg',
        'link' => '#',
        'status' => 'نمونه اولیه',
    ],
];

$experience = [

    [
        'period' => 'اکنون',
        'role' => 'توسعه‌دهنده وب جونیور',
        'org' => 'فریلنس',
        'note' => 'یادگیری مستمر و ساخت پروژه‌های واقعی با HTML، CSS، JavaScript، PHP و MySQL.'
    ],
];
