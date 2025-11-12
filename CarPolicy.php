<?php
Class CarPolicy {
    private $dateOfLastClaim="";
    private $yearlyPremium=0;
    private $policyNumber="";

    public function __construct($pn, $yp)
    {
        $this->policyNumber=$pn;
        $this->yearlyPremium=$yp;
    }

    public function setDateOfLastClaim($dolc)
    {
        $this->dateOfLastClaim=$dolc;
    }

    public function getTotalYearsNoClaims()
    {
        $currentDate = new DateTime();
        $lastDate= new DateTime($this->dateOfLastClaim);
        $interval = $currentDate->diff($lastDate);
        return $interval->format("%y");
    }

    public function __toString()
    {
        return "PN: " . $this->policyNumber;
    }

    public function getDiscount()
    {
        if ($this->getTotalYears)
            return $discount;
            $yp = $this->yearlyPremium;
            $discount = ($yp/100);
    }
}

?>