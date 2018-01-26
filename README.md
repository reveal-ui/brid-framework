# Framework (beta)

Framework is a Laravel toolbox packed with tools and utilities that allows you to rapidly build and deploy laravel applications and websites.

## Features (WIP)

* Built in admin/system
* Content management using **Backstory**
* User management
* Settings view, manage and backup `.env` settings
* View and mange system logs

### Whats Inside

- No CAPTCHA reCAPTCHA [Info](https://github.com/anhskohbo/no-captcha)
- Laravel .ENV editor This package offers you the possibility to edit your .env dynamically [Info](https://github.com/Brotzka/laravel-dotenv-editor)
- Laravel Collective Html [Info](https://github.com/LaravelCollective/html)
- Firewall - This a "soft-firewall" package. Its purpose is to help people prevent unauthorized access to routes by IP address. It is able to keep track of IPs, countries and hosts (dynamic ip), and redirect non-authorized users to, for instance, a "Coming Soon" page, while letting whitelisted IPs to have access to the entire site. It is now also able to detect and block attacks (too many requests) from single IPs or whole countries. [Info](https://github.com/antonioribeiro/firewall)
- Laravel Log Viewer [Info](https://github.com/rap2hpoutre/laravel-log-viewer)
- Backstory - Tell Your Story. Backstory is a Laravel package for creating and editing, content in your laravel application. [Info](https://github.com/shawnsandy/backstory)
- Dash Auth - Dash Auth is simple UI designed to create & manage Bouncer Roles & Abilities. [Info](https://github.com/shawnsandy/dash-auth)
- Laravel ImgFly - Dynamically resize images on the Fly in your Laravel App using the Glide library from thephpleague. [Info](https://github.com/shawnsandy/img-fly)
- Jarvis - Jarvis is a simple and smart way to create and manage Laravel views (themes). [Info](https://github.com/shawnsandy/jarvis)
- Laravel analytics - Using this package you can easily retrieve data from Google Analytics. [Info](https://github.com/spatie/laravel-analytics)

``` json

	"anhskohbo/no-captcha": "^3.0",
	"brotzka/laravel-dotenv-editor": "^2.0",
	"laravelcollective/html": "^5.5",
	"mews/purifier": "^2.0",
	"pragmarx/firewall": "^2.1",
	"rap2hpoutre/laravel-log-viewer": "^0.11.0",
	"shawnsandy/backstory": "^0.1.4",
	"shawnsandy/dash-auth": "0.2.2",
	"shawnsandy/img-fly": "^0.1.21",
	"shawnsandy/jarvis": "^0.1.0",
	"spatie/laravel-analytics": "^3.4"

```

## Install

Framework is currently in beta so please install using the composer repositories config option, so add the following to your composer.json file.

``` json

"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/reveal-ui/framework"
        }
	],

```

Run the composer require to install the package

```bash
composer require reveal-ui/backstory
```
__Providers / Facades__

Framework uses laravel 5.5 auto discovery feature to auto register providers / facades. Laravel 5.4 and lower please see each package info for install instructions. Good luck.

__Routes__

Please add the following to `routes\web.php`

``` php
Framework::routes();
```

## Usage

WIP...
