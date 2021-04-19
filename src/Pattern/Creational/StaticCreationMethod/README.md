# StaticCreationMethod

__StaticCreationMethod__ is a creation method declared as `static`. In other words, 
it can be called on a class and doesn’t require an object to be created.

Don’t be confused when someone calls methods like this a “static factory method”. 
That’s just a bad habit. The [FactoryMethod](src/Pattern/Creational/FactoryMethod) is a design pattern that relies on 
inheritance. If you make it `static`, you can no longer extend it in subclasses, which defeats the purpose of the pattern.

When a static creation method returns new objects it becomes an alternative constructor.


## Source

[https://refactoring.guru/design-patterns/factory-comparison](https://refactoring.guru/design-patterns/factory-comparison)