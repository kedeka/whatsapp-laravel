# Whatsapp Laravel Package for Kedeka.com

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kedeka/whatsapp-laravel.svg?style=flat-square)](https://packagist.org/packages/kedeka/whatsapp-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kedeka/whatsapp-laravel/run-tests?label=tests)](https://github.com/kedeka/whatsapp-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/kedeka/whatsapp-laravel/Check%20&%20fix%20styling?label=code%20style)](https://github.com/kedeka/whatsapp-laravel/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kedeka/whatsapp-laravel.svg?style=flat-square)](https://packagist.org/packages/kedeka/whatsapp-laravel)

<!-- This is where your description should go. Limit it to a paragraph or two. Consider adding a small example. -->

## Installation

You can install the package via composer:

```bash
composer require kedeka/whatsapp-laravel
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="whatsapp-laravel-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="whatsapp-laravel-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="whatsapp-laravel-views"
```

## Configure .ENV

to use these package you need to add these configuration in your .env file
- set your `WHATSAPP_API_KEY` with your api key.
- set your `WHATSAPP_API_SENDER` with the phone number of your device.
- set your `WHATSAPP_API_DEVICE` with your device unique key.
- set your `WHATSAPP_API_ENABLE` with true or false to enable or disable the whatsapp, if you don't set this to true then by default the value will be false.

## Usage

### Usage Example

```php
$whatsapp = new Kedeka\Whatsapp();
echo $whatsapp->echoPhrase('Hello, Kedeka!');
```

### Send Text Message On Laravel Controller

```php
use Kedeka\Whatsapp\SendMessage;
use Kedeka\Whatsapp\Enums\MessageType;

$message['text'] = 'Your message goes here';
$message['footer'] = 'This footer is optional, your footer message goes here';

app(SendMessageAction::class)->to($whatsapp_number, $whatsapp_message, MessageType::Text);
```

## Message Type

```php
use Kedeka\Whatsapp\Enums\MessageType;
echo MessageType::Text;
```
| command to use            | type          | variable                              |
|---------------------------|---------------|---------------------------------------|
| MessageType:Text          | Text          | text (required), footer (optional)    |
| MessageType:Image         | Text & Image  | text (required), image_url (required) |
| MessageType:Button        | Text & Button | text (required), footer (optional),   |
| MessageType:Template      | Template      | text (required), footer (optional), templateButtons (optional) |
| MessageType:List          | List          | text (required), footer (optional),   |


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rizky Hajar](https://github.com/riskihajar)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
