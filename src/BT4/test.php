<?php
require __DIR__ . '/../vendor/autoload.php';


use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;

$host = 'http://localhost:9999/wd/hub'; // Dia chi cua Selenium server

$driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());

$driver->manage()->timeouts()->implicitlyWait(30);
$driver->manage()->timeouts()->pageLoadTimeout(30);
$driver->manage()->timeouts()->setScriptTimeout(30);

$url = 'https://shopee.vn/';
echo "🔗 Dang truy cap: $url\n";
$driver->get($url);

sleep(30);

$screenshotDir = __DIR__ . '/../screenshots';
if (!is_dir($screenshotDir)) {
    mkdir($screenshotDir, 0777, true);
}

$fileName = $screenshotDir . '/shoppe_' . date('Ymd_His') . '.png';
$driver->takeScreenshot($fileName);

echo "📸 Da chup man hinh va luu tai: " . $fileName . "\n";

echo "🧾 Tieu de trang: " . $driver->getTitle() . "\n";

$driver->quit();
