<?php
declare(strict_types=1);
  
namespace Core\Infrastructure\Repositories;

use Core\Application\Contracts\IUserRepository;
use Core\Domain\Entities\Role;
use Core\Domain\Entities\User;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;

class UserRepository implements IUserRepository
{

  private EntityManagerInterface $em; 

  function __construct(EntityManagerInterface $em)
  {
      $this->em = $em;
  }

  
  public function createOrUpdate($user)
  {
      $this->em->persist($user);
      $this->em->flush();
  }


  public function findUsers()
  {
    return $this->em->getRepository(User::class)->findAll();
  }


  public function getUserById(int $id)
  {
     return $this->em->find(User::class, $id);
  }


  public function deleteUser($user)
  {
    $this->em->remove($user);
    $this->em->flush();
  }

}
 ?>