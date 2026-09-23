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
        'image' => 'assets/images/projects/register.png',
        'link' => 'assets/images/projects/register.png',
        'status' => 'پروژه تمرینی',
    ],
    [
        'title' => 'بازارچه آگهی آنلاین',
        'desc' => 'ثبت و مدیریت آگهی، جست‌وجو، گفت‌وگو و ورود کاربران با شماره موبایل.',
        'tags' => ['PHP', 'JavaScript', 'MySQL', 'Bootstrap'],
        'image' => 'assets/images/projects/DIVAR.png',
        'link' => 'assets/images/projects/DIVAR.png',
        'status' => 'در حال توسعه',
    ],
    [
        'title' => 'داشبورد ردیابی خودرو',
        'desc' => 'داشبورد نمایش موقعیت و وضعیت خودرو با قابلیت اتصال به ردیاب‌های مختلف.',
        'tags' => ['PHP', 'JavaScript', 'MySQL'],
        'image' => 'assets/images/projects/tracker.png',
        'link' => '#',
        'status' => 'نمونه اولیه',
    ],
     [
        'title' => 'صفحه ازمون چهار گزینه ای',
        'desc' => 'یک صفحه ساده ازمون دارای سوال های چهار گزینه ای',
        'tags' => [ 'JavaScript'],
        'image' => 'assets/images/projects/azmoon.png',
        'link' => '#',
        'status' => 'پروژه ساده تمرینی',
    ],
     [
        'title' => 'پروژه api ساده',
        'desc' => 'جستجو کردن اسم کشور و نشان دادن پرچم کشور در کادر با استفاده از restfull api',
        'tags' => [ 'JavaScript','restfull api'],
        'image' => 'assets/images/projects/map.png',
        'link' => '#',
        'status' => 'پروژه ساده تمرینی',
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
