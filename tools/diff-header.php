<?php
// Compares the rendered header markup between fa and en to find layout-
// affecting differences (extra classes, attributes, inline widths).
// Run: C:\xampp\php\php.exe tools\diff-header.php

$script = dirname(__DIR__) . '/index.php';

function dump_header(string $lang, string $php, string $script): string
{
    $code = '$_GET=["lang"=>$argv[1]];'
        . '$_SERVER["PHP_SELF"]="/index.php";'
        . '$_SERVER["REQUEST_METHOD"]="GET";'
        . '$_SERVER["HTTP_HOST"]="localhost";'
        . '$_SESSION=[];'
        . 'ob_start(); include ' . var_export($script, true) . '; $h=ob_get_clean();'
        . 'preg_match("#<html[^>]*>#", $h, $m); echo ($m[0] ?? "") . "\n";'
        . 'preg_match("#<header.*?</header>#s", $h, $m2); echo $m2[0] ?? "NO HEADER";';

    $tmp = tempnam(sys_get_temp_dir(), 'dh') . '.php';
    file_put_contents($tmp, '<?php ' . $code);
    $out = shell_exec(escapeshellarg($php) . ' ' . escapeshellarg($tmp) . ' ' . escapeshellarg($lang) . ' 2>&1');
    unlink($tmp);

    return (string) $out;
}

$php = PHP_BINARY;
$fa = dump_header('fa', $php, $script);
$en = dump_header('en', $php, $script);

echo "==================== PERSIAN (html tag) ====================\n";
echo trim(explode("\n", $fa)[0]) . "\n\n";
echo "==================== ENGLISH (html tag) ====================\n";
echo trim(explode("\n", $en)[0]) . "\n\n";

// Any inline styles / width / dir attributes?
foreach (['style=', 'width=', 'dir='] as $attr) {
    echo "--- '{$attr}' occurrences ---\n";
    echo "  fa: " . substr_count($fa, $attr) . "   en: " . substr_count($en, $attr) . "\n";
}

echo "\n--- element counts ---\n";
foreach (['class="brand"', 'class="site-nav"', 'class="header-tools"', 'lang-toggle', 'theme-toggle', 'nav-toggle'] as $needle) {
    printf("  %-22s fa=%d  en=%d\n", $needle, substr_count($fa, $needle), substr_count($en, $needle));
}

echo "\n--- lang-toggle markup ---\n";
foreach (['fa' => $fa, 'en' => $en] as $lang => $html) {
    if (preg_match('#<a class="lang-toggle".*?</a>#s', $html, $m)) {
        echo "  [{$lang}] " . preg_replace('/\s+/', ' ', trim($m[0])) . "\n";
    }
}
