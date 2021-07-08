<?php
# How do you define and call a function that return a value?

# What is the difference between PHP echo and PHP return in plain English?

# https://stackoverflow.com/questions/9387765/what-is-the-difference-between-php-echo-and-php-return-in-plain-english


function sayHelloLater(){
    return "Hello";
}

function sayGoodbyeNow(){
    echo "Goodbye";
}

$hello = sayHelloLater(); // "Hello" returned and stored in $hello 
$goodbye = sayGoodbyeNow(); // "Goodbye" is echo'ed and nothing is returned

echo $hello; // "Hello" is echo'ed
echo $goodbye; // nothing is echo'ed

// You might expect the output to be:
// HelloGoodbye

// The actual output is:
// GoodbyeHello

// The reason is that "Goodbye" is echo'ed (written) as output, 
// as soon as the function is called. 
// "Hello", on the other hand, is returned to the $hello variable. 
// the $goodbye is actually empty, since the goodbye 
// function does not return anything.


/*

$hello = sayHelloLater();  ---->-------->-------->------->------>--
                                                                  ¦
  ¦           ^                                                   ¦
  ¦           ¦                                           Call the function
  v           ¦                                                   ¦
  ¦           ^                                                   ¦
  ¦           ¦                                                   v
  ¦
  v         "return" simply sends back                 function sayHelloLater() {
  ¦          'Hello' to wherever the     <----<----        return 'Hello';
  ¦             function was called.                   }
  v           Nothing was printed out
  ¦          (echoed) to the screen yet.
  ¦
  v

$hello variable now has whatever value
the sayHelloLater() function returned,
so $hello = 'Hello', and is stored for
whenever you want to use it.

  ¦
  ¦
  v
  ¦
  ¦
  v

$goodbye = sayGoodbyeNow();  ---->-------->-------->------->------
                                                                 ¦
  ¦              ^                                               ¦
  ¦              ¦                                       Call the function
  v              ¦                                               ¦
  ¦              ^                                               ¦
  ¦              ¦                                               v
  ¦              ¦
  v              ¦                                    function sayGoodbyeNow() {
  ¦                                                       echo 'Goodbye';
  ¦        The function didn't return                 }
  ¦        anything, but it already
  v         printed out 'Goodbye'                                ¦
  ¦                                                              v
  ¦           ^
  ¦           ¦                                    "echo" actually prints out
  v           <-----------<-----------<---------     the word 'Goodbye' to
  ¦                                                 the page immediately at
  ¦                                                       this point.
  ¦
  v

Because the function sayGoodbyeNow() didn't
return anything, the $goodbye variable has
a value of nothing (null) as well.

  ¦
  ¦
  ¦
  v
  ¦
  ¦
  ¦
  v

echo $hello;  -------->------->   Prints 'Hello' to the screen at
                                  this point. So now your screen says
  ¦                               'GoodbyeHello' because 'Goodbye' was
  ¦                               already echoed earlier when you called
  ¦                               the sayGoodbyeNow() function.
  v

echo $goodbye;  ------>------->   This variable is null, remember? So it
                                  echoes nothing.
  ¦
  ¦
  ¦
  v

And now your code is finished and you're left with
'GoodbyeHello' on your screen, even though you echoed
$hello first, then $goodbye.

*/



?>