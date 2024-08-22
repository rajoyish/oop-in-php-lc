<?php
class Team
{
	protected $name;
	protected $members = [];

	public function __construct($name, $members = [])
	{
		$this->name = $name;
		$this->members = $members;
	}

	public static function start(...$params)
	{
		// var_dump($params);
		return new static(...$params);
	}

	public function name()
	{
		return $this->name;
	}

	public function members()
	{
		return $this->members;
	}
	public function cancel() {}
	public function manager() {}

	public function add($name)
	{
		$this->members[] = $name;
	}
}

class Member
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function lastViewed() {}
}

$acme = new Team('Team Nepal', [
	'Anu Ghimire',
	'Rajesh Budhathoki'
]);

$acme->add('John Doe');
$acme->add('Jane Doe');

$teamKorea = Team::start('Team Korea', [
	'Kyu Su',
	'Papeta Ho'
]);

$teamIndia = Team::start('Team India', [
	new Member('Shanti Budhathoki'),
	new Member('Gyanu Budhathoki'),
]);

var_dump($acme->members(), $teamKorea->members(), $teamIndia->members());
