<?php
declare(strict_types=1);
  
namespace Core\Application\Contracts;
  
interface IUserService
{

    public function createOrUpdate(string $firstname, string $lastname, string $email, string $password) : void;
  
    public function findUsers() : array;
   
    public function getUserById(int $id);

    public function deleteUser(int $id);
  

}


 ?>