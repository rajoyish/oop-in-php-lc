<?php
require_once './Subscription.php';

$subscriptionStripe = new Subscription(new StripeGateway());

$subscriptionBraintree = new Subscription(new BraintreeGateway());
