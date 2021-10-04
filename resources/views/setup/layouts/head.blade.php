<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

<!-- Styles -->
<?php
$appDetails = config('gain');
$cssLinks = [
    [
        'comment' => '<!--Import favicon-->',
        'assets' => asset('images/favicon/favicon.png'),
        'rel' => 'shortcut icon',
        'media' => '',
    ],
    [
        'comment' => '<!--summernote-lite.css-->',
        'assets' => asset('summernote-0.8.9/summernote-lite.css'),
        'rel' => 'stylesheet',
        'media' => '',
    ],
    [
        'comment' => '<!--line-awesome.css-->',
        'assets' => asset('line-awesome/css/line-awesome.min.css'),
        'rel' => 'stylesheet',
        'media' => '',
    ],
    [
        'comment' => '<!--Import style.css-->',
        'assets' => asset('css/app.css'),
        'rel' => 'stylesheet',
        'media' => '',
    ],

];

foreach ($cssLinks as $cssLink) {
    if ($cssLink['comment']) {
        echo $cssLink['comment'] . "\n";
    }

    if ($cssLink['media']) {
        echo "<link href='" . $cssLink['assets'] . '?app_version=' . $appDetails['app_version'] . "' rel='" . $cssLink['rel'] . "' media='" . $cssLink['media'] . "'>\n";
    } else {
        echo "<link href='" . $cssLink['assets'] . '?app_version=' . $appDetails['app_version'] . "' rel='" . $cssLink['rel'] . "'>\n";
    }
}
?>

<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
