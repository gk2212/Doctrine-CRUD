<?php
declare(strict_types=1);
  
namespace Core\Application\Contracts;
  
interface IUserRepository
{
   
  public function createOrUpdate($user);

  public function findUsers();
  
  public function getUserById(int $id);
  
  public function deleteUser($user);


}


 ?>