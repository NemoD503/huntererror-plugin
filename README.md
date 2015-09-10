Hunter Error
============

It`s alpha version of plugin.

This plugin catches js-error on your site and sends it to Google Analitics, so you can always catch all js errors and fix it.

Details
-------

The problem: All backend (php) errors You can see in log files, but what about js-errors? You think, that your site work fine, but may be your visitors have many errors and you do not know about it? There are many browsers and many cases, when your js code can be broken. How You can catch these errors? Hunter Error plugin can catch ALL js-errors and send them to your google Analytics, like an events. Now You see all errors and can fix them.


Installation
------------

You can choose any of these methods:

1. Comman line

    `php artisan plugin:install nikolaykolesnichenko.huntererror`

2. Backend Interface

    Find plugin by name hunter error and click install

3. Composer

    - `composer require nikolaykolesnichenko/huntererror`
    - `php artisan october:up`

    (But it is not recomended to install plugin by composer, because rainlab.google Analytics plugin package still do not have type : "october-plugin", so googleAnalytics will be installed into vendor folder.)

Usage
-----

After installation You can paste Hunter component to any layout, but you need to paste it after google counter component. You can paste these components before the closing `</head/>`. It is really the best place for code, because GA will only create `ga()` function and will start asynchronously loading GA scripts, so it doesn't stop the rendering of the page. (See [official docs](https://developers.google.com/analytics/devguides/collection/analyticsjs/advanced)) And You can catch any error, that can appear before then page will load.

```php
{% component 'googleTracker' %}
{% component 'hunter' %}
```

Requirements
-----------

This plugin extends [RainLab.Googleanalytics](http://octobercms.com/plugin/rainlab-googleanalytics) plugin.


Plans
-----

You will can see all errors in the dashboard-widget, so You will not need to open Google Analytics.
