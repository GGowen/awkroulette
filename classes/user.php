<?php

class user {

	public $username;
	public $password;
	public $phonenumber;

	public function user($user)
	{
		$this->username = $user['username'];
		$this->password = $user['password'];
		$this->phonenumber = $user['phonenumber'];
	}

	public static function exists($username)
	{
		global $db;

		$result = $db->select([
			'select' => 'username,password,phonenumber',
			'table' => 'user',
			'where' => "username = '$username'"
		]);

		if ($result->num_rows === 1)
		{
			return new self($result->fetch_assoc());
		}
	}

}