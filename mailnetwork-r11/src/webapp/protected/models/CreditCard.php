<?php 

class CreditCArd extends CFormModel
{
    public $cardNumber;
    public $cardCVD;
    public $cardName;
    public $expYear;
    public $expMonth;
            
    public function CreditCard($number, $cvd, $name, $year, $month)
    {
        $this->cardNumber = $number;
        $this->cardCVD = $cvd;
        $this->cardName = $name;
        $this->expYear = $year;
        $this->expMonth = $month;
        return $this;
    }
}