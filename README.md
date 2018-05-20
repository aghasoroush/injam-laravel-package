# Injam Laravel Package

[![Build Status](https://travis-ci.org/aghasoroush/injam-laravel-package.svg?branch=master)](https://travis-ci.org/aghasoroush/injam-laravel-package)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/aghasoroush/injam-laravel-package/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/aghasoroush/injam-laravel-package/?branch=master)
[![Coverage Status](https://coveralls.io/repos/github/aghasoroush/injam-laravel-package/badge.svg?branch=master)](https://coveralls.io/github/aghasoroush/injam-laravel-package?branch=master)

[![Packagist](https://img.shields.io/packagist/v/aghasoroush/injam-laravel-package.svg)](https://packagist.org/packages/aghasoroush/injam-laravel-package)
[![Packagist](https://poser.pugx.org/aghasoroush/injam-laravel-package/d/total.svg)](https://packagist.org/packages/aghasoroush/injam-laravel-package)
[![Packagist](https://img.shields.io/packagist/l/aghasoroush/injam-laravel-package.svg)](https://packagist.org/packages/aghasoroush/injam-laravel-package)

Package description: Injam.io Laravel Package

## Installation

Install via composer
```bash
composer require aghasoroush/injam-laravel-package
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Aghasoroush\InjamLaravelPackage\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
Aghasoroush\InjamLaravelPackage\Facades\InjamLaravelPackage::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Aghasoroush\InjamLaravelPackage\ServiceProvider" --tag="config"
```

## Usage

Coming soon...

## Security

If you discover any security related issues, please email me@soroo.sh
instead of using the issue tracker.

## Credits

- [Soroush Khosravi](https://github.com/aghasoroush/injam-laravel-package)

