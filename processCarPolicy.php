<?php
include ('CarPolicy.php');

$dolc=$_POST['dateOfLastClaim'];
$yp=$_POST['yearlyPremium'];
$pn=$_POST['policyNumber'];

    $thisCarpolicy = new CarPolicy($pn,$yp);
    $thisCarpolicy->setDateOfLastClaim($dolc);

echo "Yearly premium is:" . $yp. "<br>"; 
echo "Discounted premium is: " . $thisCarpolicy->getDiscountedPremium."<br>";

?>

