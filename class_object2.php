<?php 

// class BankAccount {
//  public $account_number;
//  public $account_holder;
//  public $balance;


// public function deposit(){

//     return "total deposit is ".$this->balance. " taka.\n";
// }


// public function withdraw(){
//  return "total withdra is ";
// }

// public function getBalance(){
//  return "account holder is ".$this->account_holder. " taka and balance is " .$this->balance." taka.";
// }

// }

// $rahatAcc= new BankAccount();

// $rahatAcc->account_number=12444;
// $rahatAcc->account_holder=1000;
// $rahatAcc->balance=1300;

// echo $rahatAcc->deposit();
// echo $rahatAcc->getBalance();



class BankAccount {
    public $account_number;
    public $account_holder;
    public $balance;

    // Method to deposit money
    public function deposit() {
        return "Total deposit is " . $this->balance . " taka.<br>";
    }

    // Method to withdraw money
    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            return "Withdrew $amount taka. Remaining balance: " . $this->balance . " taka.<br>";
        } else {
            return "Insufficient funds. Current balance: " . $this->balance . " taka.<br>";
        }
    }

    // Method to get account details
    public function getBalance() {
        return "Account holder: " . $this->account_holder . ", Balance: " . $this->balance . " taka.<br>";
    }
}

// Creating a new bank account object
$rahatAcc = new BankAccount();
$rahatAcc->account_number = 12444;
$rahatAcc->account_holder = "Rahat";
$rahatAcc->balance = 1300;

// Displaying deposit and balance
echo $rahatAcc->deposit();
echo $rahatAcc->getBalance();

// Testing the withdraw method
echo $rahatAcc->withdraw(12320);
echo $rahatAcc->getBalance();
echo $rahatAcc->withdraw(2000); // This should fail due to insufficient funds.

?>
