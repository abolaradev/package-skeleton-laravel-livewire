# Package Skeleton Laravel Livewire

This repository is a customized Laravel package skeleton based on the excellent [Spatie Laravel Package Skeleton](https://github.com/spatie/package-skeleton-laravel).

It includes a few small customizations to make the skeleton better suited for my Laravel package development workflow.

## Getting Started

Follow these steps to create a new Laravel package using this skeleton.

### 1. Create a new repository

Click the **"Use this template"** button at the top of this repository.

Then select **"Create a new repository"** and create a new repository for your package.

### 2. Clone the repository

Clone the newly created repository to your local machine:

```bash
git clone https://github.com/your-username/your-package.git
```

Then navigate into the package directory:

```bash
cd your-package
```

### 3. Configure the package

Run the configuration script:

```bash
php configure.php
```

The script will ask for the required information and replace the placeholders throughout the package.


To see all available options:

```bash
php configure.php --help
```

### 4. Start creating your package

That's it! Your package is now ready for development.

Have fun creating your Laravel package. 🚀

## Customizations

This template is based on [Spatie's Laravel Package Skeleton](https://github.com/spatie/package-skeleton-laravel) and includes a few minor customizations:

* Added support for package routes.
* Added **Livewire** as a package dependency.
* Added **Illuminate Support** as a package dependency
* Rewritten and customized `SkeletonServiceProvider.php`.
* Added automatic generation of the package's `README.md` during the configuration process.

The goal is to keep the original structure and workflow of the Spatie skeleton while adding a few features that are useful for my own Laravel package development.

## Installation

You can install the package via Composer:

```bash
composer require :vendor_slug/:package_slug
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag=":package_slug-migrations"
```

Then run the migrations:

```bash
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag=":package_slug-config"
```

This is the contents of the published config file:

```php
return [

];
```

Optionally, you can publish the views using:

```bash
php artisan vendor:publish --tag=":package_slug-views"
```

## Usage

```php
$variable = new VendorName\Skeleton();

echo $variable->echoPhrase('Hello, VendorName!');
```

## Testing

Run the test suite with:

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) for information on how to report security vulnerabilities.

## Credits

* [Abolaradev](https://github.com/abolaradev)

* [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
