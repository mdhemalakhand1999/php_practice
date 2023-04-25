<?php
interface PaymentGateway {
    function SendPayment($payment);
}
interface StripeInterface {
    function makePayment($amount, $currency);
}
class PaymentProcessor {
    private $gateway;
    function __construct(PaymentGateway $pg) {
        $this->gateway = $pg;
    }
    function purchaseProduct($payement) {
        $this->gateway->SendPayment($payement);
    }
}


class PayPal implements PaymentGateway{
    function SendPayment($payment) {
        echo "{$payment} payment processed! by Paypal\n";
    }
}

class Stripe implements StripeInterface {
    function makePayment($amount, $currency) {
        echo "{$amount} payment processed! by Stripe\n";
    }
}

class StrypeAdapter implements PaymentGateway {
    private $stripe;
    function __construct(StripeInterface $stripe) {
        $this->stripe = $stripe;
    }
    function SendPayment($payement) {
        $this->stripe->makePayment($payement, 'USD');
    }
}
$paypal = new PayPal();
$pp = new PaymentProcessor($paypal);
$pp->purchaseProduct(45);
$stripe = new Stripe();
$sa = new StrypeAdapter($stripe);
$sa->SendPayment(30);