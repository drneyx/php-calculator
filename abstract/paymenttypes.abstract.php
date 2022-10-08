<?php

abstract class Visa{
    public function visaPayment(){
        return "Perform Payment";
    }

    abstract public function getPayment();
} 