# oop

--FIRST CHALLENGE--

We needed to create a class and add to it properties with typehinting which
I think is very useful, you know what you have to have and get at the end. We used "var" here, but later found out that
it actually means "public" and you should never use "var" again (neither public but about that later...). All class properties and methods go inside the braces. 
In construct we initialize an object's properties upon creation of the object which means that properties need to be included.
After that getInfo function is created, which is a method to return something...The $this keyword refers to the current object, and is only available inside method.
Objects of a class is created using the new keyword and echoing the result like color and color.

Conclusion: for now everything is clear and I understood everything well.


--SECOND CHALLENGE--

Here we used extended class and parent::__construct to be able to get to object properties from 
first class (parent class) and also set new properties. I means that
the child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
Calling parent::function:
When a class extends another class, and both have the same function name, the parent:: call forces the 
parent version of the function to be called and used. The return part of it will simply return whatever the parent function returns.
We had to get this fatal error at the end to see that we can not call methods from parent classes without first returning that parent method.

Conclusion: everything clear from here. 

--THIRD CHALLENGE--

Had to make all properties private which is called visibility scope and this should always be practice with properties
so they can not be changed from outside or extended class. If we leave it to public (never do that!) we have to always think about it and be carefull that in some time
somebody changes pieces of code and everything brokes.

I also used "set" and "get" method for new beer color. A “getter” allows to you to retrieve or “get” a given property. A “setter” allows you to “set” the value of a given property.

Conclusion: Somehow I feel this was not quite good solution, it works, but is not really clear to me, why I had to set the new color at the end of code and not to set it with a function.

--FOURTH CHALLENGE--

We just needed to change private properties to protected one. Protected ones means that the property or method can be accessed within the class and by classes derived from that class

Conclusion: Everything worked fine here.

--SIXT CHALLENGE--

Static methods can be called directly - without creating an instance of the class first. We made static property inside the class Beverage which was integer with default value 0.
Then in construct added self::$timesServed ++; for every time new beverage is served. I made three new beverages and with my duvel bevearge, result is 4.

Conclusion: I think it is clear to me. This method counts how many beverages is served.
