<?php
declare(strict_types=1);
  
namespace Core\Application\Services;


use Core\Application\Contracts\IUserService;
use Core\Domain\Entities\Role;
use Core\Domain\Entities\User;
use Core\Infrastructure\Repositories\UserRepository;

class UserService implements IUserService
{

  private UserRepository $user;
   

  function __construct(UserRepository $user)
  {
     $this->user = $user;
  }

  
  public function createOrUpdate(string $firstname, string $lastname, string $email, string $password) : void
  {
      $user = new User();
      $user->setFirstName($firstname);
      $user->setLastName($lastname);
      $user->setEmail($email);
      $user->setPassword($password);
    

      $this->user->createOrUpdate($user);
  }
  

  public function findUsers() : array
  {
     return $this->user->findUsers();
  }
  
  
  public function getUserById(int $id)
  {
     return $this->user->getUserById($id);
  }
  
  
  public function deleteUser(int $id)
  {
     $user = $this->user->getUserById($id);
     return $this->user->deleteUser($user);
  }


}


 ?>