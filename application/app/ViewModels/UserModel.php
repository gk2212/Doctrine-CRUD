<?php
declare(strict_types=1);
namespace App\ViewModels;

use Core\Application\Outputs\UserDTO;

class UserModel {
    public int $id;
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;


    public function __construct(UserDTO $user) {
        $this->id = $user->id;
        $this->firstname = $user->firstname;
        $this->lastname = $user->lastname;
        $this->email = $user->email;
        $this->password = $user->password;

    }

    public static function modelList(array $collection) : array
    {
        $list = [];
        if(!empty($collection)){
            foreach($collection as $user){
                if($user instanceof UserDTO){
                    $list[] = new self($user);
                }
            }
        }
        return $list;
    }
}