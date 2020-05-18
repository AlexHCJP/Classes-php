<?php
interface CanEat {
    function eat();
}
interface CanFly {
    function fly();
}
interface CanMove{
    function Move();
}
interface CanMultiply{
    function multiply();
}
interface CanDie{
    function die();
}
trait TEat{
    function eat(){

    }
}
trait TFly{
    function fly(){

    }
}
trait TMove{
    function Move(){

    }
}
trait TMultiply{
    function multiply(){

    }
}
trait TDie{
    function die(){

    }
}
interface AnimalInterface extends CanEat, CanMove, CanMultiply, CanDie {}
interface BirdInterface extends AnimalInterface, CanFly {}
interface PredatorInterface extends AnimalInterface {}
class Bird implements BirdInterface {
    use TEat, TFly, TMove, TMultiply, TDie;
}
class Human implements PredatorInterface{
    use TEat, TMove, TMultiply, TDie;
}
class Cat implements PredatorInterface{
    use TEat, TMove, TMultiply, TDie;
}
class Lion implements PredatorInterface{
    use TEat, TMove, TMultiply, TDie;
}
class Dog implements PredatorInterface{
    use TEat, TMove, TMultiply, TDie;
}


