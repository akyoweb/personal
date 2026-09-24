<?php
/**
 * سیستم دو زبانه (فارسی / انگلیسی).
 *
 * زبان از پارامتر آدرس خوانده می‌شود: index.php?lang=en
 * و در نشست کاربر ذخیره می‌شود تا با کلیک روی لینک‌های داخلی حفظ شود.
 */

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

/** زبان‌های پشتیبانی‌شده */
const SUPPORTED_LANGS = ['fa', 'en'];

/** تعیین زبان جاری از ?lang= یا نشست */
function current_lang()
{
    $fromQuery = $_GET['lang'] ?? null;

    if (is_string($fromQuery) && in_array($fromQuery, SUPPORTED_LANGS, true)) {
        $_SESSION['lang'] = $fromQuery;
        return $fromQuery;
    }

    $fromSession = $_SESSION['lang'] ?? null;

    if (is_string($fromSession) && in_array($fromSession, SUPPORTED_LANGS, true)) {
        return $fromSession;
    }

    return 'fa';
}

/** زبان جاری */
$lang = current_lang();

/** آیا صفحه راست‌به‌چپ است؟ */
$is_rtl = ($lang === 'fa');
$dir = $is_rtl ? 'rtl' : 'ltr';

/** ترجمه‌ها */
$strings = [
    'fa' => [
        'lang_name' => 'فارسی',
        'lang_switch_label' => 'English',
        'lang_switch_title' => 'تغییر زبان به انگلیسی',
        'nav_home' => 'خانه',
        'nav_about' => 'درباره من',
        'nav_work' => 'نمونه‌کارها',
        'nav_blog' => 'وبلاگ',
        'nav_contact' => 'تماس',
        'nav_label' => 'منوی اصلی',
        'toggle_menu' => 'باز و بستن منو',
        'theme_light' => 'پوسته روشن',
        'theme_dark' => 'پوسته تاریک',
        'theme_toggle' => 'تغییر پوسته',
        'back_to_top' => 'بازگشت به بالا',
        'skip_to_content' => 'رفتن به محتوای اصلی',

        'footer_built' => 'ساخته‌شده با PHP و کمی CSS.',

        'home_meta_title' => 'خانه',
        'home_meta_desc' => 'صفحه شخصی {name} — {role}',
        'hero_meta_1' => 'پاسخ‌گویی سریع',
        'hero_meta_2' => 'همکاری شفاف',
        'hero_meta_3' => 'کد قابل نگهداری',
        'hero_cta_work' => 'دیدن نمونه‌کارها',
        'hero_cta_contact' => 'شروع گفت‌وگو',
        'quick_location' => 'موقعیت',
        'quick_status' => 'وضعیت',
        'quick_focus' => 'تمرکز',
        'quick_status_value' => 'فعال و آماده یادگیری',
        'quick_focus_value' => 'PHP، JavaScript، MySQL',
        'hero_card_label' => 'رویکرد من',
        'hero_card_list_1' => 'کد تمیز و بدون وابستگی اضافه',
        'hero_card_list_2' => 'تحویل مرحله‌ای و شفاف',
        'hero_card_list_3' => 'پشتیبانی بعد از تحویل',
        'services_heading' => 'چند کاری که انجام می‌دهم',
        'services_lead' => 'از طراحی دیتابیس تا آخرین پیکسل رابط کاربری.',
        'skills_eyebrow' => 'ابزارهای روزمره',
        'skills_heading' => 'مهارت‌ها',
        'skills_lead' => 'برآورد خودم از سطح فعلی — نه ادعای عدد دقیق.',
        'skills_more' => 'بیشتر درباره من',
        'skills_aria' => '{label}: {level} درصد',
        'level_solid' => 'روی آن مسلطم',
        'level_working' => 'دارم حرفه‌ای می‌شوم',
        'level_learning' => 'تازه شروع کرده‌ام',
        'decisions_eyebrow' => 'پشت صحنه',
        'decisions_heading' => 'چطور فکر می‌کنم',
        'decisions_lead' => 'چند تصمیم فنی و دلیلش — از تجربه خودم، نه از یک مقاله.',
        'mistakes_eyebrow' => 'دفتر اشتباه‌ها',
        'mistakes_heading' => 'چیزهایی که وقتم را گرفتند',
        'mistakes_lead' => 'اینها را می‌نویسم چون یادگیری واقعی همان‌جاست که چیزی خراب می‌شود.',
        'project_note_label' => 'سخت‌ترین بخش',
        'cta_eyebrow' => 'شروع یک همکاری خوب',
        'cta_heading' => 'پروژه‌ای در ذهن داری؟',
        'cta_lead' => 'یک خط توضیح بفرست؛ با هم بررسی می‌کنیم بهترین قدم بعدی چیست.',
        'cta_button' => 'شروع گفت‌وگو',

        'about_meta_title' => 'درباره من',
        'about_meta_desc' => 'درباره {name} — سابقه کاری و روش کار.',
        'about_eyebrow' => 'درباره من',
        'about_heading' => 'چطور به اینجا رسیدم',
        'about_lead' => 'مسیر من با یادگیری مداوم و ساخت پروژه‌های تمرینی شروع شد؛ امروز تمرکزم ساخت تجربه‌های وب ساده، سریع و قابل اتکاست.',
        'about_story_eyebrow' => 'داستان من',
        'about_story_heading' => 'کمی درباره خودم',
        'about_profile_eyebrow' => 'پروفایل',
        'about_profile_heading' => 'در یک نگاه',
        'about_fact_name' => 'نام',
        'about_fact_role' => 'حرفه',
        'about_fact_location' => 'موقعیت',
        'about_fact_email' => 'ایمیل',
        'about_resume' => 'دریافت رزومه',
        'about_contact' => 'ارتباط با من',
        'about_journey_eyebrow' => 'مسیر یادگیری',
        'about_journey_heading' => 'تجربه و تمرکز فعلی',
        'about_journey_lead' => 'هر پروژه فرصتی برای بهتر شدن، مستندسازی و ساختن عادت‌های حرفه‌ای‌تر است.',

        'work_meta_title' => 'نمونه‌کارها',
        'work_meta_desc' => 'نمونه‌کارهای {name}',
        'work_eyebrow' => 'نمونه‌کارها',
        'work_heading' => 'چند پروژه که ساخته‌ام',
        'work_filter_label' => 'فیلتر بر اساس تکنولوژی:',
        'work_filter_aria' => 'فیلتر پروژه‌ها',
        'work_all' => 'همه',
        'work_empty' => 'با این برچسب پروژه‌ای پیدا نشد.',
        'work_poster_alt' => 'پوستر پروژه {title}',
        'work_more' => 'جزئیات بیشتر',

        'contact_meta_title' => 'تماس',
        'contact_meta_desc' => 'راه‌های تماس با {name}',
        'contact_eyebrow' => 'تماس',
        'contact_heading' => 'بیا حرف بزنیم',
        'contact_lead' => 'فرم را پر کن یا مستقیم ایمیل بزن. معمولاً در همان روز کاری جواب می‌دهم.',
        'contact_sent' => 'پیامت رسید. ممنون — به‌زودی جواب می‌دهم.',
        'contact_honeypot' => 'وبسایت',
        'contact_field_name' => 'نام',
        'contact_field_email' => 'ایمیل',
        'contact_field_subject' => 'موضوع',
        'contact_optional' => '(اختیاری)',
        'contact_field_message' => 'متن پیام',
        'contact_char_hint' => '{count} حرف نوشته شده است.',
        'contact_submit' => 'ارسال پیام',
        'contact_side_eyebrow' => 'در تماس باشیم',
        'contact_side_heading' => 'راه‌های دیگر',
        'contact_side_email' => 'ایمیل',
        'contact_side_github' => 'گیت‌هاب',
        'contact_side_telegram' => 'تلگرام',
        'contact_side_location' => 'موقعیت',
        'contact_side_note' => 'اگر موضوع محرمانه است، در پیام اول فقط کلیات را بنویس.',

        'err_csrf' => 'نشست فرم منقضی شده است؛ صفحه را تازه‌سازی و دوباره تلاش کنید.',
        'err_send' => 'ارسال ناموفق بود.',
        'err_too_fast' => 'کمی آرام‌تر پر کن و دوباره بفرست.',
        'err_name_required' => 'نام را وارد کنید.',
        'err_name_short' => 'نام باید حداقل ۳ حرف باشد.',
        'err_name_long' => 'نام نمی‌تواند بیشتر از ۸۰ حرف باشد.',
        'err_email_required' => 'ایمیل را وارد کنید.',
        'err_email_invalid' => 'قالب ایمیل درست نیست.',
        'err_message_required' => 'متن پیام خالی است.',
        'err_message_short' => 'پیام باید حداقل ۱۰ حرف باشد.',
        'err_message_long' => 'پیام نمی‌تواند بیشتر از ۵۰۰۰ حرف باشد.',

        // --- وبلاگ ---
        'blog_meta_title' => 'وبلاگ برنامه‌نویسی',
        'blog_meta_desc' => 'نوشته‌های {name} درباره برنامه‌نویسی، زبان‌های برنامه‌نویسی و اهمیت یادگیری آن‌ها.',
        'blog_eyebrow' => 'وبلاگ',
        'blog_heading' => 'درباره برنامه‌نویسی می‌نویسم',
        'blog_lead' => 'چیزهایی که یاد می‌گیرم و باور دارم — درباره برنامه‌نویسی، زبان‌ها و مسیر یادگیری.',
        'blog_all' => 'همه نوشته‌ها',
        'blog_read_more' => 'خواندن نوشته',
        'blog_read_time' => '{minutes} دقیقه مطالعه',
        'blog_empty' => 'هنوز نوشته‌ای منتشر نشده است.',
        'blog_back' => 'بازگشت به وبلاگ',
        'blog_related_heading' => 'نوشته‌های دیگر',
        'blog_post_meta_desc' => '{title} — یادداشتی از {name}.',
        'blog_rss' => 'خوراک RSS وبلاگ',
        'blog_updated' => 'آخرین به‌روزرسانی',
    ],
    'en' => [
        'lang_name' => 'English',
        'lang_switch_label' => 'فارسی',
        'lang_switch_title' => 'Switch language to Persian',
        'nav_home' => 'Home',
        'nav_about' => 'About',
        'nav_work' => 'Work',
        'nav_blog' => 'Blog',
        'nav_contact' => 'Contact',
        'nav_label' => 'Main menu',
        'toggle_menu' => 'Toggle menu',
        'theme_light' => 'Light theme',
        'theme_dark' => 'Dark theme',
        'theme_toggle' => 'Switch theme',
        'back_to_top' => 'Back to top',
        'skip_to_content' => 'Skip to main content',

        'footer_built' => 'Built with PHP and a little CSS.',

        'home_meta_title' => 'Home',
        'home_meta_desc' => 'Personal site of {name} — {role}',
        'hero_meta_1' => 'Quick replies',
        'hero_meta_2' => 'Transparent process',
        'hero_meta_3' => 'Maintainable code',
        'hero_cta_work' => 'See my work',
        'hero_cta_contact' => 'Start a conversation',
        'quick_location' => 'Location',
        'quick_status' => 'Status',
        'quick_focus' => 'Focus',
        'quick_status_value' => 'Active and always learning',
        'quick_focus_value' => 'PHP, JavaScript, MySQL',
        'hero_card_label' => 'My approach',
        'hero_card_list_1' => 'Clean code with no extra dependencies',
        'hero_card_list_2' => 'Step-by-step, transparent delivery',
        'hero_card_list_3' => 'Support after delivery',
        'services_heading' => 'A few things I do',
        'services_lead' => 'From database design to the last pixel of the interface.',
        'skills_eyebrow' => 'Everyday tools',
        'skills_heading' => 'Skills',
        'skills_lead' => 'My own estimate of where I stand — not a claim of exact numbers.',
        'skills_more' => 'More about me',
        'skills_aria' => '{label}: {level} percent',
        'level_solid' => 'Comfortable',
        'level_working' => 'Getting better',
        'level_learning' => 'Just started',
        'decisions_eyebrow' => 'Behind the scenes',
        'decisions_heading' => 'How I think',
        'decisions_lead' => 'A few technical decisions and the reasoning behind them — from my own experience, not an article.',
        'mistakes_eyebrow' => 'Mistake log',
        'mistakes_heading' => 'Things that cost me time',
        'mistakes_lead' => 'I keep these written down, because real learning happens where something breaks.',
        'project_note_label' => 'Hardest part',
        'cta_eyebrow' => 'Let\'s start something good',
        'cta_heading' => 'Got a project in mind?',
        'cta_lead' => 'Send me one line about it; we\'ll figure out the best next step together.',
        'cta_button' => 'Start a conversation',

        'about_meta_title' => 'About',
        'about_meta_desc' => 'About {name} — background and how I work.',
        'about_eyebrow' => 'About me',
        'about_heading' => 'How I got here',
        'about_lead' => 'My path started with steady learning and practice projects; today I focus on building web experiences that are simple, fast and dependable.',
        'about_story_eyebrow' => 'My story',
        'about_story_heading' => 'A little about myself',
        'about_profile_eyebrow' => 'Profile',
        'about_profile_heading' => 'At a glance',
        'about_fact_name' => 'Name',
        'about_fact_role' => 'Role',
        'about_fact_location' => 'Location',
        'about_fact_email' => 'Email',
        'about_resume' => 'Download résumé',
        'about_contact' => 'Get in touch',
        'about_journey_eyebrow' => 'Learning path',
        'about_journey_heading' => 'Experience and current focus',
        'about_journey_lead' => 'Every project is a chance to improve, document and build more professional habits.',

        'work_meta_title' => 'Work',
        'work_meta_desc' => 'Selected work by {name}',
        'work_eyebrow' => 'Work',
        'work_heading' => 'A few projects I have built',
        'work_filter_label' => 'Filter by technology:',
        'work_filter_aria' => 'Filter projects',
        'work_all' => 'All',
        'work_empty' => 'No project found with this tag.',
        'work_poster_alt' => 'Poster for the project {title}',
        'work_more' => 'More details',

        'contact_meta_title' => 'Contact',
        'contact_meta_desc' => 'Ways to reach {name}',
        'contact_eyebrow' => 'Contact',
        'contact_heading' => 'Let\'s talk',
        'contact_lead' => 'Fill in the form or just email me. I usually reply the same working day.',
        'contact_sent' => 'Your message arrived. Thanks — I will get back to you soon.',
        'contact_honeypot' => 'Website',
        'contact_field_name' => 'Name',
        'contact_field_email' => 'Email',
        'contact_field_subject' => 'Subject',
        'contact_optional' => '(optional)',
        'contact_field_message' => 'Message',
        'contact_char_hint' => '{count} characters written.',
        'contact_submit' => 'Send message',
        'contact_side_eyebrow' => 'Stay in touch',
        'contact_side_heading' => 'Other ways',
        'contact_side_email' => 'Email',
        'contact_side_github' => 'GitHub',
        'contact_side_telegram' => 'Telegram',
        'contact_side_location' => 'Location',
        'contact_side_note' => 'If the topic is sensitive, just share the outline in your first message.',

        'err_csrf' => 'The form session expired; please refresh the page and try again.',
        'err_send' => 'Sending failed.',
        'err_too_fast' => 'Take a little more time and send again.',
        'err_name_required' => 'Please enter your name.',
        'err_name_short' => 'Name must be at least 3 characters.',
        'err_name_long' => 'Name cannot be longer than 80 characters.',
        'err_email_required' => 'Please enter your email.',
        'err_email_invalid' => 'That email address looks invalid.',
        'err_message_required' => 'The message is empty.',
        'err_message_short' => 'Message must be at least 10 characters.',
        'err_message_long' => 'Message cannot be longer than 5000 characters.',

        // --- Blog ---
        'blog_meta_title' => 'Programming blog',
        'blog_meta_desc' => 'Notes by {name} about programming, programming languages and why learning them matters.',
        'blog_eyebrow' => 'Blog',
        'blog_heading' => 'I write about programming',
        'blog_lead' => 'Things I learn and believe — about programming, languages and the learning path.',
        'blog_all' => 'All posts',
        'blog_read_more' => 'Read post',
        'blog_read_time' => '{minutes} min read',
        'blog_empty' => 'No posts published yet.',
        'blog_back' => 'Back to blog',
        'blog_related_heading' => 'More posts',
        'blog_post_meta_desc' => '{title} — a note by {name}.',
        'blog_rss' => 'Blog RSS feed',
        'blog_updated' => 'Last updated',
    ],
];

/** برگرداندن رشته ترجمه‌شده با جایگزینی {placeholder} ها */
function lang($key, array $vars = [])
{
    global $strings, $lang;

    $text = $strings[$lang][$key] ?? $strings['fa'][$key] ?? $key;

    foreach ($vars as $name => $value) {
        $text = str_replace('{' . $name . '}', $value, $text);
    }

    return $text;
}

/** افزودن ?lang= به یک آدرس داخلی با حفظ زبان جاری */
function lang_url($url = '')
{
    global $lang;

    return lang_url_for($url, $lang);
}

/**
 * ساخت آدرس یک صفحه با زبان دلخواه.
 * برای دکمه تغییر زبان لازم است، چون آن دکمه باید به زبان «دیگر»
 * اشاره کند، نه به زبان فعلی.
 */
function lang_url_for($url, $targetLang)
{
    if ($url === '') {
        $url = basename($_SERVER['PHP_SELF']);
    }

    // آدرس‌های بیرونی و لینک‌های لنگر را دست نمی‌زنیم
    if (preg_match('#^(https?:)?//#', $url) || strpos($url, 'mailto:') === 0 || strpos($url, '#') === 0) {
        return $url;
    }

    $parts = explode('#', $url, 2);
    $path = $parts[0];
    $hash = isset($parts[1]) ? '#' . $parts[1] : '';

    // اگر آدرس از قبل ?lang= دارد، جایگزینش می‌کنیم تا دو بار تکرار نشود
    $path = preg_replace('/([?&])lang=[^&]*&?/', '$1', $path);
    $path = rtrim($path, '?&');

    $separator = strpos($path, '?') === false ? '?' : '&';

    return $path . $separator . 'lang=' . $targetLang . $hash;
}
