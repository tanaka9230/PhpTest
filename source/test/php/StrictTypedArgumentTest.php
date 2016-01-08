<?php
declare(strict_types=1);

testStrictTypedArgument();

function testStrictTypedArgument() {
    doEverything(123);  // ok
    doEverything(123.4);  // ok
    doEverything("123");  // ok
    doEverything("123.4");  // ok
    doEverything("abc");  // ok

    doSomething(123);  // ok
    //doSomething(123.4);  // Type error: ...must be of the type integer, float given
    //doSomething("123");  // Type error: ...must be of the type integer, string given
    //doSomething("123.4");  // Type error: ...must be of the type integer, string given
    //doSomething("abc");  // Type error: ...must be of the type integer, string given

    doEveryLittleThing(123);  // ok
    doEveryLittleThing(123.4);  // ok
    //doEveryLittleThing("123");  // Type error: ...must be of the type float, string given
    //doEveryLittleThing("123.4");  // Type error: ...must be of the type float, string given
    //doEveryLittleThing("abc");  // Type error: ...must be of the type float, string given

    //doAnything(123);  // Type error: ...must be of the type string, integer given
    //doAnything(123.4);  // Type error: ...must be of the type string, float given
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
