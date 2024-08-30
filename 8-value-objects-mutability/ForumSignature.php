<?php

interface ForumSignature
{
    public function display(): string;
}

class UserForumSignature implements ForumSignature
{
    private string $signature;

    public function __construct(string $signature)
    {
        $this->signature = $signature;
    }

    public function display(): string
    {
        return $this->signature;
    }
}

class NullForumSignature implements ForumSignature
{
    public function display(): string
    {
        return '';
    }
}

// File: User.php

class User
{
    private string $name;
    private string $email;
    private ForumSignature $signature;

    public function __construct(string $name, string $email, ?string $signature = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->signature = $signature ? new UserForumSignature($signature) : new NullForumSignature();
    }

    public function getSignature(): ForumSignature
    {
        return $this->signature;
    }
}
