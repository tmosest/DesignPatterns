# Strategy Pattern

This pattern is inspired by trying to add Fly to an 
animals class.

We could just add the method to 
Animal but then we would have to 
override it for almost every animal 
which makes it kinda pointless.

We could try to just implement an 
interface for fly but there is a better approach.

By Creating classes that 
implement some sort of fly interface 
we can create classes that define the 
flying property for the animal.
From there we can upgrade the Animal class
into a Composite Class that uses 
the flying classes to define the property
instead of static values.