# Laravel Bootstrap 3 view partials

[![Latest Version on Packagist](https://img.shields.io/packagist/v/emiliolodigiani/laravel-bs3.svg?style=flat-square)](https://packagist.org/packages/emiliolodigiani/laravel-bs3)
[![Build Status](https://travis-ci.org/emiliolodigiani/laravel-bs3.svg?branch=master)](https://travis-ci.org/emiliolodigiani/laravel-bs3)
[![Total Downloads](https://img.shields.io/packagist/dt/emiliolodigiani/laravel-bs3.svg?style=flat-square)](https://packagist.org/packages/emiliolodigiani/laravel-bs3)

Package for adding precomposed Twitter Bootstrap 3 view partials, such as forms, form inputs, panels, buttons, etc.  

The package is mainly intended for internal use and it's not fully documented yet.

## Installation

You can install the package via composer:

```bash
composer require emiliolodigiani/laravel-bs3
```

## Usage

In blade templates:

#### Back button
``` blade
@include('bs3::button.backButton')
@include('bs3::button.backButton', ['href' => 'SOMEURL', 'text' => 'Back', 'icon' => 'chevron-left'])
```
Back url default to previous visited url. Icon defaults to `chevron-left` (Font Awesome).

#### Panel
Simple panel

```blade
@component('bs3::component.panel', ['title' => 'Panel Title'])
    <p>Panel content.</p>
@endcomponent
```
Full featured panel

```blade
<div class="row">
    @component('bs3::component.panel', [
        'grid' => 'col-md-6', {{-- Optional --}}
        'type' => 'success', {{-- Optional: (default) | success | warning | danger | info --}}
        'title' => 'Panel Heading', {{-- Optional --}}
        'titleIcon' => 'user' {{-- Optional, generates a Font Awesome fa-user icon --}}

    ])
        <p>Panel content, optional.</p>

        @slot('table') {{-- Optional --}}
            <table class="table table-hover">
                ... 
            </table>
        @endslot
        @slot('footer') {{-- Optional --}}
            <p>Panel footer.</p>
        @endslot
    @endcomponent
    
    ... other panels ...
</div>
```


### Completion in PhpStorm
In PhpStorm setting go to `Language & Frameworks > PHP > Laravel > Views / Template`, add a new setting with the following:

- Project-Path: `vendor/emiliolodigiani/laravel-bs3/resources/views`
- Namespace: `bs3`

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
