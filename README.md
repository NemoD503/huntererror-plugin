Hunter Error
============

It`s alpha version of plugin.

This plugin catches js-error on your site and sends it to Google Analitics, so you can always catch all js errors and fix it.

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
