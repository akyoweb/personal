<?php
/**
 * تمام اطلاعات سایت از همین فایل تغذیه می‌شود.
 * برای تغییر محتوا فقط همین آرایه‌ها را ویرایش کنید.
 *
 * هر متن دو نسخه دارد: fa و en. ساختار آرایه در هر دو زبان یکسان است.
 */

$profile = [
    'name' => [
        'fa' => 'محمد جهانی',
        'en' => 'Mohammad Jahanii',
    ],
    'role' => [
        'fa' => 'توسعه‌دهنده وب و طراح رابط کاربری',
        'en' => 'Web Developer & UI Designer',
    ],
    'location' => [
        'fa' => 'تهران، ایران',
        'en' => 'Tehran, Iran',
    ],
    'availability' => [
        'fa' => 'آماده همکاری روی پروژه‌های جدید',
        'en' => 'Available for new projects',
    ],
    'intro' => [
        'fa' => 'به کسب‌وکارها کمک می‌کنم وب‌سایت‌هایی سریع، قابل‌اعتماد و ساده برای استفاده بسازند؛ از دیتابیس و بک‌اند تا آخرین جزئیات رابط کاربری.',
        'en' => 'I help businesses build websites that are fast, dependable and easy to use — from the database and back-end all the way to the last detail of the interface.',
    ],

    // اطلاعات تماس؛ برای هر دو زبان یکی است
    'email' => 'mmdj3004@gmail.com',
    'github' => 'https://github.com/Akyoweb',
    'linkedin' => 'https://linkedin.com/in/akyoweb',
    'telegram' => 'https://t.me/AKYO_O',
    'resume' => 'assets/files/files.rar',
];

/** متن‌های طولانی که جای دیگری نمی‌گنجند */
$content_strings = [
    'fa' => [
        'hero_card_text' => 'ترجیح می‌دهم کارها را ساده نگه دارم؛ کدی که شش ماه بعد هم بشود راحت خواندش، از کدی که همین امروز فقط کار می‌کند ارزش بیشتری دارد.',
        'about_p1' => 'اسمم {name} است و در {location} زندگی می‌کنم. بیشتر وقتم صرف یادگیری و نوشتن کد سمت سرور می‌شود، اما از کار روی رابط کاربری هم دور نشده‌ام؛ به نظرم یک توسعه‌دهنده وب بهتر است هر دو طرف را بفهمد.',
        'about_p2' => 'چیزهایی که برایم مهم‌اند: کد خوانا، تصمیم‌های ساده به‌جای راه‌حل‌های پیچیده، و گفت‌وگوی مستقیم با کسی که پروژه مال اوست. دوست ندارم وسط کار غافلگیری پیش بیاید، پس ترجیح می‌دهم از اول درباره محدودیت‌ها صریح حرف بزنم.',
        'about_method_eyebrow' => 'همکاری حرفه‌ای',
        'about_method_heading' => 'روش کار',
        'about_step1_title' => 'گفت‌وگوی اول',
        'about_step1_text' => 'درباره هدف پروژه، زمان و بودجه حرف می‌زنیم تا ببینیم به هم می‌خوریم یا نه.',
        'about_step2_title' => 'طرح و برآورد',
        'about_step2_text' => 'ساختار پروژه و مراحل تحویل را می‌نویسم؛ بدون تعهد به چیزهایی که ممکن نیست.',
        'about_step3_title' => 'ساخت مرحله‌ای',
        'about_step3_text' => 'بعد از هر مرحله چیزی قابل دیدن تحویل می‌دهم تا مسیر زودتر اصلاح شود.',
        'about_step4_title' => 'تحویل و پشتیبانی',
        'about_step4_text' => 'کد و مستندات را تحویل می‌دهم و تا مدتی بعد از تحویل همراه پروژه هستم.',
    ],
    'en' => [
        'hero_card_text' => 'I prefer to keep things simple. Code that is still easy to read six months from now is worth more than code that merely works today.',
        'about_p1' => 'My name is {name} and I live in {location}. Most of my time goes into learning and writing server-side code, but I have never moved away from interface work — I think a web developer is better off understanding both sides.',
        'about_p2' => 'What matters to me: readable code, simple decisions over clever solutions, and talking directly to the person who owns the project. I do not want surprises halfway through, so I would rather be upfront about limits from the start.',
        'about_method_eyebrow' => 'Professional work',
        'about_method_heading' => 'How I work',
        'about_step1_title' => 'Kick-off conversation',
        'about_step1_text' => 'We talk about the project goal, timeline and budget to see whether we are a good fit.',
        'about_step2_title' => 'Plan and estimate',
        'about_step2_text' => 'I write down the project structure and delivery milestones — without promising what is not possible.',
        'about_step3_title' => 'Step-by-step build',
        'about_step3_text' => 'After each step I hand over something you can actually see, so the direction can be corrected early.',
        'about_step4_title' => 'Delivery and support',
        'about_step4_text' => 'I deliver the code and documentation, and stay with the project for a while after handover.',
    ],
];

/** کلیدهای مهارت + درصد */
$skills = [
    'PHP' => 70,
    'JavaScript' => 65,
    'MySQL' => 70,
    'CSS / SCSS' => 80,
    'Bootstrap' => 60,
    'Git' => 65,
];

/** نام مهارت‌ها به تفکیک زبان */
$skill_labels = [
    'fa' => [
        'Git' => 'گیت و گیت‌هاب',
    ],
    'en' => [
        'Git' => 'Git & GitHub',
    ],
];

$services = [
    [
        'title' => [
            'fa' => 'توسعه بک‌اند',
            'en' => 'Back-end development',
        ],
        'desc' => [
            'fa' => 'طراحی ساختار دیتابیس، پیاده‌سازی PHP و ساخت APIهای قابل نگهداری.',
            'en' => 'Database design, PHP implementation and maintainable APIs.',
        ],
    ],
    [
        'title' => [
            'fa' => 'رابط کاربری',
            'en' => 'User interface',
        ],
        'desc' => [
            'fa' => 'تبدیل ایده و طرح به رابط HTML و CSS تمیز، واکنش‌گرا و قابل دسترس.',
            'en' => 'Turning ideas and designs into clean, responsive and accessible HTML and CSS.',
        ],
    ],
    [
        'title' => [
            'fa' => 'بهینه‌سازی و رفع اشکال',
            'en' => 'Optimization & bug fixing',
        ],
        'desc' => [
            'fa' => 'بررسی پروژه‌های موجود، رفع باگ، بهبود کوئری‌ها و مرتب‌سازی کدهای قدیمی.',
            'en' => 'Reviewing existing projects, fixing bugs, improving queries and tidying up legacy code.',
        ],
    ],
];

$projects = [
    [
        'title' => [
            'fa' => 'سامانه احراز هویت',
            'en' => 'Authentication system',
        ],
        'desc' => [
            'fa' => 'ثبت‌نام، ورود، بازیابی رمز عبور و پنل شخصی با مدیریت اطلاعات کاربر.',
            'en' => 'Sign-up, login, password recovery and a personal panel for managing user data.',
        ],
        'tags' => ['PHP', 'MySQL', 'Bootstrap', 'JavaScript'],
        'image' => 'assets/images/projects/register.png',
        'link' => 'assets/images/projects/register.png',
        'status' => [
            'fa' => 'پروژه تمرینی',
            'en' => 'Practice project',
        ],
    ],
    [
        'title' => [
            'fa' => 'بازارچه آگهی آنلاین',
            'en' => 'Online classifieds marketplace',
        ],
        'desc' => [
            'fa' => 'ثبت و مدیریت آگهی، جست‌وجو، گفت‌وگو و ورود کاربران با شماره موبایل.',
            'en' => 'Posting and managing ads, search, chat and user login with a mobile number.',
        ],
        'tags' => ['PHP', 'JavaScript', 'MySQL', 'Bootstrap'],
        'image' => 'assets/images/projects/DIVAR.png',
        'link' => 'assets/images/projects/DIVAR.png',
        'status' => [
            'fa' => 'در حال توسعه',
            'en' => 'In progress',
        ],
    ],
    [
        'title' => [
            'fa' => 'داشبورد ردیابی خودرو',
            'en' => 'Vehicle tracking dashboard',
        ],
        'desc' => [
            'fa' => 'داشبورد نمایش موقعیت و وضعیت خودرو با قابلیت اتصال به ردیاب‌های مختلف.',
            'en' => 'A dashboard showing vehicle location and status, able to connect to different trackers.',
        ],
        'tags' => ['PHP', 'JavaScript', 'MySQL'],
        'image' => 'assets/images/projects/tracker.png',
        'link' => '#',
        'status' => [
            'fa' => 'نمونه اولیه',
            'en' => 'Prototype',
        ],
    ],
    [
        'title' => [
            'fa' => 'صفحه آزمون چهار گزینه‌ای',
            'en' => 'Multiple-choice quiz page',
        ],
        'desc' => [
            'fa' => 'یک صفحه ساده آزمون دارای سوال‌های چهار گزینه‌ای.',
            'en' => 'A simple quiz page with multiple-choice questions.',
        ],
        'tags' => ['JavaScript'],
        'image' => 'assets/images/projects/azmoon.png',
        'link' => '#',
        'status' => [
            'fa' => 'پروژه ساده تمرینی',
            'en' => 'Simple practice project',
        ],
    ],
    [
        'title' => [
            'fa' => 'پروژه API ساده',
            'en' => 'Simple API project',
        ],
        'desc' => [
            'fa' => 'جستجوی نام کشور و نمایش پرچم آن با استفاده از یک RESTful API.',
            'en' => 'Searching for a country name and showing its flag using a RESTful API.',
        ],
        'tags' => ['JavaScript', 'REST API'],
        'image' => 'assets/images/projects/map.png',
        'link' => '#',
        'status' => [
            'fa' => 'پروژه ساده تمرینی',
            'en' => 'Simple practice project',
        ],
    ],
];

$experience = [
    [
        'period' => [
            'fa' => 'اکنون',
            'en' => 'Present',
        ],
        'role' => [
            'fa' => 'توسعه‌دهنده وب جونیور',
            'en' => 'Junior web developer',
        ],
        'org' => [
            'fa' => 'فریلنس',
            'en' => 'Freelance',
        ],
        'note' => [
            'fa' => 'یادگیری مستمر و ساخت پروژه‌های واقعی با HTML، CSS، JavaScript، PHP و MySQL.',
            'en' => 'Continuous learning and building real projects with HTML, CSS, JavaScript, PHP and MySQL.',
        ],
    ],
];

/* ------------------------------------------------------------------
 * انتخاب زبان برای متن‌های دوزبانه
 * ------------------------------------------------------------------ */

/** برگرداندن نسخه زبان جاری از یک مقدار (رشته ساده یا آرایه fa/en) */
function t($value, $fallback = '')
{
    global $lang;

    if (is_array($value)) {
        if (isset($value[$lang])) {
            return $value[$lang];
        }
        if (isset($value['fa'])) {
            return $value['fa'];
        }
        return $fallback;
    }

    return $value === null ? $fallback : (string) $value;
}

/** رشته‌های متنی data.php به زبان جاری */
function t_str($key, array $vars = [])
{
    global $content_strings, $lang;

    $text = $content_strings[$lang][$key] ?? $content_strings['fa'][$key] ?? $key;

    foreach ($vars as $name => $value) {
        $text = str_replace('{' . $name . '}', $value, $text);
    }

    return $text;
}

/** جایگزینی مقادیر پروفایل داخل متن، مثل {name} و {location} */
function fill_profile($text)
{
    global $profile, $lang;

    foreach (['name', 'role', 'location'] as $key) {
        $text = str_replace('{' . $key . '}', $profile[$key][$lang] ?? $profile[$key]['fa'], $text);
    }

    return $text;
}

/** متن کامل پاراگراف با جایگزینی متغیرهای پروفایل */
function t_prose($key, array $vars = [])
{
    return fill_profile(t_str($key, $vars));
}

/** نام مهارت در زبان جاری */
function skill_label($key)
{
    global $skill_labels, $lang;

    return $skill_labels[$lang][$key] ?? $key;
}

/* مقادیر آماده برای استفاده در صفحه‌ها (به زبان جاری) */
$me = [
    'name' => $profile['name'][$lang] ?? $profile['name']['fa'],
    'role' => $profile['role'][$lang] ?? $profile['role']['fa'],
    'location' => $profile['location'][$lang] ?? $profile['location']['fa'],
    'availability' => $profile['availability'][$lang] ?? $profile['availability']['fa'],
    'intro' => $profile['intro'][$lang] ?? $profile['intro']['fa'],
    'email' => $profile['email'],
    'github' => $profile['github'],
    'linkedin' => $profile['linkedin'],
    'telegram' => $profile['telegram'],
    'resume' => $profile['resume'],
];
