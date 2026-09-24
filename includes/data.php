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

/**
 * مسیر یادگیری — به‌جای نوار درصد.
 *
 * چرا درصد حذف شد؟ چون عدد ۷۰٪ هیچ معنایی ندارد؛ نسبت به چه کسی؟
 * این ساختار صادقانه‌تر است: چه بلدم، روی چه چیزی مسلط‌ترم،
 * و همین حالا مشغول یادگیری چه هستم.
 *
 * level: 'solid' (روی آن مسلطم) | 'working' (کار می‌کنم) | 'learning' (یاد می‌گیرم)
 */
$skills = [
    [
        'name' => 'PHP',
        'level' => 'solid',
        'note' => [
            'fa' => 'منطق سمت سرور، فرم‌ها، نشست‌ها و ساختاردهی پروژه بدون فریم‌ورک.',
            'en' => 'Server-side logic, forms, sessions and structuring a project without a framework.',
        ],
    ],
    [
        'name' => 'HTML / CSS',
        'level' => 'solid',
        'note' => [
            'fa' => 'چیدمان واکنش‌گرا، متغیرهای CSS، تم روشن و تاریک، دسترس‌پذیری پایه.',
            'en' => 'Responsive layout, CSS variables, light and dark themes, basic accessibility.',
        ],
    ],
    [
        'name' => 'JavaScript',
        'level' => 'working',
        'note' => [
            'fa' => 'DOM، رویدادها، IntersectionObserver. هنوز با ماژول‌ها و ابزار بیلد راحت نیستم.',
            'en' => 'DOM, events, IntersectionObserver. Still not comfortable with modules and build tooling.',
        ],
    ],
    [
        'name' => 'MySQL',
        'level' => 'working',
        'note' => [
            'fa' => 'طراحی جدول، JOIN و کوئری‌های روزمره. در حال یادگیری PDO و prepared statement.',
            'en' => 'Table design, JOINs and everyday queries. Currently learning PDO and prepared statements.',
        ],
    ],
    [
        'name' => 'Git',
        'level' => 'working',
        'note' => [
            'fa' => 'کامیت، برنچ و پوش. تاریخچه را بازنویسی کردم که تجربه گرانی بود.',
            'en' => 'Commits, branches and pushing. Rewriting history once cost me an evening.',
        ],
    ],
    [
        'name' => 'Laravel',
        'level' => 'learning',
        'note' => [
            'fa' => 'شروع کردم؛ فعلاً می‌فهمم routing و Eloquent چه کار می‌کنند، ولی هنوز پروژه ننوشته‌ام.',
            'en' => 'Started recently. I understand what routing and Eloquent do, but I have not shipped a project yet.',
        ],
    ],
];

/**
 * «چطور فکر می‌کنم» — تصمیم‌های فنی واقعی با دلیل.
 * این بخش قابل کپی نیست چون از تجربه خودم آمده.
 */
$decisions = [
    [
        'title' => [
            'fa' => 'چرا این سایت بدون فریم‌ورک است',
            'en' => 'Why this site has no framework',
        ],
        'body' => [
            'fa' => 'می‌خواستم ببینم PHP خودش چطور کار می‌کند، نه اینکه Laravel چه دکمه‌ای دارد. بدون فریم‌ورک خودم با نشست، توکن CSRF و مسیریابی درگیر شدم — و حالا می‌فهمم پشت صحنه چه خبر است.',
            'en' => 'I wanted to see how PHP itself works, not which button Laravel offers. Without a framework I dealt with sessions, CSRF tokens and routing myself — so I now understand what happens behind the scenes.',
        ],
    ],
    [
        'title' => [
            'fa' => 'چرا متن‌ها در data.php هستند',
            'en' => 'Why the content lives in data.php',
        ],
        'body' => [
            'fa' => 'اول متن را داخل HTML نوشتم. بعد همان جمله را در دو جا لازم داشتم، یکی را ویرایش کردم و یکی را فراموش کردم. حالا محتوا در یک آرایه است و قالب فقط آن را نمایش می‌دهد.',
            'en' => 'I wrote the copy inside the HTML first. Later I needed the same sentence twice, edited one and forgot the other. Now the content lives in one array and the template only renders it.',
        ],
    ],
    [
        'title' => [
            'fa' => 'چرا پیام‌ها بیرون از پوشه وب ذخیره می‌شوند',
            'en' => 'Why messages are stored outside the web root',
        ],
        'body' => [
            'fa' => 'پیام‌ها را اول داخل پوشه سایت ذخیره می‌کردم. اگر تنظیمات وب‌سرور یک روز عوض شود، هر کسی می‌تواند آدرس فایل را بزند و همه پیام‌ها را بخواند. مسیر را بیرون از پوشه وب بردم.',
            'en' => 'I first stored messages in a folder inside the site. If the web server config ever changed, anyone could hit the file URL and read every message. I moved the path outside the web root.',
        ],
    ],
];

/**
 * «اشتباه‌هایی که وقت گرفت» — بخشی که هیچ‌کس کپی نمی‌کند.
 * صادقانه بودنش از تمیز بودنش مهم‌تر است.
 */
$mistakes = [
    [
        'title' => [
            'fa' => 'یک متغیر با یک اسم، دو جا',
            'en' => 'One variable name, two places',
        ],
        'body' => [
            'fa' => 'در فایل زبان و فایل محتوا هر دو از متغیر `$strings` استفاده کرده بودم. دومی اولی را پاک می‌کرد و صفحه به‌جای «مهارت‌ها»، خودِ کلمه `skills_heading` را نشان می‌داد. چون خطای PHP نمی‌داد، اول فکر کردم مشکل از کش مرورگر است. درس: وقتی متن خامی مثل اسم کلید می‌بینی، احتمالاً متغیر جایی بازنویسی شده.',
            'en' => 'Both the language file and the content file used a variable called `$strings`. The second wiped the first, so the page printed the literal key `skills_heading` instead of "Skills". Because PHP raised no error, I first blamed the browser cache. Lesson: when you see a raw key instead of text, a variable is probably being overwritten somewhere.',
        ],
    ],
    [
        'title' => [
            'fa' => 'دکمه‌ای که خودش را لود می‌کرد',
            'en' => 'A button that reloaded itself',
        ],
        'body' => [
            'fa' => 'دکمه تغییر زبان روی صفحه فارسی به `?lang=fa` لینک می‌داد — یعنی همان زبانی که کاربر در آن بود. تابعی که آدرس می‌ساخت، همیشه زبان فعلی را اضافه می‌کرد. چون خطایی دیده نمی‌شد، مدتی فکر کردم مشکل از جاوااسکریپت است. راه‌حل: یک تابع جدا که آدرس را برای زبان مقصد بسازد، نه زبان فعلی.',
            'en' => 'On the Persian page the language button linked to `?lang=fa` — the language the visitor was already in. The helper that built the URL always appended the current language. With no error to go on, I spent a while suspecting JavaScript. The fix was a separate helper that builds the URL for the target language instead of the current one.',
        ],
    ],
    [
        'title' => [
            'fa' => 'یک دایره تزئینی که چیدمان را به‌هم ریخت',
            'en' => 'A decorative circle that broke the layout',
        ],
        'body' => [
            'fa' => 'یک دایره محو پس‌زمینه با `right: -180px` گذاشته بودم تا گوشه هیرو را پر کند. در گوشی خاصی وقتی زبان عوض می‌شد، کل صفحه از حالت ریسپانسیو درمی‌آمد. علت این بود که آن عنصر ۱۸۰ پیکسل از عرض صفحه بیرون می‌زد و مرورگر بعد از رندر مجدد، چیدمان را جابه‌جا می‌کرد. با `inset-inline-end` و محدود کردن اندازه به `70vw` حل شد — هم برای فارسی، هم انگلیسی.',
            'en' => 'I placed a faded background circle with `right: -180px` to fill the hero corner. On one particular phone, switching language threw the whole page out of its responsive layout. The element was sticking 180px past the viewport width, and after a re-render the browser shifted the layout. Constraining it with `inset-inline-end` and a `70vw` cap fixed it for both Persian and English.',
        ],
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
        'note' => [
            'fa' => 'سخت‌ترین بخش بازیابی رمز عبور بود: باید توکنی می‌ساختم که فقط یک بار کار کند و بعد از چند دقیقه منقضی شود. اول توکن را در متن ساده ذخیره کردم؛ بعد فهمیدم اگر کسی دیتابیس را ببیند، می‌تواند وارد هر حسابی شود. تغییرش دادم به hash.',
            'en' => 'The hardest part was password recovery: I needed a token that worked once and expired after a few minutes. I stored it in plain text at first, then realised anyone reading the database could log into any account. I switched it to a hash.',
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
        'note' => [
            'fa' => 'بحث اصلی این پروژه جست‌وجو بود. اول با LIKE ساده نوشتم؛ با چند هزار آگهی کند شد. هنوز به ایندکس‌گذاری درست نرسیده‌ام و همین باعث شده پروژه باز بماند.',
            'en' => 'Search is the open question here. I started with a plain LIKE query; at a few thousand ads it got slow. I have not landed on the right indexing yet, which is part of why this one is still open.',
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
        'note' => [
            'fa' => 'هدف این بود که داشبورد به هر ردیابی وصل شود، نه فقط یک برند. چون هر ردیاب قالب داده خودش را دارد، یک لایه تبدیل نوشتم. این جداسازی باعث شد تعویض ردیاب فقط تغییر یک فایل باشد.',
            'en' => 'The goal was a dashboard that connects to any tracker, not one brand. Since each tracker has its own data shape, I wrote a conversion layer. That separation means swapping a tracker is a one-file change.',
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
        'note' => [
            'fa' => 'برای یادگیری DOM نوشتم. ساده بود، ولی همان جا فهمیدم چرا باید وضعیت آزمون را در یک آبجکت نگه دارم نه در چند متغیر جدا؛ با متغیر جدا، شماره سوال و نمره از هم جدا می‌افتادند.',
            'en' => 'I wrote it to practise the DOM. It was simple, but it taught me why quiz state belongs in one object rather than several loose variables — with loose variables the question index and score drifted apart.',
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
        'note' => [
            'fa' => 'اولین تجربه کار با API بیرونی. یاد گرفتم که اینترنت کاربر همیشه وصل نیست: اگر درخواست شکست بخورد و حالت خطا نداشته باشم، صفحه بی‌صدا خالی می‌ماند. حالا همیشه حالت بارگذاری و خطا می‌گذارم.',
            'en' => 'My first time consuming an external API. I learned that the visitor is not always online: if the request fails and there is no error state, the page just sits empty with no explanation. Now I always build loading and error states.',
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
