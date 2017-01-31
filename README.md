PHP Example Project
===================

> An example setup for Invoke projects

In this repo, you can see some examples for projects that will be used under our CI/CD tools.

The setup showcases the following PHP tasks:

* Linting (via `lint.sh` - which makes `php -l` return an exit code)
* Code Sniffing
* Testing
* Code Coverage

Using the code from the `composer.json`, these tasks will run after each `composer install` or `composer update` making it ideal for the CI/CD tools which will run those commands to prepare the project for movement to staging.
