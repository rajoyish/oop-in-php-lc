<?php
interface NewsletterInterface
{
    public function subscribe(string $email): void;
}

class CampaignMonitor implements NewsletterInterface
{
    public function subscribe(string $email): void
    {
        echo "Subscribing with Campaign Monitor: $email" . PHP_EOL;
    }
}
class Drip implements NewsletterInterface
{
    public function subscribe(string $email): void
    {
        echo "Subscribing with Drip: $email" . PHP_EOL;
    }
}

class NewsletterController
{
    public function store(NewsletterInterface $newsletter): void
    {
        $email = 'user@example.com';
        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterController();

$campaignMoniter = new CampaignMonitor();
$controller->store($campaignMoniter);

$drip = new Drip();
$controller->store($drip);
