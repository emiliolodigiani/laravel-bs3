# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/emiliolodigiani/laravel-bs3.svg?style=flat-square)](https://packagist.org/packages/emiliolodigiani/laravel-bs3)
[![Build Status](https://travis-ci.org/emiliolodigiani/laravel-bs3.svg?branch=master)](https://travis-ci.org/emiliolodigiani/laravel-bs3)
[![Total Downloads](https://img.shields.io/packagist/dt/emiliolodigiani/laravel-bs3.svg?style=flat-square)](https://packagist.org/packages/emiliolodigiani/laravel-bs3)

Package for adding precomposed Twitter Bootstrap 3 view partials, such as forms, form inputs, panels, buttons, etc.  

## Installation

You can install the package via composer:

```bash
composer require emiliolodigiani/laravel-bs3
```

## Usage

In blade templates:

For a back button
``` php
@include('bs3::button.backButton')
```

### Testing

``` bash
phpunit
```
or
``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email emiliolodigiani@gmail.com instead of using the issue tracker.

## Credits

- [Emilio Lodigiani](https://github.com/emiliolodigiani)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
