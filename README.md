<p align="center">
    <img src="https://github.com/2zt/blade-cssgg/blob/main/socialcard-blade-cssgg.jpg" width="1280" title="Social Card Blade UI Kit">
</p>

# Blade css.gg Icons

<a href="https://github.com/2zt/blade-cssgg/actions?query=workflow%3ATests">
    <img src="https://github.com/blade-ui-kit/blade-cssgg/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/2zt/blade-cssgg">
    <img src="https://img.shields.io/packagist/v/2zt/blade-cssgg" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/2zt/blade-cssgg">
    <img src="https://img.shields.io/packagist/dt/2zt/blade-cssgg" alt="Total Downloads">
</a>

A package to easily make use of [css.gg](https://github.com/astrit/css.gg) in your Laravel Blade views.

If you don't know [css.gg](https://github.com/astrit/css.gg), it is a set of 700+ Pure CSS, SVG & Figma UI Icons Available in SVG Sprite, styled-components, NPM & API.
For a complete list of the 700+ available icons included in this package, see [the SVG directory](resources/svg) or preview them at [css.gg](https://css.gg).

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

```bash
composer require 2zt/blade-cssgg
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Blade Icons

Blade css.gg uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade css.gg also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-cssgg.php` config file:

```bash
php artisan vendor:publish --tag=blade-cssgg-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-gg-globe/>
```

You can also pass classes to your icon components:

```blade
<x-gg-globe class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-gg-globe style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-cssgg --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-cssgg/globe.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade css.gg is developed and maintained by 2zt.

## Credit

css.gg is made by [Astrit Malsia](https://github.com/astrit/css.gg).

Support the author of css.gg:
| Donate          | Link                               |
| :-------------- | :----------------------------------|
| Github Sponsor  | https://github.com/sponsors/astrit |
| Open Collective | https://opencollective.com/css-gg  |
| PayPal          | https://paypal.me/GjonMalsijaj     |

## License

Blade css.gg is open-sourced software licensed under [the MIT license](LICENSE.md).
