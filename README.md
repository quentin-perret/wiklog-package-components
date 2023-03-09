# Package contenant divers composants pour les formulaires

Starter kit pour le développement de solutions sur le framework Laravel. Il s'agit d'une version de test. Update 0.2.

## Installation

You can install the package via composer:

```bash
composer require wiklog/wiklog-package-components
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="wiklog-package-components-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="wiklog-package-components-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="wiklog-package-components-views"
```

## Usage

```php
$wiklogPackageComponents = new Wiklog\WiklogPackageComponents();
echo $wiklogPackageComponents->echoPhrase('Hello, Wiklog!');
```

You can publish inputs components:
```bash
php artisan wiklog-inputs-components:publish
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Wiklog](https://github.com/Quentin PERRET)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
