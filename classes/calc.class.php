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
    
    public function calculator(){
        switch ($this->operator){
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;

            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;

            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;

            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;

            default:
                echo " Error";
                break;

        }
    }
}


interface PaymentInterface {
    public function payNow();
}

class Paypal implements PaymentInterface{
    public function loginFirst(){}
    public function payNow(){}
    
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();

    }
}

class Visa  implements PaymentInterface{
    public function payNow(){
        
    }
}

class Cash implements PaymentInterface{
    public function payNow(){
        
    }
}

class BuyProduct {
    public function pay(PaymentInterface $paymentType){
        $paymentType->payNow();
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);