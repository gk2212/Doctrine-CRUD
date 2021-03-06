<?php
declare(strict_types=1);
namespace Core\Domain\Entities;

use Doctrine\ORM\Mapping as ORM;
use Core\Domain\Entities\User;
use DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="post")
 */
class Post {
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=50)
     */
    private string $title;

    /**
     * @var string
     * @ORM\Column(name="text", type="string", length=255)
     */
    private string $text;

    
    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="Core\Domain\Entities\User", inversedBy="post", cascade={"persist"}, fetch="LAZY")
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
    public function getTitle() : string
    {
        return $this->title;
    }
    
    /**
     * @param $title
     */
    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }


    /**
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    
    /**
     * @param $text
     */
    public function setText(string $text) : void
    {
        $this->text = $text;
    }
   
    
    /**
     * @return DateTime
     */
    public function getCreatedAt() : DateTime
    {
        return $this->createdAt;
    }
  
     /**
     * @param $createdAt
     */
    public function setCreatedAt(DateTime $createdAt) : void
    {
        $this->createdAt = $createdAt;
    }
   
    
    /**
     * @return DateTime
     */
    public function getUpdateAt() : DateTime
    {
        return $this->updateAt;
    }
  
     /**
     * @param $updateAt
     */
    public function setUpdateAt(DateTime $updateAt) : void
    {
        $this->updateAt = $updateAt;
    }
   

    /**
     * @return Role
     */
    public function getRole() : Role
    {
        return $this->role;
    }
    
    /**
     * @param $role
     */
    public function setRole(Role $role) : void
    {
        $this->role = $role;
    }

}