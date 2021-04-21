[![Build Status](https://github.com/robiningelbrecht/php-design-patterns/actions/workflows/php.yml/badge.svg)](https://github.com/robiningelbrecht/php-design-patterns/actions)

# Installation

- run `git clone git@github.com:robiningelbrecht/php-design-patterns.git`
- run `composer install`
- run `symfony server:start` [https://symfony.com/download](https://symfony.com/download)
- server listening on [http://127.0.0.1:8000](http://127.0.0.1:8000)
- To run the tests use `phpunit`:

```bash
$ ./vendor/bin/phpunit
```

# Included patterns

## Creational

* [AbstractFactory](src/Pattern/Creational/AbstractFactory)
* [Builder](src/Pattern/Creational/Builder)
* [FactoryMethod](src/Pattern/Creational/FactoryMethod)
* [Singleton](src/Pattern/Creational/Singleton)
* [StaticCreationMethod](src/Pattern/Creational/StaticCreationMethod)

## Structural

* [Adapter](src/Pattern/Structural/Adapter)
* [Bridge](src/Pattern/Structural/Bridge)
* [Composite](src/Pattern/Structural/Composite)  
* [Decorator](src/Pattern/Structural/Decorator)

## Behavioral


### Note

All texts are written and owned by [refactoring](https://refactoring.guru/)
