# Composite

__Composite__ is a structural design pattern that lets you compose objects into tree structures 
and then work with these structures as if they were individual objects.

__Identification__: If you have an object tree, and each object of a tree is a part of the same class hierarchy, 
this is most likely a composite. If methods of these classes delegate the work to child objects of the tree 
and do it via the base class/interface of the hierarchy, this is definitely a composite.

## Structure

![Structure](/public/assets/Pattern/Structural/composite.png)

## Source

[https://refactoring.guru/design-patterns/composite](https://refactoring.guru/design-patterns/composite)