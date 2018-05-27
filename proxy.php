<?php
/**
 * ُScript Name : Run PHP Code
 * Description : این اسکریپت به شما این امکان می دهد تا سریع تر قطعه کد های پی اچ پی خود را تست کنید.
 * Created By :  { Eric } (https://t.me/SudoEric)
 * Github : (https://github.com/EricSudo/Run-PHP-Code)
 * Time Build : 1397/03/06
 */
 
if (!isset($_GET['url'])) die();
$url = urldecode($_GET['url']);
if (strpos($url, 'http://', 0) !== 0 && strpos($url, 'https://', 0) !== 0) die();

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("User-Agent: Run-PHP-Code"));
$content = curl_exec($ch);
curl_close($ch);

if ($content === false) echo 'Import failed.';
else echo $content;