<?php
// Using Inheritance

class SubscriptionInheritance
{
    public function create(): void {}
    public function cancel(): void {}
    public function invoice(): void {}
    public function swap(): void {}
}

class BillableSubscription extends SubscriptionInheritance
{
    protected function findStripeCustomer(): void {}
    protected function findStripeSubscriptionByCustomer(): void {}
}
