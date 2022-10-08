<?php

class Calc {
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, int $num1, int $num2) {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    
}