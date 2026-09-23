<?php
// Estimates the header row width at phone viewports.
// Persian nav labels are the widest case, so we use them.

$wrapPadding = 20 * 2;      // .wrap padding-inline
$viewport = 412;            // Galaxy A51 CSS width

echo "Viewport: {$viewport}px\n";
echo "Available inside .wrap: " . ($viewport - $wrapPadding) . "px\n";

// --- desktop sizes (above 680px) ---
$brandMark = 32;
$brandGap = 10;
$brandTextFa = 92;          // "محمد جهانی" at 16px bold, approx
$brand = $brandMark + $brandGap + $brandTextFa;

$navFa = [
    'خانه' => 34,
    'درباره من' => 70,
    'نمونه‌کارها' => 82,
    'تماس' => 38,
];
$navGaps = 26 * (count($navFa) - 1);
$nav = array_sum($navFa) + $navGaps;

$langToggleFa = 13 + 26 + 7 + 58 + 13;   // padding + badge + gap + "English" + padding
$themeToggle = 38;
$navToggle = 38;
$toolsGap = 10 * 2;
$toolsMargin = 18;
$tools = $langToggleFa + $themeToggle + $navToggle + $toolsGap + $toolsMargin;

$totalDesktop = $brand + $nav + $tools;

echo "Above 680px (all controls visible):\n";
echo "  brand        = {$brand}px\n";
echo "  nav          = {$nav}px\n";
echo "  header-tools = {$tools}px  (lang toggle WITH text)\n";
echo "  ------------------------------------\n";
echo "  TOTAL        = {$totalDesktop}px\n";
echo "  available    = " . ($viewport - $wrapPadding) . "px\n";

// --- phone sizes (<= 680px): lang text hidden, nav-toggle visible, nav absolute ---
$langTogglePhone = 13 + 26 + 13;   // padding + badge + padding (text hidden)
$themePhone = 38;
$navTogglePhone = 38;
$toolsPhone = $langTogglePhone + $themePhone + $navTogglePhone + (6 * 2) + 8;

echo "At 412px (nav-toggle shown, lang text hidden, nav absolute):\n";
echo "  brand        = {$brand}px\n";
echo "  header-tools = {$toolsPhone}px  (lang toggle WITHOUT text)\n";
echo "  ------------------------------------\n";
echo "  TOTAL        = " . ($brand + $toolsPhone) . "px\n";
echo "  available    = " . ($viewport - $wrapPadding) . "px\n";

// --- the bug: at 680px and below, if lang text were still shown ---
$withText = $brand + $langToggleFa + $themePhone + $navTogglePhone + (6 * 2) + 8;
echo "If lang toggle kept its text at 412px:\n";
echo "  TOTAL        = {$withText}px\n";
echo "  available    = " . ($viewport - $wrapPadding) . "px\n";
echo "  overflow     = " . ($withText - ($viewport - $wrapPadding)) . "px\n";

// --- what happens between 680px and ~900px ---
echo "Between 681px and 900px (desktop header, nav still horizontal):\n";
foreach ([681, 720, 768, 820, 900] as $w) {
    $avail = $w - $wrapPadding;
    $status = $totalDesktop > $avail ? 'OVERFLOW by ' . ($totalDesktop - $avail) . 'px' : 'fits';
    echo "  {$w}px -> available {$avail}px, need {$totalDesktop}px => {$status}\n";
}
