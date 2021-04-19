# Builder

__Builder__ is a creational design pattern that lets you construct complex objects step by step. 
The pattern allows you to produce different types and representations of an object using the same construction code.

__Identification__: The Builder pattern can be recognized in a class, which has a single creation method and 
several methods to configure the resulting object. Builder methods often support chaining 
(for example, `someBuilder->setValueA(1)->setValueB(2)->create()`).

## Structure

![Structure](/public/assets/Pattern/Creational/Builder/structure.png)

## Source

[https://refactoring.guru/design-patterns/builder](https://refactoring.guru/design-patterns/builder)