
# Adapter

__Adapter__ is a structural design pattern, which allows incompatible objects to collaborate.

__Identification__: Adapter is recognizable by a constructor which takes an instance
of a different abstract/interface type. When the adapter receives a call to any of its methods,
it translates parameters to the appropriate format and then directs the call to one or several
methods of the wrapped object.

## Structure

![Structure](/public/assets/Pattern/Structural/adapter.png)

## Source

[https://refactoring.guru/design-patterns/adapter](https://refactoring.guru/design-patterns/adapter)