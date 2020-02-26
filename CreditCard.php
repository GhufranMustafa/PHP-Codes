
<?php
class CreditCard {
	const CARDNUMBER = 1111222233334444;
    private $pinNumber = 1234;
    private $totalBalance = 1000;
    private $remBalance;
   
    public function shopping($cardNumber,$pinNumber,$spendingMoney){
    	if($cardNumber === self::CARDNUMBER && $pinNumber === $this->pinNumber){
        	if($spendingMoney <= $this->totalBalance){
            	$this->remBalance = $this->totalBalance - $spendingMoney;
                echo "Your total balance was ".$this->totalBalance."<br>You have spent ".$spendingMoney."<br>Your                           remaining balance is ".$this->remBalance;
            }
            else {
            	echo "You don't have sufficient balance";
            }
         }
         else {
         	echo "Your pin number or password is incorrect.";
         }  
    }
}
$cc = new Creditcard();
$cc->shopping(1111222233334444,1234,400);
?>
 
