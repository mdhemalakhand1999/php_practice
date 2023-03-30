<?php
class Fund {
    private $fund;
    public function __construct($initial_fund = 0) {
        $this->fund = $initial_fund;
    }
    public function addFund($money) {
        $this->fund += $money;
    }
    public function deductFund($money) {
        $this->fund -= $money;
    }
    public function getTotal() {
        echo "Total fund is:  {$this->fund}";
        echo "<br/>";
    }
}
$ourfund = new Fund(100);
$ourfund->getTotal();
$ourfund->addFund(10);
$ourfund->deductFund(10);
$ourfund->getTotal();