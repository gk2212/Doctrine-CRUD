<?php
declare(strict_types=1);
namespace Core\Domain\Entities;

use Core\Domain\Entities\User;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="role")
 */
class Role {
   
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $id;
   
    /**
     * @var string
     * @ORM\Column(name="name", type="string")
     */
    private string $name;
   
    
   /**
     * @var User
     * @ORM\OneToMany (targetEntity="Core\Domain\Entities\User", mappedBy="role", fetch="LAZY")
     */
    private User $user;

    


    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    
    /**
     * @param $name
     */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }


    /**
     * @return User
     */
    public function getUser() : User
    {
        return $this->user;
    }
    
    /**
     * @param $user
     */
    public function setUser(User $user) : void
    {
        $this->user = $user;
    }
   
 



}