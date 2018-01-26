# Framework Hybrid (beta)

Framework is a Laravel Hybrid Application (package) that allows developers / designers to spin up laravel applications in minutes. Framework was designed with one thing in mind - reduce the time from idea to production by removing as much of the unnecessary setup boilerplate *(package installs, vendor publishing, config / setup)* as possible.

## Features (WIP)

* Built in admin/system
* Content management using **Backstory**
* User management
* Roles and permissions (Bouncer)
* Settings view, manage and backup `.env` settings
* View and mange system logs
* Theme management
* More coming

### Whats Inside

- No CAPTCHA reCAPTCHA [Setup /Instructions](https://github.com/anhskohbo/no-captcha)
- Laravel .ENV editor This package offers you the possibility to edit your .env dynamically [Setup /Instructions](https://github.com/Brotzka/laravel-dotenv-editor)
- Laravel Collective Html [Setup /Instructions](https://github.com/LaravelCollective/html)
- Firewall - This a "soft-firewall" package. Its purpose is to help people prevent unauthorized access to routes by IP address. It is able to keep track of IPs, countries and hosts (dynamic ip), and redirect non-authorized users to, for instance, a "Coming Soon" page, while letting whitelisted IPs to have access to the entire site. It is now also able to detect and block attacks (too many requests) from single IPs or whole countries. [Setup /Instructions](https://github.com/antonioribeiro/firewall)
- Laravel Log Viewer [Setup /Instructions](https://github.com/rap2hpoutre/laravel-log-viewer)
- Backstory - Tell Your Story. Backstory is a Laravel package for creating and editing, content in your laravel application. [Setup /Instructions](https://github.com/shawnsandy/backstory)
- Dash Auth - Dash Auth is simple UI designed to create & manage Bouncer Roles & Abilities. [Setup /Instructions](https://github.com/shawnsandy/dash-auth)
- Laravel ImgFly - Dynamically resize images on the Fly in your Laravel App using the Glide library from thephpleague. [Setup /Instructions](https://github.com/shawnsandy/img-fly)
- Jarvis - Jarvis is a simple and smart way to create and manage Laravel views (themes). [Setup /Instructions](https://github.com/shawnsandy/jarvis)
- Laravel analytics - Using this package you can easily retrieve data from Google Analytics. [Setup /Instructions](https://github.com/spatie/laravel-analytics)


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
composer require reveal-ui/backstory dev-beta
```

__Install Silver/Bouncer__

Install bouncer with Composer

```
 composer require silber/bouncer

```

## Publish vendor files and assets

Publish vendor assets and files

* Publish key vendor files and assets framework-vendors

```
php artisan vendor:publish --tag=framework-vendors
```

* Backstory will require publishing additional files

```
php artisan vendor:publish --tag=backstory-vendor-assets
```

__Optional__

* Dash auth config

```
php artisan vendor:publish --tag=dashauth-config

```

* Laravel anayltics

```
php artisan vendor:publish --provider="Spatie\Analytics\AnalyticsServiceProvider"
```


## Setup

__Providers / Facades__

Framework uses laravel 5.5 auto discovery feature to auto register providers / facades. Laravel 5.4 and lower please see each package info for install instructions. Good luck.

__Routes__

Please add the following to `routes\web.php`

``` php
Framework::routes();
```

Check out the Git repo for install / usage instructions [Git Repo](https://github.com/JosephSilber/bouncer)


* more info coming soon

__Configuration__

## Usage

WIP..
