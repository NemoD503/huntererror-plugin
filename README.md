# Hunter Error

It`s beta version of plugin.

This plugin handles JavaScript errors on your website front-end and sends them to Google Analytics, so you can always catch all JavaScript errors and fix it.

## Details

### The problem and the solution

All backend (php) errors You can see in log files, but what about JavaScript errors on the front-end? You think, that your site work fine, but may be your visitors have many errors and you do not know about it? There are many browsers and many cases, when your JavaScript code could be broken. How You can catch these errors? Hunter Error plugin can catch ALL JavaScript errors and send them to your google Analytics, like an events. Now You see all errors and can fix them.

### Report widget

This plugin adds new report widget - Google Analytics events overview. This widget can show events from Google Analytics. By default it shows events with categories 'JavaScript Error' and 'jQuery Error'. This widget show you top of JavaScript errors.

You can add this widget twice or more on the dashboard and set another categories in settings (and another title). So You can see another events from your  Google Analytics. (Top sales, for example)

## Requirements

This plugin extends [RainLab.Googleanalytics](http://octobercms.com/plugin/rainlab-googleanalytics) plugin.
It will be automatically installed, if it was not installed.

## Installation

You can choose any of these methods:

1. Comman line

    `php artisan plugin:install nikolaykolesnichenko.huntererror`

2. Backend Interface

    Find plugin by name Hunter Error and click install

3. Composer

    - `composer require nikolaykolesnichenko/huntererror`
    - `php artisan october:up`

    (But it is not recomended to install plugin by composer, because rainlab.google Analytics plugin package still do not have type : "october-plugin", so googleAnalytics will be installed into vendor folder.)

## Usage

After installation You can paste Hunter component to any layout, but you need to paste it after google counter component. You can paste these components before the closing `</head/>`. It is really the best place for code, because GA will only create `ga()` function and will start asynchronously loading GA scripts, so it doesn't stop the rendering of the page. (See [official docs](https://developers.google.com/analytics/devguides/collection/analyticsjs/advanced)) And You can catch any error, that can appear before then page will load.

```php
{% component 'googleTracker' %}
{% component 'hunter' %}
```
