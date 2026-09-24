<?php
/**
 * لایه سئو.
 *
 * این فایل آدرس‌های مطلق، تگ‌های متادیتا و داده‌های ساخت‌یافته
 * (JSON-LD) را می‌سازد تا موتورهای جست‌وجو سایت را درست بخوانند.
 *
 * نکته: چون سایت دو زبانه است، هر صفحه دو نسخه دارد و با
 * تگ‌های hreflang به هم وصل می‌شوند تا گوگل نسخه درست را نشان دهد.
 */

/**
 * ریشه سایت.
 *
 * اگر روی هاست اصلی هستید، مقدار SITE_URL را در همین فایل
 * به آدرس واقعی (مثلاً https://akyoweb.com) تغییر دهید.
 * به‌صورت پیش‌فرض از روی درخواست جاری ساخته می‌شود.
 */
const SITE_URL = '';

/** آدرس مطلق ریشه سایت (بدون اسلش انتهایی) */
function site_base()
{
    if (SITE_URL !== '') {
        return rtrim(SITE_URL, '/');
    }

    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';

    // پوشه‌ای که سایت داخلش اجرا می‌شود (مثلاً /personal)
    $dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
    $dir = rtrim($dir, '/');

    return $scheme . '://' . $host . $dir;
}

/** ساخت آدرس مطلق از یک مسیر نسبی */
function absolute_url($path = '')
{
    if (preg_match('#^https?://#', $path)) {
        return $path;
    }

    $base = site_base();
    $path = ltrim((string) $path, '/');

    return $path === '' ? $base : $base . '/' . $path;
}

/**
 * آدرس canonical صفحه جاری با حفظ پارامترهای معنادار.
 *
 * پارامتر lang حذف می‌شود تا نسخه پیش‌فرض (فارسی) آدرس تمیز داشته باشد،
 * ولی پارامترهای دیگر مثل slug نوشته بلاگ حفظ می‌شوند.
 */
function canonical_url($extra = [])
{
    $path = basename($_SERVER['PHP_SELF'] ?? 'index.php');

    $params = array_merge([
        'tag' => $_GET['tag'] ?? null,
        'slug' => $_GET['slug'] ?? null,
    ], $extra);

    $params = array_filter($params, static function ($value) {
        return $value !== null && $value !== '';
    });

    $query = $params ? '?' . http_build_query($params) : '';

    return absolute_url($path . $query);
}

/** آدرس صفحه جاری با زبان دلخواه (برای hreflang) */
function canonical_url_for_lang($targetLang)
{
    return canonical_url() . (strpos(canonical_url(), '?') === false ? '?' : '&') . 'lang=' . $targetLang;
}

/**
 * داده ساخت‌یافته Person + WebSite برای شناساندن
 * «محمد جهانی» و برند «akyoweb» به گوگل.
 */
function schema_person()
{
    global $me, $lang;

    $sameAs = array_values(array_filter([
        $me['github'] ?? '',
        $me['linkedin'] ?? '',
        $me['telegram'] ?? '',
        $me['brand_url'] ?? '',
    ]));

    return [
        '@context' => 'https://schema.org',
        '@type' => 'Person',
        'name' => $me['name'],
        'alternateName' => ['محمد جهانی', 'Mohammad Jahanii', 'Akyoweb', 'akyoweb'],
        'jobTitle' => $me['role'],
        'description' => $me['intro'],
        'url' => site_base(),
        'email' => 'mailto:' . $me['email'],
        'knowsAbout' => [
            'PHP',
            'JavaScript',
            'HTML',
            'CSS',
            'MySQL',
            'برنامه‌نویسی وب',
            'Web development',
            'الگوریتم',
            'Web design',
        ],
        'knowsLanguage' => ['fa', 'en'],
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => $me['location'],
        ],
        'sameAs' => $sameAs,
    ];
}

/** داده ساخت‌یافته وب‌سایت با نام برند akyoweb */
function schema_website()
{
    global $me;

    return [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => $me['brand'],
        'alternateName' => ['akyoweb', 'محمد جهانی'],
        'url' => site_base(),
        'inLanguage' => ['fa-IR', 'en-US'],
        'author' => [
            '@type' => 'Person',
            'name' => $me['name'],
        ],
    ];
}

/** داده ساخت‌یافته یک نوشته بلاگ */
function schema_blog_post(array $post)
{
    global $me, $lang;

    return [
        '@context' => 'https://schema.org',
        '@type' => 'BlogPosting',
        'headline' => t($post['title']),
        'description' => t($post['excerpt']),
        'datePublished' => $post['date'],
        'dateModified' => $post['date'],
        'inLanguage' => $lang === 'fa' ? 'fa-IR' : 'en-US',
        'author' => [
            '@type' => 'Person',
            'name' => $me['name'],
            'url' => site_base(),
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => $me['brand'],
            'url' => site_base(),
        ],
        'mainEntityOfPage' => canonical_url(),
        'keywords' => implode(', ', $post['tags']),
    ];
}

/** داده ساخت‌یافته فهرست وبلاگ */
function schema_blog(array $posts)
{
    global $me, $lang;

    $items = [];
    foreach ($posts as $index => $post) {
        $items[] = [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'url' => absolute_url('blog-post.php?slug=' . urlencode($post['slug'])),
            'name' => t($post['title']),
        ];
    }

    return [
        '@context' => 'https://schema.org',
        '@type' => 'Blog',
        'name' => lang('blog_heading'),
        'description' => lang('blog_meta_desc', ['name' => $me['name']]),
        'url' => canonical_url(),
        'inLanguage' => $lang === 'fa' ? 'fa-IR' : 'en-US',
        'author' => [
            '@type' => 'Person',
            'name' => $me['name'],
        ],
        'blogPost' => $items,
    ];
}

/** چاپ یک بلوک JSON-LD به‌صورت امن */
function json_ld($schema)
{
    // پاک کردن مقادیر null تا JSON-LD تمیز بماند
    $schema = array_filter($schema, static function ($value) {
        return $value !== null;
    });

    return '<script type="application/ld+json">'
        . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
        . '</script>';
}