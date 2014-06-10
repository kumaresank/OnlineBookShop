<?php
namespace bookshop\Bundle\Modals;

class Login
{
private $username;
private $password;
public function setUsername($username)
{
$this->username = $username;
}
public function setPassword($password)
{
$this->password = $password;
}
public function getUsername()
{
return $this->username;
}
public function getPassword()
{
return $this->password;
}
}
 
?>
