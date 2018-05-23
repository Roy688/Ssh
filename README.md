# SSH

[![Build Status](https://travis-ci.org/roy688/ssh.svg?branch=master)](https://travis-ci.org/roy688/ssh)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/roy688/ssh/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/roy688/ssh/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/roy688/ssh/badge.svg?branch=master)](https://coveralls.io/github/roy688/ssh?branch=master)

[![Packagist](https://img.shields.io/packagist/v/roy688/ssh.svg)](https://packagist.org/packages/roy688/ssh)
[![Packagist](https://poser.pugx.org/roy688/ssh/d/total.svg)](https://packagist.org/packages/roy688/ssh)
[![Packagist](https://img.shields.io/packagist/l/roy688/ssh.svg)](https://packagist.org/packages/roy688/ssh)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require roy688/ssh
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Roy688\Ssh\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
Roy688\Ssh\Facades\Ssh::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Roy688\Ssh\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email slaythia@gmail.com
instead of using the issue tracker.

## Credits

- [Roy Thia](https://github.com/roy688/ssh)
- [All contributors](https://github.com/roy688/ssh/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
