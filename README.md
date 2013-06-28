Sofort Library for Symfony 2.x
============================

This library now implements SOFORT LIB VERSION 1.5.4 Payment Processor

This version of Sofort is a implementation of SOFORTLIB VERSION 1.5.4 with the following changes:

 - Namespaced
 - No more require(_once)
 - [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md) autoloading compatible
 - Future more testable design intended
 - Future better test coverage intended



### Install Sofort Library via Composer

The preferred way to install this bundle is to rely on [Composer](http://getcomposer.org).
Just check on [Packagist](http://packagist.org/packages/enkas/sofort) the version you want to install (in the following example, we used "dev-master") and add it to your `composer.json`:

``` js
{
    "require": {
        // ...
        "enkas/sofort": "dev-master"
    }
}
```