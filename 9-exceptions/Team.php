<?php

require_once './TeamException.php';

class Team
{
	private array $members = [];

	public function addMember(string $name): void
	{
		if (count($this->members) >= 3) {
			throw TeamException::fromTooManyMembers();
		}
		$this->members[] = $name;
	}



	public function getMembers(): array
	{
		return $this->members;
	}
}


