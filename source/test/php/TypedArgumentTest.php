<?php
testTypedArgument();

function testTypedArgument()
{
    doEverything(123);  // ok
    doEverything(123.4);  // ok
    doEverything("123");  // ok
    doEverything("123.4");  // ok
    doEverything("abc");  // ok

    doSomething(123);  // ok
    doSomething(123.4);  // ok
    doSomething("123");  // ok
    doSomething("123.4");  // ok
    //doSomething("abc");  // Type error: ...must be of the type integer, string given

    doEveryLittleThing(123);  //
    doEveryLittleThing(123.4);  // 
    doEveryLittleThing("123");  // 
    doEveryLittleThing("123.4");  // 
    //doEveryLittleThing("abc");  // Type error: ...must be of the type float, string given

    doAnything(123);  // ok
    doAnything(123.4);  // ok
    doAnything("123");  // ok
    doAnything("123.4");  // ok
    doAnything("abc");  // ok
}

//

function doEverything($a) {
}

function doSomething(int $a) {
}

function doEveryLittleThing(float $a) {
}

function doAnything(string $a) {
}
