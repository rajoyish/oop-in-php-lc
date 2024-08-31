<?php
class TeamException extends Exception
{
	public static function fromTooManyMembers(): self
	{
		return new self("You may not add more than three team members");
	}
}
