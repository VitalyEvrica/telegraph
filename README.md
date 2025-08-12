
**Telegraph** is a Laravel package for fluently interacting with Telegram Bots made by [def:studio] and edited by me.

Modifications:
a) Added language_code column to store the user’s language preferences. See Handlers/WebhookHandler.php.
b) This can be disabled in the config.
c) Added class TeleGraphAndGram, which extends WebhookHandler with some useful commands. To publish, see the command below.

```php
Telegraph::message('hello world')
    ->keyboard(Keyboard::make()->buttons([
            Button::make('Delete')->action('delete')->param('id', '42'),
            Button::make('open')->url('https://test.it'),
    ]))->send();
```

## Installation

You can install the package via composer. To do so, copy this to `composer.json`:

```json
"require": {
    ...other repos,
    "vitalyevrica/telegraph": "dev-main"
},
"require-dev": {
    ...other repos,
    "vitalyevrica/telegraph": "dev-main"
},
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/VitalyEvrica/telegraph"
    }
],

```

Publish and launch required migrations:

```bash
php artisan vendor:publish --tag="telegraph-migrations"
```

```bash
php artisan migrate
```

Optionally, you can publish the config, translation *and controller* with some commands with:
```bash
php artisan vendor:publish --tag="telegraph-config"
```
```bash
php artisan vendor:publish --tag="telegraph-translations"
```
```bash
php artisan vendor:publish --tag="telegraph-add-default-controller-to-http-folder"
```

## Usage & Documentation

After a new bot is created and added to a chat/group/channel (as described [in our documentation](https://docs.defstudio.it/telegraph/v1/quickstart/new-bot)),
the `Telegraph` facade can be used to easily send messages and interact with it:

```php
Telegraph::message('this is great')->send();
```

An extensive documentation is available at

https://docs.defstudio.it/telegraph

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently. [Follow Us](https://twitter.com/FabioIvona) on Twitter for more updates about this package.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Fabio Ivona](https://github.com/defstudio)
- [def:studio team](https://github.com/defstudio)
- [Andrea Marco Sartori](https://github.com/cerbero90) for his cool ideas
- [Alberto Pieripolli](https://github.com/trippo) Pest badge
- [Joris Drenth](https://github.com/jorisdrenth) Docs fix and upgrade
- [All Contributors](../../contributors)

## Translators

- [Tievo](https://github.com/Tievodj) Spanish
- [Andrey Helldar](https://github.com/andrey-helldar) Russian
- [Joris Drenth](https://github.com/jorisdrenth) Dutch
- [Moayed Alhagy](https://github.com/moayedalhagy) Arabic
- [Rafael](https://github.com/rjmo) Portuguese
- [Sadegh Barzegar](https://github.com/sadegh19b) Persian


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
