<?php
// Measures the header row width at phone viewports using the real rendered
// header markup. Reports whether the row can overflow horizontally.
// Run: C:\xampp\php\php.exe tools\measure-header.php

$_GET = ['lang' => $argv[1] ?? 'fa'];
$_SERVER['PHP_SELF'] = '/index.php';
$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['HTTP_HOST'] = 'localhost';
$_SESSION = [];

$php = PHP_BINARY;
$script = __DIR__ . '/dump-header.php';

// write a tiny dumper next to this file
file_put_contents(
    $script,
    '<?php '
    . '$_GET=["lang"=>$argv[1]];'
    . '$_SERVER["PHP_SELF"]="/index.php";'
    . '$_SERVER["REQUEST_METHOD"]="GET";'
    . '$_SERVER["HTTP_HOST"]="localhost";'
    . '$_SESSION=[];'
    . 'ob_start(); include dirname(__DIR__)."/index.php"; $h=ob_get_clean();'
    . 'preg_match("#<div class=\"wrap header-inner\">(.*?)</header>#s", $h, $m);'
    . 'echo $m[1] ?? "NOT FOUND";'
);

$cmd = escapeshellarg($php) . chr(32) . escapeshellarg($script) . chr(32) . escapeshellarg($_GET['lang']);
$markup = shell_exec($cmd);

echo "--- header-inner markup (" . $_GET['lang'] . ") ---\n";
echo trim(strip_tags(preg_replace('/\s+/', ' ', $markup))) . "\n\n";
echo "Text that must fit in one row:\n";

preg_match_all('/>([^<>]+)</u', $markup, $m);
foreach ($m[1] as $text) {
    $text = trim($text);
    if ($text !== '') {
        echo "  [" . $text . "]\n";
    }
}

unlink($script);
