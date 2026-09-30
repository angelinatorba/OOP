<?php
class BankAccount {
    public $owner;
    public $balance;


    public function __construct($owner, $balance = 0) {
        $this->owner = $owner;
        $this->balance = $balance;
    }


    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
        return $this; 
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Ошибка: Недостаточно средств на счете!<br>";
        }
        return $this;
    }

    public function getBalance() {
        return $this->balance;
    }
}
$account = new BankAccount("Иван", 1000);
$account->deposit(500); 
$account->withdraw(200); 
echo $account->getBalance();
?>