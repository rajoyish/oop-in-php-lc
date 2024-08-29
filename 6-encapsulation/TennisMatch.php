<?php
class TennisMatch
{
    protected function hasWinner(): bool
    {
        return true;
    }

    protected function hasAdvantage(): bool
    {
        return false;
    }

    public function hasScore(): int
    {
        return 100;
    }
}
