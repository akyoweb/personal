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
    'resume' => 'assets/files/resume-fa.pdf',

    // نام تجاری/برند؛ برای سئو روی «akyoweb» و «محمد جهانی» کار می‌کند
    'brand' => 'Akyoweb',
    'brand_url' => 'https://akyoweb.com',
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
 * وبلاگ — نوشته‌های برنامه‌نویسی
 * ------------------------------------------------------------------
 * هر نوشته یک slug یکتا دارد که در آدرس می‌آید: blog-post.php?slug=...
 * محتوای هر نوشته آرایه‌ای از پاراگراف‌ها است؛ یک متن می‌تواند با
 * پیشوندهای ساده غنی شود:
 *   'list: آیتم یک | آیتم دو'   → فهرست گلوله‌ای
 *   'code: کد'                 → بلوک کد
 *   هر چیز دیگر                 → پاراگراف معمولی
 */
$posts = [
    [
        'slug' => 'why-programming-matters',
        'date' => '2025-11-18',
        'reading_minutes' => 6,
        'tags' => ['برنامه‌نویسی', 'Programming'],
        'title' => [
            'fa' => 'چرا برنامه‌نویسی امروز یک مهارت پایه است؟',
            'en' => 'Why programming is a core skill today',
        ],
        'excerpt' => [
            'fa' => 'برنامه‌نویسی فقط نوشتن کد نیست؛ یاد گرفتن حل مسئله، تفکر منطقی و ساختن ابزاری است که کار واقعی را ساده می‌کند.',
            'en' => 'Programming is not just writing code; it is learning to solve problems, think logically and build tools that make real work easier.',
        ],
        'body' => [
            'fa' => [
                'خیلی‌ها فکر می‌کنند برنامه‌نویسی یعنی حفظ کردن دستورها و نوشتن چند خط کد. تجربه‌ی من چیز دیگری است: برنامه‌نویسی بیشتر از هر چیز تمرین حل مسئله است. وقتی مسئله‌ای را به قدم‌های کوچک می‌شکنی، در واقع یاد می‌گیری چطور به مسائل دنیای واقعی هم نزدیک شوی.',
                'اهمیت برنامه‌نویسی امروز در این است که نرم‌افزار به بخشی از زندگی روزمره تبدیل شده. از حسابداری یک مغازه‌ی کوچک تا ثبت سفارش یک کارگاه، همه‌چیز روی نرم‌افزار می‌چرخد. کسی که برنامه‌نویسی بلد باشد، می‌تواند این ابزارها را بسازد یا حداقل بهتر با آن‌ها کار کند.',
                'نکته‌ی مهم این است که برنامه‌نویسی برای همه یکسان نیست. لازم نیست همه مهندس نرم‌افزار شوند؛ اما فهمیدن منطق کد باعث می‌شود آدم‌ها در هر شغلی توانمندتر باشند. یک مدیر محصول، یک حسابدار یا یک طراح هم اگر پایه‌ی برنامه‌نویسی داشته باشد، بهتر می‌فهمد ابزاری که با آن کار می‌کند چه محدودیت‌هایی دارد.',
                'برای من برنامه‌نویسی یک مهارت فنی نیست؛ یک روش فکر کردن است. یاد گرفتم قبل از عجله برای راه‌حل، مسئله را دقیق بفهمم. این عادت از کد به بقیه‌ی زندگی‌ام هم سرایت کرده.',
            ],
            'en' => [
                'Many people think programming means memorising commands and writing a few lines of code. My experience has been different: programming is, above all, practising how to solve problems. When you break a problem into small steps, you are in fact learning how to approach real-world problems too.',
                'Programming matters today because software has become part of daily life. From a small shop keeping its accounts to a workshop taking orders, everything runs on software. Someone who can program can either build those tools or at least work with them far better.',
                'The key point is that programming is not the same for everyone. Not everyone needs to become a software engineer; but understanding the logic of code makes people more capable in any job. A product manager, an accountant or a designer with basic programming skills understands much better what the tool they use can and cannot do.',
                'For me, programming is not just a technical skill; it is a way of thinking. I learned to understand a problem precisely before rushing to a solution. That habit leaked out of code and into the rest of my life.',
            ],
        ],
    ],
    [
        'slug' => 'php-backend-foundation',
        'date' => '2025-11-25',
        'reading_minutes' => 7,
        'tags' => ['PHP', 'بک‌اند', 'Backend'],
        'title' => [
            'fa' => 'چرا با PHP شروع کردم و چه چیزی یادم داد',
            'en' => 'Why I started with PHP and what it taught me',
        ],
        'excerpt' => [
            'fa' => 'PHP خام، بدون فریم‌ورک، مجبورم کرد بفهمم نشست، کوکی، توکن امنیتی و مسیریابی دقیقاً چطور کار می‌کنند.',
            'en' => 'Raw PHP, without a framework, forced me to understand how sessions, cookies, security tokens and routing actually work.',
        ],
        'body' => [
            'fa' => [
                'PHP زبانی است که بخش عمده‌ی وب زنده‌ی امروز با آن ساخته شده. خیلی از سایت‌های بزرگ دنیا هنوز روی PHP اجرا می‌شوند و همین باعث شد من هم از همین‌جا شروع کنم.',
                'بزرگ‌ترین درس PHP برای من این بود که پشت صحنه‌ی وب چه خبر است. وقتی بدون فریم‌ورک پروژه می‌نویسی، مجبوری خودت با نشست کاربر، کوکی، توکن CSRF و مسیریابی درگیر شوی:',
                'code: session_start();\n$token = $_SESSION["csrf"] ?? bin2hex(random_bytes(32));',
                'اینکه مجبور شوی این‌ها را دستی بنویسی سخت است، اما همان سختی باعث می‌شود بفهمی چرا هر کدام وجود دارند. بعداً وقتی به فریم‌ورکی مثل Laravel می‌رسی، دیگر آن را جعبه‌ی سیاه نمی‌بینی.',
                'PHP یادم داد که سادگی یک انتخاب است، نه کمبود امکانات. می‌شود یک پروژه‌ی بدون هیچ وابستگی بیرونی ساخت که سریع، قابل نگهداری و قابل درک باشد. برای شروع، این ساده‌ترین و صادقانه‌ترین راه بود.',
                'در ادامه سراغ PDO و prepared statement رفتم تا کوئری‌هایم امن باشند؛ چون تزریق SQL یکی از اولین دام‌هایی است که هر تازه‌کاری ممکن است در آن بیفتد.',
            ],
            'en' => [
                'PHP is the language behind a large part of the web that is alive today. Many of the world\'s biggest sites still run on PHP, and that is why I started here too.',
                'The biggest lesson PHP taught me was what actually happens behind the scenes of the web. When you build without a framework, you are forced to deal with user sessions, cookies, CSRF tokens and routing yourself:',
                'code: session_start();\n$token = $_SESSION["csrf"] ?? bin2hex(random_bytes(32));',
                'Writing all of this by hand is hard, but that difficulty is exactly what makes you understand why each piece exists. Later, when you reach a framework like Laravel, it no longer looks like a black box.',
                'PHP taught me that simplicity is a choice, not a lack of features. You can build a project with no external dependency that is fast, maintainable and easy to reason about. For a starting point, that was the simplest and most honest path.',
                'From there I moved on to PDO and prepared statements so my queries would be safe — SQL injection is one of the first traps a beginner can fall into.',
            ],
        ],
    ],
    [
        'slug' => 'frontend-and-language-list',
        'date' => '2025-12-02',
        'reading_minutes' => 8,
        'tags' => ['HTML', 'CSS', 'JavaScript'],
        'title' => [
            'fa' => 'زبان‌هایی که بلدم و هر کدام چه نقشی دارند',
            'en' => 'The languages I know and the role each one plays',
        ],
        'excerpt' => [
            'fa' => 'HTML، CSS، JavaScript، PHP و MySQL — هر زبان یک لایه از وب را می‌سازد و فهمیدن مرز بین آن‌ها مهم‌ترین مهارت است.',
            'en' => 'HTML, CSS, JavaScript, PHP and MySQL — each language builds one layer of the web, and understanding the boundary between them is the real skill.',
        ],
        'body' => [
            'fa' => [
                'وب از چند لایه ساخته شده و هر زبان مسئول یک لایه است. فهمیدن همین مرزها، بیشتر از حفظ کردن سینتکس اهمیت دارد.',
                'list: HTML ساختار و معنای محتوا را می‌سازد. | CSS ظاهر، چیدمان و واکنش‌گرا بودن را کنترل می‌کند. | JavaScript رفتار سمت مرورگر، رویدادها و تعامل را مدیریت می‌کند. | PHP منطق سمت سرور، فرم‌ها و نشست کاربر را می‌سازد. | MySQL داده را ذخیره و بازیابی می‌کند.',
                'HTML و CSS را روی سطح «مسلط» می‌گذارم چون هر روز با آن‌ها کار می‌کنم: چیدمان واکنش‌گرا، متغیرهای CSS، تم روشن و تاریک و دسترس‌پذیری پایه.',
                'JavaScript را در سطح «دارم حرفه‌ای می‌شوم» می‌بینم. با DOM و رویدادها و IntersectionObserver راحتم، اما هنوز با ماژول‌ها و ابزار بیلد مثل Vite و Webpack کاملاً راحت نیستم.',
                'PHP را روی «مسلط» می‌گذارم و MySQL را در حال یادگیری عمیق‌تر. در نهایت هر زبان یک ابزار است؛ مهم این است که بدانی برای هر لایه کدام ابزار را برداری.',
            ],
            'en' => [
                'The web is made of several layers and each language owns one layer. Understanding those boundaries matters more than memorising syntax.',
                'list: HTML builds the structure and meaning of the content. | CSS controls the look, layout and responsiveness. | JavaScript handles browser-side behaviour, events and interaction. | PHP builds server-side logic, forms and user sessions. | MySQL stores and retrieves the data.',
                'I put HTML and CSS at the "comfortable" level because I work with them daily: responsive layout, CSS variables, light and dark themes, and basic accessibility.',
                'I see JavaScript as "getting better". I am at ease with the DOM, events and IntersectionObserver, but I am still not fully comfortable with modules and build tooling like Vite and Webpack.',
                'PHP I place at "comfortable", and MySQL is where I keep going deeper. In the end every language is a tool; what matters is knowing which one to reach for at each layer.',
            ],
        ],
    ],
    [
        'slug' => 'learning-languages-worth-it',
        'date' => '2025-12-09',
        'reading_minutes' => 6,
        'tags' => ['یادگیری', 'Learning', 'Career'],
        'title' => [
            'fa' => 'یاد گرفتن چند زبان ارزشش را دارد؟',
            'en' => 'Is learning several languages worth it?',
        ],
        'excerpt' => [
            'fa' => 'عمق در یک زبان از سطحی یاد گرفتن ده زبان ارزشمندتر است؛ اما بلد بودن چند زبان دیدت را نسبت به مسئله باز می‌کند.',
            'en' => 'Depth in one language is worth more than a shallow grasp of ten; but knowing several widens how you see a problem.',
        ],
        'body' => [
            'fa' => [
                'یک اشتباه رایج بین تازه‌کارها این است که فکر می‌کنند تعداد زبان‌هایی که در رزومه می‌نویسند مهم است. تجربه‌ی من خلاف این را نشان داد.',
                'اولین زبانی که یاد می‌گیری سخت‌ترین است، چون هم‌زمان با مفاهیم بنیادی درگیر می‌شوی: متغیر، تابع، حلقه و منطق. زبان دوم و سوم بسیار سریع‌تر یاد گرفته می‌شوند، چون مفاهیم مشترک‌اند و فقط سینتکس عوض می‌شود.',
                'ارزش یاد گرفتن چند زبان در چیز دیگری است: دیدگاه. وقتی یک مسئله را در دو پارادایم مختلف دیده باشی، راه‌حل بهتری پیدا می‌کنی. مثلاً بعد از کار با شیء‌گرایی در PHP، ساختار داده‌ها در JavaScript برایم واضح‌تر شد.',
                'اما در نهایت، عمق مهم‌تر از تعداد است. بهتر است در یک زبان واقعاً مسلط شوی و یک پروژه‌ی کامل با آن تحویل بدهی، تا اینکه ده زبان را در سطح «سلام‌کردن» بلد باشی.',
            ],
            'en' => [
                'A common mistake among beginners is thinking the number of languages on your résumé is what matters. My experience showed the opposite.',
                'The first language you learn is the hardest, because you are fighting the fundamental concepts at the same time: variables, functions, loops and logic. The second and third are learned far faster, because the concepts are shared and only the syntax changes.',
                'The real value of learning several languages lies elsewhere: perspective. Once you have seen a problem through two different paradigms, you find better solutions. After working with object orientation in PHP, for example, data structures in JavaScript became clearer to me.',
                'But in the end, depth beats quantity. It is better to truly master one language and deliver a complete project with it than to know ten languages at a "hello" level.',
            ],
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

/**
 * ساخت HTML امن برای متن یک نوشته بلاگ.
 *
 * هر بلوک می‌تواند یکی از این صورت‌ها باشد:
 *   'list: آیتم یک | آیتم دو'  → فهرست گلوله‌ای
 *   'code: خط اول\nخط دوم'      → بلوک کد
 *   هر چیز دیگر                 → پاراگراف
 * خروجی همیشه با e() امن‌سازی می‌شود.
 */
function render_post_body(array $blocks)
{
    $html = [];

    foreach ($blocks as $block) {
        $block = (string) $block;

        if (strpos($block, 'list:') === 0) {
            $items = array_filter(array_map('trim', explode('|', substr($block, 5))));
            $html[] = '<ul class="post-list">';
            foreach ($items as $item) {
                $html[] = '<li>' . e($item) . '</li>';
            }
            $html[] = '</ul>';
            continue;
        }

        if (strpos($block, 'code:') === 0) {
            // داخل بلوک کد، دنباله \n به خط جدید واقعی تبدیل می‌شود
            $code = str_replace('\\n', "\n", substr($block, 5));
            $html[] = '<pre class="post-code"><code>'
                . e($code)
                . '</code></pre>';
            continue;
        }

        $html[] = '<p>' . e($block) . '</p>';
    }

    return implode("\n", $html);
}

/** پیدا کردن یک نوشته بلاگ با slug */
function find_post($slug)
{
    global $posts;

    foreach ($posts as $post) {
        if ($post['slug'] === $slug) {
            return $post;
        }
    }

    return null;
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
    'brand' => $profile['brand'],
    'brand_url' => $profile['brand_url'],
];
