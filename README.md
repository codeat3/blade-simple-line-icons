<p align="center">
    <img src="./socialcard-blade-simple-line-icons.png" width="1280" title="Social Card Blade Simple Line Icons">
</p>

# Blade Simple Line Icons

<a href="https://github.com/codeat3/blade-simple-line-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/codeat3/blade-simple-line-icons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/codeat3/blade-simple-line-icons">
    <img src="https://img.shields.io/packagist/v/codeat3/blade-simple-line-icons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/codeat3/blade-simple-line-icons">
    <img src="https://img.shields.io/packagist/dt/codeat3/blade-simple-line-icons" alt="Total Downloads">
</a>

A package to easily make use of [Blade Simple Line Icons](https://github.com/thesabbir/simple-line-icons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [thesabbir.github.io/simple-line-icons](https://thesabbir.github.io/simple-line-icons/).

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

```bash
composer require codeat3/blade-simple-line-icons
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Blade Icons

Blade Simple Line Icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade Simple Line Icons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-simple-line-icons.php` config file:

```bash
php artisan vendor:publish --tag=blade-simple-line-icons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-simpleline-ban/>
```

You can also pass classes to your icon components:

```blade
<x-simpleline-ban class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-simpleline-ban style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-simple-line-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-simple-line-icons/ban.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Simple Line Icons is developed and maintained by [Swapnil Sarwe](https://swapnilsarwe.com).

## License

Blade Simple Line Icons is open-sourced software licensed under [the MIT license](LICENSE.md).
