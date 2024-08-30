<?php
// Object Composition (Recommended)

interface Gateway
{
    public function findCustomer(): void;
    public function findSubscriptionByCustomer(): void;
}

class StripeGateway implements Gateway
{
    public function findCustomer(): void
    {
        // implement findCustomer()
    }
    public function findSubscriptionByCustomer(): void
    {
        // implement findSubscriptionByCustomer()
    }
}

class BraintreeGateway implements Gateway
{
    public function findCustomer(): void
    {
        // implement findCustomer()
    }
    public function findSubscriptionByCustomer(): void
    {
        // implement findSubscriptionByCustomer()
    }
}

class Subscription
{
    public function __construct(private Gateway $gateway) {}

    public function create(): void {}

    public function cancel(): void
    {
        $customer = $this->gateway->findCustomer();
        // Cancel logic using $customer
    }

    public function invoice(): void {}
    public function swap(): void {}
}

class BillableSubscription extends SubscriptionInheritance
{
    protected function findStripeCustomer(): void {}
    protected function findStripeSubscriptionByCustomer(): void {}
}
