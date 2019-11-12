<?php

namespace App\Model\Entities;

use Nette\Security\Passwords;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="App\Model\Repositories\UserRepository")
 * @ORM\Table(name="users")
 */
class User
{

	use \Nette\SmartObject;

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", nullable=false)
	 * @var string
	 */
	private $username;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 * @var string
	 */
	private $password;

	/**
	 * @ORM\Column(type="string", nullable=false)
	 * @var string
	 */
	private $email;

	/**
	 * @ORM\Column(type="string", nullable=false)
	 * @var string
	 */
	private $role;

	/**
	 * @ORM\Column(type="datetime", nullable=TRUE)
	 */
	private $registerDate;

	/**
	 * @ORM\Column(type="datetime", nullable=TRUE)
	 */
	private $lastVisitDate;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 * @var string
	 */
	private $recoveryToken;

	public function __construct()
	{
		$this->registerDate = new \DateTime();
	}

	public function getId()
	{
		return $this->id;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getRole()
	{
		return $this->role;
	}

	public function getRegisterDate()
	{
		return $this->registerDate;
	}

	public function getLastVisitDate()
	{
		return $this->lastVisitDate;
	}

	public function getRecoveryToken()
	{
		return $this->recoveryToken;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function setPassword($password)
	{
		$this->password = Passwords::hash($password);
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function setRole($role)
	{
		$this->role = $role;
	}

	public function setRegisterDate($registerDate)
	{
		$this->registerDate = $registerDate;
	}

	public function setLastVisitDate($lastVisitDate)
	{
		$this->lastVisitDate = $lastVisitDate;
	}

	public function setRecoveryToken($recoveryToken)
	{
		$this->recoveryToken = $recoveryToken;
	}
}
