[![Build Status](https://github.com/robiningelbrecht/php-design-patterns/actions/workflows/php.yml/badge.svg)](https://github.com/robiningelbrecht/php-design-patterns/actions)

This repository contains the most common design patterns used in PHP. 
All examples are built around "Vehicle" functionality. 

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

* [Abstract Factory](src/Pattern/Creational/AbstractFactory)
* [Builder](src/Pattern/Creational/Builder)
* [Factory Method](src/Pattern/Creational/FactoryMethod)
* [Singleton](src/Pattern/Creational/Singleton)
* [Static Creation Method](src/Pattern/Creational/StaticCreationMethod)

## Structural

* [Adapter](src/Pattern/Structural/Adapter)
* [Bridge](src/Pattern/Structural/Bridge)
* [Composite](src/Pattern/Structural/Composite)  
* [Decorator](src/Pattern/Structural/Decorator)
* [Facade](src/Pattern/Structural/Facade)

## Behavioral

* [Chain of Responsibility](src/Pattern/Behavioral/ChainOfResponsibility) 
* [Command](src/Pattern/Behavioral/Command)
* [Iterator](src/Pattern/Behavioral/Iterator)
* [Observer](src/Pattern/Behavioral/Observer)
* [Strategy](src/Pattern/Behavioral/Strategy)
* [Visitor](src/Pattern/Behavioral/Visitor)

### Note

All texts are written and owned by [refactoring](https://refactoring.guru/)
