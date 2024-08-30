<?php
// Adding Methods Directly

class SubscriptionMethod
{
    public function create(): void {}
    public function cancel(): void {}
    public function invoice(): void {}
    public function swap(): void {}

    protected function findStripeCustomer(): void {}
    protected function findStripeSubscriptionByCustomer(): void {}
}
