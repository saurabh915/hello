<?php
class A 
{
    public function printItem($string) 
    {
        echo ' Hi A: ' . $string . "<br>"; 
    } 
    public function printPHP() 
    {
        echo 'I am from A' . "<br>" . "<br>";
    }
}
class B extends A 
{
    public function printItem($string) 
    {
        echo 'Hi B: ' . $string . "<br>";
    }
 public function printPHP() {
        echo "I am from B";
    }
}
$a = new A();
$b = new B();
$a->printItem('a-> Shreyas');
$a->printPHP();       
$b->printItem('b-> Divase'); 
$b->printPHP();       
?>
