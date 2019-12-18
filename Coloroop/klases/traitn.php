<?php
trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

trait World {
    public function Hello() {
        echo '...';
    }
}

class TheWorldIsNotEnough {
    use HelloWorld, World;
    public function sayHello() {
        echo 'Hello Universe!';
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello();
$o->Hello();
?>