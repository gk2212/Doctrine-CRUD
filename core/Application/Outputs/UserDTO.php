<?php
declare(strict_types=1);
  
namespace Core\Application\Outputs;

use Core\Domain\Entities\User;

class UserDTO extends BaseDTO
{

    public $firstname;
    public $lastname;
    public $email;
    public $password;

  public static function fromEntity(User $user) : UserDTO
  {
      return new self([
         'firstname' => $user->getFirstName(),
         'lastname'  => $user->getLastName(),
         'email'     => $user->getEmail(),
         'password'  => $user->getPassword(),
      ]);
  }

  public static function fromCollection(array $user) : array
  {
      $userCollection = [];

      if (!empty($user)) {
          foreach ($user as $user) {
              if ($user instanceof User) {
                  $userCollection = self::fromEntity($user);
              }
          }
      }

      return $userCollection;
  }

}
 ?>