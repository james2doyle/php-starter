PHP Example Project
===================

> An example setup for Invoke projects that use CI/CD tools

In this repo, you can see some examples for projects that will be used under our CI/CD tools.

The setup showcases the following PHP tasks:

* Linting (via `lint.sh` - which makes `php -l` return an exit code)
* Code Sniffing
* Testing
* Code Coverage

Using the code from the `composer.json`, these tasks will run after each `composer install` or `composer update` making it ideal for the CI/CD tools which will run those commands to prepare the project for movement to staging.

### Other Script Snippets

Laravel:

```
"sniff": "./vendor/bin/phpcs -n --standard=PSR2 --colors app/ resources/views/ tests/",
"lint": "sh ./lint.sh {app,app/*,resources/views,tests}/**.php",
```

WordPress:

```
"sniff": "./vendor/bin/phpcs -n --standard=PSR2 --colors wp-content/themes/{YOUR_THEME_NAME}/ tests/",
"lint": "sh ./lint.sh {wp-config.php,wp-content/themes/{YOUR_THEME_NAME}/**.php}",
```
